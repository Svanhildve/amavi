<?php get_header(); ?>
		
		<section id="content">
			
			<div id="blogposts_headline">
				<h1>Where I ramble about design</h1>
			</div>
			
			<article id="blogposts2">
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						
						<div class="date"><?php echo get_the_date('d/m/Y'); ?></div><div class="comment"><?php comments_popup_link( 'no comments', 'one comment', '% comments' ); ?></div>
						
						<div class="entry">
							<?php the_excerpt(); ?>
							<a href="<?php echo get_permalink(); ?>"> Read More...</a>
						</div>
					</article>
				

				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no content! :( '); ?></p>
				<?php endif; ?>
			
			</article>

			<?php get_sidebar(); ?>
			
			<br class="clear" />
			
		</section>
<?php get_footer(); ?>
