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
	    <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no"/>
	    
	    <link href='http://fonts.googleapis.com/css?family=PT+Serif:400italic' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
	    <!--[if lt IE 9]><script src="<?php bloginfo('template_directory'); ?>/scripts/browsersupport/ie9/html5shiv.js"></script><![endif]-->
	    <!--[if lte IE 8]>
	    	<script src="<?php bloginfo('template_directory'); ?>/scripts/browsersupport/ie8/respond.min.js"></script>
	    	<script src="<?php bloginfo('template_directory'); ?>/scripts/browsersupport/ie8/getComputedStyle.js"></script>	
	    <![endif]-->
	    <!--[if lte IE 7]>
	    	<script src="<?php bloginfo('template_directory'); ?>/scripts/browsersupport/ie7/icons-lte-ie7.js"></script>	
	    <![endif]-->
	    
	    <title>404&mdash;Sidan kunde inte hittas</title>
	    
	    	<script>
					/mobile/i.test(navigator.userAgent) && !location.hash && setTimeout(function () {
	  				if (!pageYOffset) window.scrollTo(0, 1);
					}, 500);
				</script>
	</head>
	
	<body <?php body_class(); ?>>
		<header class="l-container m-global-header" id="global-header" role="banner">
			<div class="l-span-S12">
				<p class="t-small"><?php bloginfo('description'); ?></p>
				<a class="ir" id="blogname" href="<?php bloginfo('url'); ?>" title=""><?php bloginfo('blogtitle'); ?></a>
			</div>
		</header>

		<article>	
		
			<a href="<?php bloginfo('url'); ?>" title="">
				<header class="l-container msg404">
					<div class="l-span-S12">
						<h1 class="t-xlarge cough">Compu&#8217;er<br/>says no (404)</h1>
					</div>
				</header>
			</a>
			
			<p class="error404-paragraph">
				Din URL &auml;r felstavad eller s&aring; har sidan upph&ouml;rt.<br/><a href="<?php bloginfo('url'); ?>" title="">Till startsidan</a>
			</p>
			
		</article>
		
		<script src="<?php bloginfo('template_directory'); ?>/scripts/fastclick.js"></script>
		<?php wp_footer(); ?> 
	</body>
</html>