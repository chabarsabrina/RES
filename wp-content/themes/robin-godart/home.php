<?php get_header(); ?>

<div id="home">
	<div class="container last_product">
		<div class="row">
			
			<div class="col-md-12 last_products">
				<div class="product">
					<h1>Derniers produits</h1>
					<?php
					$my_query = new WP_Query(array('post_type'=> 'product', 'orderby' => 'title', 'posts_per_page' => '3'));
					if ($my_query->have_posts()):
						while ($my_query->have_posts()) : $my_query->the_post(); ?>
							<article class="col-md-4 col-sm-4 single_product">
								<div class="content">
									<div class="description">
										<?php if (has_post_thumbnail()){ the_post_thumbnail('thumbnail'); } ?>
										<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
										<p><?php the_excerpt(); ?></p>
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

