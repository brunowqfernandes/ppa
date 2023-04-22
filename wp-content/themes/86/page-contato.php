<?php get_header('alt'); ?>

<div class="main">

	<section class="contato">
        <div class="texto">
            <h3>Entre em contato:</h3>
            <h2>Fale Conosco</h2>
            <div class="form">
                <label>
                    Nome:
                    <input type="text">
                </label>
                <label>
                    E-mail:
                    <input type="text">
                </label>
                <label>
                    Telefone:
                    <input type="text">
                </label>
                <label>
                    Assunto:
                    <input type="text">
                </label>
                <label>
                    Mensagem:
                    <textarea></textarea>
                </label>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri()?>/img/contato.png" alt="">
    </section>
    <section class="fale-conosco">
        <div class="tel">
            <img src="<?php echo get_template_directory_uri()?>/img/tel.png" alt="">
            <div class="texto">
                <h3>Fale Conosco</h3>
                <p>Entre em contato com PPA Ambiental pelo formulário ao lado ou pelo nosso telefone: <br>
                    Tel: 41 3077-7818</p>
            </div>
        </div>
        <div class="endereco">
            <img src="<?php echo get_template_directory_uri()?>/img/end.png" alt="">
            <div class="texto">
                <h3>Localização</h3>
                <p>Rua Alferes Poli, 2593 <br>
                Parolin - Curitiba/Paraná <br>
                80220-051</p>
            </div>
        </div>
        <div class="whats">
            <img src="<?php echo get_template_directory_uri()?>/img/whatsapp.png" alt="">
            <div class="texto">
                <h3>Whatsapp</h3>
                <p>Entre em contato conosco através do nosso Whatsapp!</p>
            </div>
        </div>
    </section>
    <section class="localizacao">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.4003442447893!2d-49.26289779999999!3d-25.4583041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce4ed40d68321%3A0x418146d73d79ef7e!2sR.%20Alferes%20Poli%2C%202593%20-%20Parolin%2C%20Curitiba%20-%20PR%2C%2080220-051!5e0!3m2!1spt-BR!2sbr!4v1682100817807!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</div>

<?php get_footer();