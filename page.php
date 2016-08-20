<?php get_header() ?>
<?php require("components/side-nav.php"); ?>
<div class="single-content-wrapper container-fluid">
	<div class="single-post-wrapper col-xs-12">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- post -->
		<article data-url="<?= the_permalink(); ?>">
			<?php if (has_post_thumbnail()) : ?>
				<div class="col-xs-12 post-thumbnail">
					<picture>
						<img src="<?= the_post_thumbnail_url('extra-large'); ?>" class="img-responsive" alt="">
					</picture>
				</div>
			<?php endif; ?>
			<div class="col-xs-12 col-md-8 post-content">
				<div class="post-title text-capitalize">
					<h1><?php the_title(); ?></h1>
				</div>
				<?php the_content(); ?>
			</div>
			<div class="sidebar-post col-xs-12 col-md-4">
				<?php dynamic_sidebar('post-sidebar'); ?>
			</div>
		</article>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
	</div>
</div>
<?php get_footer() ?>
