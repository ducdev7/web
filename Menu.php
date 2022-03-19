<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/18-Admin_css.css">
  <title>HOME</title>
</head>

<body>
  <input type="checkbox" id="click">
  <div class="menu-icon">
    <div class="menu-line">
    </div>
  </div>
  <nav class="menu-item">
    <li>
      <?php
      session_start();
      if (isset($_SESSION['userId'])) {
        $user = $_SESSION['userId'];
        echo "<a style='text-transform: uppercase; color:#FBBC01'> $user </a><br>
        <a href='Logout.php'>ĐĂNG XUẤT</a>";
      } else {
        echo "<a href='Login.php'>ĐĂNG NHẬP</a><br>
        <a href='./Register.php'>ĐĂNG KÝ</a>";
      }
      ?>
    </li>
    <li>
      <?php
      if (isset($_SESSION['userId']) && $_SESSION['userId'] == 'admin') {
        echo "<a href='18-Admin_index.php'>BẢNG ĐIỀU KHIỂN</a>";
      }
      ?>
    </li>
    <li><a href="1-ChaoS.php">TRANG CHỦ</a></li>
    <li><a href="2-cuisine.php">ẨM THỰC CHAOS</a></li>
    <li><a href="3-article.php">BÀI VIẾT - THỰC ĐƠN</a></li>
  </nav>
</body>

</html>