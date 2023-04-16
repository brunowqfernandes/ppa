<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset')?>">

	<meta name="viewport" content="width=device-width">

	<?php wp_head(); ?>

<!-- Global site tag (gtag.js) - Google Ads: 724781130 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-724781130"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-724781130');
</script>

<!-- Event snippet for Lead conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-724781130/vyjuCKed77ABEMqQzdkC',
      'event_callback': callback
  });
  return false;
}
</script>

<!-- Event snippet for Whatsapp [VL] conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-724781130/SUK2COub2-wBEMqQzdkC'});
</script>	

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '333240141784102');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=333240141784102&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>

<body <?php body_class();?>>

	<header>

		<section class="topo py-3">

			<div class="container">

				<div class="row justify-content-between align-items-center">

					<div class="col-md-2 logo text-center text-md-left">

						<?php the_custom_logo() ?>

					</div>

					<div class="col-md-9 px-0">

						<div class="row justify-content-end align-items-center">

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