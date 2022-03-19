<?php
require './23-Admin_header.php';
?>
<?php
require './24-Admin_nav.php';
?>

<div class="container">
    <div class="title">Thêm phân loại</div>
    <form action="" method="post">
        <div class="form__group">
            <span>Tiêu đề phân loại</span>
            <input name="classify_name" type="text" required />
        </div>
        <div class="form__group">
            <span></span>
            <input type="submit" value="Gửi" name="submit">
        </div>
    </form>
</div>
<?php
require './25-Admin_footer.php';
?>

<?php
if (isset($_POST['submit'])) {
    $classify_name = $_POST['classify_name'];
    // echo $classify_name;
    $sql = "INSERT INTO `classify` (classify_name) 
       VALUES ('$classify_name')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "<script>alert('phân loại được thêm thành công ')</script>";
        echo "<script>window.open('9.2-Admin_classify.php','_self')</script>";
    }
}
?>