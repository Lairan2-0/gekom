<?php
session_start();
$chekAuth = true;
require_once ("common/chekAuth.php");
?>
<!doctype html>
<html lang="en">
<?php $title="menu"; require_once ("common/head.php"); ?>
<body>
        <?php require_once("common/nav.php"); ?>
        <main>
            <div class="menu-buttons">
                <a href="/mpa.php" class="menu-buttons__mpa">
                    <img class="link__image" src="/img/mpa.svg" alt="mpa-image">
                    <p class="link__text">Мои лицевые счета</p>
                </a>
                <a href="/purchase.php" class="menu-buttons__payment">
                    <img class="link__image" src="/img/payment.svg" alt="payment">
                    <p class="payment__text">Оплата</p>
                </a>
                <a href="/statement.php" class="menu-buttons__online-application">
                    <img class="link__image" src="/img/online-application.svg" alt="online-application">
                    <p class="online-application__text">Подать заявление онлайн</p>
                </a>

                <a href="/reference.php" class="menu-buttons__get-reference">
                    <img class="link__image" src="/img/reference.svg" alt="reference">
                    <p class="get-reference__text">Получить справку онлайн</p>
                </a>
                <a href="/index.php" class="menu-buttons__space-between">
                    <img class="" src="/img/space-between.svg" alt="space-between">
                </a>
                <a href="" class="menu-buttons__accurals">
                    <img class="link__image" src="/img/accurals.svg" alt="accurals">
                    <p class="accurals__text">Начисления и платежи</p>
                </a>

                <a href="" class="menu-buttons__indications">
                    <img class="link__image" src="/img/indications.svg" alt="indications">
                    <p class="indications__text">Показания</p>
                </a>
                <a href="" class="menu-buttons__question">
                    <img class="link__image" src="/img/question.svg" alt="question">
                    <p class="question__text">Задать вопрос</p>
                </a>
                <a href="" class="menu-buttons__main">
                    <img class="link__image" src="/img/back-arrow.svg" alt="back-arrow">
                    <p class="main__text">Выйти из аккаунта</p>
                </a>
            </div>
        </main>
        <?php require_once("common/footer.php"); ?>
        <script src="js/main.js"></script>
</body>
</html>