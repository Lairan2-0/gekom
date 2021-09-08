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
    <hr class="purchase-hr orange-hr">
    <div class="purchase__top-line">
        <div class="purchase__indications-wrapper">
            <h3 class="purchase__indications">ЛИЦЕВОЙ СЧЁТ:</h3>
            <p class="purchase__fillable">1149410082</p>
        </div>
        <div class="purchase__to-pay-wrapper">
            <h3 class="purchase__to-pay">К ОПЛАТЕ</h3>
            <p class="purchase__to-pay-num">0</p>
        </div>
        <div class="purchase__name-wrapper">
            <h3 class="purchase__name">ИМЯ ПОЛУЧАТЕЛЯ</h3>
            <p class="purchase__name-str">Иван Иванов</p>
        </div>
    </div>
    <hr class="purchase-hr orange-hr">
    <div class="purchase-indicators">
        <div class="purchase-indicators__heating">
            <h3 class="purchase-indicators__heating-header">Отопление</h3>
            <input type="number" class="purchase-indicators__heating-num" placeholder="0.00">
        </div>
        <div class="purchase-indicators__hws">
            <h3 class="purchase-indicators__hws-header">ГВС</h3>
            <input type="number" class="purchase-indicators__hws-num" placeholder="0.00">
        </div>
        <div class="purchase-indicators__total-score">
            <p>Итого к оплате <b>0.00</b> руб., в том числе коммисия <b>0.00</b> руб.</p>
        </div>
    </div>
    <hr class="purchase-hr orange-hr">
    <div class="purchase-payment">
        <form action="/purchase.php" method="post">
            <div class="purchase-payment__sand-to-mail">
                <div class="purchase-payment__check">
                    <input type="checkbox" class="purchase-payment__check-checkbox">
                    <h3 class="purchase-indicators__check-header">Прислать квинтанцию на почту?</h3>
                </div>
                <input type="email" class="purchase-indicators__email" placeholder="Ваша электронная почта">
            </div>
            <input type="submit" value="Отправить" class="purchase-indicators__submit">
        </form>
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