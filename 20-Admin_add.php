<?php
require './23-Admin_header.php';
?>
<?php
require './24-Admin_nav.php';
?>

<div class="container">
    <div class="title">Thêm quản trị viên</div>
    <form action="" method="post">
        <div class="form__group">
            <span>tên quản trị viên</span>
            <input name="ad_name" type="text" required />
        </div>
        <div class="form__group">
            <span>mật khẩu quản trị viên</span>
            <input name="pass" type="text" required />
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
    $ad_name = $_POST['ad_name'];
    // echo $ad_name;
    $pass = $_POST['pass'];
    $sql = "INSERT INTO `admin` (ad_name,pass) 
       VALUES ('$ad_name','$pass')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "<script>alert('quản trị viên được thêm thành công ')</script>";
        echo "<script>window.open('17-Admin.php','_self')</script>";
    }
}
?>