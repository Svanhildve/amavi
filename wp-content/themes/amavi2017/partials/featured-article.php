<div class="row wrapper">

	<div class="featured-article col-s-12">

		<!--<style>
			@media screen and (max-width: 1023px) {
				.featured-article__image--<?php echo get_post_thumbnail_id(); ?> {
					background-image:url('<?php echo wp_get_attachment_image_url( get_post_thumbnail_id(), 'medium' ); ?>');
				}
			}
			@media screen and (min-width: 1024px) {
				.featured-article__image--<?php echo get_post_thumbnail_id(); ?> {
					background-image:url('<?php echo wp_get_attachment_image_url( get_post_thumbnail_id(), 'large' ); ?>');

					;
				}
			}
		</style>-->

		<a href="<?php the_permalink(); ?>">

			<div class="featured-article__thumbnail-wrap">

				<div class="featured-article__thumbnail-image">

					<?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'large', false, array() ); ?>

				</div>

			</div>

			<div class="featured-article__teaser row wrapper">

				<div class="col-pm-offset-1 col-m-offset-3 col-s-12 col-pm-10 col-m-6 featured-article__teaser-body">

					<div class="meta">

						<div class="meta__date">

							<?php echo get_the_date(); ?> /

						</div>

						<div class="meta__category">

							<?php the_category(', '); ?>

						</div>

					</div>

					<h2 class="h2 h2--featured-medium"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<div class="excerpt"><?php the_excerpt(); ?></div>

				</div>

			</div>

		</a>

	</div>

</div>