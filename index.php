<?php get_header(); ?>
	
	<div class="l-container">
		<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
		
		<section class="l-span-S12 m-listitem">
			<figure>
			<?php the_post_thumbnail('large', array('class' => 'm-listitem-thumbnail')); ?>
			</figure>
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'L&auml;nk till: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h2>
			<p <?php post_class(); ?>>
				<?php $category = get_the_category(); 
				echo $category[0]->cat_name.': '.get_the_time('j F, Y').'<br/>';
		  	echo strip_tags(get_the_tag_list('',' + ','')); ?>
			</p>
		</section><?php // end .l-span-S12 ?>
		
		<?php }} ?>
	</div><?php // end .l-container ?>


<?php get_footer(); ?>