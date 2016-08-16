<?php get_header() ?>
<div class="content-wrapper container-fluid">
    <div class="post-wrapper col-xs-8">
    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	<!-- post -->
    	<article <?= post_class() ?>>
    		<div class="col-xs-5 post-thumbnail">
    		    <picture>
    			    <img src="<?= the_post_thumbnail_url('medium'); ?>" class="img-responsive" alt="">
    		    </picture>
    		</div>
    		<div class="col-xs-7">
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
    <div class="sidebar col-xs-4 home-sidebar">
        <?php dynamic_sidebar('home-sidebar'); ?>
    </div>
</div>
<?php get_footer() ?>