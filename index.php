<?php get_header() ?>
<div class="post-wrapper container-fluid">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- post -->
	<article class="post">
		<div class="col-xs-4">
			<img src="<?= the_post_thumbnail_url(); ?>" class="img-responsive">
		</div>
		<div class="col-xs-8">
			<div class="post-title">
				<h2><?php the_title(); ?></h2>
			</div>
			<?php the_excerpt(); ?>
		</div>
	</article>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
</div>
<?php get_footer() ?>