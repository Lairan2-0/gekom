<?php
session_start();
$chekAuth = true;
require_once ("common/chekAuth.php");
?>
<!doctype html>
<html lang="ru">
<?php require_once ("common/head.php"); ?>
<body>
<?php require_once ("common/nav.php"); ?>
<main>
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
</main>
<?php
require_once("common/footer.php");
require_once("common/popup.php");
require_once("common/notification.php");
?>
<script src="js/main.js"></script>
</body>
</html>