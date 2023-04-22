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

                        <?php endforeach; wp_reset_postdata(); ?>

                    </div>

                </div>

            </div>

        </div>        

    </section>
    <section class="servicos">
        <div class="container">
            <div class="row justify-content-between">
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
                            <a href="<?php the_permalink(22) ?>"></a>
                        </div>
                        <div>
                            <input type="radio" name="radio-group" id="monitoramento">
                            <h2>Monitoramento</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Pellentesque mollis mauris amet condimentum pretium faucibus aliquet cursus urna. At non lorem mus libero. Ipsum quam ipsum id velit. Sed eget convallis purus felis elit quis morbi. Non adipiscing habitant sed ac neque nunc quisque.</p>
                            <a href="<?php the_permalink(22) ?>"></a>
                        </div>
                        <div>
                            <input type="radio" name="radio-group" id="licenciamento">
                            <h2>Licenciamento</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Pellentesque mollis mauris amet condimentum pretium faucibus aliquet cursus urna. At non lorem mus libero. Ipsum quam ipsum id velit. Sed eget convallis purus felis elit quis morbi. Non adipiscing habitant sed ac neque nunc quisque.</p>
                            <a href="<?php the_permalink(22) ?>"></a>
                        </div>
                        <div>
                            <input type="radio" name="radio-group" id="investigacao">
                            <h2>Investigação</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Pellentesque mollis mauris amet condimentum pretium faucibus aliquet cursus urna. At non lorem mus libero. Ipsum quam ipsum id velit. Sed eget convallis purus felis elit quis morbi. Non adipiscing habitant sed ac neque nunc quisque.</p>
                            <a href="<?php the_permalink(22) ?>"></a>
                        </div>
                        <div>
                            <input type="radio" name="radio-group" id="remediacao">
                            <h2>Remediação</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Pellentesque mollis mauris amet condimentum pretium faucibus aliquet cursus urna. At non lorem mus libero. Ipsum quam ipsum id velit. Sed eget convallis purus felis elit quis morbi. Non adipiscing habitant sed ac neque nunc quisque.</p>
                            <a href="<?php the_permalink(22) ?>"></a>
                        </div>
                        <div>
                            <input type="radio" name="radio-group" id="subterranea">
                            <h2>Amostragem água subterrânea / superficial</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Pellentesque mollis mauris amet condimentum pretium faucibus aliquet cursus urna. At non lorem mus libero. Ipsum quam ipsum id velit. Sed eget convallis purus felis elit quis morbi. Non adipiscing habitant sed ac neque nunc quisque.</p>
                            <a href="<?php the_permalink(22) ?>"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php get_footer();