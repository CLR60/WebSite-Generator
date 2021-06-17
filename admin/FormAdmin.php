<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="access_backoffice/style_backoffice.css" />
    </head>
    <body>
        
        <?php
            // Permet d'appeler la fonction de connexion à la BD
            require('connexionAdmin.php');
            
            // Démarrage d'une session
            session_start();

            // Connexion à la BD
            $co = connexionBdd();

            if (isset($_POST['submit'])){
                $username = $_POST['username'];
                $password = hash('sha256', $_POST['password']);

                // Préparation de la requête
                $query = $co->prepare('SELECT * FROM users WHERE log_con=:login and password_con=:pass');

                // Association des paramètres aux variables/valeurs
                $query->bindParam(':login', $username);
                $query->bindParam(':pass', $password);

                // Execution de la requête
                $query->execute();    

                // Récupération dans la variable $result de toutes les lignes que retourne la requête
                $result = $query->fetchall();

                // On compte le nombre de lignes résultats de la requête
                $rows = $query->rowCount();
                
                // Si une ligne résultat est trouvée, cela signifi que l'utilisateur existe dans la BD
                // et donc qu'il a le droit de se connecter
                if($rows==1){
                    // On définit la variable de session username avec la valeur saisie par l'utilisateur
                    $_SESSION['username'] = $username;
                    // On lance la page index.php à la place de la page actuelle
                    header("Location: IndexAdmin.php");
                }else{
                    // Si la requête ne retourne rien, alors l'utilisateur n'existe pas dans la BD, on lui
                    // affiche un message d'erreur
                    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
                }
            }
        ?>
        
        <form class="box" action="" method="post" name="login">
            <h1 class="box-title">Connexion</h1>
            <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
            <input type="password" class="box-input" name="password" placeholder="Mot de passe">
            <input type="submit" value="Connexion " name="submit" class="box-button">
            <?php if (!empty($message)) { ?>
                <p class="errorMessage"><?php echo $message; ?></p>
            <?php } ?>
        </form>
        <a href="../index.php">Revenir sur la page d'acceuil</a>
    </body>
</html>