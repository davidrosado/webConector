<section id="banner-home" class="seccion-page banner-page">
  <div class="container">
    <div class="row wow fadeInDown" data-wow-duration="4s">
        <?php
            if( have_rows('banner_inicio') ):
                while ( have_rows('banner_inicio') ) : the_row(); ?>                
                  <div class="item-slider">
                    <?php $texto = get_sub_field('textos_banner'); $imagen = get_sub_field('imagen_banner'); ?>
                    <?php if ($texto): ?>
                      <div class="texto-banner col-md-5">
                        <?php echo $texto ?>
                      </div>                        
                    <?php endif ?>
                    
                    <?php if ($imagen): ?>
                      <div class="imagen-slider col-md-5">
                        <img class="img-responsive" src="<?php echo $imagen ?>"/>
                      </div>      
                    <?php endif ?>       
                    </div>             
                <?php endwhile; 
        endif; ?>    
    </div>
  </div>
</section>