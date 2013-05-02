<?php /* Template Name: + Child pages */ ?>

<?php get_header(); ?>


<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
	<?php the_post_thumbnail('large', array('class' => 'm-listitem-thumbnail')); ?>
	<div class="l-container">
		<header class="l-span-S12">
			<hgroup>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?><?php // OBS använd h2 ?>
			</hgroup>
		</header>
	</div><?php // end l-container ?>
<?php }} ?>

<aside>
		<header class="l-container">
			<div class="l-span-S12">
				<h1>Projekt</h1>
			</div>
		</header>
	
	<?php $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

	foreach( $mypages as $page ) {		
		$content = $page->post_content;
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'large' );
		if ( ! $content ) // Check for empty page
			continue;

		$content = apply_filters( 'the_content', $content );
	?>
		<?php echo '<img src="'.$thumbnail[0].'" alt="" />'; ?>
		<h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
		<?php echo $content; ?>
	<?php }	?>
</aside>

<?php get_footer(); ?>




				
