<?php

/*
* Template Name: Categories
 */

get_header(); ?>

		<div class="standard-page">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="standard-page__heading row wrapper">

					<div class="col-s-12">

						<h1 class="h1--page"><?php single_post_title( '' ); ?></h1>
						<p class="lead">

							<?php the_field('lead_paragraph'); ?>

						</p>

					</div>

				</div>

				<?php

					$terms = get_terms( array(
					    'taxonomy' => 'category'
					) );

					if ( $terms ) {

						foreach ( $terms as $term ) {

							if ( $term->name != 'Uncategorized' && $term->name != 'Uncategorised' ) {

							?>

							<div class="listing  wrapper">

								<h2><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></h2>

								<p><?php echo $term->description; ?></p>

							</div>

							<?php

							}

						}

					}

					endwhile;

				endif; // end if have posts

				?>

		</div>

<?php get_footer(); ?>