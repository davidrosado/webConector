	<footer id="pie-pagina" class="seccion-footer">
		<div class="container">
			<div class="row justify-content-between">
				<?php if (get_field('widget_1_footer','option')) :?>
					<div class="col-md-auto widget-footer">
						<?php the_field('widget_1_footer','option') ?>
					</div>
				<?php endif ?>

				<div class="col text-center widget-footer">
					<?php the_field('widget_2_footer','option') ?>
				</div>
				<div class="col text-center widget-footer">
					<?php the_field('widget_3_footer','option') ?>
				</div>
				<div class="col-md-auto col-siguenos widget-footer">
					<?php the_field('widget_4_footer','option') ?>
				</div>												
			</div>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Add the slick-theme.css if you want default styling -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<!-- Add the slick-theme.css if you want default styling -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>


	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>    
	<script src="<?php echo get_stylesheet_directory_uri()?>/js/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>