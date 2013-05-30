<?php get_header(); ?>
	
	<article id="m-postlist">
	
		<header class="l-container m-taxonomy-header">
			<div class="l-span-S12">
				<h1 class="t-xlarge"><?php single_cat_title(); ?></h1>
				<p class="t-small">&#187; <?php echo category_description(); ?> &#171;</p>
			</div>
		</header>
		
		<?php if ( have_posts() ) { while ( have_posts() ) { the_post();
		
			if ( has_post_thumbnail() ) { ?>
			
				<div class="m-listitem has-thumb">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'L&auml;nk till: ', 'after' => '' ) ); ?>">
						<figure>
							<?php the_post_thumbnail('large', array('class' => 'm-listitem-thumbnail')); ?>
						</figure>
						<section class="m-entry">
							<h2 class="t-medium"><?php the_title(); ?></h2>
							<p class="t-small">
								<?php echo 'Publicerad den '.get_the_time('j F Y').'<br/>';
						  	echo strip_tags(get_the_tag_list('',' + ','')); ?>
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
								<?php echo 'Publicerad den '.get_the_time('j F Y').'<br/>';
					  		echo strip_tags(get_the_tag_list('',' + ','')); ?>
							</p>
						</section>
					</a>
				</div>
				
			<?php } 
			
		}} ?>
		
	</article>
	
	<nav class="l-container m-pagination" id="m-pagination">
		<div class="l-span-S12">
			<p class="m-pagination-previous"><?php previous_posts_link('Previous Page');?></p>
			<p class="m-pagination-next"><?php next_posts_link('Ladda fler');?></p>
		</div>
	</nav>

<?php get_footer(); ?>