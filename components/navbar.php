<head>
	<link rel="stylesheet" type="text/css" href="assets/css/navbarStyle.css">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a href="./" class="navbar-brand">FORMULA 1</a>
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbar9">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar9">
            <ul class="navbar-nav ml-auto">
                <?php if (isset($aPropos)){ ?>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#projet">A propos</a>
                </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Connexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>