<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài viết - Thực đơn</title>
    <link rel="stylesheet" href="3-styleArticle.css">
    <link rel="shortcut icon" href="./img/logoC.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Birthstone+Bounce:wght@500&family=Black+And+White+Picture&family=Bonheur+Royale&family=Carattere&family=Cherish&family=Fasthand&family=Fleur+De+Leah&family=Grey+Qo&family=Italianno&family=Pacifico&family=Playfair+Display:wght@800&display=swap">
</head>

<body>
    <header>
        <?php
        require './Menu.php';
        ?>
        <div class="header-text">
            <h1>Bài viết - Thực Đơn</h1>
        </div>
    </header>
    <!-- _____________________________________________CONTAINER_______________________________________ -->

    <div class="container">
        <div class="container-article">
            <h2>CHAOS VÀ NHỮNG ĐIỀU BẠN NÊN BIẾT</h2>
        </div>
        <div class="card mb-3">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/LauSung.jpg" class="img-fluid" alt="Lẩu Súng">
                </div>
                <div class="col-md-8">
                    <div class="article-body">
                        <h5 class="article-title">Top món ăn nổi tiếng của "Bếp nhà Chaos"</h5>
                        <p class="article-text">Trong số những món ngon của Chaos không thể không kể đến món lẩu súng dân dã.
                            Món ăn này có cách nấu rất đặc biệt, không như các món lẩu truyền thống khác.
                            Thưởng thức món "lẩu súng nhà Chaos", bạn sẽ cảm nhận được vị chua nhẹ của me,
                            mùi thơm do sả, vị ngọt bùi của cá tươi và những cọng bông súng giòn tan ngon khó cưỡng.</p>
                        <p class="card-text"><small class="text-muted">11/08/2020</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/PhaLau1.jpg" class="img-fluid" alt="Phá Lấu khô">
                </div>
                <div class="col-md-8">
                    <div class="article-body">
                        <h5 class="article-title">Ăn gì cũng ngon</h5>
                        <p class="article-text">Ngoài các món phá lấu nước, bạn có thể đổi vị với phá lấu khô, phá lấu xào cải,
                            phá lấu xào cà chua. Các món ăn ở đây được chế biến theo kiểu gốc Trung Quốc, gồm lòng,
                            tai, dạ dày, tim lợn, chấm với hắc xì dầu (xì dầu đen). Bạn có thể chọn cơm phá lấu,
                            giá 65.000 đồng. Các món gợi ý khác ở quán là cơm chiên Dương Châu, cơm bò lúc lắc, mì xào hải sản.
                            Giá trung bình các món 60.000 – 70.000 đồng.</p>
                        <p class="card-text"><small class="text-muted">02/07/2021</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/CaKhoNghe.jpg" class="img-fluid" alt="Cá kho nghệ">
                </div>
                <div class="col-md-8">
                    <div class="article-body">
                        <h5 class="article-title">Chaos chia sẻ bí kíp nấu món cá lóc kho nghệ đưa cơm tại nhà</h5>
                        <p class="article-text">
                        <p>- Cá lóc mua về đem làm sạch, dùng rượu gạo chà xát lên thân cá, làm sạch tất cả phần nhớt của cá lóc. Rửa cá cho
                            thật sạch nhiều lần với vòi nước. Cắt cá thành các lát vừa ăn rồi cho vào tô.</p>
                        <p>- Gừng, nghệ tươi cạo sạch vỏ, rửa sạch và cắt thành miếng.</p>
                        <p>- Hành khô lột vỏ, băm và đập dập.</p>
                        <p>- Dùng một cái cối to, giã, nghệ, gừng, ớt chung với nhau rồi ướp chung với cá.</p>
                        </p>
                        <p class="card-text"><small class="text-muted">11/08/2021</small></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ----------------------------------------------- -->
        <div class="container-menu">
            <h2>THỰC ĐƠN HÀNG NGÀY</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="card-menu">
                <img class="card-img-top" src="img/Sandwich.jpeg">
                <div class="menu-body">
                    <h4 class="menu-title">Bữa sáng ăn gì?</h4>
                    <p class="menu-text">Sandwich trứng là lựa chọn thích hợp dành cho bạn...</p>
                    <a href="#" class="btn btn-warning">Xem ngay</a>
                </div>
            </div>

            <div class="card-menu">
                <img class="card-img-top" src="img/BuaTrua.jpg">
                <div class="menu-body">
                    <h4 class="menu-title">Thực đơn bữa trưa</h4>
                    <p class="menu-text">Nếu bạn thích cầu kỳ hơn có thể tham khảo thực đơn sau nhé...</p>
                    <a href="#" class="btn btn-warning">Xem ngay</a>
                </div>
            </div>

            <div class="card-menu">
                <img class="card-img-top" src="img/NguCoc.jpeg">
                <div class="menu-body">
                    <h4 class="menu-title">Ăn nhẹ bữa chiều</h4>
                    <p class="menu-text">Để bữa chiều đảm bảo sức khỏe, dễ tiêu hóa nên ăn ngũ cốc và chuối...</p>
                    <a href="#" class="btn btn-warning">Xem ngay</a>
                </div>
            </div>

            <div class="card-menu">
                <img class="card-img-top" src="img/BuaToi.jpg">
                <div class="menu-body">
                    <h4 class="menu-title">Thực đơn bữa tối</h4>
                    <p class="menu-text">Buổi tối nên ăn nhiều rau xanh và trái cây, rất giàu vitamin và chất xơ...</p>
                    <a href="#" class="btn btn-warning">Xem ngay</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- ____________________________________________________FOOTER__________________________________________________________________________ -->

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
</body>

</html>