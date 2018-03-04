<div class="listing__item col-s-12 col-m-6 col-ml-4">

	<div class="listing__thumbnail">
		<a href="<?php the_permalink(); ?>"><div class="listing__thumbnail-image" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>')">
		</div></a>
	</div>

	<div class="listing__teaser">

		<div class="meta">

			<div class="meta__date">

				<?php echo get_the_date(); ?> /

			</div>

			<div class="meta__category">

				<?php the_category(', '); ?>

			</div>

		</div>

		<h2 class="h2 h2--listing"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<div class="excerpt"><?php the_excerpt(); ?></div>

	</div>

</div>