<?php if ( has_post_thumbnail() ) { ?>

	<div class="m-listitem has-thumb">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'L&auml;nk till: ', 'after' => '' ) ); ?>">
			<figure>
				<?php the_post_thumbnail('large', array('class' => 'm-listitem-thumbnail')); ?>
			</figure>
			<section class="m-entry">
				<h2 class="t-medium"><?php the_title(); ?></h2>
				<p class="t-small">
					<?php echo 'Delad den '.get_the_time('j F Y').'<br/>';
			  	echo strip_tags(get_the_tag_list('',' + ',''));
			  	if(!has_tag()) {
			  		echo '<br />';
			  	} ?>
				</p>
			</section>
		</a>
	</div>
	
<?php } else { ?>

	<div class="l-container m-listitem">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'L&auml;nk till: ', 'after' => '' ) ); ?>">
			<section class="l-span-S12 m-entry">
				<h2 class="t-medium"><?php the_title(); ?></h2>
				<p class="t-small">
					<?php echo 'Delad den '.get_the_time('j F Y').'<br/>';
		  		echo strip_tags(get_the_tag_list('',' + ',''));
		  		if(!has_tag()) {
		  			echo '<br />';
		  		} ?>
				</p>
			</section>
		</a>
	</div>
	
<?php } ?>