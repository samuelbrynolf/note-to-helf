<?php get_header();

if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
	<div class="l-container">
		<div class="l-span-S12">
			<?php if ( has_post_thumbnail() ) { 
				echo '<figure>';
					the_post_thumbnail('large', array('class' => 'm-listitem-thumbnail'));
				echo '</figure>';
			} ?>
		</div>
	</div>
	
	<div class="l-container">
		<header class="l-span-S12">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?><?php // OBS använd h2 ?>
		</header>
	</div><?php // end l-container ?>

<?php }} 
get_footer(); ?>