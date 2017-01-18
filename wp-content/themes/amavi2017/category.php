<?php get_header(); ?>
		
		<div class="category-page">
			
			<div class="category-page__heading row wrapper">
			
				<div class="category-page-label">Category</div>
				<h1 class="h1 h1--category"><?php single_cat_title(); ?></h1>

			</div>

			<div class="article-listing">
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="article-listing__item row wrapper">

						<div class="article-listing__thumbnail col-s-12 col-m-5 col-l-4">
							<a href="<?php the_permalink(); ?>"><div class="article-listing__thumbnail-image" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>')">
							</div></a>
						</div>
						
						<div class="article-listing__teaser col-s-12 col-m-7 col-l-8">

							<div class="meta">
						
								<div class="meta__date">

									<?php echo get_the_date(); ?> / 
										
								</div>
								
								<div class="meta__category">

									<?php the_category(); ?>

								</div>

							</div>

							<h2 class="h2 h2--listing"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

							<div class="excerpt"><?php the_excerpt(); ?></div>

						</div>		

					</div>


				<?php endwhile; else: ?>
				
				<div class="row wrapper category-page--empty">
					<div class="col-s-12">
						<p><?php _e('There are no posts in this category'); ?></p>
					</div>
				</div>
				
				<?php endif; ?>

			</div>

			
		</div>
<?php get_footer(); ?>
