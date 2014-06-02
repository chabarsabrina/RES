<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 style="margin-bottom:2em;" class="page-title"><?php _e( 'Biiip! Wrong page...', 'atomic_soom' ); ?></h1>
				<iframe style="display:block;margin:auto;" src="//player.vimeo.com/video/62265594?title=0&amp;byline=0&amp;portrait=0" width="600" height="338" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</header>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>