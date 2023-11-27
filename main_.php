<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Test</title>
</head>
<body>

    <?php
        require 'vendor/autoload.php';
        $userName = isCookie();
        if ($userName == null)
        {
            header("Location: login.php");
        }
        else
        {
            echo " Вы успешно авторизировались";
        }
        ?>
</body>
</html>
