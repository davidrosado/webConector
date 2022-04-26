<?php
  /*Template Name: Página YOAX ACADEMY*/
  get_header(); 
?>

<?php 
  include 'template_parts/i_banner_yoax-academy.php'
?>

<section class="formulario-page seccion-page">   
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