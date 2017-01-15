<?php get_header(); ?>
		
		<div class="category-page">
			
			<div class="category-page__heading row wrapper">
			
				<div class="category-page-label">Category</div>
				<h1 class="h1 h1--category"><?php single_cat_title(); ?></h1>

			</div>

			<div class="article-listing row wrapper">
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="article-listing__item">

						<div class="article-listing__thumbnail col-s-12 col-l-3" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>')">
						</div>
						
						<div class="meta col-s-12 col-l-9">
					
							<div class="meta__date">

								<?php echo get_the_date(); ?> / 
									
							</div>
							
							<div class="meta__category">

								<?php the_category(); ?>

							</div>

						</div>
						
						<div class="article-listing__teaser col-s-12 col-l-9">

							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

							<?php the_excerpt(); ?>

						</div>		

					</div>


				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no content! :( '); ?></p>
				<?php endif; ?>

			</div>

			
		</div>
<?php get_footer(); ?>
