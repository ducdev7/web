<!DOCTYPE html>
<html lang='vi'>

<head>
    <meta charset="UTF-8">
    <title>Logout</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['ad_name'])) {
        unset($_SESSION['ad_name']); // xóa session ad_name
        echo "<script>window.open('./8-Admin_login.php','_self')</script>";
    }
    ?>
</body>

</html>