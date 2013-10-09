<?php $preamble = get_secondary_content( 'Ingress' ); ?>
<?php $resources = get_secondary_content( 'Resurser' ); ?>

<div class="l-container">
	<div class="l-span-S12 m-article-meta">
		<p class="t-small<?php if (in_category( 27 )) { ?> item-type link<?php } ?>">
			<?php the_category(' '); ?> <?php the_time('l j F, Y'); ?><br/>
			<?php the_tags('',' + '); ?>
		</p>
	</div>
	
	<?php if ( $preamble ) { ?>
		<div class="l-span-S12 t-preamble">
			<?php echo $preamble; ?>
		</div>
	<?php } else { ?>
		<div class="l-span-S12">
			<div class="m-divider"></div>
		</div>
	<?php } ?>
</div>

<div class="l-container">
	<?php if( $resources ) { ?>
		<div class="l-span-S12 m-resources" id="resources">
			<h2 class="t-small-title">Appendix</h2>
			<div class="t-small">
				<?php echo $resources; ?>
			</div>
		</div>
	<?php } ?>

	<div class="l-span-S12 m-the-content" id="the-content">
		<?php the_content(); ?>
		<p>&mdash;</p>
	</div>
</div>