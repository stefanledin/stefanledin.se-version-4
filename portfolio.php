<?php
/*
Template name: Portfolio
*/
?>
<?php get_header(); ?>
	<div id="main" role="main">
		
		<header>
			<h2>Portfolio</h2>
		</header>
		
		<?php 
			$args = array('post_type' => 'portfolio');
			$loop = new WP_Query($args);
			
			while ($loop->have_posts() ) : $loop->the_post();
				$terms_projekttyp = wp_get_post_terms(get_the_ID(),'projekttyp');
				$terms_tekniker = wp_get_post_terms(get_the_ID(),'tekniker');
				$projekt_url = get_post_meta($post->ID,'link',true);
				$content = get_the_content();
				?>
				<article class="clearfix">
					<div class="post-thumbnail">
		    			<?php 

		    				if (!empty($content)) {
		    					?>
		    						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

					    				<?php the_post_thumbnail(); ?>
					    			
					    			</a>
		    					<?php
		    				} else {

		    					the_post_thumbnail();

		    				}

		    			?>

	    			</div>
					<div class="excerpt">
						<h3>
							<?php 
								if (!empty($content)) {
									?>
										<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
									<?php
								} else {
									the_title();
								}
							?>
						</h3>
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
						 
						 <p>Tekniker:</p>
						 <ul>
						 	<?php 
						 		foreach ($terms_tekniker as $tekniker) {
						 			echo '<li>'.$tekniker->name.'</li>';
						 		}
						 	?>
						 </ul>
						 <?php 
						 	if (!empty($content)) : ?>
						 <a href="<?php the_permalink();?>">Läs mer</a> |<?php endif;?> <a href="<?php echo $projekt_url;?>" target="_blank"><?php echo $projekt_url;?></a>
					 </div>
 				</article>
				<?php
			endwhile;
		 ?>
		
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