			<div class="pagination row wrapper">

				<div class="pagination__body col-s-12">

					<div class="pagination__next"><?php previous_posts_link( 'Previous page' ); ?></div>
					<div class="pagination__current">

						<?php 

							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
							echo 'page '. $paged.' of '.$wp_query->max_num_pages; 

						?>
						
					</div>
					<div class="pagination__previous"><?php next_posts_link( 'Next page' ); ?></div>

				</div>

			</div>