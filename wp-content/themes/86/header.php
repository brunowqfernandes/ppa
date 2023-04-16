<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset')?>">

	<meta name="viewport" content="width=device-width">

	<?php wp_head(); ?>
</head>

<body <?php body_class();?>>

	<header>

		<section class="topo py-3">

			<div class="container-fluid">

				<div class="row justify-content-between align-items-center">

					<div class="col-md-2 logo text-center text-md-left">

						<?php the_custom_logo() ?>

					</div>

					<div class="col-md-6">

						<div class="row justify-content-end align-items-center">

							<div class="col-md-4">
								<div class="midias-sociais">
									<ul>
										<li>
											<a href="#"><img src="<?php echo get_template_directory_uri()?>/img/fb.png" alt=""></a>
										</li>
										<li>
											<a href="#"><img src="<?php echo get_template_directory_uri()?>/img/lin.png" alt=""></a>
										</li>
										<li>
											<a href="#"><img src="<?php echo get_template_directory_uri()?>/img/ig.png" alt=""></a>
										</li>
										<li>
											<a href="#"><img src="<?php echo get_template_directory_uri()?>/img/wapp.png" alt=""></a>
										</li>
										<li>
											<a href="#"><img src="<?php echo get_template_directory_uri()?>/img/yt.png" alt=""></a>
										</li>
									</ul>
								</div>
							</div>	
						<div class="col text-right telefones">

								<p><img src="<?php echo get_template_directory_uri() . '/img/tel.png' ?>" alt=""> <?php echo nl2br(get_theme_mod('set_contact_phone')); ?></p>

							</div>

							<div class="col-md-2 px-0 text-center">

								<a href="http://www.cartilife.com.br/" class="btn" target="_blank">cartilife</a>

							</div>

							<div class="col-md-3 text-right">

								<?php if(get_theme_mod('set_contact_fb')) {?>

									<a href="<?php echo get_theme_mod('set_contact_fb') ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/img/fb.png' ?>" alt="Facebook"></a>

								<?php }

								if(get_theme_mod('set_contact_ig')) {?>

									<a href="<?php echo get_theme_mod('set_contact_ig') ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/img/ig.png' ?>" alt="instagram"></a>

								<?php } 

								if(get_theme_mod('set_contact_in')) {?>

									<a href="<?php echo get_theme_mod('set_contact_in') ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/img/in.png' ?>" alt="Linkedin"></a>

								<?php  } 

								if(get_theme_mod('set_contact_whatsapp')) {?>

									<a href="<?php echo get_theme_mod('set_contact_whatsapp') ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/img/wpp.png' ?>" alt="whatsapp"></a>

								<?php }?>

							</div>

						</div>

						<div class="row justify-content-end">

							<div class="col header-menu">

								<?php wp_nav_menu(array( 'theme_location' => 'main_menu' )); ?>

							</div>

						</div>

					</div>

				</div>

			</div>

		</section>

		<section class="header-menu d-lg-block d-none">

			<div class="container">

				<div class="row">

				</div>

			</div>

		</section>

		<section class="header-menu mobile collapse" id="menu">

			<div class="container">

				<div class="row">

					<div class="col-md-12 font2">

						<?php wp_nav_menu(array( 'theme_location' => 'main_menu' )); ?>	

					</div>

				</div>

			</div>

		</section>

	</header>