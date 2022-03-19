<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bếp nhà Chaos</title>
    <link rel="stylesheet" href="1-style.css">
    <link rel="stylesheet" href="script_cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="./img/logoC.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Birthstone+Bounce:wght@500&family=Black+And+White+Picture&family=Bonheur+Royale&family=Carattere&family=Cherish&family=Fasthand&family=Fleur+De+Leah&family=Grey+Qo&family=Italianno&family=Pacifico&family=Playfair+Display:wght@800&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <?php
        require './Menu.php';
        ?>
        <div class="header-text">
            <h1>Bếp Nhà Chaos</h1>
        </div>
    </header>

    <!-- _____________________________________________________CONTAINER 1________________________________________________________________________ -->

    <div class="container">

        <!-- Khung tìm kiếm -->
        <div>
            <form action="./4-Search.php" method="post" class="header__search">
                <input type="text" name="prd_name" class="header__search-iput" placeholder="Tìm kiếm sản phẩm">
                <input style="display:none" ; type="submit" name="search" class="navbar__submit">
            </form>
        </div>
        <!-- --------- -->
        <div class="row row-cols-3">
            <div class="col-category">
                <p><i class="fas fa-leaf"></i><br>THỰC PHẨM ĐÓNG HỘP</p>
                <section id="hover">
                    <div id="column">
                        <figure>
                            <img src="img/Dohop.jpg">
                            <figcaption>
                                <h3>SALE OFF 20%</h3>
                                <p>Sưu tập bộ hũ đa năng</p>
                                <p>Vourcher 250.000₫</p>
                            </figcaption>
                        </figure>
                    </div>
                </section>
            </div>

            <div class="col-category">
                <p><i class="fas fa-leaf"></i><br>THỰC PHẨM TƯƠI</p>
                <section id="hover">
                    <div id="column">
                        <figure>
                            <img src="img/thucphamtuoi.jpg">
                            <figcaption>
                                <h3>RAU HỮU CƠ PGS</h3>
                                <p>Bảo vệ sức khỏe</p>
                                <p>An toàn thực phẩm</p>
                            </figcaption>
                        </figure>
                    </div>
                </section>
            </div>

            <div class="col-category ">
                <p><i class="fas fa-leaf"></i><br>THỰC PHẨM CHẾ BIẾN</p>
                <section id="hover">
                    <div id="column">
                        <figure>
                            <img src="img/thucphamchebien.jpg">
                            <figcaption>
                                <h3>VỆ SINH AN TOÀN</h3>
                                <p>Dinh dưỡng thiết yếu</p>
                                <p>Giảm giá đặc biệt</p>
                            </figcaption>
                        </figure>
                    </div>
                </section>
            </div>
        </div><br>
        <div>
            <embed type="image/jpg" src="img/pexels-photo-3434523.jpeg" width="100%">
        </div>
        <br>
    </div>
    <!-- ----------------------------------------------MENU------------------------------------------------------ -->

    <div class="contrainer-menu">
        <div id="menu">
            <ul>
                <li>
                    <i class="fas fa-truck-moving"></i>
                    <a href="#">Giao hàng nhanh</a>
                </li>
                <li>
                    <i class="fas fa-question"></i>
                    <a href="#">Hỗ trợ nhanh chóng</a>
                </li>
                <li>
                    <i class="far fa-comments"></i>
                    <a href="#">Tư vấn 24/7</a>
                </li>
                <li>
                    <i class="fas fa-stamp"></i>
                    <a href="#">Chứng nhận an toàn</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- --------------------------------------------- -->
    <div class="container">
        <div class="caption">
            <i class="fas fa-leaf"></i><br>SẢN PHẨM NỔI BẬT
        </div>

        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card ">
                    <div class="hover column">
                        <div>
                            <figure><img src="img/Dohop1.jpg" class="card-img-top" alt="Đồ hộp Mỹ"></figure>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">(COMBO) BOYARRDDE ĐỒ HỘP MỸ</h5>
                        <p><span class="price">95.000₫</span></p>
                        <i class="fas fa-info-circle"></i>
                        <a href="#" class="btn btn-warning" data-toggle="" data-target="">Xem chi tiết</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="hover column">
                        <div>
                            <figure><img src="img/raucudonghop.jpg" class="card-img-top" alt="Rau củ đóng hộp"></figure>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">(SẴN) RAU CỦ ĐÓNG HỘP</h5>
                        <p>
                            <strike>47.000₫</strike>
                            <span class="price">25.000₫</span>
                        </p>
                        <i class="fas fa-info-circle"></i>
                        <a href="#" class="btn btn-warning" data-toggle="" data-target="#myModal">Xem chi tiết</a>
                    </div>
                    <div class="cart-sale">♕ SALE</div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="hover column">
                        <div>
                            <figure><img src="img/raucusach.png" class="card-img-top" alt="Rau củ tươi"></figure>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">RAU CỦ SẠCH CHÍNH GỐC QUÊ TRỒNG</h5>
                        <p><span class="price">37.000₫</span></p>
                        <i class="fas fa-info-circle"></i>
                        <a href="#" class="btn btn-warning" data-toggle="" data-target="#myModal">Xem chi tiết</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="hover column">
                        <div>
                            <figure><img src="img/RauChanVit.jpeg" class="card-img-top" alt="Rau chân vịt"></figure>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">RAU CHÂN VỊT TRỒNG TRONG NHÀ KÍNH</h5>
                        <p><span class="price">15.000₫</span></p>
                        <i class="fas fa-info-circle"></i>
                        <a href="#" class="btn btn-warning" data-toggle="" data-target="#myModal">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- --------------------------------------------- -->
        <div class="caption">
            <i class="fas fa-leaf"></i><br>SẢN PHẨM
        </div>
        <div class='row row-cols-1 row-cols-md-4 g-4'>
            <?php
            require './database.php';
            $sql = "SELECT * FROM products";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $name = $row['prd_name'];
                $image = $row['image'];
                $price = $row['price'];
                echo "
                <div class='col'>
                    <div class='card '>
                        <div class='hover column'>
                            <div>
                                <figure><img src='./img/{$row['image']}'></figure>
                            </div>
                        </div>
                        <div class='card-body'>
                            <h5 class='card-title'> {$row['prd_name']} </h5>
                            <p><span class='price'> {$row['price']}₫ </span></p>
                            <i class='fas fa-info-circle'></i>
                            <a href='#' class='btn btn-warning' data-toggle='modal'>Xem chi tiết</a>
                        </div>
                    </div>
                    </div>";
            }
            ?>
        </div>
    </div>

    <!-- ---------------------------------FEEDBACK------------------------------------------------------- -->
    <div class="container-feedback">
        <div class="feedback">
            <div class="row feedback">
                <div class="col-12">
                    <h4>KHÁCH HÀNG NÓI GÌ VỀ CHÚNG TÔI</h4>
                    <p>Họ đã tin tưởng, cảm nhận và hài lòng</p>
                </div>
                <div class="col-4">
                    <div class="feeback-img">
                        <img src="img/ChanDung1.jpg">
                        <p>Chị Thu Quỳnh</p>
                    </div>
                    <div class="feedback-text">
                        <p>Tôi từng đi làm bận cả ngày vẫn phải chạy ra cửa hàng để mua đồ ăn cho gia đình,
                            nhưng khi gặp dịch vụ của CHAOS thì thấy việc đến tận nơi không còn cần thiết nữa. Các bạn
                            đã giúp tôi tiết kiệm được thời gian, công sức, chi phí đi lại.
                        </p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="feeback-img">
                        <img src="img/ChanDung2.jpg">
                        <p>Anh Cha Eun Woo</p>
                    </div>
                    <div class="feedback-text">
                        <p>Tôi là người Hàn nhưng tôi rất thích ẩm thực Việt Nam, ngay từ khi sang Việt Nam tôi đã
                            biết đến ChAOS vì dịch vụ quá ưng ý với tôi. Mỗi khi tới đất nước họ tôi rất nóng lòng đặt hàng nhanh chóng để thưởng thức.
                        </p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="feeback-img">
                        <img src="img/ChanDung3.jpg">
                        <p>Chị Nguyễn Thúy Hiền</p>
                    </div>
                    <div class="feedback-text">
                        <p>CHAOS làm việc rất chuyên nghiệp 24/24 ngay cả khi tôi làm việc tăng ca đến khuya cũng có thể đặt đồ ăn
                            ship tới tận nơi. Hơn nữa tôi được tặng rất nhiều vorcher từ cửa hàng, họ giúp tôi
                            tiết kiệm được thời gian và tiền bạc.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------------------------------------------------------------- -->

    <div class="container">
        <div class="caption">
            <i class="fas fa-leaf"></i><br>BÀI VIẾT - THỰC ĐƠN
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col ">
                <div class="posts">
                    <img src="img/ThucDon4mon.jpg" class="card-img-top">
                    <div class="post-body">
                        <p class="post-text">22/07/2021</p>
                        <h5 class="post-title">Thực đơn 4 món chỉ 95.000 đồng</h5>
                        <p class="post-text1">Nếu nhà bạn có 4 thành viên và luôn đau đầu vắt óc nghĩ món ngon mỗi ngày thì hãy thử áp dụng mâm cơm này nhé...</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="posts">
                    <img src="img/OcXaoTieuXanh.png" class="card-img-top">
                    <div class="post-body">
                        <p class="post-text">16/08/2021</p>
                        <h5 class="post-title">Ốc xào dứa tiêu chanh nổi tiếng</h5>
                        <p class="post-text1">Chaos như "thủ đô ẩm thực". Đó không phải là lời nói quá vì các món ăn đầy hấp dẫn lâfn lượt hiện ra trước mắt người xem...</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="posts">
                    <img src="img/KimChiMuoiOt.jpg" class="card-img-top">
                    <div class="post-body">
                        <p class="post-text">25/09/2021</p>
                        <h5 class="post-title">Chế biến món ngon với Kim chi</h5>
                        <p class="post-text1">Với kim chi, bạn có thể chế biến nhiều món ngon cho gia đình, cùng tham khảo cách làm các món ngon từ nguyên liệu này nhé...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- -----------------------------------------------MENU------------------------------------------------------------------------ -->

    <div class="contrainer-menu">
        <div id="menu">
            <ul>
                <li>
                    <i class="fas fa-info-circle"></i>
                    <a href="#">Hướng dẫn đặt hàng</a>
                </li>
                <li>
                    <i class="fas fa-exchange-alt"></i>
                    <a href="#">Hình thức đổi trả</a>
                </li>
                <li>
                    <i class="far fa-credit-card"></i>
                    <a href="#">Hình thức thanh toán</a>
                </li>
                <li>
                    <i class="fas fa-users"></i>
                    <a href="#">Hệ thống nhân sự</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ________________________________________________________________________FOOTER_____________________________________________________________________ -->
    <footer>
        <div class="footer">
            <div class="footer__container">
                <div class="footer__container-info">
                    <div class="footer__info-logo">
                        <img src="img/logo-chaos.png" style="width: 250px; height: 100px;">
                    </div>
                    <div class="footer__info-contact">
                        <div class="footer__info-mess">
                            <div class="footer__info-mess-logo">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Facebook_Messenger_logo_2020.svg/2048px-Facebook_Messenger_logo_2020.svg.png" style="width: 40px; height: 40px;">
                            </div>
                            <div class="footer__info-mess-title">
                                <div class="footer__info-mess-heading">Messenger</div>
                                <div class="footer__info-mess-contact">
                                    <a href="#" class="footer__info-mess-link">
                                        http://m.me/chaos
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="footer__info-phone">
                            <div class="footer__info-phone-logo">
                                <img src="http://simpleicon.com/wp-content/uploads/phone-symbol-1.png" style="width: 40px; height: 40px;">
                            </div>
                            <div class="footer__info-phone-title">
                                <div class="footer__info-phone-heading">Tổng đài</div>
                                <div class="footer__info-phone-contact">
                                    <a href="tel:0907 654 321" class="footer__info-phone-link">0907 654 321</a><br>
                                    <a href="tel:0903 456 789" class="footer__info-phone-link">0903 456 789</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="food__favourite">
                    <div class="footer__heading">
                        TOP ẨM THỰC
                    </div>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <a href="" class="footer__item-link">Thực phẩm đóng hộp</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__item-link">Thực phẩm chế biến</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__item-link">Thực phẩm tươi</a>
                        </li>
                    </ul>
                </div>

                <div class="kitchen__space">
                    <div class="footer__heading">
                        NỔI BẬT
                    </div>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <a href="" class="footer__item-link">Sản phẩm bán chạy</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__item-link">Thực phẩm tươi</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__item-link">Thực phẩm chế biến</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__item-link">Khéo tay hay làm</a>
                        </li>
                    </ul>
                </div>

                <div class="about__us">
                    <div class="footer__heading">
                        VỀ CHÚNG TÔI
                    </div>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <a href="" class="footer__item-link">Blog</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__item-link">Điều khoản hoạt động</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__item-link">info@bepnhachaos.com</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__item-link">Tạp chí bếp nhà Chaos</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__download">
                    <div class="footer__heading">
                        TẢI ỨNG DỤNG BẾP NHÀ CHAOS
                    </div>
                    <div class="footer__download-app">
                        <div class="footer__download-app-qr">
                            <img src="img/CHAOS-QRCODE.png" alt="" class="footer__download-app-qr-img" style="width: 100px; height: 100px;">
                        </div>
                        <div class="footer__download-app-container">
                            <a href="#" class="footer__download-app-link">
                                <img src="https://binvan789.github.io/luxstay/assets/img/apple-store.svg" class="footer__download-app-img" style="width: 92 px; height: 30px;">
                            </a>
                            <a href="#" class="footer__download-app-link">
                                <img src="https://binvan789.github.io/luxstay/assets/img/google-play.svg" class="footer__download-app-img" style="width: 92 px; height: 30px;">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="transaction">
                    <div class="footer__heading">
                        SECURE YOUR TRANSACTION
                    </div>
                    <ul class="footer__transaction-list">
                        <li class="footer__transaction-item">
                            <img src="https://binvan789.github.io/luxstay/assets/img/visa.svg" alt="VISA CARD" class="footer__transaction-img">
                        </li>
                        <li class="footer__transaction-item">
                            <img src="https://binvan789.github.io/luxstay/assets/img/mastercard.svg" alt="MASTER CARD" class="footer__transaction-img">
                        </li>
                        <li class="footer__transaction-item">
                            <img src="https://binvan789.github.io/luxstay/assets/img/maestro.svg" alt="MAESTRO CARD" class="footer__transaction-img">
                        </li>
                    </ul>
                </div>

                <div class="follow__social">
                    <div class="footer__heading">
                        FOLLOW US
                    </div>
                    <div class="follow__us">
                        <ul class="follow-list">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__bottom-container">
                    <center>
                        <p class="footer__bottom-cpr">© 2021 CHAOS. Bản quyền thuộc về Team CHAOS.</p>
                    </center>
                </div>
            </div>
        </div>
    </footer>

    <!-- ---------------------------------------------------------The Modal--------------------------------------------------------------- -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-body">
                <i class="fas fa-check-circle"></i><br>
                <p>Sản phẩm đã được Xem chi tiết</p>
            </div>
        </div>
    </div>
    <!------------------------------------------ CART -->
    <div class="modal fade" id="myCart">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal header giỏ hàng -->
                <div class="modal-header">
                    <i class="fas fa-info-circle"></i>
                    <h4 class="modal-title">GIỎ HÀNG</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <!-- Modal body sản phẩm -->
                <div class="modal-body">
                    <div class="cart-row">
                        <span class="cart-item cart-header cart-column">Sản Phẩm</span>
                        <span class="cart-price cart-header cart-column">Giá</span>
                        <span class="cart-quantity cart-header cart-column">Số Lượng</span>
                    </div>
                    <div class="cart-items">
                        <div class="cart-row">
                            <div class="cart-item cart-column">
                                <img class="cart-item-image" src="img/CaChuaSach.jpeg">
                                <span class="cart-item-title">Cà chua giống Mỹ (Tặng kèm 3 túi hạt gieo)</span>
                            </div>
                            <span class="cart-price cart-column">40.000đ</span>
                            <div class="cart-quantity cart-column">
                                <input class="cart-quantity-input" type="number" value="1">
                                <button class="btn btn-danger" type="button">Xóa</button>
                            </div>
                        </div>
                        <div class="cart-row">
                            <div class="cart-item cart-column">
                                <img class="cart-item-image" src="img/Kimbap.jpeg">
                                <span class="cart-item-title">Kimbap cuộn</span>
                            </div>
                            <span class="cart-price cart-column">60.000đ</span>
                            <div class="cart-quantity cart-column">
                                <input class="cart-quantity-input" type="number" value="2">
                                <button class="btn btn-danger" type="button">Xóa</button>
                            </div>
                        </div>
                        <div class="cart-row">
                            <div class="cart-item cart-column">
                                <img class="cart-item-image" src="img/My_Y.jpeg">
                                <span class="cart-item-title">Mỳ Ý kèm salad</span>
                            </div>
                            <span class="cart-price cart-column">80.000đ</span>
                            <div class="cart-quantity cart-column">
                                <input class="cart-quantity-input" type="number" value="1">
                                <button class="btn btn-danger" type="button">Xóa</button>
                            </div>
                        </div>
                        <div class="cart-total">
                            <strong class="cart-total-title">Tổng Cộng:</strong>
                            <span class="cart-total-price">280.000 VNĐ</span>
                        </div>
                    </div>
                    <!-- Modal footer thanh toán -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Thanh toán</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

</body>

</html>