<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require 'database.php';
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN</title>
    <link rel="stylesheet" href="./18-Admin_css.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="./img/logoC.png" type="image/x-icon">
</head>

<?php
if (!isset($_SESSION['ad_name'])) {
    header("location:8-Admin_login.php");
}
?>

<body>
    <div class="header">
        <div class="header__logo">
            <a href="./1-ChaoS.php">Trang chủ</a>
        </div>
        <div class="header__user">
            <?php
            if (isset($_SESSION['ad_name'])) {
                echo $_SESSION['ad_name'];
            }
            ?>
        </div>
    </div>
</body>