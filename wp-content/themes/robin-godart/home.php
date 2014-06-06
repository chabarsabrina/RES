<?php get_header(); ?>

<div id="home">
	<div class="container last_product">
		<div class="row">
			
			<!--======= Sidebar =====-->
			<?php get_sidebar(); ?>
			
			<div class="col-md-12">
				<?php include("fil_ariane.php"); ?>
				<div class="soins">
					<h1>Les créateurs</h1>
					<?php
					$my_query = new WP_Query(array('post_type'=> 'products', 'orderby' => 'title', 'posts_per_page' => '3'));
					if ($my_query->have_posts()):
						while ($my_query->have_posts()) : $my_query->the_post(); ?>
							<article class="col-md-12 col-sm-6">
								<div class="content row">
									<div class="description">
										<h3><?php the_title(); ?></h3>
										<p><?php the_content(); ?></p>
									</div>
								</div>
							</article>
						<?php
						endwhile;
					endif ?>
				</div>
				
			</div><!-- .col-md-9 -->
			
		</div><!-- .row -->
	</div><!-- .container -->
</div>

<?php get_footer(); ?>
