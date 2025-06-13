<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1 class="hello">
                        Привет, <?php echo $_COOKIE['User']; ?>
                    </h1>
    </body>
</html>

<?php
require_once('db.php');
$link = mysqli_connect('db', 'root', 'kali', 'first');
?>