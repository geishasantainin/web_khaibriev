<! DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="wrapper" class="container">
            <div class="row">
                <div class="col-12">
                    <h1>регистрация</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form id="signin" method="POST" action="">
                        <div class="row form__reg"><input class="form" type="text" name="username" placeholder="Login"></div>
                        <div class="row form__reg"><input class="form" type="password" name="password" placeholder="Password"></div>
                        <button type="submit" class="btn_red btn__reg" name="submit">&#xf0da;</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
    </html>
<?php
require_once('db.php');
if (isset($_COOKIE['User'])) {
    header("Location: profile.php");
}
$link = mysqli_connect('db', 'root', 'kali', 'first');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
  if ( !$username || !$password) die ('Пожалуйста введите все значения!');{}

  $sql = "INSERT INTO users ( username, pass) VALUES ('$username', '$password')";
header("Location: login.php");
  if(!mysqli_query($link, $sql)) {
    echo "Не удалось добавить пользователя";
  }
}
?>