<?php
require 'database.php';
if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
    $sql = "DELETE FROM `category` WHERE category_id='$category_id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "<script>alert('Xóa danh mục sản phẩm  thành công ')</script>";
        echo "<script>window.open('9.1-Admin_cate.php','_self')</script>";
    }
}