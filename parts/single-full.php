<?php $preamble = get_secondary_content( 'Ingress' ); ?>
<?php $resources = get_secondary_content( 'Resurser' ); ?>

<div class="l-container">
	<div class="l-span-S12 l-span-M4<?php if ( !$preamble ) { ?> l-pre-M3<?php } ?>">
		<p class="t-small<?php if (post_is_in_descendant_category( 63 )) { ?> item-type log<?php } ?>">
			<?php the_category(' '); ?>: <?php the_time('j F Y'); ?><br/>
			<?php the_tags('',' + '); ?>
			<?php if (post_is_in_descendant_category( 63 )) { ?>
				<br/>
			<?php } ?>
		</p>
	</div>
	
	<?php if ( $preamble ) { ?>
		<div class="l-span-S12 l-span-M9 t-preamble">
			<?php echo $preamble; ?>
		</div>
	<?php } else { ?>
		<div class="l-span-S12 l-span-M8 l-pre-M3">
			<div class="m-divider"></div>
		</div>
	<?php } ?>
</div>

<div class="l-container">

	<?php if( $resources ) {
		echo '<div class="l-span-S12 l-span-M4 m-resource-full t-small" id="resources">';
			echo $resources;
		echo '</div>';
	} ?>	

	<div class="l-span-S12 l-span-M8 m-the-content<?php if( !$resources ) { ?> l-pre-M3<?php } ?>">
		<?php the_content(); ?>
	</div>
</div>