<?php
    session_start();

    require_once 'connect.php';
    require_once 'consts.php';

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql_check = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
    $user = mysqli_fetch_assoc($sql_check);
    if(mysqli_num_rows($sql_check) > 0)
    {
        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "photo" => $user['photo'],
            "email" => $user['email']
            
            ];

        header("Location: ../profile.php");
    }
    else
    {
        $_SESSION['message'] = 'Incorrect data or account does not exist';
        header("Location: ../login.php");
    }
?>