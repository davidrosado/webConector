<section id="banner-yoax" class="seccion-page banner-page">
    <?php
        if( have_rows('banner') ):
            while ( have_rows('banner') ) : the_row(); ?>                
                <div class="item-slider">
                    <div class="container">
                        <div class="row">
                            <?php $texto = get_sub_field('textos_banner'); $imagen = get_sub_field('imagen_banner'); ?>
                            <?php if ($texto): ?>
                                <div class="texto-banner col-md-5 wow fadeInLeft" data-wow-duration="3s">
                                    <?php echo $texto ?>
                                </div>                        
                            <?php endif ?>
                        </div>
                    </div>
                    
                    <?php if ($imagen): ?>
                        <img class="img-responsive img-lateral-banner wow fadeInright" data-wow-duration="3s" src="<?php echo $imagen ?>"/>
                    <?php endif ?>    
                </div>                 
            <?php endwhile; 
    endif; ?>   
</section>