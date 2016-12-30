<?php

// check if the flexible content field has rows of data
if( have_rows('flexible_content') ):

	// loop through the rows of data
	while ( have_rows('flexible_content') ) : the_row();

		if( get_row_layout() == 'full_width_image' ): 

			$image = get_sub_field( 'full_width_image_field' ); 

			if ( $image ) { ?>

				<div class="row">
					<div class="col-s-12 full-width no-space">
						<img src="<?php echo esc_url( $image ); ?>" class="full-width-image">
					</div>
				</div>

			<?php
			} ; // End if $image

		elseif( get_row_layout() == 'content_area' ): 

			$content = get_sub_field( 'content_area_field' ); 

			if ( $content ) { ?>

				<div class="row wrapper">
					<div class="col-m-1 col-l-2"></div>
					<div class="col-s-12 col-m-10 col-l-8">
						<div class="content-area base-spacing-top base-spacing-bottom-x2">
						<?php echo $content; ?>
						</div>
					</div>
					<div class="col-m-1 col-l-2"></div>
				</div>

			<?php
			} ; // End if $image

		elseif( get_row_layout() == 'wide_image' ): 

			$imagewide = get_sub_field( 'wide_image_field' ); 

			if ( $imagewide ) { ?>

				<div class="row">
					<div class="col-m-1"></div>
					<div class="col-s-12 col-m-10">
						<img src="<?php echo esc_url( $imagewide ); ?>" class="full-width-image">
					</div>
					<div class="col-m-1"></div>
				</div>

			<?php
			} ; // End if $image


		elseif( get_row_layout() == 'two_images_full_width' ): 

			$imageone = get_sub_field( 'image_one' ); 
			$imagetwo = get_sub_field( 'image_two' ); 


			if ( $imageone && $imagetwo ) { ?>

				<div class="row">
					<div class="col-s-12 col-m-6 full-width no-space">
						<img src="<?php echo esc_url( $imageone ); ?>" class="full-width-image">
					</div>
					<div class="col-s-12 col-m-6 full-width no-space">
						<img src="<?php echo esc_url( $imagetwo ); ?>" class="full-width-image">
					</div>
				</div>

			<?php
			} ; // End if $image

		elseif( get_row_layout() == 'two_images_wide' ): 

			$imageonewide = get_sub_field( 'image_one_wide' ); 
			$imagetwowide = get_sub_field( 'image_two_wide' ); 


			if ( $imageonewide && $imagetwowide ) { ?>

				<div class="row">
					<div class="col-m-1"></div>
					<div class="col-s-12 col-m-10">
						<img src="<?php echo esc_url( $imageonewide ); ?>" class="full-width-image-2"><img src="<?php echo esc_url( $imagetwowide ); ?>" class="full-width-image-2">
					</div>
					<div class="col-m-1"></div>
				</div>

				<!--<div class="row">
					<div class="col-m-1"></div>
					<div class="col-s-12 col-m-5 full-width">
						<img src="<?php echo esc_url( $imageonewide ); ?>" class="full-width-image">
					</div>
					<div class="col-s-12 col-m-5 full-width">
						<img src="<?php echo esc_url( $imagetwowide ); ?>" class="full-width-image">
					</div>
					<div class="col-m-1"></div>
				</div>-->

			<?php
			} ; // End if $image



		elseif( get_row_layout() == 'image_+_text' ): 

			$imagealternating = get_sub_field( 'image_alternating' ); 
			$textalternating = get_sub_field( 'text_alternating' ); 
			$imageleft = get_sub_field('alternating') == "image_left";
			$imageright = get_sub_field('alternating') == "image_right";
			$overlapping = get_sub_field('overlapping');

			if ( $overlapping ) {

				if( in_array('overlap_bottom', $overlapping) ) {

					$overlappingclass = "overlapping";
				
				}

			}


			if ( $imagealternating && $textalternating && $imageleft ) { ?>

				<div class="row wrapper base-spacing-overall-x2">
					<div class="col-s-12 col-m-6 <?php echo $overlappingclass; ?> alternating-image">
						<img src="<?php echo esc_url( $imagealternating ); ?>">
					</div>
					<div class="col-m-1"></div>
					<div class="col-s-12 col-m-5">
						<div class="alternating-text"><?php echo $textalternating; ?></div>
					</div>
				</div>

			<?php
			}  // End if $image

			elseif ( $imagealternating && $textalternating && $imageright ) { ?>

				<div class="row wrapper base-spacing-overall-x2 <?php echo $overlappingclass; ?>">
					
					<div class="col-s-12 col-m-5 <?php echo $overlappingclass; ?>">
						<div class="alternating-text"><?php echo $textalternating; ?></div>
					</div>
					<div class="col-m-1"></div>
					<div class="col-s-12 col-m-6 <?php echo $overlappingclass; ?> alternating-image" style="background-image:url('<?php echo esc_url( $imagealternating ); ?>')">
						<!--<img src="<?php echo esc_url( $imagealternating ); ?>">-->
					</div>
				</div>

			<?php
			} ; // End if $image

			


		endif;

	endwhile;

else :

// no layouts found

endif;

?>