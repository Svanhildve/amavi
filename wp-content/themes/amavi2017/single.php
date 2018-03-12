<?php get_header(); ?>

<div class="single-post">

	<div class="single-post__hero row large-wrapper">

		<?php $img_id = get_post_thumbnail_id(get_the_ID()); ?>

		<!--<?php $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true); ?>-->

		<style>
			@media screen and (max-width: 1023px) {
				.single-post__hero-image {
					background-image:url('<?php echo wp_get_attachment_image_url( $img_id, 'medium' ); ?>');
				}
			}
			@media screen and (min-width: 1024px) {
				.single-post__hero-image {
					background-image:url('<?php echo wp_get_attachment_image_url( $img_id, 'large' ); ?>');
				}
			}
		</style>

		<div class="single-post__hero-image col-s-12"></div>

	</div>

	<div class="single-post__content row wrapper">


			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="meta col-s-12 col-ml-8 col-ml-offset-2">

					<div class="meta__date">

						<?php echo get_the_date(); ?>

					</div>

					<div class="meta__category">

						 / <?php the_category(', '); ?>

					</div>

					<div class="meta__author">

						/ <?php the_author(); ?>

					</div>

				</div>

				<div class="single-post__intro col-s-12 col-ml-8 col-ml-offset-2">

					<h1><?php single_post_title( '' ); ?></h1>
					<p class="lead">

						<?php the_field('lead_paragraph'); ?>

						<!--Silicon Valley business strategist Jenny Blake puts forward a pretty convincing case as to why.-->

						</p>

				</div>

				<?php get_template_part( 'buildable' ); ?>




			<?php endwhile; else: ?>

				<p><?php _e('Sorry, no content! :( '); ?></p>

			<?php endif; ?>

	</div>

	<?php $posts = amavi_get_related_posts(); ?>

	<?php if ( !empty( $posts ) ) { ?>

	<div class="featured-posts row wrapper">

		<div class="col-s-12">
			<h2 class="featured-posts__headline">Further reading</h2>
		</div>

		<div class="listing">

		<?php

			foreach ( $posts as $post ) {

				setup_postdata( $post );
				get_template_part( 'partials/listing-grid' );

			}

			wp_reset_postdata();

		?>

		</div>

	</div>

	<?php } ?>

</div>

<?php get_footer(); ?>