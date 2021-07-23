<div class="popup-registration">
    <button class="popup-registration__close"><span class="icon-cross"></span></button>
    <p class="popup-registration__error"></p>
    <form action="/" method="POST" class="popup-registration__form">
        <h2 class="popup-registration__header">Регистрация</h2>
        <p class="popup-registration__enter">Уже зарегистрированы? Войти</p>
        <input type="text" name="userRegistrationName" class="popup-registration__name" placeholder="Фамилия, имя и отчество">
        <input type="text" name="userRegistrationInvoice" class="popup-registration__invoice" required>
        <input type="email" name="userRegistrationEmail" class="popup-registration__email" placeholder="Электронная почта">
        <div class="popup-registration__phone-wrapper">
            <input type="tel" name="userRegistrationPhone" class="popup-registration__phone" placeholder="(___) ___ __ __" required>
            <input type="button" value="Получить пароль" class="popup-registration__get-password">
        </div>
        <div class="popup-registration__password-wrapper">
            <input type="password" class="popup-registration__password" placeholder="Введите пароль" name="userRegistrationPassword" required>
            <a href="#" class="icon-view popup-registration__icon-view"></a>
        </div>
        <div class="popup-registration__checkbox-wrapper">
            <input type="checkbox" name="userRegistrationCheckbox" class="popup-registration__checkbox" required>
            <p class="popup-registration__checkbox-description">Я согласен на передачу персональных данных</p>
        </div>
        <input type="submit" value="Зарегитрироваться" class="popup-registration__submit">
    </form>
</div>
<div class="popup-enter">
    <button class="popup-enter__close"><span class="icon-cross"></span></button>
    <p class="popup-enter__error"></p>
    <form action="/" method="POST" class="popup-enter__form">
        <h2 class="popup-enter__header">Вход</h2>
        <p class="popup-enter__registration">Еще не зарегистрированы? Зарегистрироваться</p>
        <input type="text" name="userEnterInvoice" class="popup-enter__invoice" placeholder="Лицевой счет" required>
        <input type="password" name="userEnterPassword" class="popup-enter__password" placeholder="Пароль" required>
        <p class="popup-enter__forgot-password">Забыли пароль?</p>
        <input type="submit" value="Войти" class="popup-enter__submit">
    </form>
</div>
<div class="popup-shadow"></div>
