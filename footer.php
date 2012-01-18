	    </div>
	    
	    <img src="<?php bloginfo('template_directory');?>/img/bottom_shadow.png" />
	
	  </div> <!--! end of #container -->
	
	
	  <!-- JavaScript at the bottom for fast page loading -->
	
	  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	  <script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory');?>/js/libs/jquery-1.6.2.min.js"><\/script>')</script>
	
	
	  <!-- scripts concatenated and minified via ant build script-->
	  <script defer src="<?php bloginfo('template_directory');?>/js/plugins.js"></script>
	  <script defer src="<?php bloginfo('template_directory');?>/js/script.js"></script>
	  <script src="<?php bloginfo('template_directory');?>/src/prettify.js"></script>
	  <script>prettyPrint();</script>
	  <!-- end scripts-->
	
		
	  <!-- Change UA-XXXXX-X to be your site's ID -->
	  <!--<script>
	    //window._gaq = [['_setAccount','UA-28191752-1'],['_trackPageview'],['_trackPageLoadTime']];
	    Modernizr.load({
	      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
	    });
	  </script>-->
	
	
	  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	       chromium.org/developers/how-tos/chrome-frame-getting-started -->
	  <!--[if lt IE 7 ]>
	    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	  <![endif]-->
	
	<?php wp_footer();?>  
	</body>
</html>