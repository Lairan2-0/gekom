<?php
session_start();
require_once ("common/chekAuth.php");
?>
<!doctype html>
<html lang="ru">
<?php require_once ("common/head.php"); ?>
<body>
        <?php require_once ("common/nav.php"); ?>
        <main>
            <div class="main-banner">
                <p class="main-banner__paragraph">
                    Делаем Вашу жизнь проще!
                </p>
                <h1 class="main-banner__header">
                    Расчетно-кассовый<br>центр
                </h1>
            </div>
            <div class="additions">
                <div class="additions__block testimony desktop">
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
                        <a href="#"><button class="testimony__button">Передать показания</button></a>
                    </div>
                </div>
                <div class="additions__block testimony mobile">
                    <div class="testimony__up">
                        <h2 class="testimony___header">
                            Передача показаний
                        </h2>
                    </div>
                    <div class="testimony__mid">
                        <p class="testimony__paragraph">
                            Полная история показаний счетчиков и начислений по воде доступна в вашем личном кабинете
                        </p>
                        <div class="testimony__counter">
                            <p class="testimony__num">5</p>
                            <p class="testimony__num">9</p>
                            <p class="testimony__num">5</p>
                            <p class="testimony__num">3</p>
                            <p class="testimony__num">8</p>
                        </div>
                    </div>
                    <div class="testimony__down">
                        <a href="#"><button class="testimony__button">Передать показания</button></a>
                    </div>
                </div>
                <div class="additions__block online-purchase desktop">
                    <div class="online-purchase__left">
                        <h2 class="online-purchase__header">
                            Онлайн-оплата
                        </h2>
                        <p class="online-purchase__paragraph">
                            Подробная информация по вашему счету или задолженности доступна в вашем личном кабинете
                        </p>
                    </div>
                    <div class="online-purchase__right">
                        <img class="online-purchase__image" src="img/phone.svg" alt="Иконка телефона">
                        <a href="#"><button class="online-purchase__button">Перейти к оплате</button></a>
                    </div>
                </div>
                <div class="additions__block online-purchase mobile">
                    <div class="online-purchase__up">
                        <h2 class="online-purchase__header">
                            Онлайн-оплата
                        </h2>
                    </div>
                    <div class="online-purchase__mid">
                        <p class="online-purchase__paragraph">
                            Подробная информация по вашему счету или задолженности доступна в вашем личном кабинете
                        </p>
                        <img class="online-purchase__image" src="img/phone.svg" alt="Иконка телефона">
                    </div>
                    <div class="online-purchase__down">
                        <a href="#"><button class="online-purchase__button">Перейти к оплате</button></a>
                    </div>
                </div>
            </div>
            <div class="tariffs">
                <h2 class="tariffs__header">Тарифы <span class="tariffs__header-bottom">на комунальные услуги</span></h2>
                <div class="tariffs__buttons">
                    <a class="tariffs__href" href="#">
                        <div class="tariffs__hot-water tariffs__button">
                            <img class="tariffs__img-hot-water" src="img/hot-water.svg" alt="Горячая вода иконка">
                            <h3 class="tariffs__button-header">Горячая вода</h3>
                        </div>
                    </a>
                    <a class="tariffs__href" href="#">
                        <div class="tariffs__heating tariffs__button">
                            <img class="tariffs__img-heating" src="img/heating.svg" alt="Отопление иконки">
                            <h3 class="tariffs__button-header">Отопление</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="qna">
                <div class="qna__left-block">
                    <h2 class="qna__header">Вопрос-ответ:</h2>
                    <div class="left-block__section">
                        <div class="section__dropdown">
                            <button class="dropdown__dropbtn">Как изменить собственника в лицевом счёте?</button>
                            <div id="myDropdown" class="dropdown-content">
                                <p class="dropdown-content__inside">Тут должен будет быть текст, который нам даст заказчик</p>
                            </div>
                        </div>
                        <div class="section__dropdown">
                            <button class="dropdown__dropbtn">Что делать если установили новый ИПУ<br> (индивидуальный прибор учёта) на горячую воду?</button>
                            <div id="myDropdown" class="dropdown-content">
                                <p class="dropdown-content__inside">Тут должен будет быть текст, который нам даст заказчик</p>
                            </div>
                        </div>
                        <div class="section__dropdown">
                            <button class="dropdown__dropbtn">Что делать если оплата не поступила на лицевой счет?</button>
                            <div id="myDropdown" class="dropdown-content">
                                <p class="dropdown-content__inside">Тут должен будет быть текст, который нам даст заказчик</p>
                            </div>
                        </div>
                        <div class="section__dropdown">
                            <button class="dropdown__dropbtn">Что делать если установили новый ИПУ<br> (индивидуальный прибор учёта) на горячую воду?</button>
                            <div id="myDropdown" class="dropdown-content">
                                <p class="dropdown-content__inside">Тут должен будет быть текст, который нам даст заказчик</p>
                            </div>
                        </div>
                        <div class="section__dropdown">
                            <button class="dropdown__dropbtn">Как изменить собственника в лицевом счёте?</button>
                            <div id="myDropdown" class="dropdown-content">
                                <p class="dropdown-content__inside">Тут должен будет быть текст, который нам даст заказчик</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qna__right-block">
                    <h3 class="qna__form-header">Отправить вопрос или сообщение</h3>
                    <form action="/" class="qna__form" method="POST">
                        <p class="qna__select-description">Введите тип обращения</p>
                        <select name="questionType" class="qna__select">
                            <option value="-1">Ваш вопрос или предложение</option>
                            <option value="1">Какой-то тип</option>
                            <option value="2">Какой-то тип</option>
                            <option value="3">Какой-то тип</option>
                        </select>
                        <input type="text" name="questionName" class="qna__name" placeholder="Фамилия, имя и отчество"  value="<?=$_SESSION['user_name'];?>">
                        <div class="qna__contacts">
                            <input type="tel" name="questionPhone" class="qna__phone" placeholder="Телефон" value="<?=$_SESSION['user_phone'];?>">
                            <input type="email" name="questionEmail" class="qna__email" placeholder="Электронная почта" value="<?=$_SESSION['user_email'];?>">
                        </div>
                        <input type="text" name="questionAnother" class="qna__another-question" placeholder="Ваш вопрос или предложение">
                        <div class="qna__form-footer">
                            <div class="qna__checkbox-wrapper">
                                <input type="checkbox" name="questionCheckbox" class="qna__checkbox">
                                <p class="qna__checkbox-description">Я согласен на передачу<br/>персональных данных</p>
                            </div>
                            <input type="submit" value="Отправить" class="qna__submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="parallax-points">
                <img  class="parallax-points__image-top" src="img/parallax-points.svg" alt="Parallax points">
                <img  class="parallax-points__image-bottom" src="img/parallax-points.svg" alt="Parallax points">
            </div>
        </main>
        <div class="yandex-map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0e562f2a82fcded4c2b45ff042924589037e6db38525e2aeb3b3cdcb826c8af7&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <?php
        require_once ("common/footer.php");
        require_once ("common/popup.php");
        require_once ("common/notification.php");
        ?>
        <script src="js/main.js"></script>
</body>
</html>