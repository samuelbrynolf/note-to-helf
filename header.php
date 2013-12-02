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
	  
	  <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';</script>
 
	  <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700' rel='stylesheet' type='text/css'>
	  
	  <script>
    	window.matchMedia=window.matchMedia||function(a,b){var c,d=a.documentElement,e=d.firstElementChild||d.firstChild,f=a.createElement("body"),g=a.createElement("div");return g.id="mq-test-1",g.style.cssText="position:absolute;top:-100em",f.style.background="none",f.appendChild(g),function(a){return g.innerHTML='&shy;<style media="'+a+'"> #mq-test-1 { width: 42px; }</style>',d.insertBefore(f,e),c=g.offsetWidth===42,d.removeChild(f),{matches:c,media:a}}}(document),window.eCSSential=function(a,b){function o(a){var b=a===c?'<meta id="eCSS">':"",d='<link href="',e='" rel="stylesheet">',g=[],h=[];for(var i in a)a.hasOwnProperty(i)&&(g.push(a[i].href),h.push(a[i].href+'" media="'+a[i].mq));return f.concat?d+f.concat(g)+e+b:d+h.join('" '+e+d)+e+b}"use strict";var c=[],d=[],e=[],f=b||{},g=window,h=g.document,i=h.getElementsByTagName("script")[0],j=/(min|max)-(width|height)/gmi,k=g.navigator.appVersion.match(/MSIE ([678])\./)&&RegExp.$1,l=new RegExp("(IE"+k+")|(IE)","g");for(var m in a)if(a.hasOwnProperty(m)){var n=m.match(l);g.matchMedia(m).matches||k&&(f.oldIE||n&&n[1])?c.push({mq:f.oldIE||n?"all":m,href:a[m]}):!n&&(f.deferAll||!m.match(j)||g.matchMedia(m.replace(j,"$1-device-$2")).matches)&&d.push({mq:m,href:a[m]})}if(c.length){h.write(o(c)),i=h.getElementById("eCSS");var p=i.parentNode.getElementsByTagName("link");for(var q=0,r=p.length;q<r;q++)(function(a){var b=g.setTimeout(function(){var b=a.nextSibling;a.parentNode.removeChild(a),b.parentNode.insertBefore(a,b),e.push(a)},f.patience||8e3);a.onload=function(){clearTimeout(b)}})(p[q])}if(d.length){var s=h.createElement("div");s.innerHTML=o(d),i.parentNode.insertBefore(s,i)}return{css:a,config:b,block:c,defer:d,timedout:e}};

      eCSSential({
	      "all": "<?php bloginfo('template_directory'); ?>/CSS/alpha.css",
	      "(min-width: 40.625em)": "<?php bloginfo('template_directory'); ?>/CSS/beta.css",
	      "(min-width: 58.75em)": "<?php bloginfo('template_directory'); ?>/CSS/charlie.css",
	      "(min-width: 72em)": "<?php bloginfo('template_directory'); ?>/CSS/delta.css"
      });
    </script>
    
    <noscript>
    	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/CSS/no-js.css">
    </noscript>
	  
	  <!--[if lt IE 9]>
	  	<script src="<?php bloginfo('template_directory'); ?>/scripts/browsersupport/ie9/html5shiv.js"></script>
	  <![endif]-->
	  
	  <!--[if lte IE 8]>
			<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/CSS/IE8.css">
	  <![endif]-->
	  
	  <!--[if lte IE 7]>

	  <![endif]-->
	  
	  <link href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon.png" rel="apple-touch-icon" />
		<link href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
		<link href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
		<link href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />
	  
	  <title>Note to helf</title>
	  <?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
		
		<header class="l-container m-global-header" id="global-header" role="banner">
			<div class="l-span-A12">
				<?php if (is_home()) { ?>
					<h1><a class="ir tappilyTap" id="blogname" href="<?php bloginfo('url'); ?>" title=""><?php bloginfo('blogtitle'); ?></a></h1>
				<?php } else { ?>
					<a class="ir tappilyTap" id="blogname" href="<?php bloginfo('url'); ?>" title=""><?php bloginfo('blogtitle'); ?></a>
				<?php }?>
				
				<a id="menu-button" class="m-menu-button jumper" href="#m-global-nav" rel="nofollow">
					<p class="front"><span class="visuallyhidden">Meny</span></p>
				</a>
				
			</div>
		</header>
		
		<?php UA_desktop_part('editable_aside'); ?>