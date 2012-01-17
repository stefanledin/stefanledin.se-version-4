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
				?>
				<article class="clearfix">
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
					<div class="excerpt">
						<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
						<ul class="metadata">
						<?php 

							foreach ($terms_projekttyp as $projekttyp) {
								echo '<li>Projekttyp: <a href="'.get_term_link($projekttyp->slug, 'projekttyp').'">'.$projekttyp->name.'</a></li>';
							}


						 ?>
						 </ul>
						 <!--<?php 
						 	echo '<pre>'.print_r($terms_projekttyp).'</pre>';
						 	for ($i=0; $i < count($terms_projekttyp); $i++) { 
						 		if ($i == 0) {
						 			echo '<li>Projekttyp: '.$terms_projekttyp[$i]->name.'</li>';	
						 		} 
						 		
						 	}
					 	?>-->
						 <p>Tekniker:</p>
						 <ul>
						 	<?php 
						 		foreach ($terms_tekniker as $tekniker) {
						 			echo '<li>'.$tekniker->name.'</li>';
						 		}
						 	?>
						 </ul>
						 <?php 
						 	$content = get_the_content();
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