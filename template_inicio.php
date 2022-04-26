<?php
  /*Template Name: Página de Inicio*/
  get_header(); 
?>

<?php 
  include 'template_parts/i_banner_inicio.php'
?>

<?php if( have_rows('segundo_bloque_inicio') ):?>
  <section id="descripcion-home" class="seccion-page">
    <div class="container">
      <div class="row align-items-center">  
        <?php while ( have_rows('segundo_bloque_inicio') ) : the_row(); ?>                
                <div class="col-md-5">
                  <img src="<?php the_sub_field('imagen');?>" alt="">
                </div>
                <div class="col-md-7 text-justify">
                  <?php the_sub_field('textos');?>
                </div>      
        <?php endwhile;?>
        </div>
      </div>
    </section>        
<?php endif; ?>    

<?php if( have_rows('tercer_bloque_inicio') ):
  while ( have_rows('tercer_bloque_inicio') ) : the_row(); ?>                
    <section id="descripcion-bottom-home" class="seccion-page">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7">
            <img src="<?php the_sub_field('imagen');?>" alt="">
          </div>
          <div class="col-md-5 text-justify">
            <?php the_sub_field('textos');?>
          </div>      
        </div>
      </div>
    </section>
  <?php endwhile; 
 endif; ?>    

<?php if( have_rows('bloque_cta_home') ):?>
  <section id="descubre" class="slogan seccion-page">
    <div class="container">  
      <?php while ( have_rows('bloque_cta_home') ) : the_row(); ?>                
        <div class="row justify-content-center">
          <div class="titulo-seccion text-center col-md-8">
            <h2><?php the_sub_field('titulo_bloque')?></h2>
          </div>   
        </div>
        <div class="row">
          <div class="col-12 tex-center">
            <a href="<?php the_sub_field('url_cta')?>"><?php the_sub_field('texto_cta')?></a>
          </div>   
        </div>        
      <?php endwhile;?>
      </div>
    </section>      
 <?php endif; ?>  

<?php if( have_rows('bloque_colaboramos') ):?>
  <section id="colaboramos" class="seccion-page">
    <div class="container">  
      <?php while ( have_rows('bloque_colaboramos') ) : the_row(); ?>                
        <div class="row">
          <div class="titulo-seccion text-center">
            <h3><?php the_sub_field('titulo_bloque')?></h3>
          </div>   
        </div>

        <?php if( have_rows('logos') ):?>
          <div class="row">
            <div class="col-12 tex-center slider-colaboramos">              
              <?php while ( have_rows('logos') ) : the_row(); ?>                
                <div class="item-slider">
                  <img src="<?php the_sub_field('logo')?>" alt="">
                </div>
              <?php endwhile; ?>
            </div>   
          </div>               
        <?php endif; ?>         
      <?php endwhile; ?>
      </div>
    </section>      
 <?php endif; ?>  

<?php get_footer(); ?>