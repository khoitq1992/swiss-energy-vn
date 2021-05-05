<?php
get_header();
$theme_url = get_template_directory_uri() . '/';
?>

<!-- Post list -->
<section class="post-list">
	<div class="container">
		<div class="breadcrumb">
			Trang chủ > Loại tin 1
		</div>
		<h2 class="page-title">Bài viết</h2>
		<div class="row">
			<?php
			$post_list = new WP_Query(array(
				'posts_per_page' => 3,
				'post_type' => 'post',
				'orderby' => 'date',
				'order' => "DSC"
			));

			if ($post_list->have_posts()):
				while ($post_list->have_posts()):
					$post_list->the_post();
					?>
					<div class="col-sm-4 p-3 post-thumbnail">
						<img class="post-thumb" src="<?php echo get_the_post_thumbnail_url($post);?>" alt="post-thumb-image">
						<h5 class="title"><a class="custom-link" href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
						<p class="excerpt"><?php the_excerpt();?></p>
					</div>
					<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
		<ul class="paging">
			<li class="pagination-item">Lùi</li>
			<li class="pagination-item">1</li>
			<li class="pagination-item">2</li>
			<li class="pagination-item">3</li>
			<li class="pagination-item">4</li>
			<li class="pagination-item">5</li>
			<li class="pagination-item">6</li>
			<li class="pagination-item">Tới</li>
		</ul>
	</div>
</section>

<?php
get_footer();
?>
