new simpleParallax(document.getElementsByClassName('parallax-points__image-top'));
new simpleParallax(document.getElementsByClassName('parallax-points__image-bottom'));

$(".dropdown__dropbtn").on('click', function() {
    if (!$(this).parent().children(".dropdown-content").hasClass('clicked')) {
        $(".dropdown-content").removeClass('clicked');
        $(this).parent().children(".dropdown-content").addClass('clicked');
    } else { // если есть
        $(this).parent().children(".dropdown-content").removeClass('clicked');
    }
});

// registration popup
$(".personal-area__btn").on( "click", function() {
   $(".popup-enter").css("display" , "block");
   $(".popup-shadow").css("display" , "block");
   $("body").css("overflow","hidden");
});
$(".popup-shadow").on( "click", function() {
    $(".popup-registration").css("display" , "none");
    $(".popup-enter").css("display" , "none");
    $(".popup-shadow").css("display" , "none");
    $("body").css("overflow-y","scroll");
});
$(".popup-registration__close").on( "click", function() {
    $(".popup-registration").css("display" , "none");
    $(".popup-shadow").css("display" , "none");
    $("body").css("overflow-y","scroll");
});
$(".popup-enter__close").on( "click", function() {
    $(".popup-enter").css("display" , "none");
    $(".popup-shadow").css("display" , "none");
    $("body").css("overflow-y","scroll");
});
$(".popup-registration__enter").on( "click", function() {
    $(".popup-registration").css("display" , "none");
    $(".popup-enter").css("display" , "block");
});
$(".popup-enter__registration").on( "click", function() {
    $(".popup-enter").css("display" , "none");
    $(".popup-registration").css("display" , "block");
});

// forms
$(document).ready(function (){
    $(".popup-registration__password").prop( "disabled", true );
    $(".popup-registration__get-password").prop( "disabled", true );
    $(".popup-registration__submit").prop( "disabled", true );
    setInterval(function() {
        let pmc = $('.popup-registration__phone');
        if ((pmc.val().indexOf("_") != -1) || pmc.val() == '') {
            pmc.addClass('empty_field');
        } else {
            pmc.removeClass('empty_field');
        }
    });
});

// jquery masks
$(document).ready(function(){
    $(".popup-registration__invoice").mask('000000000000000000000', {placeholder: "Лицевой счет"});
    $('.popup-registration__phone').each(function(){
        $(this).mask('+7 (000) 000-00-00');
    });
});

// ajax
$(".popup-registration__form").on( "submit", function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "../common/registration.php",
        data: $(this).serialize(),
        success: function (response){
            let jsonData = JSON.parse(response);
            if (jsonData.success == "1"){
                location.href = 'my_profile.php';
            }else{
                $(".popup-enter__error").text("Аккаунт с такими данными уже существует");
            }
        },
        dataType: "html"
    });
});

$(".popup-enter__form").on( "submit", function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "../common/auntefication.php",
        data: $(this).serialize(),
        success: function (response){
            let jsonData = JSON.parse(response);
            if (jsonData.success == "1"){
                location.href = 'menu.php';
            }else{
                $(".popup-enter__error").text("Неправильный лийцевой счет или пароль");
            }
        },
        dataType: "html"
    });
});

$(".menu-buttons__main").on( "click", function() {
    $.ajax({
        type: "POST",
        url: "../common/logout.php",
        success: function (){
            location.href = 'index.php';
        },
        dataType: "html"
    });
});
