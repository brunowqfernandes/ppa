<section class="newsletter">
	<div class="call">
		<p>Newsletter:</p>
		<p>
			Cadastre-se e fique <br>
			por dentro das novidades da PPA
		</p>
	</div>
	<div class="cadastro">
		<div>
			<label for="nome">Nome:</label>
			<input id="nome" type="text" placeholder="Insira o seu nome">
		</div>
		<div>
			<label for="email">E-mail</label>
			<input id="email" type="mail" placeholder="Insira o seu e-mail">
		</div>
		<button>Enviar</button>
	</div>
</section>
<footer>
	<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/img/logo.png'?>" alt="PPA Ambiental"></a>
	<div class="contato">
		<div class="social-media">
			<ul>
				<?php if(get_theme_mod('set_contact_fb')) {?>
					<li>
						<a href="<?php echo get_theme_mod('set_contact_fb') ?>"><img src="<?php echo get_template_directory_uri()?>/img/fb_black.png" alt=""></a>
					</li>
				<?php }
				if(get_theme_mod('set_contact_in')) {?>
					<li>
						<a href="<?php echo get_theme_mod('set_contact_in') ?>"><img src="<?php echo get_template_directory_uri()?>/img/lin_black.png" alt=""></a>
					</li>
				<?php }
				if(get_theme_mod('set_contact_ig')) {?>
					<li>
						<a href="<?php echo get_theme_mod('set_contact_ig') ?>"><img src="<?php echo get_template_directory_uri()?>/img/ig_black.png" alt=""></a>
					</li>
					<?php  }
					if(get_theme_mod('set_contact_whatsapp')) {?>
					<li>
						<a href="<?php echo get_theme_mod('set_contact_whatsapp') ?>"><img src="<?php echo get_template_directory_uri()?>/img/wapp_black.png" alt=""></a>
					</li>
				<?php  } 
				if(get_theme_mod('set_contact_youtube')) {?>
					<li>
						<a href="<?php echo get_theme_mod('set_contact_whatsapp') ?>"><img src="<?php echo get_template_directory_uri()?>/img/yt_black.png" alt=""></a>
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
</footer>

<?php wp_footer(); ?>

</body>

</html>