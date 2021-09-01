<div class="popup-registration">
    <button class="popup-registration__close"><span class="icon-cross"></span></button>
    <p class="popup-registration__error">Аккаунт с такими данными уже существует<br/><span class='popup-registration__update'>Обновить данные?</span></p>
    <div class="popup-registration__forms">
        <form action="/" method="POST" class="popup-registration__form-top">
            <h2 class="popup-registration__header">Регистрация</h2>
            <p class="popup-registration__enter">Уже зарегистрированы? Войти</p>
            <input type="text" name="userRegistrationName" class="popup-registration__name reg-form-inp" placeholder="Фамилия, имя и отчество">
            <input type="text" name="userRegistrationInvoice" class="popup-registration__invoice reg-form-in" placeholder="Лицевой счет" required>
            <input type="email" name="userRegistrationEmail" class="popup-registration__email reg-form-in" placeholder="Электронная почта">
            <div class="popup-registration__phone-wrapper">
                <input type="tel" name="userRegistrationPhone" class="popup-registration__phone reg-form-in" placeholder="+7 (___) ___ __ __" required>
                <input type="submit" value="Получить пароль" class="popup-registration__get-password">
            </div>
        </form>
        <form action="/" method="POST" class="popup-registration__form-bottom">
            <div class="popup-registration__password-wrapper">
                <input type="password" class="popup-registration__password reg-form-in" placeholder="Введите пароль" name="userRegistrationPassword" required>
                <a href="#" class="icon-view popup-registration__icon-view"></a>
            </div>
            <div class="popup-registration__checkbox-wrapper">
                <input type="checkbox" name="userRegistrationCheckbox" class="popup-registration__checkbox" required>
                <p class="popup-registration__checkbox-description">Я согласен на передачу персональных данных</p>
            </div>
            <input type="submit" value="Зарегитрироваться" class="popup-registration__submit">
        </form>
    </div>
</div>
<div class="popup-enter">
    <button class="popup-enter__close"><span class="icon-cross"></span></button>
    <p class="popup-enter__error">Неправильный лийцевой счет или пароль</p>
    <form action="/" method="POST" class="popup-enter__form">
        <h2 class="popup-enter__header">Вход</h2>
        <p class="popup-enter__registration">Еще не зарегистрированы? Зарегистрироваться</p>
        <input type="text" name="userEnterInvoice" class="popup-enter__invoice auth-form-in" placeholder="Лицевой счет" required>
        <input type="password" name="userEnterPassword" class="popup-enter__password auth-form-in" placeholder="Пароль" required>
        <p class="popup-enter__forgot-password">Забыли пароль?</p>
        <input type="submit" value="Войти" class="popup-enter__submit">
    </form>
</div>
<div class="popup-shadow"></div>
