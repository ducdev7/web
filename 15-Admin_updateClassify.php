<?php
require './23-Admin_header.php';
?>
<?php
require './24-Admin_nav.php';
?>

<form class="container" action="" method="post">

    <div class="title">
        Chỉnh sửa phân loại
    </div>
    <table>
        <tr>
            <th>Tiêu đề phân loại</th>
            <th>Cập nhật phân loại</th>
        </tr>
        <?php
        if (isset($_GET['classify_id'])) {
            $classify_id = $_GET['classify_id'];
            $sql = "SELECT * from `classify` where classify_id='$classify_id'";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($res);
            $classify_name = $row['classify_name'];
            echo "
                   <tr>
                       <td><input type='text' name='classify_name' value='$classify_name'></td>
                       <input type='hidden' name='classify_id' value='$classify_id'>                  
                       <td><input type='submit' name='submit' value='Gửi'></td>    
                   </tr>
                   ";
        }
        ?>

    </table>
    </from>

    <?php
    require './25-Admin_footer.php';
    ?>
    <?php
    if (isset($_POST['submit'])) {
        $classify_id = $_POST['classify_id'];
        $classify_name = $_POST['classify_name'];
        $sql = "UPDATE `classify` SET 
                classify_name='$classify_name'
                where classify_id='$classify_id'";
        $res = mysqli_query($conn, $sql);
        echo $sql;
        if ($res) {
            echo "<script>alert('Đổi phân loại thành công')</script>";
            echo "<script>window.open('9.2-Admin_classify.php','_self')</script>";
        }
    }

    ?>