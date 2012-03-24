<?php get_header(); ?>
	    <div id="main" role="main">
	    	
	    	<header>
	    		<h2>Blogg</h2>
	    	</header>
	    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    	
	    		<article class="clearfix">
	    			
	    			<div class="post-thumbnail">
		    			
		    			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

		    				<?php the_post_thumbnail('thumbnail'); ?>
		    			
		    			</a>
	    			
	    			</div>
	    			
	    			<div class="excerpt">
	    			
		    			<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
		    			
		    			<ul class="metadata">
		    			
		    				<li>Publicerat: <?php the_time('Y-m-d'); ?></li>
		    				
		    				<li>Kategori: <?php the_category(', '); ?></li>
		    			
		    			</ul>

						<?php the_content('Läs mer'); ?>
	    			
	    			</div>
	    	
	    		</article>
	    	
	    	<?php endwhile; else:?>
	    	
	    		<h1>Hoppsan, här fanns inget att visa.</h1>
	    	
	    	<?php endif;?>
			
	    </div> <!-- Slut #main -->
	    
	    <aside>
	    	
	    	<section>
	    		<h5>Kategorier:</h5>
	    		<nav>
	    			<ul>
	    		
	    				<?php wp_list_categories('title_li='); ?>
	    		
	    			</ul>
	    		
	    		</nav>
	    	
	    	</section><!-- Slut kategorier -->
	    	
	    <?php get_sidebar(); ?>
		
<?php get_footer(); ?>