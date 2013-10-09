		<footer class="l-container m-global-footer" id="global-footer" role="contentinfo">
			<ul class="l-clearfix">					
				<?php if ( !function_exists('register_sidebar') || !dynamic_sidebar('Footer') ) { ?>	
				<?php } ;?>
				<li class="l-span-S12 m-footerwidget goodbye">
					<a class="jumper needsclick" href="#global-header" rel="nofollow"><?php bloginfo('blogtitle'); ?> aka Samuel Larsson<br/>
					anno <?php echo date("Y"); ?></a>
				</li>
			</ul>
		</footer>

		<script src="<?php bloginfo('template_directory'); ?>/scripts/fastclick.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/scripts/magnificpopupv095.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/scripts/scripts.js"></script>
		<?php wp_footer(); ?> 
	</body>
</html>