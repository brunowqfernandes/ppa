<?php get_header(); ?>

<div class="main">

	<section class="banner-home">
        <?php add_revslider('slider-1'); ?>
    </section>
    <section class="servicos">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-5">
                    <div class="circle-menu">
                        <label for="solo" class="btn-circle"></label>
                        <label for="monitoramento" class="btn-circle"></label>
                        <label for="licenciamento" class="btn-circle"></label>
                        <label for="investigacao" class="btn-circle"></label>
                        <label for="remediacao" class="btn-circle"></label>
                        <label for="subterranea" class="btn-circle"></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Nossos serviços:</h3>
                    <div class="texto-menu-circle">
                        <div>
                            <input type="radio" name="radio-group" id="solo">
                            <h2>Amostragem solo/sedimento</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Pellentesque mollis mauris amet condimentum pretium faucibus aliquet cursus urna. At non lorem mus libero. Ipsum quam ipsum id velit. Sed eget convallis purus felis elit quis morbi. Non adipiscing habitant sed ac neque nunc quisque.</p>
                            <a href="<?php the_permalink(22) ?>" class="botao">Saiba mais</a>
                        </div>
                        <div>
                            <input type="radio" name="radio-group" id="monitoramento">
                            <h2>Monitoramento</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Pellentesque mollis mauris amet condimentum pretium faucibus aliquet cursus urna. At non lorem mus libero. Ipsum quam ipsum id velit. Sed eget convallis purus felis elit quis morbi. Non adipiscing habitant sed ac neque nunc quisque.</p>
                            <a href="<?php the_permalink(22) ?>" class="botao">Saiba mais</a>
                        </div>
                        <div>
                            <input type="radio" name="radio-group" id="licenciamento">
                            <h2>Licenciamento</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Pellentesque mollis mauris amet condimentum pretium faucibus aliquet cursus urna. At non lorem mus libero. Ipsum quam ipsum id velit. Sed eget convallis purus felis elit quis morbi. Non adipiscing habitant sed ac neque nunc quisque.</p>
                            <a href="<?php the_permalink(22) ?>" class="botao">Saiba mais</a>
                        </div>
                        <div>
                            <input type="radio" name="radio-group" id="investigacao">
                            <h2>Investigação</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Pellentesque mollis mauris amet condimentum pretium faucibus aliquet cursus urna. At non lorem mus libero. Ipsum quam ipsum id velit. Sed eget convallis purus felis elit quis morbi. Non adipiscing habitant sed ac neque nunc quisque.</p>
                            <a href="<?php the_permalink(22) ?>" class="botao">Saiba mais</a>
                        </div>
                        <div>
                            <input type="radio" name="radio-group" id="remediacao">
                            <h2>Remediação</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Pellentesque mollis mauris amet condimentum pretium faucibus aliquet cursus urna. At non lorem mus libero. Ipsum quam ipsum id velit. Sed eget convallis purus felis elit quis morbi. Non adipiscing habitant sed ac neque nunc quisque.</p>
                            <a href="<?php the_permalink(22) ?>" class="botao">Saiba mais</a>
                        </div>
                        <div>
                            <input type="radio" name="radio-group" id="subterranea">
                            <h2>Amostragem água subterrânea / superficial</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Pellentesque mollis mauris amet condimentum pretium faucibus aliquet cursus urna. At non lorem mus libero. Ipsum quam ipsum id velit. Sed eget convallis purus felis elit quis morbi. Non adipiscing habitant sed ac neque nunc quisque.</p>
                            <a href="<?php the_permalink(22) ?>" class="botao">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ppa">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 order-md-1">
                    <img src="<?php echo get_template_directory_uri()?>/img/ppa.png" alt="">
                </div>
                <div class="col-md-5">
                    <h3>A PPA Ambiental:</h3>
                    <h2>Geologia e consultoria ambiental</h2>
                    <p>Fundada em 1996 a PPA é uma empresa que atua no segmento de Gerenciamento de Áreas Contaminadas, Monitoramento de Emissões Atmosféricas e Qualidade do Ar. Qualidade e Confiança são nossos pilares.</p>
                    <a href="<?php the_permalink(10) ?>" class="botao">Conheça mais sobre a PPA</a>
                </div>
            </div>
        </div>
    </section>
    <section class="nossos-clientes">
        <?php add_revslider('corporate-clients1'); ?>
    </section>
</div>

<?php get_footer();