<?php get_header(); ?>
		
		<div class="contact-page">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


				<?php $img_id = get_post_thumbnail_id(get_the_ID()); ?>

				<style>
					@media screen and (max-width: 1023px) {
						.contact-page__hero {
							background-image:url('<?php echo wp_get_attachment_image_url( $img_id, 'medium' ); ?>');
						}
					}
					@media screen and (min-width: 1024px) {
						.contact-page__hero {
							background-image:url('<?php echo wp_get_attachment_image_url( $img_id, 'large' ); ?>');
						}
					}
				</style>

				<div class="contact-page__hero">
		
					<div class="contact-page__content row wrapper">

						<div class="col-s-12">
						
							<h1 class="h1--page"><?php single_post_title( '' ); ?></h1>
							<p class="lead">

								<?php the_field('lead_paragraph'); ?>

								<?php the_content(''); ?>
								
							</p>

						</div>

					</div>

				</div>


			<?php endwhile; else: ?>

				<p><?php _e('Sorry, no content! :( '); ?></p>
			
			<?php endif; ?>
			
		</div>

<?php get_footer(); ?>