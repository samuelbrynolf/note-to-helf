<?php get_header(); ?>
	
	<article id="m-postlist">
		<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
		
		<div class="l-container m-listitem<?php if ( has_post_thumbnail() ) { ?> has-thumb<?php } ?>">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'L&auml;nk till: ', 'after' => '' ) ); ?>">
				<section class="l-span-S12">
					<?php if ( has_post_thumbnail() ) { ?>
						<figure>
							<?php the_post_thumbnail('large', array('class' => 'm-listitem-thumbnail')); ?>
						</figure>
					<?php } ?>
					<h2 class="t-medium"><?php the_title(); ?></h2>
					<p <?php post_class(); ?>>
						<?php $category = get_the_category();
						echo $category[0]->cat_name.': '.get_the_time('j F, Y').'<br/>';
				  	echo strip_tags(get_the_tag_list('',' + ','')); ?>
					</p>
				</section>
			</a><?php // end .l-span-S12 ?>
		</div>
		
		<?php }} ?>
	</article><?php // end .l-container ?>
	
	<nav class="l-container m-pagination" id="m-pagination">
		<div class="l-span-S12">
			<p class="m-pagination-previous"><?php previous_posts_link('Previous Page');?></p>
			<p class="m-pagination-next"><?php next_posts_link('Ladda fler');?></p>
		</div>
	</nav>

<?php get_footer(); ?>