<?php
  /*Template Name: Página YOAX*/
  get_header(); 
?>

<?php 
  include 'template_parts/i_banner_yoax.php'
?>

<?php if( have_rows('seccion_productos') ):?>
  <section id="yoax-productos" class="seccion-page">
    <div class="container">  
      <?php while ( have_rows('seccion_productos') ) : the_row(); ?>                
        <div class="row justify-content-center">
          <div class="top-seccion text-center col-md-10 wow fadeInDown" data-wow-duration="3s">
            <h3 class="titulo-menor-seccion"><?php the_sub_field('titulo_bloque')?></h3>
            <p><?php the_sub_field('descripcion_bloque')?></p>
          </div>   
        </div>

        <?php if( have_rows('items') ):?>
            <div class="row listado-items">           
              <?php while ( have_rows('items') ) : the_row(); ?>                
                <div class="item-listado col-md-3 text-center wow fadeInDown" data-wow-duration="3s">
                    <figure>
                        <img src="<?php the_sub_field('imagen')?>" alt="">
                    </figure>
                    <div class="bottom-item-listado">
                        <h4><?php the_sub_field('titulo')?></h4>
                        <p><?php the_sub_field('bajada')?></p>
                    </div>
                </div>
              <?php endwhile; ?>
            </div>               
        <?php endif; ?>         
      <?php endwhile; ?>
      </div>
    </section>      
<?php endif; ?>  

 <section id="conexiones" class="seccion-page">
    <div class="container">
      <div class="row">
        <div class="col-12 wow fadeInDown" data-wow-duration="3s">
          <?php the_field('seccion_conexiones') ?>
        </div>
      </div>
    </div>
 </section>

<?php if( have_rows('seccion_soluciones') ):?>
  <section id="yoax-soluciones" class="seccion-page">
    <div class="container">  
      <?php while ( have_rows('seccion_soluciones') ) : the_row(); ?>                
        <div class="row justify-content-between">
          <div class="left-seccion top-seccion col-md-6 wow fadeInLeft" data-wow-duration="3s">
            <h3 class="titulo-menor-seccion"><?php the_sub_field('titulo_bloque')?></h3>
            <p><?php the_sub_field('descripcion_bloque')?></p>
            <img src="<?php the_sub_field('imagen_bloque')?>" alt="YOAX SOLUCIONES">
          </div>   

            <?php if( have_rows('items') ):?>
                <div class="right-seccion listado-items col-md-5 wow fadeInRight" data-wow-duration="3s">           
                <?php while ( have_rows('items') ) : the_row(); ?>                
                    <div class="item-listado col-12">
                        <div class="top-item-listado">
                            <img src="<?php the_sub_field('imagen')?>" alt="">
                            <h4><?php the_sub_field('titulo')?></h4>
                        </div>
                        <div class="bottom-item-listado">
                            <p class="text-justify"><?php the_sub_field('bajada')?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>               
            <?php endif; ?>   
        </div>      
      <?php endwhile; ?>
      </div>
    </section>      
 <?php endif; ?>  

<?php if( have_rows('bloque_cta') ):?>
  <section class="seccion-page slogan pt-0">
    <div class="container">  
      <?php while ( have_rows('bloque_cta') ) : the_row(); ?>                
        <div class="row justify-content-center wow fadeInDown" data-wow-duration="3s">
          <div class="titulo-seccion text-center col-md-9">
            <h2><?php the_sub_field('titulo_bloque')?></h2>
          </div>   
        </div>
        <div class="row wow fadeInDown" data-wow-duration="3s">
          <div class="col-12 tex-center">
            <a href="<?php the_sub_field('url_cta')?>"><?php the_sub_field('texto_cta')?></a>
          </div>   
        </div>        
      <?php endwhile;?>
      </div>
    </section>      
 <?php endif; ?>  



<?php get_footer(); ?>