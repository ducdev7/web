<?php
require './23-Admin_header.php';
?>
<?php
require './24-Admin_nav.php';
?>
<div class="container">
    <div class="title">
        Xem danh sách danh mục sản phẩm
        <a href="./11-Admin_addCate.php">Thêm danh mục sản phẩm</a>
    </div>
    <table>
        <tr>
            <th>Số thứ tự danh mục sản phẩm</th>
            <th>Tiêu đề danh mục sản phẩm</th>
            <th>Xóa danh mục sản phẩm</th>
            <th>Cập nhập danh mục sản phẩm</th>
        </tr>
        <?php
        $i = 0;
        $sql = "SELECT * FROM `category`";
        $res = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($res)) {
            $category_id = $row['category_id'];
            $category_name = $row['category_name'];
            $i++;
            echo "
                <tr>
               <td>$i</td>
               <td>$category_name</td>
         
               <td>
                   <a href='13-Admin_deleteCate.php?category_id=$category_id'>Xóa</a>
               </td>
               <td>
                   <a href='12-Admin_updateCate.php?category_id=$category_id'>Chỉnh sửa</a>
               </td>
               </tr>
               ";
        }
        ?>
    </table>
</div>
<?php
require './25-Admin_footer.php';
?>