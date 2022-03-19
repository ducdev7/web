<?php
require './23-Admin_header.php';
?>
<?php
require './24-Admin_nav.php';
?>
<div class="container">
    <div class="title">
        Xem danh sách sản phẩm
        <a href="./5-Admin_addPrd.php">Thêm sản phẩm</a>
    </div>
    <table>
        <tr>
            <th>Số thứ tự</th>
            <th>Tiêu đề</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Phân loại</th>
            <th>Danh mục</th>
            <th>Xóa sản phẩm</th>
            <th>Cập nhập sản phẩm</th>
        </tr>
        <?php
        $sql = "SELECT * FROM products";
        $res = mysqli_query($conn, $sql);
        $i = 0;
        while ($row = mysqli_fetch_array($res)) {
            $prd_id = $row['prd_id'];
            $prd_name = $row['prd_name'];
            $image = $row['image'];
            $price = $row['price'];
            $quantity = $row['quantity'];
            $category_id = $row['category_id'];
            $classify_id = $row['classify_id'];
            $sql_2 = "SELECT * FROM category where category_id=$category_id";
            $res_2 = mysqli_query($conn, $sql_2);
            $row_2 = mysqli_fetch_array($res_2);
            $sql_3 = "SELECT * FROM classify where classify_id=$classify_id";
            $res_3 = mysqli_query($conn, $sql_3);
            $row_3 = mysqli_fetch_array($res_3);
            $category_name = $row_2['category_name'];
            $classify_name = $row_3['classify_name'];
            $i++;
            echo "
            <tr>
                <td>$i</td>
                <td>$prd_name</td>
                <td>
                    <img src='./img/$image' alt='' />
                </td>
                <td>$price VND</td>
                <td>$quantity</td>
                <td>$category_name</td>
                <td>$classify_name</td>
                <td>
                    <a href='./7-Admin_deletePrd.php?prd_id=$prd_id'>Xóa</a>
                </td>
                <td>
                    <a href='./6-Admin_updatePrd.php?prd_id=$prd_id'>Chỉnh sửa</a>
                </td>
            </tr>
            ";
        }
        ?>
    </table>
</div>
</div>
<?php
require './25-Admin_footer.php';
?>