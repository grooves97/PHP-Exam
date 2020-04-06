<html>
<head>
    <title>Dictionary</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>

<body>
<div class="container mt-4">
    <?php
    if ($_COOKIE['user'] == ''):
    ?>
    <h1>Форма авторизации</h1>
    <form action="validation-form/authorization.php" method="POST">
        <input name="login" type="text" class="form-control" placeholder="Введите ваш логин" required><br>
        <input name="password" type="password" class="form-control" placeholder="Введите пароль" required><br>
        <button class="btn btn-success" type="submit">Войти</button>
        <a class="btn btn-link" href="register.html">Зарегистрироваться?</a>
    </form>

    <?php endif; ?>
</div>
</body>
</html>
