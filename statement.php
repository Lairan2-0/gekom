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
    <hr class="statement-hr orange-hr">
    <div class="statement__top-line">
        <h3 class="statement__header">Мои заявления</h3>
        <button class="statement__btn">ПОДАТЬ ЗАЯВЛЕНИЕ</button>
    </div>
    <hr class="statement-hr orange-hr">
    <div class="statement-indicators">
        <table class="statement-table table">
            <tr class="statement-table__headers table__header-row">
                <th><div class="statement-table__headers-wrapper table__head-wrapper">Тип заявления</div></th>
                <th><div class="statement-table__headers-wrapper table__head-wrapper">Номер заявления</div></th>
                <th><div class="statement-table__headers-wrapper table__head-wrapper">Дата подачи</div></th>
                <th><div class="statement-table__headers-wrapper table__head-wrapper">Статус</div></th>
                <th><div class="statement-table__headers-wrapper table__head-wrapper">Текст заявления</div></th>
            </tr>
            <tr class="statement-table__content table__row">
                <td>Текст</td>
                <td>Текст</td>
                <td>Текст</td>
                <td>Текст</td>
                <td>Текст</td>
            </tr>
            <tr class="statement-table__content table__row">
                <td>Текст</td>
                <td>Текст</td>
                <td>Текст</td>
                <td>Текст</td>
                <td>Текст</td>
            </tr>
        </table>
    </div>
    <hr class="statement-hr orange-hr">
</main>
<?php
require_once("common/footer.php");
require_once("common/popup.php");
require_once("common/notification.php");
?>
<script src="js/main.js"></script>
</body>
</html>