<?php get_header(); ?>
	    <div id="main" role="main">
	    	<?php 
	    		$category = get_the_category();
	    	 ?>
	    	 <header>
	    		<h2><a href="<?php bloginfo('url');?>">Blogg</a> » <?php echo $category[0]->cat_name;?></h2>
	    	 </header>
	    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    	
	    		<article class="clearfix">
    				
    				<div class="post-thumbnail">

	    				<?php the_post_thumbnail('thumbnail'); ?>

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
	    		<h5>Kategorier</h5>
	    		<nav>
	    			<ul>
	    		
	    				<?php wp_list_categories('title_li='); ?>
	    		
	    			</ul>
	    		
	    		</nav>
	    	
	    	</section><!-- Slut kategorier -->
	    	
	    <?php get_sidebar(); ?>
		
<?php get_footer(); ?>