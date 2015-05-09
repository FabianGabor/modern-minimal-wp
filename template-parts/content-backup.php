<?php
/**
 * @package Modern Minimal
 */
?>
<?php
	$sticky = is_sticky();
	if ($sticky) {
		$orientation = 'box-2x2';
	}
	else {
		$orientation = image_orientation();
	}
?>

<div id="post-<?php the_ID(); ?>" <?php post_class( 'box ' . $orientation ); ?>>
	<a class="content" href="<?php echo get_permalink() ?>" rel="bookmark">
		
		<?php the_title( '<h1 class="content-title">', '</h1>' ); ?>
		
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="img">
				<?php the_post_thumbnail( 'medium' ); ?>
			</div>
		<?php endif; ?>
	</a>

</div><!-- #post-<?php the_ID(); ?> -->