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
    let btnGetPassword = $(".popup-registration__get-password");
    let btnRegistrationPassword = $(".popup-registration__password");
    let btnRegistrationForm = $(".popup-registration__submit");
    let registrationForm = $('.popup-registration__form');
    let btnGetPasswordCounter = 0;
    btnGetPassword.addClass('disabled');
    btnRegistrationForm.addClass('disabled');
    btnRegistrationPassword.prop( "disabled", true ).addClass('empty_field');;
    btnGetPassword.prop( "disabled", true );

    function checkInput(){
        registrationForm.find('.reg-form-in').each(function(){
            if($(this).val() != ''){
                // Если поле не пустое удаляем класс-указание
                $(this).removeClass('empty_field');
            } else {
                // Если поле пустое добавляем класс-указание
                $(this).addClass('empty_field');
            }
        });
    }

    // Функция подсветки незаполненных полей
    function lightEmpty(){
        registrationForm.find('.empty_field').css({'border-color':'#d8512d'});
        // Через полсекунды удаляем подсветку
        setTimeout(function(){
            registrationForm.find('.empty_field').removeAttr('style');
        },500);
    }

    setInterval(function() {
        let pmc = $('.popup-registration__phone');
        if ((pmc.val().indexOf("_") != -1) || pmc.val() == '') {
            pmc.addClass('empty_field');
        } else {
            btnGetPasswordCounter++;
            if (btnGetPasswordCounter === 1){
                btnGetPassword.prop( "disabled", false ).removeClass("disabled");
            }
        }

        checkInput();

        let sizeEmpty = registrationForm.find('.empty_field').length;
        if (sizeEmpty > 0 || !$(".popup-registration__checkbox").is(':checked')){
            if(btnRegistrationForm.hasClass('disabled')){
                return false
            } else {
                btnRegistrationForm.addClass('disabled')
            }
        } else {
            btnRegistrationForm.removeClass('disabled')
        }
    });

    btnGetPassword.on("click", function (){
        btnRegistrationPassword.addClass('enabled-btn').prop( "disabled", false );
        $(".popup-registration__name").prop( "disabled", true );
        $(".popup-registration__invoice").prop( "disabled", true );
        $(".popup-registration__email").prop( "disabled", true );
        $(".popup-registration__phone").prop( "disabled", true );
        $(".popup-registration__get-password").prop( "disabled", true ).addClass("disabled");
    });



    btnRegistrationForm.click(function(){
        if($(this).hasClass('disabled')){
            // подсвечиваем незаполненные поля и форму не отправляем, если есть незаполненные поля
            lightEmpty();
            return false
        } else {
            // Все хорошо, все заполнено, отправляем форму
            registrationForm.submit();
        }
    });
});

// jquery masks
$(document).ready(function(){
    $(".popup-registration__invoice").mask('99999999999999999', {autoсlear: true});
    $('.popup-registration__phone').each(function(){
        $(this).mask('+7 (999) 99-99-99', {autoсlear: false});
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
