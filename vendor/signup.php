<?php
    session_start();
    require_once 'connect.php';
    require_once 'consts.php';

    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if($password === $confirm)
    {
        // $_FILES['avatar']['name'];
        $path = 'uploads/avatar/' . time() . $_FILES['avatar']['name'];
        if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../'. $path))
        {
            $_SESSION['message'] = "Image error upload";
            header("Location: register.php");
        }

        $password = md5($password); //password_hash($_POST['password'].PASSWORD_SALT, PASSWORD_DEFAULT);

        mysqli_query($connect, "INSERT INTO `users` (
            `id`,
            `full_name`,
            `username`,
            `email`,`password`,
            `photo`
            ) VALUES (
            NULL,
            '$full_name',
            '$username',
            '$email',
            '$password',
            '$path'
            )");
        $_SESSION['message'] = "Registration successful";
        header("Location: ../login.php");
    }
    else
    {
        $_SESSION['message'] = "Passwords doesn't matches";
        header('Location: ../register.php');
    }
?>