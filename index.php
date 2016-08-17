<?php get_header() ?>
<div class="content-wrapper container-fluid">
    <div class="post-wrapper col-xs-12">
    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	<!-- post -->
    	<article <?= post_class() ?> data-url="<?= the_permalink(); ?>">
    		<div class="col-xs-12 post-thumbnail">
    		    <picture>
    			    <img src="<?= the_post_thumbnail_url('medium'); ?>" class="img-responsive" alt="">
    		    </picture>
    		</div>
    		<div class="col-xs-12 post-content">
    			<div class="post-title text-capitalize">
    				<h2><?php the_title(); ?></h2>
    			</div>
    			<?php the_excerpt(); ?>
    		</div>
    		<div class="post-meta">
			    <span><b>By </b><?php the_author(); ?> </span><span><b>On </b><?php the_date() ?> </span>
		    </div>
    	</article>
    	<?php endwhile; ?>
    	<!-- post navigation -->
    	<?php else: ?>
    	<!-- no posts found -->
    	<?php endif; ?>
    </div>
    <div class="sidebar col-xs-12 home-sidebar">
        <?php dynamic_sidebar('home-sidebar'); ?>
    </div>
</div>
<?php get_footer() ?>
