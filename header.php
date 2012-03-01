<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		
		<!-- Use the .htaccess and remove these lines to avoid edge case issues.
		More info: h5bp.com/b/378 -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title>Stefan Ledin - webbutvecklare</title>
		<meta name="description" content="Webbutvecklaren Stefan Ledins portfolio och blogg.">
		<meta name="author" content="Stefan Ledin">
		
		<!-- Mobile viewport optimized: j.mp/bplateviewport -->
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
		
		<!-- CSS: implied media=all -->
		<!-- CSS concatenated and minified via ant build script-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
		<!-- end CSS-->
		
		<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
		<link rel="icon" href="<?php bloginfo('template_directory');?>/favicon.ico" />
		<link rel="apple-touch-icon" href="<?php bloginfo('template_directory');?>/apple-touch-icon.png" />
		
		<!-- All JavaScript at the bottom, except for Modernizr / Respond.
		Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
		For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
		<script src="<?php bloginfo('template_directory');?>/js/libs/modernizr-2.0.6.min.js"></script>
		
		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-28191752-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
		
	</head>
	
	<body <?php body_class(); ?>>
	
	  <div id="container">
	  
	    <header>
	
			<h1>&lt; Stefan Ledin &gt;<br /><span>HTML * CSS * Javascript * PHP * MySQL * Wordpress * Drupal</span></h1>
	
	    </header>
	    
	    <nav>
	    
			<?php wp_page_menu('show_home=Blogg'); ?>
	    
	    </nav>
	    
	    <div class="background-gradient">