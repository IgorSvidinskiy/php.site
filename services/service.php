<?php
// service.php
require_once '../config.php';

// Получение списка услуг из базы данных
$services = getServices($conn);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наши Услуги</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background: #f4f4f4;
            color: #333;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 15px;
        }
        
        .service-card {
            background: #fff;
            padding: 15px;
            text-align: center;
            border-radius: 5px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .service-card:hover {
            background: #f0f0f0;
            transform: translateY(-3px);
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
        }
        
        .service-card a {
            text-decoration: none;
            color: #2c3e50;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Наши Услуги</h1>
        <div class="services-grid">
            <?php foreach ($services as $service) { ?>
            <div class="service-card">
                <a href="services/<?php echo $service['url_name']; ?>.php"><?php echo $service['title']; ?></a>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>