<?php session_start()?>
<!doctype html>
<html lang="en">
<?php $title="menu"; require_once ("common/head.php"); ?>
<body>
<?php require_once ("common/nav.php"); ?>

<div class="menu-buttons">
    <div class="menu-buttons__mpa">
        <a href="" class="mpa__link">
            <img class="link__image" src="/img/mpa.svg" alt="mpa-image">
            <p class="link__text">Мои лицевые счета</p>
        </a>
    </div>
    <div class="menu-buttons__payment">
        <a href="" class="payment__link">
            <img class="link__image" src="/img/payment.svg" alt="payment">
            <p class="payment__text">Оплата</p>
        </a>
    </div>
    <div class="menu-buttons__online-application">
        <a href="" class="online-application__link">
            <img class="link__image" src="/img/online-application.svg" alt="online-application">
            <p class="online-application__text">Подать заявление онлайн</p>
        </a>
    </div>
    <div class="menu-buttons__get-reference">
        <a href="" class="get-reference__link">
            <img class="link__image" src="/img/reference.svg" alt="reference">
            <p class="get-reference__text">Получить справку онлайн</p>
        </a>
    </div>
    <img class="menu-buttons__space-between" src="/img/space-between.svg" alt="space-between">
    <div class="menu-buttons__accurals">
        <a href="" class="accurals__link">
            <img class="link__image" src="/img/accurals.svg" alt="accurals">
            <p class="accurals__text">Начисления и платежи</p>
        </a>
    </div>

    <div class="menu-buttons__indications">
        <a href="" class="indications__link">
            <img class="link__image" src="/img/indications.svg" alt="indications">
            <p class="indications__text">Показания</p>
        </a>
    </div>
    <div class="menu-buttons__question">
        <a href="" class="question__link">
            <img class="link__image" src="/img/question.svg" alt="question">
            <p class="question__text">Задать вопрос</p>
        </a>
    </div>
    <div class="menu-buttons__main">
        <a href="" class="main__link">
            <img class="link__image" src="/img/back-arrow.svg" alt="back-arrow">
            <p class="main__text">Выйти из аккаунта</p>
        </a>
    </div>
</div>

<?php require_once ("common/footer.php"); ?>
<script src="js/main.js"></script>
</body>
</html>