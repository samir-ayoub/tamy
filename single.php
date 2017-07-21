<?php 
get_header();
?>
<?php 

if (have_posts()) :   
	while (have_posts()) :      the_post(); ?>
		<div class="container">
			<div class="posts-wrap">
				<div class="descricao">				
					<h2><?php the_title(); ?></h2>
					<p class="descricao-trabalho"><?php the_field("descricao_trabalho")?></p>
					<ul class="creditos">

					<?php if( get_field("fotografo")) : ?>
						<li class="list-inline"><?php the_field("fotografo")?></li>
				    <?php endif; ?>

					<?php if(get_field("producao")) : ?>
						<li class="list-inline"><?php the_field("producao")?></li>
				    <?php endif; ?>

					<?php if(get_field("veiculo_de_publicacao")) : ?>
						<li class="list-inline"><?php the_field("veiculo_de_publicacao")?></li>
				    <?php endif; ?>

					</ul>

					<div class="sample_trabalho"><?php the_content(); ?></div>

				</div>

			</div>
		</div>
		<?php
	endwhile;
endif;

?>

	<div class="row  lista-trabalhos">


		<?php

		$args = array(
			'post_type' => 'post'
			);
			$the_query = new WP_Query( $args ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<div class="col-md-4 col-sm-4 col-sx-12 item-trabalho">
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


<?php
get_footer();
?>