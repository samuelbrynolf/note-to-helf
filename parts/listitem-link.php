<div class="l-container m-listitem<?php if ( has_post_thumbnail() ) { ?> has-thumb<?php } ?>">
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'L&auml;nk till: ', 'after' => '' ) ); ?>">
		<section class="l-span-S12">
			<?php if ( has_post_thumbnail() ) { ?>
				<figure>
					<?php the_post_thumbnail('large', array('class' => 'm-listitem-thumbnail')); ?>
				</figure>
			<?php } ?>
			<h2 class="t-medium">L&auml;nk: <?php the_title(); ?></h2>
			<p class="t-small item-type link">
				<?php echo 'Delad den '.get_the_time('j F Y').'<br/>';
		  	echo strip_tags(get_the_tag_list('',' + ','')); ?>
			</p>
		</section>
	</a><?php // end .l-span-S12 ?>
</div>