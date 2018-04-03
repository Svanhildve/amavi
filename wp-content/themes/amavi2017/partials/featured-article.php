
<div class="col-s-12">

	<div class="featured-article">

		<style>
			@media screen and (max-width: 1023px) {
				#featured-article__image--<?php echo get_post_thumbnail_id(); ?> {
					background-image:url('<?php echo wp_get_attachment_image_url( get_post_thumbnail_id(), 'medium' ); ?>');
				}
			}
			@media screen and (min-width: 1024px) {
				#featured-article__image--<?php echo get_post_thumbnail_id(); ?> {
					background-image:url('<?php echo wp_get_attachment_image_url( get_post_thumbnail_id(), 'large' ); ?>');

					;
				}
			}
		</style>

			<div class="featured-article__thumbnail-wrap col-s-12">

				<a href="<?php the_permalink(); ?>">

					<div class="featured-article__thumbnail-image" id="featured-article__image--<?php echo get_post_thumbnail_id(); ?>"></div>

				</a>

			</div>

			<div class="featured-article__teaser row wrapper">

				<a class="featured-article__link" href="<?php the_permalink(); ?>"></a>

				<div class="col-pm-offset-1 col-m-offset-3 col-s-12 col-pm-10 col-m-6 featured-article__teaser-body">

					<div class="meta">

						<div class="meta__date">

							<?php echo get_the_date(); ?> /

						</div>

						<div class="meta__category">

							<?php the_category(', '); ?>

						</div>

					</div>

					<a href="<?php the_permalink(); ?>">

						<h2 class="h2 h2--featured-medium"><?php the_title(); ?></h2>

						<div class="excerpt"><?php the_excerpt(); ?></div>

					</a>

				</div>

			</div>



	</div>

</div>