<?php
    require_once 'connect.php';
    require_once 'consts.php';

    // Получение email из формы
    $email = $_POST['email'];

    // Подготовка SQL-запроса
    $sql = "INSERT INTO `subscrbers` (`id`, `email`) VALUES (NULL, ?)";

    // Выполнение SQL-запроса
    if ($stmt = $connect->prepare($sql)) 
    {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        // Перенаправляем на index.php с параметром success=1
        header("Location: ../index.php?success=1");
        exit();
        $success = true;
    } else {
        echo "Ошибка при подготовке запроса: " . $connect->error;
    }
?>