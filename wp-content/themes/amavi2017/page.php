<?php get_header(); ?>
		
		<div class="standard-page">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
				<div class="standard-page__heading row wrapper">

					<div class="col-s-12">
					
						<h1 class="h1--page"><?php single_post_title( '' ); ?></h1>

					</div>

				</div>

				<div class="standard-page__content row wrapper">

					<div class="col-s-12 col-m-offset-2 col-m-8">

					<?php the_content(''); ?>

					</div>

				</div>

			<?php endwhile; else: ?>

				<p><?php _e('Sorry, no content! :( '); ?></p>
			
			<?php endif; ?>
			
		</div>

<?php get_footer(); ?>