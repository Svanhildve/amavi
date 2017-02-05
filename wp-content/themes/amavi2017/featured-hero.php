<div class="featured-hero row wrapper">

	<div class="featured-hero__teaser col-s-12 col-pm-9 col-m-7 col-ml-5 col-l-5">

		<div class="meta">
	
			<div class="meta__date">

				<?php echo get_the_date(); ?> / 
					
			</div>
			
			<div class="meta__category">

				<?php the_category(); ?>

			</div>

		</div>

		<h2 class="h2 h2--featured-large"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<div class="excerpt"><?php the_excerpt(); ?></div>

		<a href="<?php the_permalink(); ?>" class="cta-link">Read more</a>

	</div>

	<div class="featured-hero__thumbnail col-s-12 col-ml-offset-5 col-ml-7 col-l-offset-4 col-l-8">
		<a href="<?php the_permalink(); ?>"><div class="featured-hero__thumbnail-image" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>');">
		</div></a>
	</div>

</div>