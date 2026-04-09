<?php
    session_start();
    if(isset($_SESSION['user']))
    header("Location: profile.php");
?>

<?php include 'header.php'?>
<main id="dynamic-content">
    <div class="main">
        <div class="slider-container" style="margin-top: -7%;">
            <br>
            <button class="order-button">Заказать</button>
            <div class="slider">
                <div class="slide">
                    <img src="assets/imgs/3qtFksNQJVY5bobyHJEgx6bhbg1LjHng.jpeg" alt="Image 1">
                    <div class="slide-text">
                        <h2 style="color: white; text-shadow: 20px -12px 2px #00000057;">Сделаем качественное фото</h2>
                        <p style="font-family:sans-serif; color: white; text-shadow: 20px -12px 2px #00000057;">От удостоверения личности/паспорта до виз за рубеж</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="assets/imgs/TIRO0921hSejYhXr0hHjYus6X9YXllsW.jpeg" alt="Image 2">
                    <div class="slide-text">
                        <h2 style="color: white; text-shadow: 20px -12px 2px #000000a8;">Печать документов</h2>
                        <p style="font-family:sans-serif; color: white; text-shadow: 20px -12px 2px #000000a8;">Любой цветности и/или сложности</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="assets/imgs/A11178962_13-978103216.jpeg" alt="Image 1">
                    <div class="slide-text">
                        <h2 style="color: white; text-shadow: 20px -12px 2px #9e9e9e;">Интернет услуги</h2>
                        <p style="font-family:sans-serif; color: white; text-shadow: 20px -12px 2px #9e9e9e;">ОТ брони очередей в гос. учреждения до отправки почты</p>
                    </div>
                </div>
            </div>
            <div class="popup" id="popup">
                <script src="assets/js/order-popup.js"></script>
                <div class="popup-content">
                    <span class="close-button">&times</span>
                    <div class="card-form">
                        <h2>Оставьте ваши данные, мы свяжемся с вами при первой возможности</h2>
                        <form>
                            <label for="cardNumber">Ваше Имя:</label>
                            <input type="text" id="cardNumber" name="cardNumber" required>
                            <label for="expiryDate">Ваш номер телефона</label>
                            <input type="tel" id="expiryDate" name="expiryDate" required>
                            <label for="cvv">Ваш E-Mail</label>
                            <input type="email" id="cvv" name="cvv" required>
                            <button type="submit">Заказать звонок</button>
                        </form>
                    </div>
                    <!-- <div class="kaspi-qr">
                        <h2>Каспи QR</h2>
                        <img src="assets/imgs/kaspi-qr-placeholder.jpg" alt="Kaspi QR Placeholder">
                    </div> -->
                </div>
            </div>
        </div>
        <br>
        <div class="grid">
            <a href="services/internet.php">
                <div class="grid-item">
                <img src="assets/imgs/works/CqUoQ3OcyXsFkv6oGR4nUv4BFxGHQTQR.jpg" alt="">
                <span class="grid-text">Интернет услуги</span>
                </div>
            </a>
            <a href="services/Typing.php">
                <div class="grid-item">
                <img src="assets/imgs/works/набор текста.jpeg" alt="">
                <span class="grid-text">Набор текста</span>
                </div>
            </a>
            <a href="services/Egov.html">
                <div class="grid-item">
                <img src="assets/imgs/egov.svg" alt="">
                <span class="grid-text">Egov</span>
                </div>
            </a>
            <a href="services/insurance.html">
                <div class="grid-item">
                <img src="assets/imgs/AGGs6be3gHHjI4UxFEsOri4B2r9BRME8.jpeg" alt="">
                <span class="grid-text">Автострахование</span>
                </div>
            </a>
        </div>
    </div>
    <div class="list">
        <img src="assets/imgs/icons/list_alt_24dp_FILL0_wght400_GRAD0_opsz24.svg" style="width: 6%;" alt="">
        <label for="" style="font-family: sans-serif;">Доступность онлайн заказа</label>
        <img src="assets/imgs/icons/credit_card_24dp_FILL0_wght400_GRAD0_opsz24.svg" style="width: 6%;" alt="">
        <label for="" style="font-family: sans-serif;">Безналичный расчет</label>
        <img src="assets/imgs/icons/license_24dp_FILL0_wght400_GRAD0_opsz24.svg" style="width: 6%;" alt="">
        <label for="" style="font-family: sans-serif;">Гарантия качества</label>
    </div>
    <br>
    <p class="description">
        ИП или ТОО
        Адрес места нахождения:
        область, город, район
        Номер телефона +7 778 981 08 98
        Адрес электронной почты Marlen.Ilipov@mail.ru

        Заказать хороший принт в (город) не всегда просто. 
        Только типография с большим опытом работы обеспечивает выполнение задачи быстро, без брака и недорого. 
        Мы предлагаем не только оперативную полиграфию в (город), но и ускоренную доставку.
    </p>
        <h2>Почему не стоит экономить на печати</h2>
        <p class="description">Печатная продукция — важный маркетинговый инструмент и лицо бренда, компании или товара. Можно долго рассказывать о преимуществах и успешности фирмы, но если дать собеседнику явно дешевую визитку, напечатанную на тонком картоне, сразу становится ясно: красивые фразы — лишь бравада. И наоборот, если протянуть элитную визитку Тач Кавер, удастся произвести совершенно другое впечатление.</p>
        <h3>Услуги типографии</h3>
        <p class="description">Оперативная типография UmitType печатает не только визитные карточки, но и любую другую полиграфическую продукцию:</p>
        <ul>
            <li>Листовки/Флаеры</li>
            <li>Брошюры/Буклеты</li>
            <li>Плакаты/Постеры</li>
            <li>Открытки</li>
            <li>Бланки/бумаги с фирменным стилем</li>
            <li>Папки/конверты с логотипом</li>
            <li>Журналы/каталоги</li>
            <li>Книги</li>
            <li>Упаковки</li>
            <li>Бейджи/значки</li>
        </ul>
        <h2>UmitType: что мы предлагаем:</h2>
        <ul>
            <li>Качественные фото на любого рода документы</li>
            <li>Печать(черно-белая, цветная)</li>
            <li>Ксерокс</li>
            <li>Скан документов или фото на память</li>
            <li>Интернет-услуги(от брони очереди в посольство до скачивания файлов)</li>
            <li>Egov услуги(от брони очереди до апостиля документов)</li>
            <li>Автострахование(Подберем наилучшие условия страхования вашего ТС)</li>
            <li>Техосмотр(тут вам и так всё понятно ;-)</li>
        </ul>
        <p class="description">Заказывать и оплачивать удобно на сайте. Мы напечатаем, Вы останетесь довольны!</p>
    </p>
    <div class="clients">
        <img src="" alt="Client1">
        <img src="" alt="Client2">
        <img src="" alt="Client3">
        <img src="" alt="Client4">
        <img src="" alt="Client5">
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Функция загрузки контента
    function loadContent(url) {
        const contentDiv = document.getElementById('dynamic-content');
        contentDiv.classList.add('loading');

        fetch('content_loader.php?url=' + encodeURIComponent(url))
            .then(response => response.text())
            .then(data => {
                contentDiv.innerHTML = data;
                contentDiv.classList.remove('loading');
                // Переинициализация скриптов после загрузки
                reinitializeScripts();
                // Прокрутка вверх
                window.scrollTo(0, 0);
            })
            .catch(error => {
                console.error('Ошибка:', error);
                contentDiv.innerHTML = '<div class="error">Произошла ошибка при загрузке контента</div>';
                contentDiv.classList.remove('loading');
            });
    }

    // Функция переинициализации скриптов
    function reinitializeScripts() {
        // Переинициализация слайдера
        if (document.querySelector('.slider')) {
            // Ваш код инициализации слайдера
        }

        // Переинициализация попапа заказа
        const orderButtons = document.querySelectorAll('.order-button');
        const popup = document.getElementById('popup');
        const closeButton = document.querySelector('.close-button');

        if (orderButtons && popup && closeButton) {
            orderButtons.forEach(button => {
                button.addEventListener('click', () => {
                    popup.style.display = 'block';
                });
            });

            closeButton.addEventListener('click', () => {
                popup.style.display = 'none';
            });

            window.addEventListener('click', (e) => {
                if (e.target === popup) {
                    popup.style.display = 'none';
                }
            });
        }
    }

    // Обработчик клика по ссылкам
    document.addEventListener('click', function(e) {
        const link = e.target.closest('a');
        if (link && link.getAttribute('href')?.startsWith('services/')) {
            e.preventDefault();
            const url = link.getAttribute('href');
            loadContent(url);
            // Обновляем URL без перезагрузки страницы
            history.pushState({url: url}, '', url);
        }
    });

    // Обработка навигации браузера
    window.addEventListener('popstate', function(e) {
        if (e.state && e.state.url) {
            loadContent(e.state.url);
        } else {
            // Возврат на главную
            window.location.reload();
        }
    });

    // Инициализация скриптов при первой загрузке
    reinitializeScripts();
});
</script>
<?php include 'footer.php'?> 