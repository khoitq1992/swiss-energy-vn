<?php
get_header();
$theme_url = get_template_directory_uri() . '/';
?>

<!-- Footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 footer-content">
				<div class="footer-logo">
					<img src="<?php echo $theme_url; ?>image/logo.png">
				</div>
				<div class="intro-text">
					<h5>Công Ty Cổ Phần Swiss Energy Việt Nam</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mattis tincidunt tempus. Ut volutpat ultricies dignissim. Fusce nec nibh ac ex maximus malesuada. Nullam porttitor justo est, at ullamcorper justo ornare sit amet. Maecenas non ultrices mi. Nullam dui nibh, interdum nec felis et, condimentum egestas dolor.</p>
				</div>
				<div class="contact-list">
					<ul>
						<li><i class="fas fa-map-marked"></i><p class="address">30/7 Hùng Vương, P.Lộc Thọ, Tp Bình Dương, Tỉnh Bình Dương, Việt Nam</p></li>
						<li><i class="far fa-envelope"></i><span class="mail">khoitq.1992@gmail.com</span></li>
						<li><i class="fas fa-phone"></i><span class="phone">+84 7777 20221</span></li>
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