<?php get_header('alt'); ?>

<div class="main">

	<section class="sobre">

        <div class="container">

            <div class="row">
                <div class="col">
                    <h2>Segmentos atendidos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <img src="<?php echo get_template_directory_uri()?>/img/segmentos.png" alt="">
                    <span class="tag">+ de 1000 postos atendidos!</span>
                </div>
            </div>

        </div>

    </section>
    <section class="sobre">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Nossos Clientes:</h3>
                    <h2>Empresas que confiam no nosso trabalho</h2>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <img class="d-none d-md-inline-block" src="<?php echo get_template_directory_uri()?>/img/clientes.png" alt="">
                    <img class="d-md-none" src="<?php echo get_template_directory_uri()?>/img/clientes_mobile.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="sobre">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Onde estamos:</h3>
                    <h2>Área coberta pelos <br>
                     nossos serviços</h2>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                <img src="<?php echo get_template_directory_uri()?>/img/area.png" alt="">
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer();