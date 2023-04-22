<?php get_header('alt'); ?>

<div class="main">

	<section class="sobre">

        <div class="container">

            <div class="row">

                <div class="col-md-5">
                    <img src="<?php echo get_template_directory_uri()?>/img/img-01.png" alt="">
                </div>
                <div class="col-md-6 offset-md-1">
                    <h3>Quem Somos:</h3>
                    <h2>Geologia e consultoria ambiental</h2>
                    <p>
                        Fundada em 1996 a PPA é uma empresa que atua no segmento de Gerenciamento de Áreas Contaminadas, Monitoramento de Emissões Atmosféricas, Qualidade do Ar e Licenciamento.
                    </p>
                    <p>
                        Qualidade, Confiança e Empatia são alguns de nossos pilares. <br>
                        Temos como missão atender com soluções integradas as necessidades dos clientes mantendo uma imagem de credibilidade e competência, respeitando princípios fundamentais de ética e qualidade em serviços.
                    </p>
                    <p>
                        Nós cultivamos uma personalidade empresarial muito mais que a divulgamos e praticamos mais do que anunciamos. INTEGRIDADE, QUALIDADE e IMPARCIALIDADE fazem da PPA Projetos Ambientais excelência na prestação de serviços ambientais, pela capacidade de inovação tecnológica e pela ética em suas ações com os clientes, colaboradores e fornecedores.
                    </p>
                    <p>
                        Somos uma consultoria ambiental criativa, prática e inovadora. <br>
                        Conte conosco! Estamos à sua disposição.
                    </p>
                    <a href="<?php the_permalink(14) ?>">Solicite uma proposta</a>
                </div>

            </div>

        </div>

    </section>
    <section class="historia">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Nossa História:</h3>
                    <h2>A sua necessidade, o seu <br>
                    desejo, é a nossa prioridade.</h2>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                <img src="<?php echo get_template_directory_uri()?>/img/historia.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="pilares">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Nossa Essência:</h3>
                    <h2>Os princípios destes sentidos <br>
                        são nossos pilares</h2>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                <img src="<?php echo get_template_directory_uri()?>/img/pilares.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="contate">
        <div class="texto">
            <p>Contrate A PPA:</p>
            <h2>A sua necessidade, o seu desejo, é a nossa prioridade.</h2>
            <a href="<?php the_permalink(14)?>">Solicite agora mesmo uma proposta</a>
        </div>
    </section>
</div>

<?php get_footer();