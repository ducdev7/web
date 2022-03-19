<?php
require './23-Admin_header.php';
?>
<?php
require './24-Admin_nav.php';
?>

<form class="container" action="" method="post" enctype="multipart/form-data">
    <div class="title">
        Chỉnh sửa sản phẩm
    </div>
    <table>
        <tr>
            <th>Tiêu đề sản phẩm </th>
            <th>Ảnh sản phẩm </th>
            <th>Ảnh tải lên</th>
            <th>Giá sản phẩm </th>
            <th>Số lượng sản phẩm </th>
            <th>Cập nhật sản phẩm </th>
        </tr>
        <?php
        if (isset($_GET['prd_id'])) {
            $prd_id = $_GET['prd_id'];
            $sql = "SELECT * from `products` where prd_id='$prd_id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $prd_name = $row['prd_name'];
            $image = $row['image'];
            $price = $row['price'];
            $quantity = $row['quantity'];
            echo "
                   <tr>
                       <td><input type='text' name='prd_name' value='$prd_name'></td>
                       <td><img src='./img/$image'></td>
                       <td><input type='file' name='image' value='$image'></td>
                       <td><input type='text' name='price' value='$price'></td>
                       <td><input type='number' name='quantity' value='$quantity'/></td>
                       <input type='hidden' name='prd_id' value='$prd_id'>                  
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
        $prd_id = $_POST['prd_id'];
        $prd_name = $_POST['prd_name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $image = $_FILES['image']['name'];
        $sql = "UPDATE `products` SET prd_name='$prd_name', image='$image', price='$price', quantity='$quantity' where prd_id='$prd_id'";
        $result = mysqli_query($conn, $sql);
        echo $sql;
        if ($result) {
            echo "<script>alert('Đổi sản phẩm thành công')</script>";
            echo "<script>window.open('9-Admin_products.php','_self')</script>";
        }
    }

    ?>