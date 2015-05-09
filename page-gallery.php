<?php
/**
 * Template Name: Gallery Page
 * @package Modern Minimal
 */

get_header(); ?>

	<div id="gallery" class="gallery owl-carousel scene_element scene_element--fadein">
		

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'gallery' ); ?>

				<?php
				/*
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				*/
				?>

			<?php endwhile; // end of the loop. ?>

		
	</div><!-- #gallery -->


	<div class="gallery-nav gallery-button-prev element--pinned icon icon-bordered icon-circle">
		<svg class="icon arrow"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons.svg#chevron"></use></svg>
	</div>
	<div class="gallery-nav gallery-button-next element--pinned icon icon-bordered icon-circle">	
		<svg class="icon arrow"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons.svg#chevron"></use></svg>
	</div>
	
<?php get_footer(); ?>
