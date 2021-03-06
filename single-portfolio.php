<?php get_header(); ?>
	    <div id="main" role="main">

	    	<header>
	    		<h2>Portfolio</h2>
	    	</header>

	    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    		<?php
	    			$terms_tekniker = wp_get_post_terms(get_the_ID(),'tekniker');
	    			$terms_projekttyp = wp_get_post_terms(get_the_ID(),'projekttyp');
	    		?>

	    		<article class="clearfix">
	    			
	    			<div class="post-thumbnail">
		    			
		    			<?php the_post_thumbnail(); ?>
	    			
	    			</div>

				    	<h2><?php the_title(); ?></h2>

				    	<ul class="metadata">
						<?php 
							for ($i=0; $i < count($terms_projekttyp); $i++) { 
								if (count($terms_projekttyp) == 1) {
									echo '<li>Projekttyp: '.$terms_projekttyp[$i]->name.'</li>';	
								} else {
							 		if ($i == 0) {
							 			echo '<li>Projekttyp: '.$terms_projekttyp[$i]->name.', ';
							 		} elseif ($i == count($terms_projekttyp)-1) {
							 			echo $terms_projekttyp[$i]->name . '</li>';
							 		} else {
							 			echo $terms_projekttyp[$i]->name . ', ';
							 		}
								}
								
							}
						?>
						 </ul>

	    				<?php the_content('Läs mer'); ?>
	    			
	    			<h4>Tekniker:</h4>
						 <ul>
						 	<?php 
						 		foreach ($terms_tekniker as $tekniker) {
						 			echo '<li>'.$tekniker->name.'</li>';
						 		}
						 	?>
						 </ul>					
	    			
	    		</article>
	    	
	    	<?php endwhile; else:?>
	    	
	    		<h1>Hoppsan, här fanns inget att visa.</h1>
	    	
	    	<?php endif;?>
			
	    </div> <!-- Slut #main -->
	    <aside>
	    	<section>
	 	
	 		<h5>Projekttyper:</h5>
	 	
	 		<nav>
	 	
	 			<ul>
	 		
	 				<?php 
	 					$allTerms_projekttyper = get_terms('projekttyp');
	 					
	 					foreach ($allTerms_projekttyper as $projekttyp) {
	 						echo '<li><a href="'.get_term_link($projekttyp->slug, 'projekttyp').'">'.$projekttyp->name.'</a></li>';
	 					
	 					}
	 				 ?>
	 		
	 			</ul>
	 		
	 		</nav>
	 	
	 	</section><!-- Slut kategorier -->
	 	
	 	<section>
	 	
	 		<h5>Tekniker:</h5>
	 	
	 		<nav>
	 	
	 			<ul>
	 		
	 				<?php 
	 					$allTerms_tekniker = get_terms('tekniker');
	 					
	 					foreach ($allTerms_tekniker as $tekniker) {
	 						echo '<li><a href="'.get_term_link($tekniker->slug, 'tekniker').'">'.$tekniker->name.'</a></li>';
	 					
	 					}
	 				 ?>
	 		
	 			</ul>
	 		
	 		</nav>
	 	
	 	</section><!-- Slut tekniker -->
	    <?php get_sidebar(); ?>
		
<?php get_footer(); ?>