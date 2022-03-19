<!DOCTYPE html>
<html lang='vi'>

<head>
    <meta charset="UTF-8">
    <title>Logout</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['userId'])) {
        unset($_SESSION['userId']); // xóa session userId
        echo "<script>window.open('1-ChaoS.php','_self')</script>";
    }
    ?>
</body>

</html>