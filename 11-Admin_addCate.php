<?php
require './23-Admin_header.php';
?>
<?php
require './24-Admin_nav.php';
?>
<div class="container">
    <div class="title">Thêm danh mục sản phẩm</div>
    <form action="" method="post">
        <div class="form__group">
            <span>Tiêu đề danh mục sản phẩm</span>
            <input name="category_name" type="text" required />
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
    $category_name = $_POST['category_name'];
    // echo $category_name;
    $sql = "INSERT INTO `category` (category_name) 
       VALUES ('$category_name')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "<script>alert('Danh mục sản phẩm được thêm thành công ')</script>";
        echo "<script>window.open('9.1-Admin_cate.php','_self')</script>";
    }
}
?>