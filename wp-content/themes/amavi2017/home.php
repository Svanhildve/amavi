<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

	<?php get_template_part( 'featured-hero' ); ?>

<!--	<?php get_template_part( 'listing-grid' ); ?>

	<?php get_template_part( 'featured-article' ); ?> -->


	<div class="listing">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'listing' ); ?>

		<?php endwhile; ?>

	</div>

	<?php else: ?>
			
	<div class="row wrapper listing--empty">
		<div class="col-s-12">
			<p><?php _e('There are no posts'); ?></p>
		</div>
	</div>
		
	<?php endif; ?>


	<div class="more-articles">
		<span class="more-articles__link"><a href="#">Show me more articles</a></span>
	</div>

<?php get_footer(); ?>