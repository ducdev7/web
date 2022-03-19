<?php
require './23-Admin_header.php';
?>
<?php
require './24-Admin_nav.php';
?>

<form class="container" action="" method="post">
    <div class="title">
        Chỉnh sửa danh mục sản phẩm
    </div>
    <table>
        <tr>
            <th>Tiêu đề danh mục sản phẩm</th>
            <th>Cập nhật danh mục sản phẩm</th>
        </tr>
        <?php
        if (isset($_GET['category_id'])) {
            $category_id = $_GET['category_id'];
            $sql = "SELECT * from `category` where category_id='$category_id'";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($res);
            $category_name = $row['category_name'];
            echo "
                   <tr>
                       <td><input type='text' name='category_name' value='$category_name'></td>
                       <input type='hidden' name='category_id' value='$category_id'>                  
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
        $category_id = $_POST['category_id'];
        $category_name = $_POST['category_name'];
        $sql = "UPDATE `category` SET 
                category_name='$category_name'
                where category_id='$category_id'";
        $res = mysqli_query($conn, $sql);
        echo $sql;
        if ($res) {
            echo "<script>alert('Đổi danh mục sản phẩm thành công')</script>";
            echo "<script>window.open('9.1-Admin_cate.php','_self')</script>";
        }
    }

    ?>