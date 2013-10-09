<?php get_header(); ?>
	
	<article id="m-postlist">
	<!--	<?php if(!is_paged()) { ?>
			<header class="l-container m-taxonomy-header willkommen-bei-uns">
				<div class="l-span-S12">
					<p class="t-xlarge"><?php bloginfo('blogtitle'); ?></p>
					<p class="t-small"><?php bloginfo('description'); ?></p>
				</div>
			</header>
	<?php } ?> -->	
		<?php if ( have_posts() ) { while ( have_posts() ) { the_post();
			include( 'parts/listitem-default.php');		
		}} ?>
	</article>

	<?php include('parts/pagination.php'); ?>
<?php get_footer(); ?>