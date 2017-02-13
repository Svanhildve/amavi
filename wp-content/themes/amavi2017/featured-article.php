<div class="featured-article row wrapper">

	<div class="col-s-12">

		<div class="featured-article__image" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>');">

			<div class="featured-article__teaser row wrapper">

				<div class="col-pm-offset-1 col-m-offset-2 col-s-12 col-pm-10 col-m-8 featured-article__teaser-body">

					<div class="meta">
					
						<div class="meta__date">

							<?php echo get_the_date(); ?> / 
								
						</div>
						
						<div class="meta__category">

							<?php the_category(); ?>

						</div>

					</div>

					<h2 class="h2 h2--featured-medium"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<div class="excerpt"><?php the_excerpt(); ?></div>

				</div>

			</div>

		</div>

	</div>

</div>