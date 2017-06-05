<?php get_header(); ?>

<div class="single-post">

	<div class="single-post__hero row large-wrapper">

		<div class="single-post__hero-image col-s-12" style="background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id() );?>')""></div>

	</div>

	<div class="single-post__content row wrapper">


			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="meta col-s-12 col-ml-8 col-ml-offset-2">
					
					<div class="meta__date">

						<?php echo get_the_date(); ?> / 
							
					</div>
					
					<div class="meta__category">

						<?php the_category(); ?>

					</div>

					<div class="meta__author">

						/ <?php the_author(); ?> 

					</div>

				</div>

				<div class="single-post__intro col-s-12 col-ml-8 col-ml-offset-2">
					
					<h1><?php single_post_title( '' ); ?></h1>
					<p class="lede">Silicon Valley business strategist Jenny Blake puts forward a pretty convincing case as to why.</p>

				</div>

				<div class="single-post__article col-s-12 col-ml-8 col-ml-offset-2">			
					
					<!-- replace this with ACF -->
					<?php the_content(''); ?>

					

				</div>

				<?php get_template_part( 'picture-wide' ); ?>

				<?php get_template_part( 'two-pictures' ); ?>

				<div class="blockquote col-s-12 col-ml-10 col-ml-offset-1">

					<p>However, instead of fearing it, Jenny urges us to embrace this accelerated pace of change. “You can learn to enjoy calculated risk and uncertainty in exchange for adventure, flexibility, freedom, and opportunity,” she writes.</p>

				</div>

			<?php endwhile; else: ?>

				<p><?php _e('Sorry, no content! :( '); ?></p>
			
			<?php endif; ?>

	</div>

	<!--<div class="featured-posts row">

		 add code here 

	</div>-->

</div>

<?php get_footer(); ?>