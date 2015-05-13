<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Modern Minimal
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<style>
	#infinite-handle {
		position: fixed;
		bottom: 1rem;
		left: 50%;
		z-index: 99;
	}
	
	/* Inifnite Scroll - Spinner */
	.infinite-loader {
		color: #fff !important;
		position: fixed;
		left: 50%;
		bottom: 1.625rem;
		text-indent: 0 !important;
		//display: block !important;
	}
	.infinite-loader .spinner {
		margin-left: 0 !important;
	}
	
	

	[data-src] { background-image: none !important; }
	[data-src]:after { background-image: none !important; }

	<?php $menu = wp_get_nav_menu_object("Primary Menu" ); ?>
	.menu-item {
		height: <?php echo 100 / $menu->count; ?>% !important;
	}
	
	<?php
	$menu_items = wp_get_nav_menu_items( $menu );
	
	$output = '';
	foreach ( $menu_items as $key => $menu_item ) {		
		$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id( $menu_item->object_id ), 'medium' );
		$thumb_url = $thumb_url[0];
		if ( $thumb_url !== null ) {
			$output .= "#menu-item-$menu_item->ID::after { background-image: url('$thumb_url'); } ";
		} else {				
			if (function_exists('category_image_src')) {
				$thumb_url = category_image_src( array( 'term_id' => $menu_item->object_id, 'size' => 'full' ) , false );
				$output .= "#menu-item-$menu_item->ID::after { background-image: url('$thumb_url'); } ";
			}
		}
	}
	echo $output;
	?>
		
	@media only screen and (min-width:64.063em) {
		<?php
		$output = '';
		foreach ( $menu_items as $key => $menu_item ) {		
			$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id( $menu_item->object_id ), 'full' );
			$thumb_url = $thumb_url[0];
			if ( $thumb_url !== null ) {
				$output .= "#menu-item-$menu_item->ID::after { background-image: url('$thumb_url'); } ";
			} else {				
				if (function_exists('category_image_src')) {
					$thumb_url = category_image_src( array( 'term_id' => $menu_item->object_id, 'size' => 'full' ) , false );
					$output .= "#menu-item-$menu_item->ID::after { background-image: url('$thumb_url'); } ";
				}
			}
		}
		echo $output;
		?>
	}
	
	<?php
	if (is_page( array( 'oneletrajz', 'Önéletrajz' ))) {
		$bg_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
		$bg_url = $bg_url[0];
	?>
		body::after {
			background: url("<?php echo $bg_url; ?>") no-repeat fixed center center / cover transparent !important;
		}
	
		@media only screen and (min-width:64.063em) {
			<?php
			$bg_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
			$bg_url = $bg_url[0];
			?>
			body::after {
				background: url("<?php echo $bg_url; ?>") no-repeat fixed center center / cover transparent !important;
			}
		}
	<?php
	}
	?>
	
	<?php
	if (is_page( array( 'kapcsolat', 'Kapcsolat' ))) {
		$bg_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
		$bg_url = $bg_url[0];
	?>
		body::after {
			background: url("<?php echo $bg_url; ?>") no-repeat fixed center center / cover transparent !important;
			content: '';
			display: block;
			position: fixed;
			width: 100%;
			height: 100%;
			opacity: .5;
			z-index: -1;
			filter: blur(5px);
		}
	
		@media only screen and (min-width:64.063em) {
			<?php
			$bg_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
			$bg_url = $bg_url[0];
			?>
			body::after {
				background: url("<?php echo $bg_url; ?>") no-repeat fixed center center / cover transparent !important;
			}
		}
	<?php
	}
	?>
</style>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="main">


	<header id="header" class="site-header" role="banner">

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img id="logo" class="icon icon-circle icon-bordered" src="<?php echo get_template_directory_uri(); ?>/img/logo-100x100.png" width="100" height="100" alt="Fábián Gábor logo"></a>
		
		<?php //the_title( '<h1 id="title" class="title">', '</h1>' ); ?>
		<h1 id="title" class="title">
			<?php //echo rtrim( wp_title( '', false ), ' - Fábián Gábor' ); ?>
			<?php 
			if (is_category()) { single_cat_title(); }
			if (is_page()) { the_title(); }
			if (is_single()) { the_title(); }
			if (is_search()) {
				printf( __( 'Search Results for: %s', 'modern-minimal' ), '<span>' . get_search_query() . '</span>' );
			}
			?>			
		</h1>
		
		<div class="icon icon-circle icon-bordered icon-hamburger right">
			<svg width="100%" height="100%"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons.svg#hamburger"></use></svg>
		</div>
		
		<?php
		if ((is_category() || is_single()) || is_search()) {
			get_search_form(); 
		}
		?>
		
	</header><!-- #header -->
	
	
	

	<div id="menu" class="menu">
		<?php
		 $menuArgs = array(
			'menu_id' => 'primary-menu',			
			'container' => false,
			'items_wrap' => '%3$s',
			'walker' => new nolist_walker()
		);
		wp_nav_menu($menuArgs);		
		?>
	</div>