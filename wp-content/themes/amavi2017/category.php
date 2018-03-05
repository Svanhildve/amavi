<?php get_header(); ?>

		<div class="category-page">

			<div class="category-page__heading row wrapper">

				<div class="category-page-label">Category</div>
				<h1 class="h1 h1--category"><?php single_cat_title(); ?></h1>

			</div>

			<div class="listing">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php

						if ( get_field( 'amavi_featured' ) ) {

							get_template_part( 'partials/featured-article' );

						} else {

							get_template_part( 'partials/listing-slat' );

						}

					?>

				<?php endwhile; ?>

			</div>

			<?php if ($wp_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>

				<?php get_template_part( 'pagination' ); ?>

			<?php } ?>

			<?php else: ?>

			<div class="row wrapper listing--empty">
				<div class="col-s-12">
					<p><?php _e('There are no posts in this category'); ?></p>
				</div>
			</div>

			<?php endif; ?>

		</div>

<?php get_footer(); ?>
