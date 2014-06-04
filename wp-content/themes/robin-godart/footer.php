<!-- JavaScript -->

<footer>
<nav id="nav-footer">
	<div class="container">
		<div class="row">
			<?php wp_nav_menu(array('theme_location' => 'menu_footer')) ?>
		</div>
	</div>
</nav>
</footer>


<script src="<?php bloginfo( 'template_directory' ); ?>/library/js/bootstrap.min.js"></script>

<script>

	jQuery(document).ready(function(){
		
		jQuery('#main_carousel').carousel();
				
	});
</script>




<?php wp_footer(); ?>

</body>
</html>