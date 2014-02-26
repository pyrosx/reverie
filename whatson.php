		<?php
			global $cat;
			global $bar;
			global $t;

			$q = array('posts_per_page' => 1, 'category_name' => $bar."_whatson");

			$latest_cat_post = new WP_Query($q);
			if( $latest_cat_post->have_posts() ) {
				while( $latest_cat_post->have_posts() ) {
					$latest_cat_post->the_post(); 
					$title = get_the_title(); 				
				}
			}
			wp_reset_postdata();
		?>		

		<div class="whatsoncontainer">
			<div class="primary-color">What's On:</div>
			<div class="dyn"><a href="<?php echo $cat.'whatson';?>"><?php echo $title ?></a></div>
			<div class="small-only"><br/></div>		
			<div class="accent"> <a href="<?php echo $cat.'whatson'; ?>">View More <i class="fa fa-caret-right"></i></a></div>
		</div>
