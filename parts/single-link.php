<?php $resources = get_secondary_content( 'Resurser' ); ?>

<div class="l-container">
	<div class="l-span-S12 l-span-M3 l-pre-M3">
		<p class="t-small item-type link no-preamble">
			<?php the_category(' '); ?>: <?php the_time('j F Y'); ?><br/>
			<?php if(has_tag()) {
				the_tags('',' + ');
			} else {
				echo '<br/>';
			} ?>
		</p>
	</div>
	
	<div class="l-span-S12 l-span-M8 l-pre-M3">
		<div class="m-divider"></div>
	</div>
</div>

<div class="l-container">
	<div class="l-span-S12 l-span-M9 m-the-content<?php if( !$resources ) { ?> l-pre-M3<?php } ?>">
		<?php the_content(); ?>
	</div>
	
	<?php if( $resources ) {
		echo '<div class="l-span-S12 l-span-M3 m-resource-link t-small">';
			echo $resources;
		echo '</div>';
	} ?>	
</div>