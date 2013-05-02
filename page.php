<?php get_header(); ?>

<article <?php post_class(); ?> role="main">
	<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="l-container">
				<div class="l-span-S12">
					<figure>
						<?php the_post_thumbnail('large', array('class' => 'm-listitem-thumbnail')); ?>
					</figure>
				</div>
			</div>
		<?php } ?>
		
		<?php if (has_post_format('aside')) { ?>
			<p>Jajjemän, Notering!</p>
		<?php } ?>
				
		<header class="l-container">
			<div class="l-span-S12 l-span-M9 l-pre-M3">
				<h1><?php the_title(); ?></h1>
				<?php the_secondary_content( 'Ingress' ); ?>
			</div>
		</header>
		
		<div class="l-container">
			<div class="l-span-S12 l-span-M3">
				<p>
					Publicerad: <?php the_time('j F, Y'); ?><br/>
			  	<?php the_tags('', ' + '); ?> 
				</p>
				<div id="resources">
					<?php the_secondary_content( 'Resurser' ); ?>
				</div>
			</div>
			
			<div class="l-span-S12 l-span-M9">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="l-container">
			<div class="l-span-S12 l-span-M9 l-pre-M3">
				<footer class="m-article-footer" id="m-article-footer">
					<p>Footer med twitter, namn</p>
				</footer>
			</div>
		</div>

	<?php }} ?>
</article>
	
<?php get_footer(); ?>