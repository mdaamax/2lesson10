<?php
var_dump($_POST);
$login = "";
$password = "";
if ( !empty($password))
{
    echo "принято";
}
else{
    echo "Введите пароль";
}

if(isset($_POST["login"])){

    $login = $_POST["login"];
}
if(isset($_POST["password"])){

    $password = $_POST["password"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>lesson09</title>
    <meta charset="utf-8" />
</head>
<body>
<h3>Ваши данные</h3>
<form action="index.php" method="POST">
    <p>Логин: <input type="text" name="login" /></p>
    <p>Пароль: <input type="text" name="password" /></p>
    <input type="submit" value="Отправить">
</form>
</body>
</html>