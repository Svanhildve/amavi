

		<div class="featured-hero row large-wrapper">

			<div class="featured-hero__thumbnail col-s-12 col-l-offset-4 col-l-8">
				<div class="featured-hero__thumbnail-wrap">

					<?php $img_id = get_post_thumbnail_id(get_the_ID()); ?>
					<?php $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true); ?>

					<a href="<?php the_permalink(); ?>" aria-label="Read article"><div class="featured-hero__thumbnail-image" style="background-image:url('<?php echo wp_get_attachment_url( $img_id );?>');" alt="<?php echo $alt_text; ?>"></div></a>
				</div>
			</div>

			<div class="featured-hero__teaser col-s-12 col-pm-9 col-m-7 col-ml-6 col-l-5">

				<div class="meta">
			
					<div class="meta__date">

						<?php echo get_the_date(); ?> / 
							
					</div>
					
					<div class="meta__category">

						<?php the_category(', '); ?>

					</div>

				</div>

				<h2 class="h2 h2--featured-large"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				<div class="excerpt"><?php the_excerpt(); ?></div>

				<a href="<?php the_permalink(); ?>" class="cta-link">Read more</a>

			</div>

		</div>

