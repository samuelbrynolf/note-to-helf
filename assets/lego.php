<!-- 
	<nav class="l-container m-pagination" id="m-pagination">
		<div class="l-span-S12">
			<?php wp_pagenavi(); ?>
		</div>
	</nav>
	
	-->
	
	
	<?php if(is_home() && !is_paged()){?>
			<header class="l-container m-taxonomy-header">
				<div class="l-span-S12">
					<h1 class="t-xlarge">Start</h1>
					<p class="t-small">&#187; Beskrivning &#171;</p>
				</div>
			</header>
		<?php } ?>