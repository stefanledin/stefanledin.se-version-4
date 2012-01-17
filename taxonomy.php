<?php get_header(); ?>
	<div id="main" role="main">
		<header>
			<h2>Portfolio » <?php single_term_title(); ?></h2>
			<?php 
				echo term_description();
			?>
		</header>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php 
				$terms_projekttyp = wp_get_post_terms(get_the_ID(),'projekttyp');
				$terms_tekniker = wp_get_post_terms(get_the_ID(),'tekniker');
			?>
			<article class="clearfix">
				<?php the_post_thumbnail(); ?>
				<div class="excerpt">
					<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
					<ul class="metadata">
						<?php 
							foreach ($terms_projekttyp as $projekttyp) {
								echo '<li>Projekttyp: <a href="'.get_term_link($projekttyp->slug, 'projekttyp').'">'.$projekttyp->name.'</a></li>';
							}
						 ?>
					 </ul>
					 <p>Tekniker:</p>
					 <ul>
					 	<?php 
					 		foreach ($terms_tekniker as $tekniker) {
					 			echo '<li>'.$tekniker->name.'</li>';
					 		}
					 	?>
					 </ul>
					 <a href="<?php the_permalink();?>">Läs mer</a>
				 </div>
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