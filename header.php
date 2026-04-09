<?php require_once 'vendor/connect.php'?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UmitType</title>
        <base href="/umit.type/">  
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/slick-theme.css">
        <link rel="stylesheet" href="assets/css/dynamic-content.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="assets/js/dynamic-content.js"></script> <!-- Подключаем скрипт динамической загрузки -->
    </head>
    <body>
        <div class="page-wrapper">
            <header id="header">
                <div class="top-menu">
                    <div class="text">
                        <div class="header-text">
                            <a class="selected" href="./">Главная</a>
                            <div class="dropdown">
                                <span class="links">Копи-центр</span>
                                <div class="dropdown-content">
                                    <?php
                                        $stmt = $pdo->query('SELECT * FROM services');
                                        $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($services as $service) {
                                            echo '<a class="link1" href="services/' . strtolower(str_replace(' ', '-', $service['title'])) . '.php" data-dynamic="true">' . htmlspecialchars($service['title']) . '</a>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <a href="about.php" class="links">О нас</a>
                            <a href="contacts.php" class="links">Контакты</a>
                            <div class="dropdown">
                                <span class="links">Login</span>
                                <div class="dropdown-content">
                                    <a class="link1" href="register.php">Register</a>
                                    <a class="link1" href="login.php">Log in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>