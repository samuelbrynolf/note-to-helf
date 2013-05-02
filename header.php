<?php global $idobject; ?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"><!--<![endif]-->

<head>
    <meta charset="utf-8"/>
    
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
    
    <script src="<?php bloginfo('template_directory'); ?>/scripts/browsersupport/modernizr-all.js"></script>
    <!--[if lt IE 9]><script src="<?php bloginfo('template_directory'); ?>/scripts/browsersupport/html5shiv.js"></script><![endif]-->
    
    <title>Note to helf</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="l-container m-global-header" role="banner">
		<?php if (is_home()) { ?>
			<h1><?php bloginfo('blogtitle'); ?></h1>
		<?php } else { ?>
			<h2><?php bloginfo('blogtitle'); ?></h2>
		<?php }?>
		<a href="#m-global-nav">Meny</a>
	</header>
	
	<div class="l-blockorder">
		<div class="l-container m-global-nav" id="m-global-nav" role="navigation">
			<?php wp_nav_menu(array('container' => 'nav', 'container_class' => 'l-span-small-12',)); ?>
			<?php include('searchform.php'); ?>
		</div>
		
		<article class="l-blockorder-small m-main">
		
			<section class="s-is-hidden">
					<header class="l-container">
						<div class="l-span-small-12">
							<h1>Index: <?php bloginfo('blogname'); ?></h1>
						</div>
					</header>
					
					<ul class="l-container">
						<?php $tags = get_tags();
							if ($tags) {
							foreach ($tags as $tag) {
								echo '<li class="l-span-small-12"><a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "See allt inom &auml;mnet %s" ), $tag->name ) . '" ' . '>' . $tag->name .'<span>('. $tag->count.')</span></a></li>';
							}
						} ?>
				</ul>
			</section>