<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset')?>">

	<meta name="viewport" content="width=device-width">

	<?php wp_head(); ?>
</head>

<body <?php body_class();?>>

	<header class="alt">

		<a href="<?php echo get_home_url()?>"><img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt=""></a>

		<img class="logo-26" src="<?php echo get_template_directory_uri()?>/img/logo-26.png" alt="">

		<img class="selo" src="<?php echo get_template_directory_uri()?>/img/selo.png" alt="">

		<div>
			<div class="contato">
	
				<div class="social-media">
					<ul>
						<?php if(get_theme_mod('set_contact_fb')) {?>
							<li>
								<a href="<?php echo get_theme_mod('set_contact_fb') ?>"><img src="<?php echo get_template_directory_uri()?>/img/fb_topo.png" alt=""></a>
							</li>
						<?php }
						if(get_theme_mod('set_contact_in')) {?>
							<li>
								<a href="<?php echo get_theme_mod('set_contact_in') ?>"><img src="<?php echo get_template_directory_uri()?>/img/lin_topo.png" alt=""></a>
							</li>
						<?php }
						if(get_theme_mod('set_contact_ig')) {?>
							<li>
								<a href="<?php echo get_theme_mod('set_contact_ig') ?>"><img src="<?php echo get_template_directory_uri()?>/img/ig_topo.png" alt=""></a>
							</li>
							<?php  }
							if(get_theme_mod('set_contact_whatsapp')) {?>
							<li>
								<a href="<?php echo get_theme_mod('set_contact_whatsapp') ?>"><img src="<?php echo get_template_directory_uri()?>/img/wapp_topo.png" alt=""></a>
							</li>
						<?php  } 
						if(get_theme_mod('set_contact_youtube')) {?>
							<li>
								<a href="<?php echo get_theme_mod('set_contact_whatsapp') ?>"><img src="<?php echo get_template_directory_uri()?>/img/yt_topo.png" alt=""></a>
							</li>
						<?php }?>
					</ul>
				</div>
				<div class="mail">
					<img src="<?php echo get_template_directory_uri()?>/img/mail_black.png" alt=""> 
					<p>
						<?php echo nl2br(get_theme_mod('set_contact_mail'))?>
					</p>
				</div>	
				<div class="phone">
					<img src="<?php echo get_template_directory_uri()?>/img/phone_black.png" alt=""> 
					<p>
						<?php echo nl2br(get_theme_mod('set_contact_phone'))?>
					</p>
				</div>						
			</div>
			<div class="menu">
				<?php wp_nav_menu(array( 'theme_location' => 'main_menu' )); ?>
			</div>
		</div>

	</header>
	<div class="breadcrumb">
	<?php if(function_exists('bcn_display'))
	{ bcn_display(); }?>
	</div>