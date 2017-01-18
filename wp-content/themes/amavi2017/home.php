<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

	<div class="featured-hero row full-width">

		<div class="featured-hero__teaser col-l-5">

			<div class="meta">
		
				<div class="meta__date">

					<?php echo get_the_date(); ?> / 
						
				</div>
				
				<div class="meta__category">

					<?php the_category(); ?>

				</div>

			</div>

			<h1 class="h1 h1--featured"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

			<div class="excerpt"><?php the_excerpt(); ?></div>

			<a href="<?php the_permalink(); ?>" class="cta-link">Read more</a>

		</div>

		<div class="featured-hero__thumbnail col-s-12 col-l-offset-5 col-l-7">
			<a href="<?php the_permalink(); ?>"><div class="featured-hero__thumbnail-image" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>')">
			</div></a>
		</div>

	</div>

	<div class="row wrapper">
		<div class="col-l-4">
		</div>
		<div class="col-l-8" style="background-color: pink">
		</div>
	</div>

	<div class="article-listing">
			
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="article-listing__item row wrapper">

			<div class="article-listing__thumbnail col-s-12 col-m-5 col-l-4">
				<a href="<?php the_permalink(); ?>"><div class="article-listing__thumbnail-image" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>')">
				</div></a>
			</div>
			
			<div class="article-listing__teaser col-s-12 col-m-7 col-l-8">

				<div class="meta">
			
					<div class="meta__date">

						<?php echo get_the_date(); ?> / 
							
					</div>
					
					<div class="meta__category">

						<?php the_category(); ?>

					</div>

				</div>

				<h2 class="h2 h2--listing"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				<div class="excerpt"><?php the_excerpt(); ?></div>

			</div>		

		</div>

		<?php endwhile; else: ?>
				
		<div class="row wrapper category-page--empty">
			<div class="col-s-12">
				<p><?php _e('There are no posts in this category'); ?></p>
			</div>
		</div>
			
		<?php endif; ?>
	</div>

	<div class="more-articles">
		<span class="more-articles__link"><a href="#">Show me more articles!</a></span>
	</div>

<?php get_footer(); ?>