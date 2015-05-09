<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Modern Minimal
 */
?>

<a id="post-<?php the_ID(); ?>" <?php post_class( 'entry-container ' . $orientation ); ?> href="<?php echo get_permalink() ?>" rel="bookmark">
	
	<header class="entry-header text-center">	
		<?php the_title( '<h1 class="entry-title h2">', '</h1>' ); ?>
		<div class="entry-meta h5">
			<time class="entry-date published" datetime="<?php echo get_the_date( 'c' ) ?>">
				<?php echo utf8_encode(strftime("%Y. %B %#d.",get_post_time())); ?>
			</time>
		</div>
	</header>
	<?php if ( has_post_thumbnail() ) : 
		$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'medium' );
		$thumb_url = $thumb_url[0];
	?>	
		<span class="entry-background" style="background-image: url('<?php echo $thumb_url ?>');"></span>
	<?php endif; ?>

</a><!-- #post-<?php the_ID(); ?> -->