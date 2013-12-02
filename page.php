<?php get_header(); 
$embeds = get_secondary_content( 'Videos' ); ?>

<article class="m-article" role="main">
	
	<?php if (have_posts()) { while (have_posts()) { the_post();
	
		if( $embeds ) { ?>
			<div class="m-article-embed" id="article-embed">
				<?php echo $embeds; ?>
			</div>
		<?php } else {
			if (has_post_thumbnail()) { ?>
				<figure class="m-article-figure">
					<?php the_post_thumbnail('large', array('class' => 'm-single-thumbnail')); ?>
				</figure>
			<?php } 
		} ?>
	
		<header class="l-container m-article-header<?php if (has_post_thumbnail()) { ?> has-thumb<?php } ?>">
			<?php UA_desktop_part('bookmark'); ?>
			<div class="l-span-A12">
				<h1 class="t-large"><?php the_title(); ?></h1>
			</div>
		</header>

		<?php get_template_part( 'parts/page_body'); 
				
	}} // end main loop ?>
	
	</article>

<?php get_footer(); ?>