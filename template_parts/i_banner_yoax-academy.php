<section id="banner-yoax-academy" class="seccion-page banner-page">
    <?php
        if( have_rows('banner') ):
            while ( have_rows('banner') ) : the_row(); ?>                
                <div class="item-slider">
                    <div class="container">
                        <div class="row justify-content-between">                    
                            <?php $texto = get_sub_field('textos_banner'); $imagen = get_sub_field('imagen_banner'); ?>                        
                            <?php if ($imagen): ?>
                                <div class="imagen-slider col-md-5">
                                <img class="img-responsive" src="<?php echo $imagen ?>"/>
                                </div>      
                            <?php endif ?> 
                            <?php if ($texto): ?>
                                <div class="texto-banner col-md-6">
                                <?php echo $texto ?>
                                </div>                        
                            <?php endif ?>                             
                        </div>
                    </div>                                 
                </div>                  
            <?php endwhile; 
    endif; ?>   
</section>