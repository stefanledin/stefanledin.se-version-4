<?php get_header(); ?>
	    <div id="main" role="main">
	    
	    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    	
	    		<article class="clearfix">
	    			
	    			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
	    			
	    			<!--<div class="excerpt">-->
	    			
		    			<h2><?php the_title();?></h2>
		    			
						<?php the_content(); ?>
	    			
	    			<!--</div>-->
	    	
	    		</article>
	    	
	    	<?php endwhile; else:?>
	    	
	    		<h1>Hoppsan, här fanns inget att visa.</h1>
	    	
	    	<?php endif;?>
			
	    </div> <!-- Slut #main -->
	    <aside>
	    <?php get_sidebar(); ?>
		
<?php get_footer(); ?>