<?php get_header(); ?>
	
	<article id="m-postlist">
	
		<header class="l-container m-taxonomy-header">
			<div class="l-span-S12">
				<h1 class="t-xlarge">S&ouml;ktresultat f&ouml;r <?php echo '&#145;'; the_search_query();echo '&#146;'; ?></h1>
				<p class="t-small">Visar <?php echo $wp_query->found_posts ?> tr&auml;ffar</p>
			</div>
		</header>
			
		<?php if (have_posts()) : while (have_posts()) : the_post();
		
			include( 'parts/listitem-search.php');	
			
		endwhile; 
		else : ?>

			<div class="l-container m-listitem s-no-hit">
				<section class="l-span-S12 m-entry">
					<h2 class="t-medium">Pr&ouml;va att stava ditt s&ouml;kord annorlunda eller s&ouml;k p&aring; relaterade ord/&auml;mnen:</h2>
					<p class="t-small">
						<?php if (function_exists('relevanssi_didyoumean')) { relevanssi_didyoumean(get_search_query(), 'Vanliga s&ouml;kningar: ', '<br/>', 5); }?>
						G&aring; <a href="<?php bloginfo('url'); ?>" title="Till startsidan f&ouml;r <?php bloginfo('blogtitle'); ?>">till startsidan</a>...
					</p>
					<div class="m-global-search">
						<?php include('parts/searchform.php'); ?>
					</div>
				</section>
			</div>
		<?php endif; ?>
		
	</article>
	
	<?php include('parts/pagination.php'); ?>
<?php get_footer(); ?>