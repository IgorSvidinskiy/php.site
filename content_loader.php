<?php
require_once 'vendor\connect.php';

function sanitizeFileName($filename) { return preg_replace('/[^a-zA-Z0-9-_.]/', '', $filename); }

if (!isset($_GET['service']))
{
    header('HTTP/1.1 400 Bad Request');
    exit('Service parameter is required');
}

if (isset($_GET['url'])) {
    $url = sanitizeFileName($_GET['url']);
    
    // Получаем контент из базы данных
    try {
        $stmt = $pdo->prepare("
            SELECT content.*, services.title as service_title 
            FROM content 
            JOIN services ON content.service_id = services.id 
            WHERE services.url_path = ?
        ");
        $stmt->execute([$url]);
        $content = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($content) {
            // Шаблон для страницы услуги
            ?>
            <div class="service-page">
                <div class="service-header">
                    <h1><?php echo htmlspecialchars($content['service_title']); ?></h1>
                </div>
                
                <div class="service-content">
                    <?php echo $content['body']; ?>
                </div>
                
                <?php if (!empty($content['price_list'])): ?>
                <div class="price-list">
                    <h2>Прайс-лист</h2>
                    <?php echo $content['price_list']; ?>
                </div>
                <?php endif; ?>
                
                <div class="order-section">
                    <button class="order-button">Заказать услугу</button>
                </div>
            </div>
            <?php
        } else {
            echo '<div class="error">Страница не найдена</div>';
        }
    } catch (PDOException $e) {
        error_log($e->getMessage());
        echo '<div class="error">Произошла ошибка при загрузке контента</div>';
    }
}

// Добавляем стили для динамического контента
// Создайте файл dynamic-content.css в папке assets/css/
?>

<style>

</style>

<?php
// Пример данных для вставки в базу
    $sampleData = "
        INSERT INTO services (title, url_path, icon_path) VALUES 
        ('Фото на документы', 'doc-photo', 'icons/photo.svg'),
        ('Ксерокс', 'xerox', 'icons/copy.svg'),
        ('Интернет услуги', 'internet', 'icons/internet.svg'),
        ('Набор текста', 'typing', 'icons/typing.svg'),
        ('Egov услуги', 'egov', 'icons/egov.svg'),
        ('Переплет', 'cross', 'icons/binding.svg'),
        ('Перевод', 'translating', 'icons/translate.svg'),
        ('Печать', 'print', 'icons/print.svg'),
        ('Техосмотр', 'tech-look', 'icons/car.svg');

        INSERT INTO content (service_id, body, price_list) VALUES 
        (1, '<p>Профессиональное фото на все виды документов...</p>', '<ul><li>Фото на паспорт - 1500 тг</li><li>Фото на визу - 2000 тг</li></ul>'),
        (2, '<p>Качественное копирование документов...</p>', '<ul><li>А4 ч/б - 15 тг</li><li>А4 цветное - 80 тг</li></ul>');
        ";
?>

<?php
// content_loader.php



// Очистка входных данных
$service = preg_replace('/[^a-zA-Z0-9-]/', '', $_GET['service']);

try {
    // Подготавливаем запрос к БД для получения информации об услуге
    $stmt = $pdo->prepare("
        SELECT 
            s.id as service_id,
            s.title,
            s.url_path,
            c.body,
            c.price_list,
            c.meta_title,
            c.meta_description
        FROM services s
        LEFT JOIN content c ON s.id = c.service_id
        WHERE s.url_path = ? AND s.is_active = 1
    ");
    
    $stmt->execute([$service]);
    $content = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$content) {
        throw new Exception('Service not found');
    }

    // Определяем шаблон в зависимости от типа услуги
    $template = '';
    switch ($service) {
        case 'doc-photo':
            $template = 'templates/photo_service.php';
            break;
        case 'print':
            $template = 'templates/print_service.php';
            break;
        case 'xerox':
            $template = 'templates/xerox_service.php';
            break;
        // Добавьте другие случаи по необходимости
        default:
            $template = 'templates/default_service.php';
    }

    // Если существует специальный шаблон для услуги, используем его
    if (file_exists($template)) {
        include $template;
    } else {
        // Стандартный вывод для услуги
        ?>
        <div class="service-page">
            <div class="service-header">
                <h1><?php echo htmlspecialchars($content['title']); ?></h1>
            </div>
            
            <div class="service-content">
                <?php echo $content['body']; ?>
            </div>
            
            <?php if (!empty($content['price_list'])): ?>
            <div class="price-list">
                <h2>Прайс-лист</h2>
                <?php echo $content['price_list']; ?>
            </div>
            <?php endif; ?>
            
            <div class="order-section">
                <button class="order-button">Заказать услугу</button>
            </div>
        </div>
        <?php
    }

} catch (Exception $e) {
    header('HTTP/1.1 404 Not Found');
    ?>
    <div class="error-page">
        <h1>Страница не найдена</h1>
        <p>Запрашиваемая услуга не существует или была удалена.</p>
        <a href="/" class="back-button">Вернуться на главную</a>
    </div>
    <?php
}
?>