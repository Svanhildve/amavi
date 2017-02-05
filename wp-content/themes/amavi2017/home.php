<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

	<?php get_template_part( 'featured-hero' ); ?>

	<?php get_template_part( 'listing-grid' ); ?>

	<?php get_template_part( 'featured-article' ); ?>

	<?php get_template_part( 'listing' ); ?>

	<div class="more-articles">
		<span class="more-articles__link"><a href="#">Show me more articles!</a></span>
	</div>

<?php get_footer(); ?>