<?php
session_start();
$chekAuth = true;
require_once("common/chekAuth.php");
?>
    <!doctype html>
    <html lang="rus">
    <?php $title = "mpa";
    require_once("common/head.php"); ?>
    <body>
    <?php require_once("common/nav.php"); ?>
    <main>
        <hr class="mpa-hr orange-hr">
        <div class="upper-info">
            <div class="upper-info__left">
                <div class="left__left-info">
                    <div class="left-info__full-name">
                        <h3 class="full-name__indication">ФИО:</h3>
                        <p class="full-name__fillable"><?= $_SESSION['user_name'] ?></p>
                    </div>
                    <div class="left-info__accordance">
                        <h3 class="accordance__indications">ДОГОВОР ЖКХ:</h3>
                        <p class="accordance__fillable">1149410082</p>
                    </div>
                </div>
                <div class="left__right-info">
                    <div class="right-info__address">
                        <h3 class="address__indications">АДРЕС:</h3>
                        <p class="address__fillable">618254, Пермский край, г.Губаха, пр-кт.<br> Свердлова, д.6, корп.
                            В, кв.44</p>
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
                    <p class="count__fillable"><?= $_SESSION['user_invoice'] ?></p>
                </div>
                <div class="right__to-pay">
                    <h3 class="to-pay__indications">К ОПЛАТЕ:</h3>
                    <p class="to-pay__fillable">623.12 р.</p>
                </div>
                <button class="right__payment-btn">ОПЛАТИТЬ</button>
            </div>
        </div>
        <hr class="mpa-hr orange-hr">
        <div class="mid-info">
            <div class="mid-info__left">
                <div class="left__serving">
                    <h3 class="serving__indication mpa__mini-header">Вас обслуживает:</h3>
                    <p class="serving__fillable mpa__header">ПАО “Пермэнергосбыт”</p>
                </div>
                <div class="left__address">
                    <h3 class="address__indication mpa__mini-header">Адрес:</h3>
                    <p class="address__fillable">Пермский край 618250 г. Габуха, ул. Дегтярева д. 9</p>
                </div>
                <div class="left__telephone">
                    <h3 class="telephone__indication mpa__mini-header">телефоны:</h3>
                    <p class="telephone__fillable">8(342) 200-63-00, 8(342) 263-36-33</p>
                </div>
                <div class="left__working-hours">
                    <h3 class="working-hours__indication mpa__mini-header">Режим работы:</h3>
                    <p class="working-hours__fillable">пн-пт с 8-00 до 17-00, сб с 9-00 до 15-00, вс выходной</p>
                </div>
            </div>
            <div class="mid-info__separator"></div>
            <div class="mid-info__right">
                <div class="right__invoice-indication">
                    <h3 class="invoice-indication__header mpa__header">Доставка квитанций</h3>
                    <p class="invoice-indication__text">Подпишитесь на доставку электронных квитанций - наиболее<br>быстрый
                        способ получения рсчетных документов</p>
                </div>
                <div class="right__buttons">
                    <div class="buttons__info">
                        <p class="left-info__disabled">Доставка электронных<br>квитанций <span
                                    style="color: #FF0000; font-family: Gilroy-Bold, serif">отключена</span></p>
                        <p class="left-info__activated">Доставка бумажных<br> квитанций <span
                                    style="color: #00822E; font-family: Gilroy-Bold, serif">включена</span></p>
                    </div>
                    <div class="buttons__buttons">
                        <button class="buttons__btn-activate">Подпистаться</button>
                        <button class="buttons__btn-deactivate">Отключить</button>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mpa-hr orange-hr">
        <div class="contact-info">
            <h3 class="contact-info__header mpa__header">Контактная информация</h3>
            <div class="contact-info__wrapper">
                <div class="contact-info__left">
                    <p class="mpa__mini-header">Номер телефона:</p>
                    <div class="mpa__phone">
                        <div class="mpa__phone-left">
                            <i class="icon-phone"></i>
                            <p class="mpa__phone-number"><?= $_SESSION['user_phone'] ?></p>
                        </div>
                        <button><i class="icon-pencil"></i></button>
                        <button><i class="icon-cross"></i></button>
                    </div>
                    <div class="contacts__phones">
                        <form action="">
                            <input type="text" class="mpa-input contacts__total-phone" placeholder="8(___)-___-__-__">
                            <input type="submit" value="ДОБАВИТЬ" class="buttons__btn-activate contacts__phone-add">
                        </form>
                    </div>
                </div>
                <div class="contact-info__right">
                    <p class="mpa__mini-header">Электронная почта:</p>
                    <div class="mpa__email">
                        <?php if (!isset($_SESSION['user_email'])) {
                            echo "<p>Не добавлена</p>";
                        } else {
                            echo "
                        <div class='mpa__email-left'>
                            <i class='icon-mail'></i>
                            <p class='mpa__email-inp'>" . $_SESSION['user_email'] . "</p>
                        </div>
                        <button><i class='icon-pencil'></i></button>
                        <button><i class='icon-cross'></i></button>
                    ";
                        } ?>
                    </div>
                    <div>
                        <form action="">
                            <div class="contacts__emails">
                                <input type="text" placeholder="Ваша электронная почта" class="mpa-input">
                                <input type="submit" value="ДОБАВИТЬ" class="buttons__btn-activate contacts__emails-add">
                            </div>
                            <div class="mpa__paper-wrapper">
                                <input type="checkbox" id="mpa__paper" class="mpa__paper">
                                <label for="mpa__paper">Отказаться от бумажного носителя</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mpa-hr orange-hr">
        <div class="mpa__information">
            <h3 class="contact-info__header mpa__header">Информация по приборам учета</h3>
            <table class="mpa__information-table">
                <tr>
                    <th class="mpa__mini-header">ТИП СЧЕТЧИКА</th>
                    <th class="mpa__mini-header">ТАРИФНАЯ ЗОНА</th>
                    <th class="mpa__mini-header">СТАВКА ТАРИФА (РУБ.)</th>
                    <th class="mpa__mini-header">ДАТА УСТАНОВКИ ПРИБОРА УЧЕТА</th>
                    <th class="mpa__mini-header">ЗНАЧЕНИЕ СЧЕТЧИКА</th>
                    <th class="mpa__mini-header">НОМЕР СЧЕТЧИКА</th>
                </tr>
                <tr>
                    <td>Электроэнергия</td>
                    <td>День</td>
                    <td>4.29</td>
                    <td>25.07.2012</td>
                    <td>6</td>
                    <td>090770</td>
                </tr>
                <tr>
                    <td>Электроэнергия</td>
                    <td>Ночь</td>
                    <td>4.29</td>
                    <td>25.07.2012</td>
                    <td>6</td>
                    <td>090770</td>
                </tr>
            </table>
        </div>
        <hr class="mpa-hr orange-hr">
    </main>

    <?php require_once("common/footer.php"); ?>
    <script src="js/main.js"></script>

    </body>
    </html>

<?
$_SESSION['afa'];
?>