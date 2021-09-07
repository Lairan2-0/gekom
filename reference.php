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
    <hr class="statement-hr">
    <div class="statement__top-line">
        <h3 class="statement__header">Мои справки</h3>
        <button class="statement__btn">ПОЛУЧИТЬ СПРАВКУ</button>
    </div>
    <hr class="statement-hr">
    <div class="statement-indicators">
        <table class="statement-table">
            <tr class="statement-table__headers">
                <th><div class="statement-table__headers-wrapper">Тип справки</div></th>
                <th><div class="statement-table__headers-wrapper">Номер справки</div></th>
                <th><div class="statement-table__headers-wrapper">Дата выдачи</div></th>
                <th><div class="statement-table__headers-wrapper">Статус</div></th>
                <th><div class="statement-table__headers-wrapper">Текст справки</div></th>
            </tr>
            <tr class="statement-table__content">
                <td>Текст</td>
                <td>Текст</td>
                <td>Текст</td>
                <td>Текст</td>
                <td><button class="reference__download">СКАЧАТЬ СПРАВКУ</button></td>
            </tr>
            <tr class="statement-table__content">
                <td>Текст</td>
                <td>Текст</td>
                <td>Текст</td>
                <td>Текст</td>
                <td><button class="reference__download">СКАЧАТЬ СПРАВКУ</button></td>
            </tr>
        </table>
    </div>
    <hr class="statement-hr">
</main>
<?php
require_once("common/footer.php");
require_once("common/popup.php");
require_once("common/notification.php");
?>
<script src="js/main.js"></script>
</body>
</html>