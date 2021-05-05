<?php
get_header();
$theme_url = get_template_directory_uri() . '/';
?>

<!-- Pop-up -->
<section class="popup">
	<div class="container">
		<div class="popup">
			<div class="button-exit" >
				<div>x</div>
			</div>
			<div class="product-img-gallery">
				<div class="main-image">
					<img src="<?php echo $theme_url; ?>image/product-1-square.jpg" alt="main-image">
				</div>
				<div class="img-list">
					<img class="image" src="<?php echo $theme_url; ?>image/product-1-square.jpg" alt="image-thumbnail">
					<img class="image" src="<?php echo $theme_url; ?>image/product-2-square.jpg" alt="image-thumbnail">
					<img class="image" src="<?php echo $theme_url; ?>image/product-3-square.jpg" alt="image-thumbnail">
				</div>
			</div>
			<div class="buy-button">
				<button>Mua hàng</button>
			</div>
			<div class="text-content">
				<h3 class="title">Viên nang giải phóng chậm</h3>
				<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nisl cursus, vehicula diam a, tincidunt purus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nisl cursus, vehicula diam a, tincidunt purus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nisl cursus, vehicula diam a, tincidunt purus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nisl cursus, vehicula diam a, tincidunt purus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nisl cursus, vehicula diam a, tincidunt purus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nisl cursus, vehicula diam a, tincidunt purus.</p>
			</div>
		</div>
	</div>
</section>

<!-- Banner -->
<section class="banner">
	<div class="container-fluid">
		<h2>VIÊN NANG GIẢI PHÓNG CHẬM</h2>
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

<main>
	<!-- Product -->
	<section class="product-list">
		<div class="row item-left">
			<div class="col-sm-6 image">
				<img src="<?php echo $theme_url; ?>image/product-1-square.jpg" alt="product-image">
			</div>
			<div class="col-sm-6">
				<div class="content">
					<h2 class="title">VIÊN NANG PHÓNG THÍCH CHẬM</h2>
					<p class="sub-title">Mô tả sản phẩm ngắn</p>
					<h3 class="price">100.000 VND</h3>
					<ul class="description">
						<li><span>Thành phẩn dinh dưỡng:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nisl cursus, vehicula diam a, tincidunt purus. Suspendisse aliquet risus nec nunc sagittis cursus.</li>
						<li><span>Công dụng:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nisl cursus, vehicula diam a, tincidunt purus.</li>
						<li><span>Quy cách:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nisl cursus, vehicula diam a, tincidunt.</li>
						<li><span>Hướng dẫn sử dụng:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nisl cursus, ve.</li>
					</ul>
					<div class="button-group">
						<button class="learn-more">Xem thêm</button>
						<button>Mua hàng</button>
					</div>
				</div>
			</div>
		</div>

		<div class="row item-right">
			<div class="col-sm-6">
				<div class="content">
					<h2 class="title">KẸO NGẬM THẢO DƯỢC</h2>
					<p class="sub-title">Mô tả sản phẩm ngắn</p>
					<h3 class="price">100.000 VND</h3>
					<ul class="description">
						<li><span>Thành phẩn dinh dưỡng:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nisl cursus, vehicula diam a, tincidunt purus. Suspendisse aliquet risus nec nunc sagittis cursus.</li>
						<li><span>Công dụng:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nisl cursus, vehicula diam a, tincidunt purus.</li>
						<li><span>Quy cách:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nisl cursus, vehicula diam a, tincidunt.</li>
						<li><span>Hướng dẫn sử dụng:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nisl cursus, ve.</li>
					</ul>
					<div class="button-group">
						<button class="learn-more">Xem thêm</button>
						<button>Mua hàng</button>
					</div>
				</div>
			</div>
			<div class="col-sm-6 image">
				<img src="<?php echo $theme_url; ?>image/product-2-square.jpg" alt="product-image">
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
?>
