<?php

// Get the post we want to feature
$post = get_query_var( 'amavi_data' );
if ( empty( $post ) ) $post = get_field( 'amavi_home_hero', get_option( 'page_on_front' ) );

// Setup the post data for our template
setup_postdata( $post );

?>
<div class="featured-hero row large-wrapper">

	<div class="featured-hero__thumbnail col-s-12 col-ml-offset-4 col-ml-8 col-l-offset-4 col-l-8">
		<div class="featured-hero__thumbnail-wrap">

			<?php $img_id = get_post_thumbnail_id(get_the_ID()); ?>

			<style>
				@media screen and (max-width: 1023px) {
					.featured-hero__thumbnail-image--<?php echo $img_id; ?> {
						background-image:url('<?php echo wp_get_attachment_image_url( $img_id, 'medium' ); ?>');
					}
				}
				@media screen and (min-width: 1024px) {
					.featured-hero__thumbnail-image--<?php echo $img_id; ?> {
						background-image:url('<?php echo wp_get_attachment_image_url( $img_id, 'large' ); ?>');

						;
					}
				}
			</style>

			<a href="<?php the_permalink(); ?>" aria-label="Read article"><div class="featured-hero__thumbnail-image  featured-hero__thumbnail-image--<?php echo $img_id; ?>"></div></a>
		</div>
	</div>

	<div class="featured-hero__teaser col-s-12 col-ml-5 col-l-5">

		<div class="meta">

			<div class="meta__date">

				<?php echo get_the_date(); ?>

			</div>

			<div class="meta__category">

				 / <?php the_category(', '); ?>

			</div>

		</div>

		<h2 class="h2 h2--featured-large"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<div class="excerpt"><?php the_excerpt(); ?></div>

		<a href="<?php the_permalink(); ?>" class="cta-link">Read more</a>

	</div>

</div>

<?php wp_reset_postdata(); ?>