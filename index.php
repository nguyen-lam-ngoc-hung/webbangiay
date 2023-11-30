<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Quản lý bán giày tại Nông Trang- Việt trì</title>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <div class="app">
        <header id="header">
        <!-- header top -->
        <div class="header__top">
            <div class="container">
                <section class="row flex">
                    <div class="col-lg-5 col-md-0 col-sm-0 heade__top-left">
                        <span>Quản lý bán giày tại Nông Trang- Việt trì</span>
                    </div>

                    <nav class="col-lg-7 col-md-0 col-sm-0 header__top-right">
                        <ul class="header__top-list">
                            <li class="header__top-item">
                                <a href="#" class="header__top-link">

                                Hỏi- đáp</a>
                            </li>
                            <li class="header__top-item">
                                <a href="#" class="header__top-link">Hướng dẫn</a>
                            </li>
                            <li class="header__top-item">
                                <a href="dangky.php" class="header__top-link">Đăng ký</a>
                            </li>
                            <li class="header__top-item">
                                <a href="dangnhap.php" class="header__top-link">Đăng nhập</a>
                            </li>
                        </ul>
                    </nav>
                </section>
            </div>
        </div>
        <!--end header top -->

        <!-- header bottom -->
        <div class="header__bottom">
            <div class="container">
                <section class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 header__logo">
                        <h1 class="header__heading">
                            <a href="#" class="header__logo-link">
                                <img src="images1/product/logo3.jpg" alt="Logo" class="header__logo-img">
                            </a>
                        </h1>
                    </div>

                    <div class="col-lg-6 col-md-7 col-sm-0 header__search">
                       
                        <input type="text" class="header__search-input" placeholder="Tìm kiếm tại đây...">
                        <button class="header__search-btn">
                            <div class="header__search-icon-wrap">
                                <i class="fas fa-search header__search-icon">🔎</i>
                            </div>
                        </button>
                    </div>

                    <div class="col-lg-2 col-md-0 col-sm-0 header__call">
                        <div class="header__call-icon-wrap">
                            <i class="fas fa-phone-alt header__call-icon"></i>  
                        </div>
                        <div class="header__call-info">
                            <div class="header__call-text">
                                Gọi điện tư vấn
                            </div>
                            <div class="header__call-number">
                                0912345678
                            </div>
                        </div>
                    </div>

                    
                </section>
            </div>   
        </div>
        <!--end header bottom -->

        <!-- header nav -->
        <div class="header__nav">
            <div class="container">
                <section class="row">
                    <div class="header__nav-menu-wrap col-lg-3 col-md-0 col-sm-0">
                        <i class="fas fa-bars header__nav-menu-icon"></i>
                        <div class="header__nav-menu-title">Danh mục sản phẩm</div>
                    </div>

                    <div class="header__nav col-lg-9 col-md-0 col-sm-0">
                        <ul class="header__nav-list">
                            <li class="header__nav-item">
                                <a href="index.php" class="header__nav-link">Trang chủ</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="DMSP.html" class="header__nav-link">Danh mục sản phẩm</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="SP.html" class="header__nav-link">Sản phẩm</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="BV.html" class="header__nav-link">Bài viết</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="LH.html" class="header__nav-link">Liên hệ</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="GH.html" class="header__nav-link">Giỏ hàng</a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </header>
    <!--end header nav -->

    <!-- slide - menu list -->
    <section class="menu-slide">
        <div class="container">
            <div class="row">
                <nav class="menu__nav col-lg-3 col-md-12 col-sm-0">
                    <ul class="menu__list">
                        <li class="menu__item menu__item--active">
                            <a href="#" class="menu__link">
                            
                           Giày nike</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">
                           
                           Giày adidas</a>
                        </li>
                      
                        <li class="menu__item">
                            <a href="#" class="menu__link">
                                

                          Giày da</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">
                                

                            Giày converse</a>
                        </li>

                        <li class="menu__item">
                            <a href="#" class="menu__link">
                               

                            Giày grandcourt</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">
                                
                            Giày thể thao(giày đinh- đá bóng)</a>
                        </li>
                    </ul>
                </nav>

                <div class="slider col-lg-9 col-md-12 col-sm-0">
                    <div class="row">
                        <div class="slide__left col-lg-8 col-md-0 col-sm-0">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                               
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="slide__left-bottom">
                                <div class="slide__left-botom-one">
                                    <img src="images1/product/puma-trang-den-01.jpg" class="slide__left-bottom-one-img">
                                </div>
                                <div class="slide__left-bottom-two">
                                    <img src="images1/product/giày_nike_cao.webp" class="slide__left-bottom-tow-img">
                                </div>
                            </div>
                        </div>

                        <div class="slide__right col-lg-4 col-md-0 col-sm-0">
                            <img src="images1/product/giay-puma-caven-nam-trang-03-1000x1000.jpg" class="slide__right-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end slide menu list -->
<!-- score-top-->

<button onclick="topFunction()" id="myBtn-scroll" title="Go to top"><i class="fas fa-chevron-up"></i></i></button>
    <!-- bestselling product -->
    <section class="bestselling">
        <div class="container">
            <div class="row">
                <div class="bestselling__heading-wrap">
                    <img src="images/bestselling.png" alt="Sản phẩm bán chạy"
                    class="bestselling__heading-img">
                    <div class="bestselling__heading">Top bán chạy</div>
                </div>
            </div>

            <section class="row">
                <div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                    <div class="bestselling__product-img-box">
                        <img src="images1/product/giày_nike_cao.webp" alt="giay nike cao" class="bestselling__product-img">
                    </div>
                    <div class="bestselling__product-text">
                        <h3 class="bestselling__product-title">
                            <a href="#" class="bestselling__product-link">Giày nike cổ cao</a>
                        </h3>

                        <div class="bestselling__product-rate-wrap">
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                        </div>

                        <span class="bestselling__product-price">
                            3.147.000đ
                        </span>

                        <div class="bestselling__product-btn-wrap">
                            <button class="bestselling__product-btn">Mua ngay</button>
                        </div>
                    </div>
                </div>
                <div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                    <div class="bestselling__product-img-box">
                        <img src="images1/product/puma-trang-den-01.jpg" alt="puma trang den" class="bestselling__product-img">
                    </div>
                    <div class="bestselling__product-text">
                        <h3 class="bestselling__product-title">
                            <a href="#" class="bestselling__product-link">Giày puma</a>
                        </h3>

                        <div class="bestselling__product-rate-wrap">
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                        </div>

                        <span class="bestselling__product-price">
                            2.219.000đ
                        </span>

                        <div class="bestselling__product-btn-wrap">
                            <button class="bestselling__product-btn">Mua ngay</button>
                        </div>
                    </div>
                </div>
                <div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                    <div class="bestselling__product-img-box">
                        <img src="images1/product/giay_vans.jpg" alt="giay vans" class="bestselling__product-img">
                    </div>
                    <div class="bestselling__product-text">
                        <h3 class="bestselling__product-title">
                            <a href="#" class="bestselling__product-link">Giày vans</a>
                        </h3>

                        <div class="bestselling__product-rate-wrap">
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                        </div>

                        <span class="bestselling__product-price">
                            2.169.000đ
                        </span>

                        <div class="bestselling__product-btn-wrap">
                            <button class="bestselling__product-btn">Mua ngay</button>
                        </div>
                    </div>
                </div>
                <div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                    <div class="bestselling__product-img-box">
                        <img src="images1/product/giày sneaker.webp" alt="giay sneaker" class="bestselling__product-img">
                    </div>
                    <div class="bestselling__product-text">
                        <h3 class="bestselling__product-title">
                            <a href="#" class="bestselling__product-link">Giày sneaker</a>
                        </h3>

                        <div class="bestselling__product-rate-wrap">
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                        </div>

                        <span class="bestselling__product-price">
                            2.179.000đ
                        </span>

                        <div class="bestselling__product-btn-wrap">
                            <button class="bestselling__product-btn">Mua ngay</button>
                        </div>
                    </div>
                </div>
                <div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                    <div class="bestselling__product-img-box">
                        <img src="images1/product/th (5).jpg" alt="nike jordan " class="bestselling__product-img">
                    </div>
                    <div class="bestselling__product-text">
                        <h3 class="bestselling__product-title">
                            <a href="#" class="bestselling__product-link">Giày nike air jordan(trắng) </a>
                        </h3>

                        <div class="bestselling__product-rate-wrap">
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                        </div>

                        <span class="bestselling__product-price">
                            2.880.000đ
                        </span>

                        <div class="bestselling__product-btn-wrap">
                            <button class="bestselling__product-btn">Mua ngay</button>
                        </div>
                    </div>
                </div>
                <div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                    <div class="bestselling__product-img-box">
                        <img src="images1/product/giay da 7.jpg" alt="giay da" class="bestselling__product-img">
                    </div>
                    <div class="bestselling__product-text">
                        <h3 class="bestselling__product-title">
                            <a href="#" class="bestselling__product-link">Giày da cổ cao</a>
                        </h3>

                        <div class="bestselling__product-rate-wrap">
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                        </div>

                        <span class="bestselling__product-price">
                            1.919.999đ
                        </span>

                        <div class="bestselling__product-btn-wrap">
                            <button class="bestselling__product-btn">Mua ngay</button>
                        </div>
                    </div>
                </div>
            </section>

            
        </div>
    </section>

    <!-- end bestselling product -->

    <!-- product -->
    <section class="product">
        <div class="container">
            <div class="row">
                <aside class="product__sidebar col-lg-3 col-md-0 col-sm-12">
                    <div class="product__sidebar-heading">
                        <div class=""></div>
                        <h2 class="product__sidebar-title">
                        Giày được yêu thích</h2>
                    </div>

                    <nav class="product__sidebar-list">

                        <div class="row">
                            <div class="product__sidebar-item col-lg-6">
                                <img src="images1/product/converse.jpg" alt="" class="product__sidebar-item-img">
                                <a href="" class="product__sidebar-item-name">converse</a>
                            </div>
                            <div class="product__sidebar-item col-lg-6">
                                <img src="images1/product/adidas-stan-smith-nam-nu-hot-hien-nay.jpg" class="product__sidebar-item-img">
                                <a href="" class="product__sidebar-item-name">adidas stan mid</a>
                            </div>
                            <div class="product__sidebar-item col-lg-6">
                                <img src="images1/product/giay da 7.jpg" alt="" class="product__sidebar-item-img">
                                <a href="" class="product__sidebar-item-name">da cao cổ</a>
                            </div>
                            <div class="product__sidebar-item col-lg-6">
                                <img src="images1/product/puma-trang-den-01.jpg" alt="" class="product__sidebar-item-img">
                                <a href="" class="product__sidebar-item-name">puma trắng</a>
                            </div>
                        </div>
                    </nav>

                    <div class="product__sidebar-img-wrap">
                        <img src="images1/product/giày_nike_cao.webp" width="255" height="350" alt="">
                    </div>
                </aside>

                <article class="product__content col-lg-9 col-md-12 col-sm-12">
                    <nav class="row">
                        <ul class="product__list hide-on-mobile">
                            <li class="product__item product__item--active">
                                <a href="#" class="product__link">Giày nike</a>
                            </li>
                            <li class="product__item">
                                <a href="#" class="product__link">Giày adidas</a>
                            </li>
                            <li class="product__item">
                                <a href="#" class="product__link">Giày puma</a>
                            </li>
                            <li class="product__item">
                                <a href="#" class="product__link">Giày converse</a>
                            </li>
                            <li class="product__item">
                                <a href="#" class="product__link">Giày da</a>
                            </li>
                           
                            <li class="product__item">
                                <a href="#" class="product__link">Giày grandcourt</a>
                            </li>
                        </ul>

                        <div class="product__title-mobile">
                            <h2>Giày nike</h2>
                        </div>
                    </nav>

                    <div class="row product__panel">

                        <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                            <div class="product__panel-item-wrap">
                                <div class="product__panel-img-wrap">
                                    <img src="images1/product/giay-nike-dior-dep-hot-hien-nay.jpg" alt="" class="product__panel-img">
                                </div>
                                <h3 class="product__panel-heading">
                                    <a href="product.html" class="product__panel-link">Giày nike dior</a>
                                </h3>
                                <div class="product__panel-rate-wrap">
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                </div>

                                <div class="product__panel-price">
                                    <span class="product__panel-price-old">
                                        2.920.000đ
                                    </span>
                                    <span class="product__panel-price-current">
                                        2.219.580đ
                                    </span>
                                </div>

                                <div class="product__panel-price-sale-off">
                                    -11%
                                </div>
                            </div>
                        </div>
                        <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                            <div class="product__panel-item-wrap">
                                <div class="product__panel-img-wrap">
                                    <img src="images1/product/converse-twisted-classics-mood-1-600x400.jpg" alt="" class="product__panel-img">
                                </div>
                                <h3 class="product__panel-heading">
                                    <a href="#" class="product__panel-link">Giày converse</a>
                                </h3>
                                <div class="product__panel-rate-wrap">
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                </div>

                                <div class="product__panel-price">
                                    <span class="product__panel-price-old">
                                        1.928.000đ
                                    </span>
                                    <span class="product__panel-price-current">
                                        1.522.400đ
                                    </span>
                                </div>
                                <div class="product__panel-price-sale-off">
                                    -20%
                                </div>
                            </div>
                            
                        </div>
                        <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                            <div class="product__panel-item-wrap">
                                <div class="product__panel-img-wrap">
                                    <img src="images1/product/giay-puma-caven-nam-trang-03-1000x1000.jpg" alt="" class="product__panel-img">
                                </div>
                                <h3 class="product__panel-heading">
                                    <a href="#" class="product__panel-link">Giày puma caven(nam)</a>
                                </h3>
                                <div class="product__panel-rate-wrap">
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                </div>

                                <div class="product__panel-price">
                                    <span class="product__panel-price-old">
                                        2.219.500đ
                                    </span>
                                    <span class="product__panel-price-current">
                                        1.916.575đ
                                    </span>
                                </div>
                                <div class="product__panel-price-sale-off">
                                    -15%
                                </div>
                            </div>
                            
                        </div>
                        <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                            <div class="product__panel-item-wrap">
                                <div class="product__panel-img-wrap">
                                    <img src="images1/product/grand court 1.webp" alt="" class="product__panel-img">
                                </div>
                                <h3 class="product__panel-heading">
                                    <a href="#" class="product__panel-link">Giày gradcourt</a>
                                </h3>
                                <div class="product__panel-rate-wrap">
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                </div>

                                <div class="product__panel-price">
                                    <span class="product__panel-price-old">
                                         2.830.000đ
                                    </span>
                                    <span class="product__panel-price-current">
                                        1.921.000đ
                                    </span>
                                </div>

                                <div class="product__panel-price-sale-off">
                                    -30%
                                </div>
                            </div>
                            

                        </div>

                        <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                            <div class="product__panel-item-wrap">
                                <div class="product__panel-img-wrap">
                                    <img src="images1/product/14055ca7-cd2e-4de9-b967-b5bfe073c39d.webp" alt="" class="product__panel-img">
                                </div>
                                <h3 class="product__panel-heading">
                                    <a href="#" class="product__panel-link">Puma (trắng- đỏ)</a>
                                </h3>
                                <div class="product__panel-rate-wrap">
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                </div>

                                <div class="product__panel-price">
                                    <span class="product__panel-price-current">
                                        1.925.000đ
                                    </span>
                                </div>
                            </div>
                            

                        </div>

                        <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                            <div class="product__panel-item-wrap">
                                <div class="product__panel-img-wrap">
                                    <img src="images1/product/giay-nike-air-jordan-1-sieu-dep-ca-tinh-cho-nam-nu.jpg" alt="" class="product__panel-img" >
                                </div>
                                <h3 class="product__panel-heading">
                                    <a href="#" class="product__panel-link">Giày nike air jordan</a>
                                </h3>
                                <div class="product__panel-rate-wrap">
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                </div>

                                <div class="product__panel-price">
                                    <span class="product__panel-price-current">
                                       2.920.000đ
                                    </span>
                                </div>
                            </div>
                            
                        </div>

                        <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                            <div class="product__panel-item-wrap">
                                <div class="product__panel-img-wrap">
                                    <img src="images1/product/th (5).jpg" alt="" class="product__panel-img">
                                </div>
                                <h3 class="product__panel-heading">
                                    <a href="#" class="product__panel-link">Giày nike air (trắng)</a>
                                </h3>
                                <div class="product__panel-rate-wrap">
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                </div>

                                <div class="product__panel-price">
                                    <span class="product__panel-price-current">
                                        2.990.000đ
                                    </span>
                                </div>
                            </div>
                            

                        </div>

                        <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                            <div class="product__panel-item-wrap">
                               <div class="product__panel-img-wrap">
                                    <img src="images1/product/giay-nike-af1-mid-dep-cho-nam-nu.jpg" alt="" class="product__panel-img">
                                </div>
                                <h3 class="product__panel-heading">
                                    <a href="#" class="product__panel-link">Giày nike af1 mid(nam- nữ)</a>
                                </h3>
                                <div class="product__panel-rate-wrap">
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                </div>

                                <div class="product__panel-price">
                                    <span class="product__panel-price-current">
                                        1.929.999đ
                                    </span>
                                </div> 
                            </div>

                        </div>

                        

                </article>
            </div>
        </div>
    </section>
    <!--end product -->

    <!-- product love -->
    <section class="product__love">
        <div class="container">
            <div class="row bg-white">
                <div class="col-lg-12 col-md-12 col-sm-12 product__love-title">
                    <h2 class="product__love-heading">
                        Một số loại giày da 
                    </h2>
                </div>
            </div>
            <div class="row bg-white">
                <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                    <div class="product__panel-img-wrap">
                        <img src="images1/product/giay da 1.jpg" alt="" class="product__panel-img">
                    </div>
                    <h3 class="product__panel-heading">
                        <a href="#" class="product__panel-link">Giày da</a>
                    </h3>
                    <div class="product__panel-rate-wrap">
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                    </div>

                    <div class="product__panel-price">
                        <span class="product__panel-price-old product__panel-price-old-hide">
                            1.880.000đ
                        </span>
                        <span class="product__panel-price-current">
                            1.669.000đ
                        </span>
                    </div>  
                </div>

                <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                    <div class="product__panel-img-wrap">
                        <img src="images1/product/giay da 3.jpg" alt="" class="product__panel-img">
                    </div>
                    <h3 class="product__panel-heading">
                        <a href="#" class="product__panel-link">Giày da</a>
                    </h3>
                    <div class="product__panel-rate-wrap">
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                    </div>

                    <div class="product__panel-price">
                        <span class="product__panel-price-old product__panel-price-old-hide">
                            2.149.000đ
                        </span>
                        <span class="product__panel-price-current">
                            1.434.300đ
                        </span>
                    </div> 
                </div>

                <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                    <div class="product__panel-img-wrap">
                        <img src="images1/product/giay da 5.jpg" alt="" class="product__panel-img">
                    </div>
                    <h3 class="product__panel-heading">
                        <a href="#" class="product__panel-link">Giày da</a>
                    </h3>
                    <div class="product__panel-rate-wrap">
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                    </div>

                    <div class="product__panel-price">
                        <span class="product__panel-price-old product__panel-price-old-hide 
                        ">
                            2.109.000đ
                        </span>
                        <span class="product__panel-price-current">
                            1.770.000đ
                        </span>
                    </div>
                </div>
                <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                    <div class="product__panel-img-wrap">
                        <img src="images1/product/giay da 8.jpg" alt="" class="product__panel-img">
                    </div>
                    <h3 class="product__panel-heading">
                        <a href="#" class="product__panel-link">Giày da LV</a>
                    </h3>
                    <div class="product__panel-rate-wrap">
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                    </div>

                    <div class="product__panel-price">
                        <span class="product__panel-price-old product__panel-price-old-hide">
                            2.150.000đ
                        </span>
                        <span class="product__panel-price-current">
                            1.912.500đ
                        </span>
                    </div> 
                </div>

                <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                    <div class="product__panel-img-wrap">
                        <img src="images1/product/giay da 2.jpg" alt="" class="product__panel-img" >
                    </div>
                    <h3 class="product__panel-heading">
                        <a href="#" class="product__panel-link">Giày da</a>
                    </h3>
                    <div class="product__panel-rate-wrap">
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                    </div>

                    <div class="product__panel-price">
                        <span class="product__panel-price-old product__panel-price-old-hide">
                            2.150.000đ
                        </span>
                        <span class="product__panel-price-current">
                            1.539.500đ
                        </span>
                    </div> 
                </div>

                <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                    <div class="product__panel-img-wrap">
                        <img src="images1/product/giay da 4.jpg" alt="" class="product__panel-img" >
                    </div>
                    <h3 class="product__panel-heading">
                        <a href="#" class="product__panel-link">Giày da
                        </a>
                    </h3>
                    <div class="product__panel-rate-wrap">
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                    </div>

                    <div class="product__panel-price">
                        <span class="product__panel-price-old product__panel-price-old-hide">
                            2.378.000đ
                        </span>
                        <span class="product__panel-price-current">
                            1.963.960đ
                        </span>
                    </div> 
                </div>
                
            </div>
        </div>
    </section>
    <!--end product love -->

    <!-- post -->
    <section class="posts">
        <div class="container">
            <header class="row posts__title">
                <div class="posts__title-wrap col-lg-12 col-md-12 col-sm-12">
                    <h2 class="posts__heading">
                        Tin tức - Bài viết
                    </h2>
                </div>
            </header>
            <article class="row posts__list">
                <div class="posts__item col-lg-3 col-md-6 col-sm-6">
                    <div class="posts__item-img" >
                        <img src="images1/post/2019-08-22-5-767x313.jpg" width="80%">
                    </div>
                    <h3 class="posts__item-heading">
                        <a href="" class="posts__item-title">
                            Mẹo săn mã voucher giảm giá
                        </a>
                    </h3>
                    <div class="posts__item-date">
                        28/05/2020
                    </div>
                    <div class="posts__item-cate-wrap">
                        <div class="posts__item-cate">
                            <i class="fa fa-folder posts__item-cate-icon"></i>
                            <div class="posts__item-cate-name">
                                Tin tức
                            </div>
                        </div>
                        <div class="posts__item-cate-ad">
                            <i class="fa fa-user posts__item-cate-ad-icon"></i>
                            <div class="posts__item-cate-ad-name">
                                Nguyễn Hùng
                            </div>   
                        </div>
                    </div>
                    <div class="posts__item-description">
                        Nếu bạn đang gặp phải những vấn đề về săn, lấy, sử dụng mã voucher. Xin hãy yên tâm, bài viết này 
                        dành cho bạn! Trong bài viết này mình sẽ chia sẻ đến bạn những mẹo, những kinh nghiệm giúp bạn săn được nhiều 
                        mã giảm giá nhất có thể.....
                    </div>
                </div>

                <div class="posts__item col-lg-3 col-md-6 col-sm-6">
                    <div class="posts__item-img">
                        <img src="images/phanbietgiay.jpg">
                    </div>
                    <h3 class="posts__item-heading">
                        <a href="" class="posts__item-title">
                        Cách phân biệt hàng chính hãng và hàng rep1:1
                        </a>
                    </h3>
                    <div class="posts__item-date">
                        05/06/2020
                    </div>
                    <div class="posts__item-cate-wrap">
                        <div class="posts__item-cate">
                            <i class="fa fa-folder posts__item-cate-icon"></i>
                            <div class="posts__item-cate-name">
                                Tin tức
                            </div>
                        </div>
                        <div class="posts__item-cate-ad">
                            <i class="fa fa-user posts__item-cate-ad-icon"></i>
                            <div class="posts__item-cate-ad-name">
                               Nguyễn Hùnggg
                            </div>   
                        </div>
                    </div>
                    <div class="posts__item-description">
                    Bao bì: Bao bì của giày chính hãng thường được làm bằng chất liệu cao cấp, có in ấn sắc nét, đầy đủ thông tin sản phẩm. Bao bì của giày rep 11 thường được làm bằng chất liệu kém chất lượng, in ấn không sắc nét hoặc thiếu thông tin sản phẩm.
                    Tem nhãn: Tem nhãn của giày chính hãng thường được dán chắc chắn, có độ sắc nét cao, không bị bong tróc. Tem nhãn của giày rep 11 thường được dán không chắc chắn, có độ sắc nét thấp, dễ bị bong tróc.
                    Chất liệu: Chất liệu của giày chính hãng thường được làm từ các loại da, vải cao cấp, có độ bền cao. Chất liệu của giày rep 11 thường được làm từ các loại da, vải kém chất lượng, có độ bền thấp.
                    Đường may: Đường may của giày chính hãng thường được may tỉ mỉ, đều đặn, không có chỉ thừa. Đường may của giày rep 11 thường được may cẩu thả, không đều đặn, có chỉ thừa.
                    Kiểu dáng: Kiểu dáng của giày chính hãng thường được thiết kế tinh xảo, tỉ mỉ, không có sai sót. Kiểu dáng của giày rep 11 thường có sai sót về kích thước, màu sắc, chi tiết.
                    Mã sản phẩm: Mã sản phẩm của giày chính hãng thường được in rõ ràng, dễ đọc. Mã sản phẩm của giày rep 11 thường được in mờ nhạt, khó đọc.
                    </div>
                </div>

                <div class="posts__item col-lg-3 col-md-6 col-sm-6">
                    <div class="posts__item-img">
                        <img src="images1/post/cach-su-dung-ma-giam-gia-hieu-qua-tai-vnreviews.png">
                    </div>
                    <h3 class="posts__item-heading">
                        <a href="#" class="posts__item-title">
                            Sử dụng mã giảm giá như thế nào
                        </a>
                    </h3>
                    <div class="posts__item-date">
                        26/05/2020
                    </div>
                    <div class="posts__item-cate-wrap">
                        <div class="posts__item-cate">
                            <i class="fa fa-folder posts__item-cate-icon"></i>
                            <div class="posts__item-cate-name">
                                Tin tức
                            </div>
                        </div>
                        <div class="posts__item-cate-ad">
                            <i class="fa fa-user posts__item-cate-ad-icon"></i>
                            <div class="posts__item-cate-ad-name">
                                Vi Lamm
                            </div>   
                        </div>
                    </div>
                    <div class="posts__item-description">
                        Sau khi lấy được mã rồi thì tất nhiên bạn phải biết cách sử dụng nó rồi. Về cơ bản thì cho phép bạn sử dụng cùng 
                        lúc 3 loại mã giảm giá mà mình đã kể trên trong cùng 1 đơn hàng. Bao gồm:
                            Mã FreeShip,
                            Mã giảm giá của Shop,
                            Và Ưu đãi từ đối tác thanh toán,....
                    </div>
                </div>

                <div class="posts__item col-lg-3 col-md-6 col-sm-6">
                    <div class="posts__item-img">
                        <img src="images/doitrahoantien.webp">
                    </div>
                    <h3 class="posts__item-heading">
                        <a href="" class="posts__item-title">
                            Hướng dẫn đổi trả, hoàn tiền
                        </a>
                    </h3>
                    <div class="posts__item-date">
                        22/05/2020
                    </div>
                    <div class="posts__item-cate-wrap">
                        <div class="posts__item-cate">
                            <i class="fa fa-folder posts__item-cate-icon"></i>
                            <div class="posts__item-cate-name">
                                Tin tức
                            </div>
                        </div>
                        <div class="posts__item-cate-ad">
                            <i class="fa fa-user posts__item-cate-ad-icon"></i>
                            <div class="posts__item-cate-ad-name">
                                Hoàng
                            </div>   
                        </div>
                    </div>
                    <div class="posts__item-description">
                        Khi mua hàng, sản phẩm bạn nhận được không giống hình, sản phẩm bị lỗi. Bạn nghĩ mình bị lừa, bạn bối rối không biết
                        làm thế nào và quyết định search google: “Phải làm gì khi muốn hoàn trả hàng hoàn tiền trên web”.  Bài viết này sẽ hướng dẫn 
                        bạn đổi trả sách đúng quy trình...
                    </div>
                </div>
            </article>
            <article class="row posts__view">
                <a href="post.html" class="posts__view-btn">Xem thêm</a>
            </article>
        </div>
    </section>
    <!-- end post -->


    <!-- footer -->
    <footer>
        <section class="footer__top">
            <div class="container">
                <div class="row">
                    <article class="footer__top-intro col-lg-5 col-md-4 col-sm-6">
                        <h4 class="footer__top-intro-heading">
                            Thông tin 
                        </h4>
                        <div class="footer__top-intro-content">
                           
                            Điện thoại: 0912345678 <br>
                            Email: gghjagdtvrkkk@gmail.com <br>
                            Zalo:  0912345678 <br>
                        </div>
                    </article>

                    <article class="footer__top-policy col-lg-3 col-md-4 col-sm-6">
                        <h4 class="footer__top-policy-heading">
                            Chính sách mua hàng
                        </h4>

                        <ul class="footer__top-policy-list">
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Hình thức đặt hàng</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Hình thức thanh toán</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Phương thức vận chuyển</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Chính sách đổi trả</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Hướng dẫn sử dụng</a>
                            </li>
                        </ul>
                    </article>

                    <article class="footer__top-contact-wrap col-lg-4 col-md-4 col-sm-6">
                        <h4 class="footer__top-contact-heading">
                            Hotline liên hệ
                        </h4>

                        <div class="footer__top-contact">
                            <div class="footer__top-contact-icon">
                                <img src="images/phone_top.png" class="footer__top-contact-img">
                            </div>

                            <div class="footer__top-contact-phone-wrap">
                                <div class="footer__top-contact-phone">
                                   0912345678
                                </div>
                                <div class="footer__top-contact-des">
                                    (Giải đáp thắc mắc 24/7)
                                </div>
                            </div>
                        </div>
                    
                        <h4 class="footer__top-contact-heading">
                            Kết nối với chúng tôi
                        </h4>

                        <div class="footer__top-contact-social">
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="images/facebook.png">
                            </a>
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="images/youtube.png">
                            </a>
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="images/tiktok.png">
                            </a>
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="images/zalo.png">
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="footer__bottom">
            <div class="container">
                <div class="row">
                    <span class="footer__bottom-content">@Website quản lý bán giày tại Nông Trang- Việt Trì </span>
                </div>
            </div>
        </section>
    </footer>
    <!-- end footer -->
    </div>
    <script src="js/jq.js"></script>
    <script src="js/index.js"></script>
</body>
</html>