<?php get_header('alt'); ?>

<div class="main">

	<section class="intro">

        <div class="container">

            <div class="row">

                <div class="col-md-6">
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
                </div>

            </div>

        </div>

    </section>

    <section class="bloco sobre">

        <div class="container">

            <div class="row">

                <div class="col-xl-8">

                    <div class="row">

                        <div class="col">

                            <img src="<?php echo get_field('img_sobre') ?>" alt="">

                        </div>

                    </div>

                    <div class="row">

                        <div class="col">

                            <h2 class="titulo uppercase"><?php echo get_field('sobre_01_titulo') ?></h2>

                            <?php echo get_field('sobre_01') ?>

                        </div>

                    </div>

                    <div class="row py-4">

                        <div class="col">

                            <a href="#" class="btn"><?php _e('Acesse meu Currículo Lattes','estudio') ?></a>

                            <hr>

                        </div>

                    </div>

                    <div class="row pb-4">
                        <div class="col">
                            <div class="tabs-wrapper">
                                <div class="wrap-tabs">
                                    <div class="tabs">
                                        <div class="tab-icone" data-target-item="tab-1" data-interacao>
                                            <?php _e('Missão','estudio') ?>
                                        </div>
                                        <div class="tab-icone" data-target-item="tab-2" data-interacao>
                                            <?php _e('Visão','estudio') ?>
                                        </div>
                                        <div class="tab-icone" data-target-item="tab-3" data-interacao>
                                            <?php _e('Valores','estudio') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-content-wrapper">
                                    <div class="tab-content" data-target-content="tab-1">
                                        <?php echo get_field('missao') ?>
                                    </div>
                                    <div class="tab-content" data-target-content="tab-2">
                                        <?php echo get_field('visao') ?>
                                    </div>
                                    <div class="tab-content" data-target-content="tab-3">
                                        <?php echo get_field('valores') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col">

                            <h2 class="titulo-2 uppercase"><?php echo get_field('sobre_02_titulo') ?></h2>

                            <?php echo get_field('sobre_02') ?>

                            <hr>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col">

                            <a href="<?php the_permalink(149) ?>" class="btn inverso"><?php _e('Ver galeria de fotos','estudio') ?></a>

                            <a href="<?php the_permalink(20) ?>" class="btn"><?php _e('Agendar avaliação','estudio') ?></a>

                        </div>

                    </div>                    

                </div>

                <div class="col-xl-4">

                    <div class="box-destaque">

                        <h2 class="titulo-2"><?php _e('Deixe seu <strong>telefone</strong>','estudio') ?></h2>

                        <p><?php _e('Descubra como os serviços da <strong>Pastore Físio</strong> podem te ajudar!','estudio') ?></p>

                        <?php echo do_shortcode('[contact-form-7 id="53" title="Deixe seu telefone"]') ?>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>

<?php get_footer();