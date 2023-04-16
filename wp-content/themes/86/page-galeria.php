<?php get_header(); ?>
<div class="main">
	<section class="intro">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="titulo-pagina"><?php echo get_field("titulo_pagina")?></h1>
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
    <section class="bloco galeria">
        <div class="container">
            <div class="row">
                <div class="col px-0">
                    <?php while(have_posts()){ 
                        the_post();
                        the_content();
                    } ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer();