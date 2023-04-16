<?php get_header(); ?>

<div class="main">

	<section class="intro">

        <div class="container">

            <div class="row">

                <div class="col-md">

                    <h1 class="titulo-pagina"><?php echo get_field("titulo_pagina")?></h1>

                </div>

                <div class="col-md text-md-right">

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

    <section class="bloco equipamentos">

        <div class="container">

            <div class="row">

                <div class="col">

                    <h2 class="titulo-2 uppercase"><?php _e('Aluguel de <strong>Equipamentos</strong>','estudio') ?></h2>

                </div>

            </div>

            <?php $query = new wp_query('posts_per_page=-1&post_type=equipamento');

            if ( $query->have_posts() ) : 

                while ( $query->have_posts() ) : 

                    $query->the_post(); ?>

                <div class="row item">

                    <div class="col-md-4" data-match-height>

                        <div class="imagem">

                            <?php the_post_thumbnail(); ?>                                    

                        </div>

                    </div>

                    <div class="col-md-8">

                        <h2 class="titulo-2"><?php the_title() ?></h2>

                        <?php the_content() ?>

                        <div class="row">
                            <div class="col-lg-4">
                                <a href="https://loja.pastorefisio.com.br/" target="_blank" class="btn">Alugue agora</a>
                            </div>
                            
                            <div class="col-lg-8">
                                <a href="https://api.whatsapp.com/send?phone=5511974338431&text=Ol%C3%A1%21%20Estava%20navegando%20no%20seu%20site%20e%20eu%20gostaria%20de%20conversar.%20" target="_blank" class="btn">Envie sua mensagem em nosso whatsapp</a>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <hr>
                    </div>

                </div>

                <?php endwhile;

            endif;

            wp_reset_postdata(); ?>

            </div>

        </div>

    </section>

</div>

<?php get_footer();