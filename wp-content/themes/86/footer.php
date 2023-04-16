<div class="contato-mobile">
	<p><img src="https://pastorefisio.com.br/wp-content/themes/86/img/tel-mobile.png" alt=""> (11) 3209-9289 / 97433-8431</p>
</div>
<footer class="rodape">

	<div class="container">

		<div class="row">

			<div class="col-md-3">

				<img src="<?php echo get_template_directory_uri() . '/img/logo-branco.svg'?>" alt="">

				<?php dynamic_sidebar('footer_01-sidebar'); ?>

			</div>

			<div class="col-md-8 offset-md-1">				

				<div class="row align-items-end">

					<div class="col-12">

						<div class="d-md-none">
							<br>
						</div>

						<h2 class="titulo-2"><strong><?php _e('Endereços','estudio') ?></strong></h2>						

						<div>
							<div class="slider-wrapper enderecos">

			                    <div class="content-slider" data-slick='{
				                    "slidesToShow":2, 
				                    "slidesToScroll":1, 
				                    "fade":false, 
				                    "infinite":false, 
				                    "responsive": {
					                    "breakpoint": 760,
					                    "settings": {
					                        "slidesToShow": 1,
					                        "slidesToScroll": 1,
					                    },
					                }
					            }'>

			                        <?php

			                            global $post;

			                            $args = array('posts_per_page' => -1, 'post_type' => 'slide', 'tax_query' => array(

			                                    array (

			                                        'taxonomy' => 'cat_slides',

			                                        'field' => 'slug',

			                                        'terms' => 'enderecos',

			                                    )

			                                ),

			                            );

			                            $myposts = get_posts($args);

			                            foreach ($myposts as $post) : setup_postdata($post);

			                        ?>

			                            <div class="slide">
	                                    	<h2 class="titulo-widget"><?php the_title() ?></h2>
	                                        <?php the_content(); ?>
			                            </div>

			                        <?php endforeach; ?>

			                    </div>

			                </div>
						</div>

					</div>

				</div>

				<div class="row justify-content-between">

					<div class="col-md-5">

						<?php if(get_theme_mod('set_contact_fb')) {?>

							<a href="<?php echo get_theme_mod('set_contact_fb') ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/img/fb_branco.png' ?>" alt="Facebook"></a>

						<?php }

						if(get_theme_mod('set_contact_ig')) {?>

							<a href="<?php echo get_theme_mod('set_contact_ig') ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/img/ig_branco.png' ?>" alt="instagram"></a>

						<?php } 

						if(get_theme_mod('set_contact_in')) {?>

							<a href="<?php echo get_theme_mod('set_contact_in') ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/img/in_branco.png' ?>" alt="Linkedin"></a>

						<?php  } 

						if(get_theme_mod('set_contact_whatsapp')) {?>

							<a href="<?php echo get_theme_mod('set_contact_whatsapp') ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/img/wpp.png' ?>" alt="whatsapp"></a>

						<?php }?>

					</div>

					<div class="col-md-2">

						<img src="<?php echo get_template_directory_uri() . '/img/logo-86.png'?>" alt="">

					</div>

				</div>

			</div>			

		</div>

	</div>

</footer>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=5511974338431&text=Ol%C3%A1%21%20Estava%20navegando%20no%20seu%20site%20e%20eu%20gostaria%20de%20conversar.%20" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;
  z-index:1000;" target="_blank">
<i style="margin-top:14px" class="fa fa-whatsapp"></i>
</a>

<?php wp_footer(); ?>

</body>

</html>