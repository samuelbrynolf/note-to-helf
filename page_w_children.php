<?php /* Template Name: + Child pages */ ?>

<?php get_header(); ?>

<article role="main">
	<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
		<div class="l-container">
			<div class="l-span-S12">
				<?php if ( has_post_thumbnail() ) { 
					echo '<figure>';
						the_post_thumbnail('large', array('class' => 'm-listitem-thumbnail'));
					echo '</figure>';
				} ?>
			</div>
		</div>
		
		<div class="l-container">
			<header class="l-span-S12">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?><?php // OBS använd h2 ?>
			</header>
		</div><?php // end l-container ?>
	
		<aside>
			<header class="l-container">
				<div class="l-span-S12">
					<h1>Projekt</h1>
				</div>
			</header>
			<ul class="l-container">
				<?php $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );
				foreach( $mypages as $page ) {		
					$content = $page->post_excerpt;
					$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'large' );
					if ( ! $content ) // Check for empty page
					continue;
					$content = apply_filters( 'the_content', $content );
					//BUILD HTML
					echo '<li class="l-span-S12">';
					if ( $thumbnail ) {
						echo '<figure><img src="'.$thumbnail[0].'" alt="" /></figure>'; 
					} 
					echo '<a href="'.get_page_link( $page->ID ).'"><h2>'.$page->post_title.'</h2>'.$content.'</a></li>';
				}	?>
			</ul>
		</aside>
	<?php }} ?>
</article>

<?php get_footer(); ?>




				
