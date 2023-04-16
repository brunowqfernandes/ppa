<?php get_header(); ?>
<div class="main">
	<section class="intro">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="titulo-pagina"><?php echo get_field("titulo_pagina")?></h1>
                </div>
                <div class="col-md-3 text-right">
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
            <div class="row py-4">
                <div class="col">
                    <h2 class="titulo uppercase"><?php echo get_field('contato_titulo')?></h2>
                    <p><?php echo get_field('contato_texto')?></p>
                </div>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="52 " title="Contato" html_class="contato"]') ?>
        </div>
    </section>
</div>
<?php get_footer();