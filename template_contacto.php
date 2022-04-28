<?php
  /*Template Name: Página CONTACTO*/
  get_header(); 
?>

<?php 
  include 'template_parts/i_banner_yoax-contacto.php'
?>

<section class="formulario-page seccion-page wow fadeInDown" data-wow-duration="3s">   
    <div class="container">
        <div class="row">
            <div class="col-12 contenedor-form">
                <?php
                    $form = get_field('shortcode_formulario');
                    echo do_shortcode($form);
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>