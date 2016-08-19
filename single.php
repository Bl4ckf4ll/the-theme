<?php get_header() ?>
<div class="single-content-wrapper container-fluid">
    <div class="single-post-wrapper col-xs-12">
    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	<!-- post -->
    	<article data-url="<?= the_permalink(); ?>">
    		<div class="col-xs-12 post-thumbnail">
    		    <picture>
    			    <img src="<?= the_post_thumbnail_url('extra-large'); ?>" class="img-responsive" alt="">
    		    </picture>
    		</div>
    		<div class="col-xs-8 post-content">
    			<div class="post-title text-capitalize">
    				<h1><?php the_title(); ?></h1>
    			</div>
    			<?php the_content(); ?>
    		</div>
			<div class="sidebar-post col-md-4">
				<?php dynamic_sidebar('post-sidebar'); ?>
			</div>
    		<div class="col-xs-8 post-meta">
			    <span><b>By </b><?php the_author(); ?> </span><span><b>On </b><?php the_date() ?> </span>
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
