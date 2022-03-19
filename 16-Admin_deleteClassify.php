<?php
require 'database.php';
if (isset($_GET['classify_id'])) {
    $classify_id = $_GET['classify_id'];
    $sql = "DELETE FROM `classify` WHERE classify_id='$classify_id'";

    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "<script>alert('Xóa phân loại  thành công ')</script>";
        echo "<script>window.open('9.2-Admin_classify.php','_self')</script>";
    }
}
