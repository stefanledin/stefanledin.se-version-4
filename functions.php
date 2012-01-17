<?php
	
	/*Miniatyrbilder för inlägg ska finnas*/
	add_theme_support('post-thumbnails');
	
	/*Ta bort "moore-hoppet*/
	function remove_more_jump_link($link) { 
		$offset = strpos($link, '#more-');
		if ($offset) {
			$end = strpos($link, '"',$offset);
		}
		if ($end) {
			$link = substr_replace($link, '', $offset, $end-$offset);
		}
		return $link;
	}
	add_filter('the_content_more_link', 'remove_more_jump_link');
	
	/*Lägg till en "Portfolio" post type*/
	add_action('init','create_post_type');
	
	function create_post_type() {
		register_post_type('Portfolio',
			array(
				'labels' => array(
					'name' => __('Portfolio'),
					'singular_name' => __('Portfolio')
				),
				'public' => true,
				'has_archive' => false,
				'menu_position' => 5,
				'supports' => array(
					'title','editor','thumbnail','custom-fields'
				),
				'taxonomies' => array(
					'projekttyp','tekniker'
				),
			)
		);
		// Skapa en ny taxonomy för Portfolio
		$labels = array(
		    'name' => _x( 'Projekttyp', 'taxonomy general name' ),
		    'singular_name' => _x( 'Projekttyp', 'taxonomy singular name' ),
		    'search_items' =>  __( 'Search trojekttyp' ),
		    'all_items' => __( 'All Projekttyp' ),
		    'parent_item' => __( 'Parent Projekttyp' ),
		    'parent_item_colon' => __( 'Parent Projekttyp:' ),
		    'edit_item' => __( 'Edit Projekttyp' ), 
		    'update_item' => __( 'Update Projekttyp' ),
		    'add_new_item' => __( 'Add New Projekttyp' ),
		    'new_item_name' => __( 'New Projekttyp Name' ),
		    'menu_name' => __( 'Projekttyp' ),
		  ); 	
		
		  register_taxonomy('projekttyp',array('portfolio'), array(
		    'hierarchical' => true,
		    'labels' => $labels,
		    'show_ui' => true,
		    'query_var' => true,
		    'rewrite' => array( 'slug' => 'projekttyp' ),
		  ));
		  
		  // Skapa taxonomyn Tekniker
		  $labels_tekniker = array(
		      'name' => _x( 'Tekniker', 'taxonomy general name' ),
		      'singular_name' => _x( 'Tekniker', 'taxonomy singular name' ),
		      'search_items' =>  __( 'Search Tekniker' ),
		      'all_items' => __( 'All Tekniker' ),
		      'parent_item' => __( 'Parent Tekniker' ),
		      'parent_item_colon' => __( 'Parent Tekniker:' ),
		      'edit_item' => __( 'Edit Tekniker' ), 
		      'update_item' => __( 'Update Tekniker' ),
		      'add_new_item' => __( 'Add New Tekniker' ),
		      'new_item_name' => __( 'New Tekniker Name' ),
		      'menu_name' => __( 'Tekniker' ),
		    ); 	
		  
		    register_taxonomy('tekniker',array('portfolio'), array(
		      'hierarchical' => true,
		      'labels' => $labels_tekniker,
		      'show_ui' => true,
		      'query_var' => true,
		      'rewrite' => array( 'slug' => 'tekniker' ),
		    ));
		  	
	}
	
	
?>