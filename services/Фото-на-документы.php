<?php
// services/doc-photo.php
require_once '../config.php'; // Убедитесь, что путь правильный

// Проверяем, передан ли параметр service в URL
if (!isset($_GET['service'])) {
    echo "Service parameter is required";
    exit;
}

$service_slug = $_GET['service'];
$service = getServiceInfo($pdo, $service_slug); // Используем $pdo вместо $conn

// Включаем header
include '../header.php';

if (!$service) {
    echo "<h1>Фото на документы</h1>";
    echo "<div class='service-description'>";
    echo "<h2>Услуги фотографии на документы:</h2>";
    echo "<ul>";
    echo "<li>Фото на паспорт РК</li>";
    echo "<li>Фото на удостоверение личности</li>";
    echo "<li>Фото на визу</li>";
    echo "<li>Фото на водительское удостоверение</li>";
    echo "</ul>";
    
    echo "<h3>Прайс-лист:</h3>";
    echo "<table class='price-list'>";
    echo "<tr><th>Услуга</th><th>Цена</th></tr>";
    echo "<tr><td>Фото на документы (4 шт)</td><td>1500 тг</td></tr>";
    echo "<tr><td>Фото на визу (6 шт)</td><td>2000 тг</td></tr>";
    echo "<tr><td>Срочное фото</td><td>2500 тг</td></tr>";
    echo "</table>";
    
    echo "<h3>Дополнительная информация:</h3>";
    echo "<p>Фотографии изготавливаются в течение 5-10 минут. Все фотографии соответствуют требованиям государственных органов.</p>";
    echo "</div>";
} else {
    // Если данные получены из БД
    echo "<h1>{$service['title']}</h1>";
    echo "<div class='service-description'>";
    echo $service['content'];
    echo "</div>";
}

// Включаем footer
include '../footer.php'; // Проверьте правильность пути
?>