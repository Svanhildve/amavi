<div class="listing__item listing__item--slat listing__item--slat--<?php echo get_the_ID(); ?> row wrapper">

	<div class="listing__thumbnail col-s-12 col-pm-6 col-m-6 col-ml-5 col-l-4">
		<div class="listing__thumbnail-wrap">

			<?php $img_id = get_post_thumbnail_id(get_the_ID()); ?>

			<a href="<?php the_permalink(); ?>" aria-label="Read article">
				<div class="listing__thumbnail-image" style="background-image:url('<?php echo wp_get_attachment_image_url( $img_id, 'thumbnail' ); ?>');"></div>
			</a>
		</div>
	</div>

	<div class="listing__teaser col-s-12 col-pm-6 col-m-6 col-ml-7 col-l-8">

		<div class="meta">

			<div class="meta__date">

				<?php echo get_the_date(); ?>

			</div>

			<div class="meta__category">

				/ <?php the_category(', '); ?>

			</div>

		</div>

		<h2 class="h3 h3--listing"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<div class="excerpt"><?php the_excerpt(); ?></div>

	</div>

</div>


<script>
	// init controller
	var controller = new ScrollMagic.Controller();

	// build scenes
	new ScrollMagic.Scene({triggerElement: ".listing__item--slat--<?php echo get_the_ID(); ?>", triggerHook: (1), reverse: (false)})
					.setClassToggle(".listing__item--slat", "lazy-load-listing") // add class toggle
					//.addIndicators() // add indicators (requires plugin)
					.addTo(controller);

</script>