<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

	<?php

		amavi_set_home_hero_data();
		get_template_part( 'partials/featured-hero' );

	?>

	<div class="listing  row  wrapper">

		<?php

			$featured_post_position = 4;
			$posts = amavi_get_home_posts_array( $featured_post_position ); ?>

		<?php if ( !empty( $posts ) ) { ?>

		<?php

			$counter = 1;

			foreach ( $posts as $post ) {

				setup_postdata( $post );

				// The first few posts! (before featured)
				if ( $counter < $featured_post_position ) {

					get_template_part( 'partials/listing-grid' );

				// Our featured post
				} elseif ( $counter == $featured_post_position ) {

					echo '</div>';
					echo '<div class="row wrapper">';

					get_template_part( 'partials/featured-article' );

					echo '</div>';
					echo '<div class="listing row wrapper">';

				// The rest of the listing
				} else {

					get_template_part( 'partials/listing-slat' );

				}

				$counter++;

			}

			wp_reset_postdata();

		?>

	</div>

	<?php } else { ?>

	<div class="row wrapper listing--empty">
		<div class="col-s-12">
			<p><?php _e('There are no posts'); ?></p>
		</div>
	</div>

	<?php } ?>

	<div class="more-articles">
		<span class="more-articles__link"><a href="#">Show me more articles</a></span>
	</div>

<?php get_footer(); ?>