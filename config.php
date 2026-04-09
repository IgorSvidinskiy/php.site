<?php 
// config.php - только конфигурация и функции
require_once 'vendor/connect.php'; // Предполагаю, что здесь создается $pdo

// Определяем отсутствующую функцию getServiceInfo
function getServiceInfo($pdo, $service_slug) {
    $stmt = $pdo->prepare("SELECT * FROM services WHERE slug = ?");
    $stmt->execute([$service_slug]);
    
    if ($stmt->rowCount() > 0) {
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        return false;
    }
}
?>

<?php include 'header.php'; ?>
<main>
  <section class="hero">
    <h1 class="fonts">Широкий спектр офисных услуг</h1>
    <p class="fonts">Профессиональная помощь в решении различных задач</p>
  </section>

  <section class="services">
    <?php foreach($services as $service): ?>
        <div class="service">
        <img src="assets/imgs/services/<?= htmlspecialchars($service['image_path']) ?>" alt="<?= htmlspecialchars($service['title']) ?>">
        <h2><?= htmlspecialchars($service['title']) ?></h2>
        <p><?= htmlspecialchars($service['description']) ?></p>
        <a href="#" class="btn">Подробнее</a>
        </div>
    <?php endforeach; ?>
    </section>

    <section class="features">
    <?php foreach($services as $service): ?>
        <div class="feature">
        <i class="<?= htmlspecialchars($service['icon']) ?>"></i>
        <h3><?= htmlspecialchars($service['title']) ?></h3>
        <p><?= htmlspecialchars($service['description']) ?></p>
        </div>
    <?php endforeach; ?>
    </section>
</main>

<?php include 'footer.php';?>