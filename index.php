<?php get_header(); ?>
	
	<article class="l-container" id="m-postlist">
		<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
		
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'L&auml;nk till: ', 'after' => '' ) ); ?>">
			<section class="l-span-S12 m-listitem">
				<?php if ( has_post_thumbnail() ) { ?>
					<figure>
						<?php the_post_thumbnail('large', array('class' => 'm-listitem-thumbnail')); ?>
					</figure>
				<?php } ?>
				<h2><?php the_title(); ?></h2>
				<p <?php post_class(); ?>>
					<?php $category = get_the_category(); 
					echo $category[0]->cat_name.': '.get_the_time('j F, Y').'<br/>';
			  	echo strip_tags(get_the_tag_list('',' + ','')); ?>
				</p>
			</section>
		</a><?php // end .l-span-S12 ?>
		
		<?php }} ?>
	</article><?php // end .l-container ?>
	
	<nav class="l-container" id="m-pagination">
		<div class="l-span-S12">
			<span class="m-pagination-previous"><?php previous_posts_link('Previous Page');?></span>
			<span class="m-pagination-next"><?php next_posts_link('Next Page');?></span>
		</div>
	</nav>

<?php get_footer(); ?>