<?php
get_header();
$theme_url = get_template_directory_uri() . '/';
?>
    <!-- Banner carousel -->
    <section class="banner-carousel">
        <div class="container-fluid">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo $theme_url; ?>image/product%20image.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $theme_url; ?>image/product%20image.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $theme_url; ?>image/product%20image.jpg" alt="First slide">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Lùi</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Tới</span>
                </a>
            </div>
        </div>
    </section>

    <!-- About us -->
    <section class="about-us">
        <div class="container-fluid">
            <div class="about-us-content">
                <h2>VỀ CHÚNG TÔI</h2>
                <p>Swiss energy là tập đoàn sản xuất và phân phối thực phẩm chức năng, thực phẩm bổ sung và thực phẩm dinh dưỡng y học hàng đầu Thụy Sỹ với lịch sử hơn 100 năm thực hiện sứ mệnh mang đến một cuộc sống khỏe cho hàng triệu người trên thế giới.</p>
                <a href="#">XEM THÊM</a>
            </div>
        </div>
    </section>

    <!-- Why choose us -->
    <section class="why-choose-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-5 why-choose-us-title">
                    <h2>Vì sao chọn Swiss Energy</h2>
                </div>
                <div class="col-sm-7 reasons">
                    <div class="reason">
                        <i class="far fa-caret-square-right"></i>
                        <div class="content">
                            <h4>CHẤT LƯỢNG CHÂU ÂU</h4>
                            <p>Tất cả sản phẩm của Swiss Energy được sản xuất tại Châu
                                Âu và đáp ứng những tiêu chuẩn khắc khe nhất của Liên minh Châu Âu và tính toán an toàn.</p>
                        </div>
                    </div>
                    <div class="reason">
                        <i class="far fa-caret-square-right"></i>
                        <div class="content">
                            <h4>TIÊU CHUẨN THỰC HÀNH VÀ SẢN XUẤT TỐT NHẤT</h4>
                            <p>Chúng tôi áp dụng các tiêu chuẩn thực hành sản xuất uy tín GMP và được chứng nhận rộng rãi trên thế giới.</p>
                        </div>
                    </div>
                    <div class="reason">
                        <i class="far fa-caret-square-right"></i>
                        <div class="content">
                            <h4>THÀNH PHẦN SẢN PHẨM TỐT NHẤT</h4>
                            <p>Thành phần sản phẩm được lựa chọn một cách kỹ lưỡng và nghiêm ngặt dựa trên những nghiên cứu khoa học về sức khỏe và dinh dưỡng.</p>
                        </div>
                    </div>
                    <div class="reason">
                        <i class="far fa-caret-square-right"></i>
                        <div class="content">
                            <h4>HIỆU QUẢ CHỨNG THỰC KHOA HỌC</h4>
                            <p>Với đội ngũ chuyên gia dinh dưỡng hàng đầu Thụy Sĩ, Swiss Energy đầu tư vào nghiên cứu khoa học và phát triền công nghệ. Tất cả sản phẩm Swiss Energy phải trải qua quá trình chứng thực lâm sàn để đánh giá hiệu quả.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our strength -->
    <section class="strength">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <img src="<?php echo $theme_url; ?>image/plant-based.svg" alt="strength-1">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nisl cursus, vehicula diam a, tincidunt purus.</p>
                </div>
                <div class="col-sm-3">
                    <img src="<?php echo $theme_url; ?>image/plant-based.svg" alt="strength-1">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nisl cursus, vehicula diam a, tincidunt purus.</p>
                </div>
                <div class="col-sm-3">
                    <img src="<?php echo $theme_url; ?>image/plant-based.svg" alt="strength-1">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nisl cursus, vehicula diam a, tincidunt purus.</p>
                </div>
                <div class="col-sm-3">
                    <img src="<?php echo $theme_url; ?>image/plant-based.svg" alt="strength-1">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nisl cursus, vehicula diam a, tincidunt purus.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Product -->
    <section class="product">
        <div class="container-fluid">
            <div class="title">
                <h2>SẢN PHẨM</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 product">
                    <img src="<?php echo $theme_url; ?>image/product-image-1.jpg">
                    <h5><a href="<?php echo get_site_url() . "/product-type-1"?>">VIÊN NANG PHÓNG THÍCH CHẬM</a></h5>
                </div>
                <div class="col-sm-6 product">
                    <img src="<?php echo $theme_url; ?>image/product-image-1.jpg">
                    <h5><a href="<?php echo get_site_url() . "/product-type-2"?>">KẸO NGẬM THẢO DƯỢC</a></h5>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>