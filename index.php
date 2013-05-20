<?php get_header(); ?>
	
	<article id="m-postlist">
		<?php if ( have_posts() ) { while ( have_posts() ) { the_post();
		
			if (post_is_in_descendant_category( 63 )) { 
				include( 'parts/listitem-log.php');
			} elseif(in_category(27)) {
				include( 'parts/listitem-link.php');
			} else {
				include( 'parts/listitem-default.php');
			}
			
		}} ?>
	</article>
	
	<nav class="l-container m-pagination" id="m-pagination">
		<div class="l-span-S12">
			<p class="m-pagination-previous"><?php previous_posts_link('Previous Page');?></p>
			<p class="m-pagination-next"><?php next_posts_link('Ladda fler');?></p>
		</div>
	</nav>

<?php get_footer(); ?>