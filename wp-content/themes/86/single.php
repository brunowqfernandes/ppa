<?php get_header(); ?>

<div class="main" id="post-cont">

	<section class="intro">

        <div class="container">

            <div class="row">

                <div class="col">

                    <h1 class="titulo-pagina"><strong><?php _e('Blog','estudio') ?></strong></h1>

                </div>

                <div class="col text-right">

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

                <div class="col">

                    <?php while(have_posts()): the_post() ?>

                        <div class="row servico-conteudo">

                            <div class="col">

                                <?php if(get_field('imagem_servico')) {?>

                                    <img src="<?php echo get_field('imagem_servico') ?>" alt="">

                                <?php } ?>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <h2 class="titulo uppercase"><?php the_title() ?></h2>
                                <!-- <p class="data-publi"><?php the_date(); ?> - <?php the_time() ?></p> -->
                            </div>
                        </div>

                        <div class="row  servico-conteudo">

                            <div class="col">

                                <?php the_content() ?>

                                <hr>

                            </div>

                        </div>

                        <div class="row">

                            
                           

                        </div>

                    <?php endwhile; ?>

                </div>

            </div>

        </div>

    </section>

</div>



<?php get_footer();