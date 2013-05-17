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
			
		<?php if (has_post_format('aside')) { ?>
		
		<?php } elseif (has_post_format('link')) { ?>
		
		<?php } else { ?>
		
			<div class="l-container">
				<div class="l-span-S12 l-span-M3 m-article-meta">
					<p <?php post_class(); ?>>
						<?php $category = get_the_category();
						echo $category[0]->cat_name.': '.get_the_time('j F, Y').'<br/>';
		  			echo strip_tags(get_the_tag_list('',' + ','')); ?>
					</p>
				</div>
				
				<div class="l-span-S12 l-span-M9 t-preamble">
					<?php the_secondary_content( 'Ingress' ); ?>
				</div>
			</div>
			
			<div class="l-container">

				<div class="l-span-S12 l-span-M3 t-small" id="resources">
					<?php the_secondary_content( 'Resurser' ); ?>
				</div>

				<div class="l-span-S12 l-span-M9 m-the-content">
					<?php the_content(); ?>
				</div>
			</div>
			
		<?php } ?>
	
		<div class="l-container">
			<footer class="l-span-S12 l-span-M9 l-pre-M3 m-article-footer" id="m-article-footer">
				<p>Footer med twitter, namn</p>
			</footer>
		</div>

	<?php }} ?>
	
</article>
	
<?php get_footer(); ?>