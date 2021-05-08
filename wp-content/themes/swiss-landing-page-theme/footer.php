<?php
get_header();
$theme_url = get_template_directory_uri() . '/';
?>

<!-- Footer -->
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 footer-content">
				<div id="contact-info" class="footer-logo">
					<img src="<?php echo $theme_url; ?>image/logo.png">
				</div>
				<div class="intro-text">
					<h5>SWISS ENERGY VIỆT NAM</h5>
					<p>Swiss Energy là nhà cung cấp các loại thực phẩm bảo vệ sức khoẻ, thực phẩm bổ sung và thực phẩm dinh dưỡng y học, cũng như các sản phẩm chăm sóc cá nhân. Chúng tôi cung cấp một loạt các sản phẩm như vitamin và khoáng chất, dinh dưỡng cho chế độ vận động thể thao, dinh dưỡng cho trẻ em, kiểm soát cân nặng, cải thiện sắc đẹp và sức khỏe hệ tiêu hóa.</p>
				</div>
				<div class="contact-list">
					<ul>
						<li><i class="fas fa-map-marked"></i><p class="address">Lầu 4, Tòa nhà HP, 60 Nguyễn Văn Thủ, Phường Đa Kao, Quận 1, TP.HCM</p></li>
                        <li><i class="fas fa-phone"></i><span class="phone"><a class="custom-link" href="tel:0909827715">+84 909 827 715</a> </span></li>
						<li><i class="far fa-envelope"></i><span class="mail">info@medpackplus.com</span></li>
					</ul>
				</div>
				<div class="social-list">
					<ul>
						<li><i class="fab fa-facebook social-facebook custom-icon"></i></li>
						<li><i class="fab fa-instagram social-instagram custom-icon"></i></li>
						<li><i class="fab fa-whatsapp social-whatsapp custom-icon"></i></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-6 send-email-form">
				<h3>LIÊN HỆ CHÚNG TÔI</h3>
                <!-- Contact form -->
				<?php echo do_shortcode('[contact-form-7 id="35" title="Form liên hệ"]'); ?>
			</div>
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-EKHJ4KSMM2"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'G-EKHJ4KSMM2');
            </script>
		</div>
	</div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>