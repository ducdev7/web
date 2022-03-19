<?php
require 'database.php';
if (isset($_GET['prd_id'])) {
    $prd_id = $_GET['prd_id'];
    $sql = "DELETE FROM `products` WHERE prd_id='$prd_id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "<script>alert('Xóa sản phẩm thành công')</script>";
        echo "<script>window.open('./9-Admin_products.php','_self')</script>";
    }
}
