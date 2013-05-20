<?php get_header(); ?>

<article class="m-article">
	<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
	
		<?php if ( has_post_thumbnail() ) { ?>
			<figure>
				<?php the_post_thumbnail('large', array('class' => 'm-listitem-thumbnail')); ?>
			</figure>
		<?php } ?>
	
		<header class="l-container m-article-header<?php if ( has_post_thumbnail() ) { ?> has-thumb<?php } ?>">
			<div class="l-span-S12 l-pre-M3">
				<h1 class="t-large"><?php the_title(); ?></h1>
			</div>
		</header>
			
		<?php if (has_post_format('aside')) { 
			get_template_part( 'parts/single-aside');
		} elseif (has_post_format('link')) {
			get_template_part( 'parts/single-link'); 
		} else { 
			get_template_part( 'parts/single-full');
		} ?>
	
		<div class="l-container">
			<footer class="l-span-S12 l-span-M9 l-pre-M3 m-article-footer" id="m-article-footer">
				<p>Footer med twitter, namn</p>
			</footer>
		</div>

	<?php }} ?>
	
</article>
	
<?php get_footer(); ?>