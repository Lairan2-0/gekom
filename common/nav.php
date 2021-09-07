<nav>
    <div class="contact-data">
        <div class="contact-data__image-link">
            <a class="index-page-link" href="/index.php">
                <img class="index-page-logo" src="/img/logo.svg" alt="main-page-logo">
            </a>
        </div>
        <div class="contact-data__contact-numbers">
            <p class="contact-numbers__contact-number">8 (34248) 45-914</p>
            <p class="contact-numbers__contact-number">8-909-100-10-30</p>
        </div>
        <div class="contact-data__address">
            <p class="address__info">Пермский край, г. Губаха,<br> пр-т Ленина, д. 45, оф. 4, пом. 1</p>
        </div>
    </div>
    <div class="navigation-buttons">
            <a class="navigation-buttons__index-button" href="/index.php">Главная</a>
            <a class="navigation-buttons__about-button" href="#">О компании</a>
        <?php
            if (isset($_SESSION['user_id'])){
                echo "
                    <a class='navigation-buttons__menu-link' href='menu.php'>
                        <span class='icon-cabinet navigation-buttons__icon-cabinet'></span>
                        <span class='navigation-buttons__person-name'>".$_SESSION['user_name']."</span>
                    </a>
                ";
            }else{
                echo "
                    <button class='personal-area__btn'>
                        <span class='personal-area__none-active'>Личный кабинет</span>
                    </button>
                ";
            }
        ?>
    </div>
    <div class="hamburger">
        <button class="hamburger__btn">
            <span class="hamburger__line"></span>
        </button>
    </div>
</nav>
<div class="mobile-menu">
    <div class="mobile-menu__wrapper">
        <?php
        if (isset($_SESSION['user_id'])){
            echo "
                        <a class='mobile-menu__menu-link' href='menu.php'>
                            <span class='icon-cabinet mobile-menu__icon-cabinet'></span>
                            <span class='mobile-menu__person-name'>".$_SESSION['user_name']."</span>
                        </a>
                    ";
        }else{
            echo "
                        
                       <a class='mobile-menu__none-active'>Личный кабинет</a>
                        
                    ";
        }
        ?>
        <a class="mobile-menu__index-button" href="/index.php">Главная</a>
        <a class="mobile-menu__about-button" href="#">О компании</a>
    </div>
</div>
