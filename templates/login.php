<?php
/** @var \App\View $this */
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-2</title>
</head>
<body>

    <h1>Вход на сайт</h1>


    <form action="/login" method="post">
        <input type="text" name="login">
        <input type="password" name="password">
        <button type="submit">Вход</button>
    </form>

</body>
</html>