<?php $resources = get_secondary_content( 'Resurser' ); ?>
<?php $category = get_the_category(); ?>

<div class="l-container">
	<div class="l-span-S12 l-span-M3 l-pre-M3">
		<p class="t-small item-type link">
			<?php echo $category[0]->cat_name.': '.get_the_time('j F, Y').'<br/>';
			echo strip_tags(get_the_tag_list('',' + ','')); ?>
		</p>
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