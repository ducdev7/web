<?php
require './23-Admin_header.php';
?>
<?php
require './24-Admin_nav.php';
?>
<div class="container">
    <div class="title">
        Xem danh sách phân loại
        <a href="./14-Admin_addClassify.php">Thêm phân loại</a>
    </div>
    <table>
        <tr>
            <th>Số thứ tự phân loại</th>
            <th>Tiêu đề phân loại</th>
            <th>Xóa phân loại</th>
            <th>Cập nhập phân loại</th>
        </tr>
        <?php
        $i = 0;
        $sql = "SELECT * FROM `classify`";
        $res = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($res)) {
            $classify_id = $row['classify_id'];
            $classify_name = $row['classify_name'];
            $i++;
            echo "
                <tr>
               <td>$i</td>
               <td>$classify_name</td>
         
               <td>
                   <a href='16-Admin_deleteClassify.php?classify_id=$classify_id'>Xóa</a>
               </td>
               <td>
                   <a href='15-Admin_updateClassify.php?classify_id=$classify_id'>Chỉnh sửa</a>
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