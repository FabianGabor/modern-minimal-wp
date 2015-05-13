<?php
/**
 * The template for displaying search results pages.
 *
 * @package Modern Minimal
 */

get_header(); ?>

	<div id="container" class="scene_element scene_element--fadein">
		

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
				?>

			<?php endwhile; ?>

			<?php //the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		
	</div><!-- #container -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
