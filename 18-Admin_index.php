<?php
require './23-Admin_header.php';
?>
<?php
require './24-Admin_nav.php';
?>
<div class="container">
    <div class="title">Bảng điều khiển</div>
    <div style="display:flex;">
        <?php
        $sql = "SELECT * FROM `admin`";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        $sql_2 = "SELECT * FROM `products`";
        $result_2 = mysqli_query($conn, $sql_2);
        $count_2 = mysqli_num_rows($result_2);
        $sql_3 = "SELECT * FROM `category`";
        $result_3 = mysqli_query($conn, $sql_3);
        $count_3 = mysqli_num_rows($result_3);
        $sql_4 = "SELECT * FROM `classify`";
        $result_4 = mysqli_query($conn, $sql_4);
        $count_4 = mysqli_num_rows($result_4);
        ?>
        <div class="box">
            <div class="box__left">
                <a href="./17-Admin.php">Quản trị viên: <?php echo $count ?></a>
            </div>
        </div>

        <div class="box">
            <div class="box__left">
                <a href="./9-Admin_products.php">Sản phẩm: <?php echo $count_2 ?></a>
            </div>
        </div>

        <div class="box">
            <div class="box__left">
                <a href="./9.1-Admin_cate.php">Danh mục: <?php echo $count_3 ?></a>
            </div>
        </div>

        <div class="box">
            <div class="box__left">
                <a href="./9.2-Admin_classify.php">Phân loại: <?php echo $count_4 ?></a>
            </div>
        </div>
    </div>
</div>
<?php
require './25-Admin_footer.php';
?>