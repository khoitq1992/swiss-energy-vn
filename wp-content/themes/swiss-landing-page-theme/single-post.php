<?php
get_header();
$theme_url = get_template_directory_uri() . '/';
?>

<section class="post-info">
	<div class="container">
		<div class="breadcrumb">
			Trang chủ > Loại tin 1 > Chi tiết bài viết
		</div>
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                ?>
                <div class="post-title">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="post-meta">
                    <span class="author"><i class="fas fa-user"></i><?php the_author_link(); ?></span>
                    <span class="publish-date"><i class="fas fa-calendar-alt"></i></i><?php echo get_the_date(); ?></span>
                </div>
                <div class="feature-image">
                    <img src="<?php echo get_the_post_thumbnail_url($post);?>" alt="post-feature-image">
                </div>
                <div class="post-content">
		            <?php the_content(); ?>
                </div>
                <?php
            endwhile;
        endif;
        ?>
	</div>
</section>

<section class="related-post">
	<div class="container">
		<h2>Bài viết tương tự</h2>
		<div class="row">
            <?php
            $related_post = new WP_Query(array(
	            'posts_per_page' => 3,
	            'post_type' => 'post',
	            'orderby' => 'date',
	            'order' => "DSC"
            ));
            if ($related_post->have_posts()):
	            while ($related_post->have_posts()):
		            $related_post->the_post(); ?>
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
	</div>
</section>

<?php
get_footer();
?>

