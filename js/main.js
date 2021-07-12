let image = document.getElementsByClassName('parallax-points__image-top');
new simpleParallax(image);

$(".dropdown__dropbtn").on('click', function() {
    if (!$(this).parent().children(".dropdown-content").hasClass('clicked')) {
        $(".dropdown-content").removeClass('clicked');
        $(this).parent().children(".dropdown-content").addClass('clicked');
    } else { // если есть
        $(this).parent().children(".dropdown-content").removeClass('clicked');
    }
});

