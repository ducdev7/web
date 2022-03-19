<?php
require './23-Admin_header.php';
?>
<?php
require './24-Admin_nav.php';
?>
<div class="container">
    <div class="title">
        Xem danh sách quản trị viên
        <a href="./20-Admin_add.php">Thêm quản trị viên</a>
    </div>
    <table>
        <tr>
            <th>Số thứ tự quản trị viên</th>
            <th>Tiêu đề quản trị viên</th>
            <th>Xóa quản trị viên</th>
            <th>Cập nhập quản trị viên</th>
            <th>Đổi mật khẩu quản trị viên</th>
        </tr>
        <?php
        $i = 0;
        $sql = "SELECT * FROM `admin`";
        $res = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($res)) {
            $ad_id = $row['ad_id'];
            $ad_name = $row['ad_name'];
            $i++;
            echo "
                <tr>
               <td>$i</td>
               <td>$ad_name</td>
               <td>
                   <a href='22-Admin_delete.php?ad_id=$ad_id'>Xóa</a>
               </td>
               <td>
                   <a href='21-Admin_update.php?ad_id=$ad_id'>Chỉnh sửa</a>
               </td>
               <td>
                   <a href='19-Admin_updatePass.php?ad_id=$ad_id'>Chỉnh sửa</a>
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