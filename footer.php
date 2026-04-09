            <footer>
                <div class="bottom-menu">
                    <ul class="link1" style="list-style: none;">
                        <p>Контакты</p>
                        <li><a style="text-decoration: none; color: white;" href="+77789810898">+7 778 981 08 98</a></li>
                        <li>Полный адрес(область, город, район, дом)</li>
                        <li><a style="text-decoration: none; color: white;" href="mailto:MarlenIlipov@mail.ru">MarlenIlipov@mail.ru</a></li>
                    </ul>
                    <br>
                    <ul class="link1" style="list-style: none;">
                        <p>Услуги копи-центра</p>
                        <li><a class="link1" href="services/doc-photo.html">Фото на документы</a></li>
                        <li><a class="link1" href="services/Xerxox.html">Ксерокс</a></li>
                        <li><a class="link1" href="services/internet.html">Интернет услуги</a></li>
                        <li><a class="link1" href="services/Typing.html">Набор текста</a></li>
                        <li><a class="link1" href="services/Egov.html">Egov услуги</a></li>
                        <li><a class="link1" href="services/cross1.html">Переплет</a></li>
                        <li><a class="link1" href="services/translating.html">Перевод (каз, рус, англ)</a></li>
                        <li><a class="link1" href="services/print.html">Печать</a></li>
                        <li><a class="link1" href="services/tech-look.html">Техосмотр</a></li>
                    </ul>
                    <br>
                    <ul class="link1" style="list-style: none;">
                        <p>Информация</p>
                        <li><a class="link1" href="about.php">О нас</a></li>
                        <li><a class="link1" href="contacts.php">Контакты</a></li>
                    </ul>
                    <br>
                    <ul class="link1" style="list-style: none;">
                        <p>Аккаунт</p>
                        <li><a class="link1" href="register.php">Зарегистрироваться</a></li>
                        <li><a class="link1" href="login.php">Авторизоваться</a></li>
                    </ul>
                    <form class="link1" action="vendor/subscription.php" method="post">
                        <p style="margin-left: 58%; margin-bottom: 2;">Подписка</p>
                            <p>
                                Обязательно следите
                                за нашим блогом
                                и подпишитесь на все 
                                наши почтовые обновления!
                            </p>
                        <input type="email" name="email" id="email" placeholder="Почта" style="margin-left: 49%;">
                        <button class="button" type="submit">Отправить</button>
                    </form>
                </div>
            </footer>
        </div>
        <script>
            // Проверяем, если URL содержит параметр success=1, то показываем сообщение об успешной подписке
            let urlParams = new URLSearchParams(window.location.search);
            if (urlParams.get('success') === '0') {
                alert('Вы успешно подписались на рассылку!');
            }
        </script>
    </body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="assets/js/header.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
</html>