<?php
$theme_url = get_template_directory_uri() . '/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo get_bloginfo( 'name' ); ?></title>

	<!-- Boottrap 4 CSS-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<body>

<!-- Header section -->
<header>
	<div class="container">
		<div class="row">
			<div class="col-6 col-sm-3">
				<div class="logo">
					<a href="<?php echo get_site_url();?>"><img src="<?php echo $theme_url; ?>image/logo.png"></a>
				</div>
			</div>
			<div class="col-6 col-sm-6">
				<nav role="navigation-bar">
					<input type="checkbox" id="button">
					<label for="button" onclick></label>
					<ul>
						<li><a href="<?php echo get_site_url()?>">Trang chủ</a> </li>
						<li class="menu-item">Sản phẩm
                            <ul class="sub-menu-item">
                                <li><a href="<?php echo get_site_url() . "/vien-nang-giai-phong-cham"?>">Viên nang giải phóng chậm</a></li> <!-- Custom url here-->
                                <li><a href="<?php echo get_site_url() . "/vien-keo-ngam-thao-moc"?>">Viên kẹo ngậm thảo mộc</a></li> <!-- Custom url here-->
                            </ul>
                        </li>
						<li><a href="#">Tin tức</a></li>
						<li><a href="#footer">Liên hệ</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-sm-3">
				<div class="social-icon">
					<ul>
						<li><i class="fab fa-facebook social-facebook custom-icon"></i></li>
						<li><i class="fab fa-instagram social-instagram custom-icon"></i></li>
						<li><i class="fab fa-whatsapp social-whatsapp custom-icon"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>
