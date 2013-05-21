<?php $preamble = get_secondary_content( 'Ingress' ); ?>
<?php $resources = get_secondary_content( 'Resurser' ); ?>
<?php $category = get_the_category(); ?>

<div class="l-container">
	<div class="l-span-S12 l-span-M3<?php if ( !$preamble ) { ?> l-pre-M3<?php } ?>">
		<p class="t-small<?php if (post_is_in_descendant_category( 63 )) { ?> item-type log<?php } ?>">
			<?php echo $category[0]->cat_name.': '.get_the_time('j F, Y').'<br/>';
			echo strip_tags(get_the_tag_list('',' + ','')); ?>
		</p>
	</div>
	
 	<?php if ( $preamble ) {
 		echo '<div class="l-span-S12 l-span-M9 t-preamble">';
			echo $preamble;
		echo '</div>';
	} ?>

</div>

<div class="l-container">

	<?php if( $resources ) {
		echo '<div class="l-span-S12 l-span-M3 m-resource-full t-small" id="resources">';
			echo $resources;
		echo '</div>';
	} ?>	

	<div class="l-span-S12 l-span-M9 m-the-content<?php if( !$resources ) { ?> l-pre-M3<?php } ?>">
		<?php the_content(); ?>
	</div>
</div>