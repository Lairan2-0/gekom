<!doctype html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ГЭКОМ-РКС</title>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.0.2/dist/simpleParallax.min.js"></script>
</head>
<body>
        <?php require_once ("common/nav.php"); ?>
        <main>
            <div class="main-banner">
                <p class="main-banner__paragraph">
                    Делаем вашу жизнь проще!
                </p>
                <h1 class="main-banner__header">
                    Расчетно-кассовый<br>центр
                </h1>
            </div>
            <div class="additions">
                <div class="additions__block testimony">
                    <div class="testimony__left">
                        <h2 class="testimony___header">
                            Передача показаний
                        </h2>
                        <p class="testimony__paragraph">
                            Полная история показаний счетчиков и начислений по воде доступна в вашем личном кабинете
                        </p>
                    </div>
                    <div class="testimony__right">
                        <div class="testimony__counter">
                            <p class="testimony__num">5</p>
                            <p class="testimony__num">9</p>
                            <p class="testimony__num">5</p>
                            <p class="testimony__num">3</p>
                            <p class="testimony__num">8</p>
                        </div>
                        <button class="testimony__button">Передать показания</button>
                    </div>
                </div>
                <div class="additions__block online-purchase">
                    <div class="online-purchase__left">
                        <h2 class="online-purchase__header">
                            Онлайн-оплата
                        </h2>
                        <p class="online-purchase__paragraph">
                            Подробная информация по вашему счету или задолженности доступна в вашем личном кабинете
                        </p>
                    </div>
                    <div class="online-purchase__right">
                        <img class="online-purchase__image" src="img/phone.png" alt="Иконка телефона">
                        <button class="online-purchase__button">Перейти к оплате</button>
                    </div>
                </div>
            </div>
            <div class="tariffs">
                <h2 class="tariffs__header">Тарифы <span class="tariffs__header-bottom">на комунальные услуги</span></h2>
                <div class="tariffs__buttons">
                    <div class="tariffs__hot-water tariffs__button">
                        <img class="tariffs__img-hot-water" src="img/hot-water.png" alt="Горячая вода иконка">
                        <h3 class="tariffs__button-header">Горячая вода</h3>
                    </div>
                    <div class="tariffs__heating tariffs__button">
                        <img class="tariffs__img-heating" src="img/heating.png" alt="Отопление иконки">
                        <h3 class="tariffs__button-header">Отопление</h3>
                    </div>
                </div>
            </div>
            <div class="qna">
                <h2 class="qna__header">Вопрос-ответ:</h2>
                <div class="qna__dropdown">
                    <button class="dropdown__dropbtn">Как изменить собственника в лицевом счёте?</button>
                    <div id="myDropdown" class="dropdown-content">
                        <p class="dropdown-content__inside">Тут должен будет быть текст, который нам даст заказчик</p>
                    </div>
                </div>
                <div class="qna__dropdown">
                    <button class="dropdown__dropbtn">Что делать если установили новый ИПУ (индивидуальный прибор учёта) на горячую воду?</button>
                    <div id="myDropdown" class="dropdown-content">
                        <p class="dropdown-content__inside">Тут должен будет быть текст, который нам даст заказчик</p>
                    </div>
                </div>
                <div class="qna__dropdown">
                    <button class="dropdown__dropbtn">Что делать если оплата не поступила на лицевой счет?</button>
                    <div id="myDropdown" class="dropdown-content">
                        <p class="dropdown-content__inside">Тут должен будет быть текст, который нам даст заказчик</p>
                    </div>
                </div>
                <div class="qna__dropdown">
                    <button class="dropdown__dropbtn">Что делать если установили новый ИПУ (индивидуальный прибор учёта) на горячую воду?</button>
                    <div id="myDropdown" class="dropdown-content">
                        <p class="dropdown-content__inside">Тут должен будет быть текст, который нам даст заказчик</p>
                    </div>
                </div>
                <div class="qna__dropdown">
                    <button class="dropdown__dropbtn">Как изменить собственника в лицевом счёте?</button>
                    <div id="myDropdown" class="dropdown-content">
                        <p class="dropdown-content__inside">Тут должен будет быть текст, который нам даст заказчик</p>
                    </div>
                </div>
            </div>
            <div class="parallax-points">
                <img  class="parallax-points__image-top" src="img/parallax-points.svg" alt="Parallax points">
            </div>
        </main>
        <?php require_once ("common/footer.php"); ?>
        <script src="js/main.js"></script>
</body>
</html>