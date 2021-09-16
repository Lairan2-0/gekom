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
    <div class="statement__main-screen">
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
    </div>
    <div class="statement__steps">
        <h3>Оформление нового заяления</h3>
        <div class="statement__steps-nav">
            <div class="statement__first-step-nav step-nav step-nav__active">
                <p>Выбор типа заявления</p>
                <div class="statement__first-step-icon step-icon">1</div>
            </div>
            <div class="statement__arrow-right statement__arrow-active">
                <i class="fas fa-angle-right"></i>
            </div>
            <div class="statement__second-step-nav step-nav">
                <p>Прикрепление документов</p>
                <div class="statement__second-step-icon step-icon">2</div>
            </div>
            <div class="statement__arrow-right">
                <i class="fas fa-angle-right"></i>
            </div>
            <div class="statement__third-step-nav step-nav">
                <p>Выбор типа заявления</p>
                <div class="statement__third-step-icon step-icon">3</div>
            </div>
            <div class="statement__arrow-right">
                <i class="fas fa-angle-right"></i>
            </div>
            <div class="statement__fourth-step-nav step-nav">
                <p>Отправка заявления</p>
                <div class="statement__fourth-step-icon step-icon">4</div>
            </div>
        </div>
        <div class="statement__first-step">
            <h2>ШАГ 1</h2>
            <p>Выберите тип заявления</p>
            <div class="org-type__select">
                <input type="radio" class="org-type__input" id="org-type__radio-1" name="org-type__radio">
                <label for="org-type__radio-1">Заявление на внесение изменений в действующий договор</label>
                <ul>
                    <li>Изменить персональные данные при смене паспорта</li>
                    <li>Изменить количество проживающих</li>
                    <li>Внести прочие изменения в договор</li>
                </ul>
            </div>
            <div class="org-type__select">
                <input type="radio" class="org-type__input" id="org-type__radio-2" name="org-type__radio">
                <label for="org-type__radio-2">Заявление на перерасчет</label>
                <ul>
                    <li>Произвести перерасчет норматива потребления</li>
                    <li>Произвести перерасчет показаний</li>
                </ul>
            </div>
            <div class="org-type__select">
                <input type="radio" class="org-type__input" id="org-type__radio-3" name="org-type__radio">
                <label for="org-type__radio-3">Заявление на замену прибора учета</label>
                <ul>
                    <li>Приобрести и подключить новый прибор учета</li>
                    <li>Подать заявку на подключение прибора учета</li>
                </ul>
            </div>
            <div class="org-type__select">
                <input type="radio" class="org-type__input" id="org-type__radio-4" name="org-type__radio">
                <label for="org-type__radio-4">Заявление на опломбировку прибора учета</label>
                <ul>
                    <li>Проверить схему присоединения и опломбировать прибор учета при замене, переносе или установке</li>
                    <li>Произвести поверку прибора учета</li>
                </ul>
            </div>
            <div class="org-type__select">
                <input type="radio" class="org-type__input" id="org-type__radio-5" name="org-type__radio">
                <label for="org-type__radio-5">Заявление на заключение нового договора</label>
                <ul>
                    <li>Заключить договор электроснабжения частного дома, квартиры, комнаты в коммунальной квартире</li>
                    <li>Заключить договор электроснабжения дачи, гаража или иного объекта недвижимого имущества</li>
                </ul>
            </div>
            <div class="org-type__select">
                <input type="radio" class="org-type__input" id="org-type__radio-6" name="org-type__radio">
                <label for="org-type__radio-6">Заявление на расторжение договора</label>
                <ul>
                    <li>Расторгнуть договор с ГЭКОМ-РКС</li>
                </ul>
            </div>
            <div class="org-type__buttons">
                <button class="org-type__btn-cancel" id="statement-steps__close">Назад</button>
                <button class="org-type__btn-next">Дальше</button>
            </div>
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