<?php get_header(); ?>

<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); 

	the_post_thumbnail('large', array('class' => 'm-listitem-thumbnail')); ?>
	<div class="l-container">
		<header class="l-span-small-12">
			<h1><?php the_title(); ?></h1>
		</header>
		
		<div class="l-span-small-12">
			<?php the_content(); ?>
		</div>
		
	</div><?php // end l-container ?>
	
	<?php $kategorinamn = get_post_meta($post->ID, 'kategori-namn', true);
  if ( $kategorinamn ) {
		echo do_shortcode('[list cat="'.$kategorinamn.'"]');
	}
}} 

get_footer(); ?>