<?php get_header(); ?>

<div class="main">

  <section class="intro">

        <div class="container">

            <div class="row">

                <div class="col">

                    <h1 class="titulo-pagina"><?php _e('Blog','estudio') ?></h1>

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

    <section class="bloco blog">

        <div class="container">

            <div class="row">

                <div class="col">

                    <h2 class="titulo uppercase"><?php _e('Destaques do <strong>blog</strong>','estudio') ?></h2>

                </div>

            </div>

            <div class="row">

                <?php $query = new wp_query('posts_per_page=3');

                if ( $query->have_posts() ) : 

                    while ( $query->have_posts() ) : 

                        $query->the_post(); ?>

                        <div class="col-md-4" data-match-height>

                            <div class="post">

                                <div class="thumb">

                                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>                                    

                                </div>

                                <div class="texto">

                                    <a href="<?php the_permalink() ?>"><h2 class="titulo"><?php the_title() ?></h2></a>

                                    <a href="<?php the_permalink() ?>"><?php the_excerpt() ?></a>

                                    <div class="leia-mais">

                                        <a href="<?php the_permalink() ?>">Leia mais</a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    <?php endwhile;

                endif;

                wp_reset_postdata(); ?>

            </div>            

        </div>

    </section>

    <div class="bloco">

        <div class="container">

            <div class="row">

                <aside class="col-md-4">

                    <h2 class="titulo-2"><strong><?php _e('Categorias','estudio') ?></strong></h2>

                    <ul class="controls px-0">

                        <li><a href="<?php the_permalink(18) ?>">Todos</a></li>

                        <?php $all_categories = get_categories(array(

                            'hide_empty'  =>   true,

                            'taxonomy'    =>   'category'                            

                        ));



                        $thisTrueCat = get_category( get_query_var( 'cat' ) ); 

                         foreach($all_categories as $category): ?>

                            <li <?php if ($thisTrueCat->term_id == $category->term_id) echo "class='active'" ?>>

                                <a href="<?php echo get_category_link( $category->term_id ) ?>"><?php echo $category->name ?></a>

                            </li>

                        <?php endforeach; ?>

                    </ul>

                </aside>

                <div class="col-md-8 blog" id="blog">

                    <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                    $args = array(

                        'posts_per_page' => 3,

                        'post_type' => 'post', 

                        'cat' => $thisTrueCat->term_id,

                        'paged' => $paged

                    );

                    $query = new wp_query($args);

                    if( $query->have_posts()):

                        while ($query->have_posts()): $query->the_post(); ?>

                            <div class="row">

                                <div class="col-12 post">

                                    <?php the_post_thumbnail(); ?>

                                    <div class="texto">

                                        <h3 class="titulo"><?php the_title(); ?></h3>

                                        <?php the_excerpt() ?>

                                        <div class="leia-mais">

                                            <a href="<?php the_permalink() ?>">Leia mais</a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        <?php endwhile; ?>                    

                    <div class="row">

                        <div class="paginacao">

                            <?php echo paginate_links( array(

                                'total' => $query->max_num_pages,

                                'mid_size' => -1

                            ));

                            endif; wp_reset_postdata()?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



<?php get_footer();