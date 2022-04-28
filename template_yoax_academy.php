<?php
  /*Template Name: Página YOAX ACADEMY*/
  get_header(); 
?>

<?php 
  include 'template_parts/i_banner_yoax-academy.php'
?>

<section id="formulario-yoax-academy" class="formulario-page seccion-page wow fadeInDown" data-wow-duration="3s">   
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 contenedor-form">
                <?php
                    $form = get_field('shortcode_formulario');
                    echo do_shortcode($form);
                ?>
                <img src="<?php echo get_stylesheet_directory_uri()?>/images/creemos_02.png" class="fig fig2" alt="">
            </div>
        </div>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri()?>/images/creemos-bg.png" class="fig fig1" alt="">    
</section>

<?php get_footer(); ?>