<?php
session_start();
$chekAuth = true;
require_once ("common/chekAuth.php");
?>
<!doctype html>
<html lang="rus">
<?php $title="mpa"; require_once ("common/head.php"); ?>
<body>
<?php require_once("common/nav.php"); ?>
<main>
    <hr class="mpa-hr">
    <div class="upper-info">
        <div class="upper-info__left">
            <div class="left__left-info">
                <div class="left-info__full-name">
                    <h3 class="full-name__indication">ФИО:</h3>
                    <p class="full-name__fillable"><?= $_SESSION['user_name']?></p>
                </div>
                <div class="left-info__accordance">
                    <h3 class="accordance__indications">ДОГОВОР ЖКХ:</h3>
                    <p class="accordance__fillable">1149410082</p>
                </div>
            </div>
            <div class="left__right-info">
                <div class="right-info__address">
                    <h3 class="address__indications">АДРЕС:</h3>
                    <p class="address__fillable">618254, Пермский край, г.Губаха, пр-кт.<br> Свердлова, д.6, корп. В, кв.44</p>
                </div>
                <div class="right-info__telephone">
                    <h3 class="telephone__indications">ТЕЛЕФОН:</h3>
                    <p class="telephone__fillable">8(902)-633-20-35</p>
                </div>
            </div>
        </div>
        <div class="upper-info__right">
            <div class="right__count">
                <h3 class="count__indications">ЛИЦЕВОЙ СЧЁТ:</h3>
                <p class="count__fillable">1149410082</p>
            </div>
            <div class="right__to-pay">
                <h3 class="to-pay__indications">К ОПЛАТЕ:</h3>
                <p class="to-pay__fillable">623.12 р.</p>
            </div>
            <button class="right__payment-btn">ОПЛАТИТЬ</button>
        </div>
    </div>
    <hr class="mpa-hr">
    <div class="mid-info">
        <div class="mid-info__left">
            <div class="left__serving">
                <h3 class="serving__indication">Вас обслуживает:</h3>
                <p class="serving__fillable">ПАО “Пермэнергосбыт”</p>
            </div>
            <div class="left__address">
                <h3 class="address__indication">Адрес:</h3>
                <p class="address__fillable">Пермский край 618250 г. Габуха, ул. Дегтярева д. 9</p>
            </div>
            <div class="left__telephone">
                <h3 class="telephone__indication">телефоны:</h3>
                <p class="telephone__fillable">8(342) 200-63-00, 8(342) 263-36-33</p>
            </div>
            <div class="left__working-hours">
                <h3 class="working-hours__indication">Режим работы:</h3>
                <p class="working-hours__fillable">пн-пт с 8-00 до 17-00, сб с 9-00 до 15-00, вс выходной</p>
            </div>
        </div>
        <div class="mid-info__separator"></div>
        <div class="mid-info__right">
            <div class="right__invoice-indication">
                <h3 class="invoice-indication__header">Доставка квитанций</h3>
                <p class="invoice-indication__text">Подпишитесь на доставку электронных квитанций - наиболее<br>быстрый способ получения рсчетных документов</p>
            </div>
            <div class="right__buttons">
                <div class="buttons__info">
                    <p class="left-info__disabled">Доставка электронных<br>квитанций <span style="color: #FF0000; font-family: Gilroy-Bold, serif">отключена</span></p>
                    <p class="left-info__activated">Доставка бумажных<br> квитанций <span style="color: #00822E; font-family: Gilroy-Bold, serif">включена</span></p>
                </div>
                <div class="buttons__buttons">
                    <button class="buttons__btn-activate">Подпистаться</button>
                    <button class="buttons__btn-deactivate">Отключить</button>
                </div>
            </div>
        </div>
    </div>
    <hr class="mpa-hr">
</main>

<?php require_once("common/footer.php"); ?>
<script src="js/main.js"></script>

</body>
</html>

<?
$_SESSION['afa'];
?>