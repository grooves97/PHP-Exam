<?php

$login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

if (mb_strlen($login) < 5 || mb_strlen($login) > 90){
    echo "Недопустимая длина логина";
    exit();
}
else if (mb_strlen($password) < 3 || mb_strlen($password) > 50){
    echo "Недопустимая длина пароля";
    exit();
}

$password = md5($password."!*%(Н!(%*@KJ!BLJL@YVATUVX<a@@>$@");

$mysql = new mysqli('localhost','root','','dictionary');
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
$user = $result->fetch_assoc();

if (count($user) == 0){
    echo "Такой пользователь не найден";
    exit();
}

setcookie('user', $user['name'], time() + 3600, "/");


$mysql->close();

header('Location: /main-form/main.php');