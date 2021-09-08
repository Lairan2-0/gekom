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
    let registrationForm = $('.popup-registration__form-top');
    let btnGetPasswordCounter = 0;
    if (registrationForm.length){
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
            if ((pmc.val().indexOf("_") != -1) || pmc.val() === '') {
                pmc.addClass('empty_field');
            } else {
                btnGetPasswordCounter++;
                if (btnGetPasswordCounter == 1){
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
    }
    setInterval(function() {
        if (($(".qna__select").val() == "-1") | ($(".qna__name").val() == "") | ($(".qna__phone").val() == "") | ($(".qna__email").val() == "") | ($(".qna__another-question").val() == "") | (!$(".qna__checkbox").is(':checked'))){
            $(".qna__submit").prop( "disabled", true ).addClass('qna__submit-disabled');
        }else{
            $(".qna__submit").prop( "disabled", false ).removeClass('qna__submit-disabled');
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

//notification anim
function notificationAnim(item){
    let seconds = 5, int;
    let opacity = 1;
    int = setInterval(function() {
        if (seconds > 0) {
            seconds = seconds - 0.05;
            if (seconds <= 2){
                if (opacity > 0) {
                    opacity = opacity - 0.05;
                }
                item.css("opacity" , opacity);
            }
        } else {
            clearInterval(int);
            item.css("display" , "none");
            item.css("opacity" , 1);
        }
    }, 50);
}

// ajax
$(".popup-registration__form-top").on( "submit", function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "../common/registration.php",
        data: $(this).serialize(),
        success: function (response){
            let jsonData = JSON.parse(response);
            if (jsonData.success == "1"){
                $(".popup-registration__password").addClass('enabled-btn').prop( "disabled", false );
                $(".popup-registration__name").prop( "disabled", true );
                $(".popup-registration__invoice").prop( "disabled", true );
                $(".popup-registration__email").prop( "disabled", true );
                $(".popup-registration__phone").prop( "disabled", true );
                $(".popup-registration__get-password").prop( "disabled", true ).addClass("disabled");
            }else if (jsonData.success == "0"){
                $(".popup-registration__error").show();
            }
        },
        dataType: "html"
    });
});

$(".popup-registration__form-bottom").on( "submit", function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "../common/registration.php",
        data: $(this).serialize(),
        success: function (response){
            let jsonData = JSON.parse(response);
            if (jsonData.success == "2"){
                location.href = 'menu.php';
            }else if (jsonData.success == "3"){
                $(".popup-registration__error").show();
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
                $(".popup-enter__error").show()
            }
        },
        dataType: "html"
    });
});

$(".qna__form").on( "submit", function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "../common/qna-send.php",
        data: $(this).serialize(),
        success: function (response){
            let jsonData = JSON.parse(response);
            if (jsonData.success == "1"){
                let notificationSuccess = $(".form-send-successfully");
                notificationSuccess.css("display" , "flex");
                $(".qna__select").val("-1");
                $(".qna__name").val("");
                $(".qna__phone").val("");
                $(".qna__email").val("");
                $(".qna__another-question").val("");
                $(".qna__checkbox").prop('checked', false);
                notificationAnim(notificationSuccess);
            }else{
                let notificationError = $(".form-send-error");
                notificationError.css("display" , "flex");
                notificationAnim(notificationError);
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
            location.href = '/';
        },
        dataType: "html"
    });
});

// hamburger click
$(".hamburger").on("click", function (){
    $(".mobile-menu").slideToggle(500);
});

// Date Range Picker
$(function() {

    let start = moment().subtract(29, 'days');
    let end = moment();

    function cb(start, end) {
        $('.payments__date-range-picker-span').html(start.format('DD.MM.YYYY') + ' - ' + end.format('DD.MM.YYYY'));
    }

    $('.payments__date-range-picker').daterangepicker({
        startDate: start,
        endDate: end,
        locale: {
            format: 'DD.MM.YYYY',
            "applyLabel": "Ок",
            "cancelLabel": "Отмена",
            "fromLabel": "От",
            "toLabel": "До",
            "customRangeLabel": "Произвольный",
            "daysOfWeek": [
                "Вс",
                "Пн",
                "Вт",
                "Ср",
                "Чт",
                "Пт",
                "Сб"
            ],
            "monthNames": [
                "Январь",
                "Февраль",
                "Март",
                "Апрель",
                "Май",
                "Июнь",
                "Июль",
                "Август",
                "Сентябрь",
                "Октябрь",
                "Ноябрь",
                "Декабрь"
            ],
            firstDay: 1
        },
        ranges: {
            'Сегодня': [moment(), moment()],
            'Вчера': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Последние 7 дней': [moment().subtract(6, 'days'), moment()],
            'Последние 30 дней': [moment().subtract(29, 'days'), moment()],
            'Этот месяц': [moment().startOf('month'), moment().endOf('month')],
            'Предыдущий месяц': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);

});
