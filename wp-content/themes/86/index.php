<?php get_header(); ?>

<div class="main">

    <section class="banner-home">

        <div class="row">

            <div class="col-12">

                <div class="slider-wrapper">

                    <div class="content-slider">

                        <?php

                            global $post;

                            $args = array('posts_per_page' => -1, 'post_type' => 'slide', 'orderby' => 'name', 'order' => 'ASC', 'tax_query' => array(

                                    array (

                                        'taxonomy' => 'cat_slides',

                                        'field' => 'slug',

                                        'terms' => 'banner-home',

                                    )

                                ),

                            );

                            $myposts = get_posts($args);

                            foreach ($myposts as $post) : setup_postdata($post);

                        ?>

                            <div class="slide">

                                <div class="slide-bg">

                                    <?php the_post_thumbnail() ?>

                                </div>

                                <div class="container">

                                    <div class="slider-center">

                                        

                                            <?php the_content(); ?>

                                        

                                    </div>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

        </div>        

    </section>

    <section class="bloco">

        <div class="container">

            <div class="row justify-content-between align-items-center">

                <div class="col">

                    <div class="box-destaque">

                        <div class="row align-items-center">

                            <div class="col-md-1 text-center">

                                <img src="<?php echo get_template_directory_uri() . '/img/down.png' ?>" alt="">

                            </div>

                            <div class="col-md-6">

                                <h2 class="titulo"><?php _e('Área <strong>do aluno</strong>','estudio') ?></h2>

                                <p><?php _e('Disponibilizamos aqui um material completo sobre a fisioterapia.','estudio') ?></p>

                            </div>

                            <div class="col text-center text-xl-right">

                                <a href="<?php the_permalink(16) ?>" class="btn">Saiba mais</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="bloco conheca">

        <div class="meio-circulo">

            <img src="<?php echo get_theme_mod('set_home_conheca_img1') ?>" alt="">

            <img src="<?php echo get_theme_mod('set_home_conheca_img2') ?>" alt="">

            <img src="<?php echo get_theme_mod('set_home_conheca_img3') ?>" alt="">

        </div>

        <div class="texto">

            <h2 class="titulo-2 uppercase"><?php _e('Conheça <strong>Adriana Pastore</strong>') ?></h2>

            <p><?php echo nl2br(get_theme_mod('set_home_conheca_desc')); ?></p>

            <a href="<?php the_permalink(10) ?>" class="btn">Saiba mais</a>

        </div>

        <img class="img-grande" src="<?php echo get_theme_mod('set_home_conheca_imgGrande') ?>" alt="">

    </section>

    <section class="bloco portfolio">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-4">

                    <img src="<?php echo get_theme_mod('set_home_equip_img') ?>" alt="">                    

                    <h2 class="titulo-2 uppercase mt-4"><?php _e('Aluguel de equipamentos','estudio') ?></h2>

                    <p><?php echo nl2br(get_theme_mod('set_home_equip_desc')); ?></p>

                    <div class="row">

                        <div class="col text-center text-md-left">

                            <a href="<?php the_permalink(14) ?>" class="btn">Saiba mais</a>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="servicos-box">

                        <h2 class="titulo-2 uppercase"><?php _e('Serviços','estudio') ?></h2>

                        <ul>

                            <?php $query = new wp_query('post_type="servico"&posts_per_page=-1');

                            if( $query->have_posts()):

                                while ($query->have_posts()): $query->the_post();?>

                                    <li><?php the_title() ?></li>

                            <?php endwhile;

                            endif; wp_reset_postdata() ?>

                        </ul>

                        <a href="<?php the_permalink(12) ?>" class="btn">Saiba mais</a>

                    </div>

                </div>

            </div>

        </div>        

    </section>

    <section class="bloco">

        <div class="container">

            <div class="row justify-content-between align-items-center">

                <div class="col">

                    <div class="box-destaque pr-5">

                        <div class="row align-items-center">

                            <div class="col-xl-1 d-none d-xl-block text-center">

                                <img src="<?php echo get_template_directory_uri() . '/img/at.png' ?>" alt="">

                            </div>

                            <div class="col-xl-4">

                                <h2 class="titulo"><strong><?php _e('Cadastre-se','estudio') ?></strong></h2>

                                <p><?php _e('Preencha os campos com seus dados e receba nossas novidades por e-mail!','estudio') ?></p>

                            </div>

                            <div class="col">

                                <?php echo do_shortcode('[contact-form-7 id="183" title="Sem título"]') ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>

<?php get_footer();