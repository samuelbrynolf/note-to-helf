<?php get_header(); ?>

<article <?php if (post_is_in_descendant_category( 63 )) { ?>id="set-current-menuItem" <?php } ?>class="m-article">
	<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
		
		<?php if ( has_post_thumbnail() ) { ?>
			<figure class="m-article-figure">
				<?php the_post_thumbnail('large', array('class' => 'm-single-thumbnail')); ?>
			</figure>
		<?php } ?>
	
		<header class="l-container m-article-header<?php if ( has_post_thumbnail() ) { ?> has-thumb<?php } ?>">
			<?php UA_include('isMobile', 'bookmark.php'); ?>
			<div class="l-span-S12">
				<h1 class="t-large"><?php the_title(); ?></h1>
			</div>
		</header>
			
		<?php if (has_post_format('aside')) { 
			get_template_part( 'parts/single-aside'); 
		} else { 
			get_template_part( 'parts/single-full');
		} ?>

		<?php related_posts(); ?>
		
	<?php }} ?>
	
</article>
	
<?php get_footer(); ?>