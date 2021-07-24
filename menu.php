<!doctype html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ГЭКОМ-РКС-МЕНЮ</title>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.0.2/dist/simpleParallax.min.js"></script>
</head>
<body>
        <?php require_once("common/nav.php"); ?>
        <main>
            <div class="menu-buttons">
                <a href="/mpa.php" class="menu-buttons__mpa">
                    <img class="link__image" src="/img/mpa.svg" alt="mpa-image">
                    <p class="link__text">Мои лицевые счета</p>
                </a>
                <a href="" class="menu-buttons__payment">
                    <img class="link__image" src="/img/payment.svg" alt="payment">
                    <p class="payment__text">Оплата</p>
                </a>
                <a href="" class="menu-buttons__online-application">
                    <img class="link__image" src="/img/online-application.svg" alt="online-application">
                    <p class="online-application__text">Подать заявление онлайн</p>
                </a>

                <a href="" class="menu-buttons__get-reference">
                    <img class="link__image" src="/img/reference.svg" alt="reference">
                    <p class="get-reference__text">Получить справку онлайн</p>
                </a>
                <img class="menu-buttons__space-between" src="/img/space-between.svg" alt="space-between">
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
                    <p class="main__text">Вернуться на главную</p>
                </a>
            </div>
        </main>
        <?php require_once("common/footer.php"); ?>
        <script src="js/main.js"></script>
</body>
</html>