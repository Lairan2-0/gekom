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
    <hr class="testimony-hr orange-hr">
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
                <p class="count__fillable"><?= $_SESSION['user_invoice']?></p>
            </div>
            <div class="right__to-pay">
                <h3 class="to-pay__indications">К ОПЛАТЕ:</h3>
                <p class="to-pay__fillable">623.12 р.</p>
            </div>
            <button class="right__payment-btn">ОПЛАТИТЬ</button>
        </div>
    </div>
    <hr class="testimony-hr orange-hr">
    <div class="testimony-indicators">
        <h2 class="testimony__header">Показания принимаются за Сентябрь</h2>
        <table class="payments-table table">
            <tr class="payments-table__headers table__header-row">
                <th><div class="payments-table__headers-wrapper table__head-wrapper">Тип счетчика</div></th>
                <th><div class="payments-table__headers-wrapper table__head-wrapper">Значность</div></th>
                <th><div class="payments-table__headers-wrapper table__head-wrapper">Номер счетчика</div></th>
                <th><div class="payments-table__headers-wrapper table__head-wrapper">Тарифная зона</div></th>
                <th><div class="payments-table__headers-wrapper table__head-wrapper">Тариф</div></th>
                <th><div class="payments-table__headers-wrapper table__head-wrapper">Предыдущие показания</div></th>
                <th><div class="payments-table__headers-wrapper table__head-wrapper">Текущие показания</div></th>
                <th><div class="payments-table__headers-wrapper table__head-wrapper">Расход</div></th>
                <th><div class="payments-table__headers-wrapper table__head-wrapper">Сумма (руб.)</div></th>
            </tr>
            <tr class="testimony-table__content table__row">
                <td>Электроэнергия</td>
                <td>6</td>
                <td>090770</td>
                <td>день</td>
                <td>4.48</td>
                <td>5840.00</td>
                <td><input type="number" class="testimony-table__count-input"><div class="testimony-table__checkbox"><input type="checkbox"><p>Не согласен с  прыдудщими показаниями</p></div></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="testimony-table__content table__row">
                <td>Электроэнергия</td>
                <td>6</td>
                <td>090770</td>
                <td>ночь</td>
                <td>2.86</td>
                <td>2344.00</td>
                <td><input type="number" class="testimony-table__count-input"><div class="testimony-table__checkbox"><input type="checkbox"><p>Не согласен с  прыдудщими показаниями</p></div></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="testimony-table__final table__row">
                <td colspan="2"><button>Передать показания</button></td>
                <td colspan="3"><button>Передать показания и оплатить</button></td>
                <td colspan="3"></td>
                <td><b>Итого:</b> 0 Р</td>
            </tr>
        </table>
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