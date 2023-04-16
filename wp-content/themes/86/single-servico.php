<?php get_header(); ?>

<div class="main">

	<section class="intro">

        <div class="container">

            <div class="row">

                <div class="col">

                    <h1 class="titulo-pagina"><strong><?php the_title()?></strong></h1>

                </div>

                <div class="col-md-3 text-md-right">

                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">

                        <?php if(function_exists('bcn_display'))

                        {

                            bcn_display();

                        }?>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="bloco">

        <div class="container">

            <div class="row">

                <div class="col-xl-8 servico-conteudo">

                    <?php while(have_posts()): the_post() ?>

                        <div class="row">

                            <div class="col">

                                <?php if(get_field('imagem_servico')) {?>

                                    <img src="<?php echo get_field('imagem_servico') ?>" alt="">

                                <?php } ?>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col">

                                <?php the_content() ?>

                                <hr>

                            </div>

                        </div>

                    <?php endwhile; ?>

                    <div class="row">

                        <div class="col">

                            <a href="<?php the_permalink(12) ?>" class="btn inverso"><?php _e('Conheça nossos serviços','estudio') ?></a>

                            <a target="_blank" href="https://api.whatsapp.com/send?phone=5511974338431&text=Ol%C3%A1%21%20Estava%20navegando%20no%20seu%20site%20e%20eu%20gostaria%20de%20conversar.%20" class="btn"><?php _e('Agendar avaliação','estudio') ?></a>

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