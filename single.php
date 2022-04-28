<?php get_header(); ?>

<?php
	$terms = get_the_terms( $post->ID , 'category');
	if($terms) {
	  foreach( $terms as $term ) {
	    $cat_obj = get_term($term->term_id, 'category');
	    $cat_slug = $cat_obj->slug;
	    $cat_name = $cat_obj->name;
	  }
	}
	?>


<section class="banner-page banner-single">
	<div class="container">
		<div class="row">
			<div class="item-slider">
				<div class="textos-banner text-center col-12">
					<h2>BLOG</h2>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="contenido-pagina seccion-page pt-0">
	<div class="container">
		<div class="row justify-content-center item-blog">

			<div class="col-md-8 imagen-post">
				<div class="top-detalle text-center">			
					<picture>
						<source media="(max-width: 990px)" srcset="<?php the_post_thumbnail_url('medium'); ?>">
						<source media="(min-width: 991px)" srcset="<?php the_post_thumbnail_url('full'); ?>">
						<img src="<?php the_post_thumbnail_url('full'); ?>">
					</picture>
					<h1 class="titulo-seccion titulo-single"><?php the_title(); ?></h1>					
				</div>
			</div>

			<div class="col-md-8 detalle-post">
				<div class="contenido-detalle mt-5 text-justify">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>		
					<?php endwhile; ?>		
					<?php endif; ?>  						
				</div>

				<div class="bottom-detalle">	
					<div class="boton-volver"><a href="<?php bloginfo('url'); ?>/blog">&lt; Volver</a></div>					
					<div class="share-single">
						<p><strong>Compartir artículo en:</strong></p>
						<ul class="redes-sociales">
							<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink();?>" target="_blank"><i class="fab fa-twitter"></i></a></li> 
							<li><a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink();?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
						</ul>	
					</div>
				</div>
				
			</div>	
		</div>
	</div>	
</section>	

<style type="text/css">
  .banner-pagina, #cabecera-site.menu-fijo {
    background-color: #ffcc00;
  }
</style>  

<?php get_footer(); ?>