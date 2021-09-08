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
    <hr class="reference-hr orange-hr">
    <div class="statement__top-line">
        <h3 class="statement__header">Мои справки</h3>
        <button class="statement__btn">ПОЛУЧИТЬ СПРАВКУ</button>
    </div>
    <hr class="reference-hr orange-hr">
    <div class="statement-indicators">
        <table class="reference-table table">
            <tr class="reference-table__headers table__header-row">
                <th><div class="reference-table__headers-wrapper table__head-wrapper">Тип справки</div></th>
                <th><div class="reference-table__headers-wrapper table__head-wrapper">Номер справки</div></th>
                <th><div class="reference-table__headers-wrapper table__head-wrapper">Дата выдачи</div></th>
                <th><div class="reference-table__headers-wrapper table__head-wrapper">Статус</div></th>
                <th><div class="reference-table__headers-wrapper table__head-wrapper">Текст справки</div></th>
            </tr>
            <tr class="reference-table__content table__row">
                <td>Текст</td>
                <td>Текст</td>
                <td>Текст</td>
                <td>Текст</td>
                <td><button class="reference__download">СКАЧАТЬ СПРАВКУ</button></td>
            </tr>
            <tr class="reference-table__content table__row">
                <td>Текст</td>
                <td>Текст</td>
                <td>Текст</td>
                <td>Текст</td>
                <td><button class="reference__download">СКАЧАТЬ СПРАВКУ</button></td>
            </tr>
        </table>
    </div>
    <hr class="reference-hr orange-hr">
</main>
<?php
require_once("common/footer.php");
require_once("common/popup.php");
require_once("common/notification.php");
?>
<script src="js/main.js"></script>
</body>
</html>