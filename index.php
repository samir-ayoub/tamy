<?php 
get_header();
?>



<section class="homepage">
	<div class="home-content">  
		<div class="row">		
			<div class="col-md-6 col-md-offset-6">
				<h1>Magazine, e-shop, affiche, emoji, donnees, animation, journal, internet</h1>
				<p>Wow. Much projects!</p>
			</div>
		</div>
	</div>        
</section>

<section class="trabalhos">
	<div class="container">
	<p>trabalhos</p>
		<div class="filter-button-group">
			<?php
			echo '<button class="btn btn-small btn-primary filter-button" data-filter="all">Todos</button>';
			$args = array(
				'orderby' => 'name',
				'parent' => 0
				);
			$categories = get_categories( $args );
			foreach ( $categories as $category ) {
				echo '<button class="btn btn-small btn-primary filter-button" data-filter="'. $category->name .'">' . $category->name . '</button>';
			}
			?>
		</div>
	</div>
	<div class="grupo-trabalhos">

		<div class="container">	
			<div class="row  lista-trabalhos">

				<?php

				$args = array(
					'post_type' => 'post',
					'orderby' => 'name',
					'parent' => 0
					);
					$the_query = new WP_Query( $args ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

						<!-- the loop -->
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

							<div class="col-md-4 col-sm-4 col-sx-12 item-trabalho filter" data-tag="<?php
							foreach((get_the_category()) as $category) {
								echo $category->cat_name . '';
							}
							?>">


							<div class="blog-picture">

								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail(); ?>

									<a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span>
									</a>
								<?php endif; ?>


							</div>

						</div>

					<?php endwhile; ?>
					<!-- end of the loop -->

					<!-- pagination here -->
					<!-- pagination here -->

					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>

			</div>
		</div>

	</div>
</section>


<?php
get_footer();
?>