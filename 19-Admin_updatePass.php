<?php
require './23-Admin_header.php';
?>
<?php
require './24-Admin_nav.php';
?>

<form class="container" action="" method="post">

    <div class="title">
        Chỉnh sửa quản trị viên
    </div>
    <table>
        <tr>
            <th>Tiêu đề quản trị viên</th>
            <th>Cập nhật quản trị viên</th>
        </tr>
        <?php
        if (isset($_GET['ad_id'])) {
            $ad_id = $_GET['ad_id'];
            $sql = "SELECT * from `admin` where ad_id='$ad_id'";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($res);
            $pass = $row['pass'];
            echo "
                   <tr>
                       <td><input type='text' name='pass' value='$pass'></td>
                       <input type='hidden' name='ad_id' value='$ad_id'>                  
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
        $ad_id = $_POST['ad_id'];
        $pass = $_POST['pass'];
        $sql = "UPDATE `admin` SET pass='$pass' where ad_id='$ad_id'";
        $res = mysqli_query($conn, $sql);
        echo $sql;
        if ($res) {
            echo "<script>alert('Đổi mật khẩu quản trị viên thành công')</script>";
            echo "<script>window.open('8-Admin_login.php','_self')</script>";
        }
    }

    ?>