<?php get_header(); ?>
	
	<article id="m-postlist">
	
		<header class="l-container m-taxonomy-header">
			<div class="l-span-S12">
				<h1 class="t-xlarge"><?php single_tag_title(); ?></h1>
				<?php if(tag_description()) {?>
					<p class="t-small"><?php echo tag_description(); ?></p>
				<?php } ?>
			</div>
		</header>
			
		<?php if ( have_posts() ) { while ( have_posts() ) { the_post();
		
			include( 'parts/listitem-default.php');	
			
		}} ?>
		
	</article>
	
	<?php include('parts/pagination.php'); ?>
<?php get_footer(); ?>