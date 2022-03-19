<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Search</title>
    <link rel="stylesheet" href="1-style.css">
    <link rel="shortcut icon" href="./img/logoC.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Birthstone+Bounce:wght@500&family=Black+And+White+Picture&family=Bonheur+Royale&family=Carattere&family=Cherish&family=Fasthand&family=Fleur+De+Leah&family=Grey+Qo&family=Italianno&family=Pacifico&family=Playfair+Display:wght@800&display=swap">

</head>

<body>
    <header>
        <?php
        require './Menu.php';
        ?>
        <div class="header-text">
            <h1>Tìm kiếm</h1>
        </div>
    </header>
    <?php
    
    require 'database.php';
    if (isset($_POST['search'])) {
        $prd_name = $_POST['prd_name'];
        mysqli_set_charset($conn, 'UTF8');
        $sql = "SELECT * FROM  products WHERE prd_id like '$prd_name' or prd_name LIKE '%$prd_name%' ";
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
                                </tr>
                            </thead>';
            // echo "<a href='List_products.php'>Về trang chủ</a>";
            while ($row = $result->fetch_assoc()) { // cú pháp đọc từng row của kết quả trả về      
                $classify_id = $row['classify_id'];
                $prd_id = $row['prd_id'];
                $sql2 = "SELECT * FROM  classify WHERE classify_id='$classify_id'";
                $result2 = mysqli_query($conn, $sql2);
                $row2 = $result2->fetch_assoc();
                echo "<tbody>
                        <tr>
                            <td> {$prd_id} </td>
                            <td> {$row['prd_name']} </td>
                            <td> <img style='width: 100px; height: 70px', src='./img/{$row['image']}'></td>
                            <td> {$row['price']}₫ </td>
                            <td> {$row['quantity']} </td>
                            <td> {$row2['classify_name']} </td>
                        </tr>
                    </tbody>";
            }
        } else {
            echo "Không có dữ liệu";
        }
    }
    ?>

</body>

</html>