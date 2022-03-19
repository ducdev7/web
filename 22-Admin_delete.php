<?php
require 'database.php';
if (isset($_GET['ad_id'])) {
    $ad_id = $_GET['ad_id'];
    $sql = "DELETE FROM `admin` WHERE ad_id='$ad_id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "<script>alert('Xóa quản trị viên thành công ')</script>";
        echo "<script>window.open('17-Admin.php','_self')</script>";
    }
}
