<?php $category = get_the_category(); 
if ( has_post_thumbnail() ) { ?>

	<div class="m-listitem has-thumb">
		<a class="needsclick" href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'L&auml;nk till: ', 'after' => '' ) ); ?>">
			<figure>
				<?php the_post_thumbnail('large', array('class' => 'm-listitem-thumbnail')); ?>
			</figure>
			<section class="m-entry">
				<?php if (post_is_in_descendant_category( 63 )) { ?>
					<h2 class="t-medium"><?php the_title(); ?> <span>(<?php echo $category[0]->cat_name ?>)</span></h2>
				<?php } else { ?>
					<h2 class="t-medium"><?php the_title(); ?></h2>
				<?php } ?>
				<p class="t-small">
					<?php echo get_the_time('l j F, Y').'<br/>';
			  	echo strip_tags(get_the_tag_list('',' + ','')); ?>
				</p>
			</section>
		</a>
	</div>
	
<?php } else { ?>

	<div class="l-container m-listitem">
		<a class="needsclick" href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'L&auml;nk till: ', 'after' => '' ) ); ?>">
			<section class="l-span-S12 m-entry">
				<?php if (post_is_in_descendant_category( 63 )) { ?>
					<h2 class="t-medium"><?php the_title(); ?> <span>(<?php echo $category[0]->cat_name ?>)</span></h2>
				<?php } else { ?>
					<h2 class="t-medium"><?php the_title(); ?></h2>
				<?php } ?>
				<p class="t-small">
					<?php echo get_the_time('l j F, Y').'<br/>';
		  		echo strip_tags(get_the_tag_list('',' + ','')); ?>
				</p>
			</section>
		</a>
	</div>
	
<?php } ?>