<?php get_header(); 
$detect = new Mobile_Detect; ?>
	
	<article id="m-postlist">
		<?php if (!post_is_in_descendant_category(9) || current_user_can('delete_users')) {
			if ( have_posts() ) { while ( have_posts() ) { the_post();
			
				if ($detect->isMobile() && !$detect->isTablet()) {
				
					get_template_part( 'parts/listitem_short');
					
				} else {
				
					if ( has_post_thumbnail() ) {
					
						get_template_part( 'parts/listitem_thumbnail');
						
					} else {
					
						get_template_part( 'parts/listitem_full');
						
					} // end if has thumbnail
					
				} // end if is mobile
				
			}} // end loop
			
		} // end content-conditionals ?>
	</article>

	<?php get_template_part( 'parts/pagination');
	
get_footer(); ?>