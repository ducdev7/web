<?php
require './23-Admin_header.php';
?>
<?php
require './24-Admin_nav.php';
?>
<style>

</style>
<div class="container" style="align-items: inherit;">
    <div class="title">
        Tìm kiếm món ăn
    </div>
        <form method="post" action="" name="register" style="width:90%;">
            <div class="card-body">
                <table>
                    <tr>
                        <th style="border:none;">Món ăn: <input type="text" name="prd_name" placeholder="Tìm theo ID hoặc Tên món"/></th>
                        <th style="border:none;"><input style="display:none;" type="submit" name="search" value="Search" /></th>
                    </tr>
                </table>
            </div>
            <?php
            require 'database.php';
            if (isset($_POST['search'])) {
                $prd_name = $_POST['prd_name'];
                mysqli_set_charset($conn, 'UTF8');
                $sql = "SELECT * FROM  products WHERE prd_id LIKE '$prd_name' or prd_name LIKE '%$prd_name%' ";
                // chạy truy vấn và lưu trữ kq vào một biến
                $result = $conn->query($sql);
                if ($result->num_rows > 0) { // kiểm tra có kq trả về   
                    echo '<div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Tên món</th>
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Danh mục</th>
                                    <th>Phân loại</th>
                                    
                                </tr>
                            </thead>';
                    while ($row = $result->fetch_assoc()) { // cú pháp đọc từng row của kết quả trả về      
                        $classify_id = $row['classify_id'];
                        $prd_id = $row['prd_id'];
                        $category_id = $row['category_id'];
                        $classify_id = $row['classify_id'];
                        $sql_2="SELECT * FROM category where category_id=$category_id";
                        $res_2 = mysqli_query($conn, $sql_2);
                        $row_2 = mysqli_fetch_array($res_2);
                        $sql_3="SELECT * FROM classify where classify_id=$classify_id";
                        $res_3 = mysqli_query($conn, $sql_3);
                        $row_3 = mysqli_fetch_array($res_3);
                        $category_name = $row_2['category_name'];
                        $classify_name = $row_3['classify_name'];
                        echo "<tbody>
                        <tr>
                            <td> {$prd_id} </td>
                            <td> {$row['prd_name']} </td>
                            <td> <img style='width: 100px; height: 70px', src='./img/{$row['image']}'></td>
                            <td> {$row['price']} </td>
                            <td> {$row['quantity']} </td>
                            <td> {$row_2['category_name']} </td>
                            <td> {$row_3['classify_name']} </td>
                        </tr>
                    </tbody>";
                    }
                } else {
                    echo "Không có dữ liệu";
                }
            }
            ?>
            <?php
            require './25-Admin_footer.php';
            ?>
    </div>
    </form>
</div>