<?php $resources = get_secondary_content( 'Resurser' ); ?>

<div class="l-container">
	<div class="l-span-S12 l-span-M3 l-pre-M3 m-article-meta">
		<p class="t-small item-type link no-preamble">
			<?php the_category(' '); ?> <?php the_time('l j F, Y'); ?><br/>
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
</div>

<div class="l-container">
	<aside class="l-span-S12 l-span-M3 m-aside-notes" role="complementary">
		<?php if( $resources ) { ?>
			<div class="m-notes">
				<!-- <h2 class="t-notes-title">H&auml;nvisningar:</h2> -->
				<?php echo $resources; ?>
				<p class="m-poster">
					<a class="icon-twitter" href="http://twitter.com/share?text=<?php the_title();?>:&url=<?php echo wp_get_shortlink();?>">Dela inl&auml;gget p&aring; Twitter</a> (jag heter <a href="https://twitter.com/SamuelLarsson" title="Samuel Larsson p&aring; Twitter" rel="me">@samuellarsson</a>)
				</p>
			</div>
		<?php } ?>
		<?php related_posts(); ?>
	</aside>
</div>