<?php
require './23-Admin_header.php';
?>
<?php
require './24-Admin_nav.php';
?>
<div class="container">
    <div class="title">Thêm Sản Phẩm</div>
    <form action="./5-Admin_addPrd.php" method="post" enctype="multipart/form-data">
        <div class="form__group">
            <span>Tiêu đề</span>
            <input name="prd_name" type="text" required />
        </div>
        <div class="form__group">
            <span>Phân loại</span>
            <select name="classify_id">
                <option selected disabled>Chọn Phân loại</option>
                <!-- Chọn danh mục muốn thêm vào -->
                <?php
                $sql = "SELECT * FROM `classify`";
                $res = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($res)) {
                    $classify_id = $row['classify_id'];
                    $classify_name = $row['classify_name'];
                    echo "
                    <option value='$classify_id'> $classify_name </option>     
                        ";
                }
                ?>
            </select>
        </div>
        <div class="form__group">
            <span>Danh mục</span>
            <select name="category_id">
                <!-- Chọn sản phẩm thuộc loại -->
                <option selected disabled>Chọn Danh Mục</option>
                <?php
                $sql = "SELECT * FROM `category`";
                $res = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($res)) {
                    $category_id = $row['category_id'];
                    $category_name = $row['category_name'];
                    echo "
                        <option value='$category_id'> $category_name </option>
                        ";
                }
                ?>
            </select>
        </div>
        <div class="form__group">
            <span>Ảnh</span>
            <input name="image" type="file" />
        </div>
        <div class="form__group">
            <span>Giá sản phẩm</span>
            <input name="price" type="text" required />
        </div>
        <div class="form__group">
            <span>Số lượng</span>
            <input name="quantity" type="text" required />
        </div>
        <div class="form__group">
            <span></span>
            <input type="submit" value="gửi" name="submit">
        </div>
    </form>
</div>
<?php
require './25-Admin_footer.php';
?>
<?php
if (isset($_POST['submit'])) {
    $prd_name = $_POST['prd_name'];
    $classify_id = $_POST['classify_id'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $image = $_FILES['image']['name'];
    // $temp_name = $_FILES['image']['tmp_name'];
    // move_uploaded_file($temp_name, "img/$image");
    $sql = "INSERT INTO products (classify_id,category_id,prd_name,image,price,quantity) 
            VALUES ('$classify_id','$category_id','$prd_name','$image','$price','$quantity')";
    $res = mysqli_query($conn, $sql);
    echo $sql;
    if ($res) {
        echo "<script>alert('Sản phẩm được thêm thành công ')</script>";
        echo "<script>window.open('./9-Admin_products.php','_self')</script>";
    }
}
?>