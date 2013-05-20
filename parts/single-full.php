<div class="l-container">
	<div class="l-span-S12 l-span-M3 m-article-meta">
		<p <?php post_class(); ?>>
			<?php $category = get_the_category();
			echo $category[0]->cat_name.': '.get_the_time('j F, Y').'<br/>';
			echo strip_tags(get_the_tag_list('',' + ','')); ?>
		</p>
	</div>
	
	<div class="l-span-S12 l-span-M9 t-preamble">
		<?php the_secondary_content( 'Ingress' ); ?>
	</div>
</div>

<div class="l-container">

	<div class="l-span-S12 l-span-M3 t-small" id="resources">
		<?php the_secondary_content( 'Resurser' ); ?>
	</div>

	<div class="l-span-S12 l-span-M9 m-the-content">
		<?php the_content(); ?>
	</div>
</div>