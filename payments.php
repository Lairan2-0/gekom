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
    <hr class="payments-hr orange-hr">
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
    <hr class="payments-hr orange-hr">
    <div class="payments-indicators">
        <div class="payments__date-range-picker">
            <i class="fa fa-calendar"></i>
            <span class="payments__date-range-picker-span"></span>
            <i class="fa fa-caret-down"></i>
        </div>
        <table class="payments-table table">
            <tr class="payments-table__headers table__header-row">
                <th><div class="payments-table__headers-wrapper table__head-wrapper">№</div></th>
                <th><div class="payments-table__headers-wrapper table__head-wrapper">Вид услуги</div></th>
                <th><div class="payments-table__headers-wrapper table__head-wrapper">Способ расчета</div></th>
                <th><div class="payments-table__headers-wrapper table__head-wrapper">Дата операции</div></th>
                <th><div class="payments-table__headers-wrapper table__head-wrapper">Предыдущие показания</div></th>
                <th><div class="payments-table__headers-wrapper table__head-wrapper">Тектущие показания</div></th>
                <th><div class="payments-table__headers-wrapper table__head-wrapper">Расход</div></th>
                <th><div class="payments-table__headers-wrapper table__head-wrapper">Тариф (руб.)</div></th>
                <th><div class="payments-table__headers-wrapper table__head-wrapper">Начислено (руб.)</div></th>
                <th><div class="payments-table__headers-wrapper table__head-wrapper">Снято/Добавлено (руб.)</div></th>
                <th><div class="payments-table__headers-wrapper table__head-wrapper">Оплачено (руб.)</div></th>
            </tr>
            <tr class="payments-table__content table__row">
                <td>1</td>
                <td>Оплата онлайн<br/><a href="#">Просмотр электронных чеков</a></td>
                <td></td>
                <td>07.09.2021</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>71.11</td>
            </tr>
            <tr class="payments-table__total table__row">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Итого</td>
                <td>0.00</td>
                <td>0.00</td>
                <td>71.11</td>
            </tr>
            <tr class="payments-table__month table__row">
                <td colspan="11">Операции по лицевому счёту за Август 2021г.<br/>Долг на конец августа: 71.11 руб.</td>
            </tr>
            <tr class="payments-table__content table__row">
                <td>2</td>
                <td>Содержание жилого помещения в части оплаты Эл/Эн, потребляемой при содержании ОИ</td>
                <td>Расчет ОДН</td>
                <td>31.08.2021</td>
                <td>2342.00</td>
                <td>2344.00</td>
                <td>2.00</td>
                <td>2.86</td>
                <td>5.72</td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    <hr class="payments-hr orange-hr">
</main>
<?php
require_once("common/footer.php");
require_once("common/popup.php");
require_once("common/notification.php");
?>
<script src="js/main.js"></script>
</body>
</html>