<div class="l-container">
	<div class="l-span-S12 m-article-meta">
		<p class="t-small<?php if (in_category( 27 )) { ?> item-type link<?php } ?>">
			<?php the_category(' '); ?> <?php the_time('l j F, Y'); ?><br/>
			<?php the_tags('',' + '); ?>
		</p>
	</div>

	<div class="l-span-S12">
		<div class="m-divider"></div>
	</div>
	
</div>

<div class="l-container">
	<div class="l-span-S12 m-the-content" id="the-content">
		<?php the_content(); ?>
		<p>&mdash;</p>
	</div>
</div>