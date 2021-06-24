<script>
    var valeur = "";
    const elements = document.querySelectorAll(".carousel-fixed-height");
    Array.from(elements).forEach((element, index) =>
    {
        const divCarousels = element.querySelectorAll('.carousel-item')
        var divHeight = 0;
        Array.from(divCarousels).forEach((divCarousel, indexDiv) =>
        {
            if (!('active' in divCarousel.classList)){
                divCarousel.classList.add('active')
            }
        });
        Array.from(divCarousels).forEach((divCarousel, indexDiv) =>
        {
            if (divHeight < divCarousel.clientHeight){
                divHeight = divCarousel.clientHeight;
            }
        });
        Array.from(divCarousels).forEach((divCarousel, indexDiv) =>
        {
            if (!(indexDiv == 0)){
                divCarousel.classList.remove('active')
            }
            divCarousel.style['height'] = divHeight+"px";
        });
    });
</script>