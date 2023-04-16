<?php get_header(); ?>
<div class="main">
	<section class="intro">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="titulo-pagina"><?php echo get_field("titulo_pagina")?></h1>
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
    <section class="bloco sem-espacamento-topo">
        <div class="container">
            <div class="row" id="servicos">
                <div class="col botoes-servicos">
                    <?php
                        global $post;
                        $args = array('posts_per_page' => -1, 'post_type' => 'servico');
                        $myposts = get_posts($args);
                        $cont = 0;
                        foreach ($myposts as $post) : setup_postdata($post); 
                            $cont++;
                            if(($cont % 3) == 0 and $cont > 1 ) : ?>
                            <div class="separador-botoes">
                                <div class="servico">
                                    <?php the_post_thumbnail() ?>
                                    <h2 class="titulo-2 uppercase"><?php the_title() ?></h2>
                                    <a class="btn" href="<?php the_permalink() ?>">Saiba mais</a>                                        
                                    <div class="overlay">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col botoes-servicos">
                    <?php else : ?>
                        <div class="separador-botoes">
                            <div class="servico">
                                <?php the_post_thumbnail() ?>
                                <h2 class="titulo-2 uppercase"><?php the_title() ?></h2>
                                <a class="btn" href="<?php the_permalink() ?>">Saiba mais</a>                                    
                                <div class="overlay">
                                </div>
                            </div>
                        </div>
                    <?php endif; endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer();