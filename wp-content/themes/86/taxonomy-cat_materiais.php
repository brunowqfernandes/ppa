<?php global $wpdb;



    if($_POST) {

        $form = $wpdb->escape($_POST['tipoForm']);



        if($form == "cadastro"){

            $nome = $wpdb->escape($_POST['cadnome']);

            $email = $wpdb->escape($_POST['cademail']);

            $dataNasc = $wpdb->escape($_POST['caddatanasc']);

            $instituicao = $wpdb->escape($_POST['cadinstituicao']);

            $campus = $wpdb->escape($_POST['cadcampus']);

            $dataFormacao = $wpdb->escape($_POST['caddataform']);

            $password = $wpdb->escape($_POST['cadsenha']);

            $ConfPassword = $wpdb->escape($_POST['cadsenhaconf']);



            $error = array();



            if(username_exists($nome)) {

                $error['usuario_existe'] = "Usuário já cadastrado";

            }        

            if(email_exists($email)){

                $error['email_existe'] = "Email já cadastrado";

            }

            if(strcmp($password, $ConfPassword) !==0){

                $error['senha_diferente'] = "Senhas não coincidem";

            }

            if(count($error) == 0){

                $newUserID = wp_create_user($nome, $password, $email);

                if($newUserID){

                    add_user_meta($newUserID, 'data_nascimento', $dataNasc);

                    add_user_meta($newUserID, 'instituicao', $instituicao);

                    add_user_meta($newUserID, 'campus', $campus);

                    add_user_meta($newUserID, 'formacao', $dataFormacao);

                    $userLogin = wp_signon( array(

                        'user_login'    =>  $nome,

                        'user_password' =>  $password,

                        'remember'      =>  false

                    ));

                    if(!is_wp_error($userLogin)){

                        wp_redirect(get_permalink(16));                        

                    }

                }

            }

        }

        else{

            $nome = $wpdb->escape($_POST['txtnome']);

            $password = $wpdb->escape($_POST['txtsenha']);

            $userLogin = wp_signon( array(

                'user_login'    =>  $nome,

                'user_password' =>  $password,

                'remember'      =>  false

            ));

            if(is_wp_error($userLogin)){                

                $error = array();

                $error['erro_login'] = $userLogin->get_error_message();

            }else{

                wp_redirect(get_permalink(16));

            }

        }

    }

    get_header();

?>

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

    <?php if(!is_user_logged_in()){?>

        <section class="bloco area-login">

            <div class="container">

                <div class="row pb-3">

                    <div class="col">

                        <p><?php _e('Criamos esta sessão no site para que os alunos dos cursos ministrados pela Adriana Pastore possam baixar diversos conteúdos apresentados nas aulas.','estudio') ?></p>

                        <?php if($_POST){

                            if($error) {?>

                                <p class="texto-erro">

                                    <?php foreach ($error as $message) {

                                        echo $message . '<br>';

                                    } ?>

                                </p>

                            <?php }

                            else{ ?>

                                <p>Usuário cadastrado com sucesso!</p>

                            <?php }

                        } ?>

                    </div>

                </div>

                <div class="row" data-cadastro-inicial>

                    <div class="col-md-6">

                        <div class="box-destaque login" data-match-height>

                            <h2 class="titulo-2 uppercase"><?php _e('Já sou <strong>Cadastrado</strong>') ?></h2>

                            <form method="post">

                                <div class="row">

                                    <div class="col">

                                        <label for="txtnome">Nome:</label>

                                        <input type="text" name="txtnome" id="txtnome" placeholder="Insira seu nome">

                                        <input type="text" name="tipoForm" value="login" hidden>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col">

                                        <label for="txtsenha">Senha:</label>

                                        <input type="password" name="txtsenha" id="txtsenha" placeholder="Insira sua senha">

                                    </div>

                                </div>

                                <div class="row align-items-center">

                                    <div class="col">

                                        <a href="<?php echo home_url() . '/wp-login.php?action=lostpassword' ?>">Esqueci a minha senha</a>

                                    </div>

                                    <div class="col text-md-right">

                                        <input type="submit" value="Acessar" class="btn">

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="box-destaque cadastro" data-match-height>

                            <h2 class="titulo-2 uppercase"><?php _e('Quero me <strong>cadastrar</strong>') ?></h2>

                            <form>

                                <div class="row">

                                    <div class="col">

                                        <label for="prenome">Nome:</label>

                                        <input type="text" name="prenome" id="prenome" placeholder="Insira seu nome">

                                        <p class="msg-erro">Preencha para continuar o cadastro</p>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col">

                                        <label for="preemail">E-mail:</label>

                                        <input type="text" name="preemail" id="preemail" placeholder="Insira seu e-mail">

                                        <p class="msg-erro">Preencha para continuar o cadastro</p>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col text-md-right">

                                        <a href="#" class="btn" data-cadastro>Prosseguir</a>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

                <div class="row" data-cadastro-continuar>

                    <div class="col">

                        <div class="box-destaque cadastro-continuar" data-match-height>

                            <h2 class="titulo-2 uppercase"><?php _e('Quero me <strong>cadastrar</strong>') ?></h2>

                            <form method="post">

                                <div class="row">

                                    <div class="col-md-4">

                                        <label for="cadnome">Nome:</label>

                                        <input required type="text" name="cadnome" id="cadnome" placeholder="Insira seu nome">

                                        <input type="text" name="tipoForm" value="cadastro" hidden>

                                    </div>

                                    <div class="col-md-4">

                                        <label for="cademail">E-mail:</label>

                                        <input required type="email" name="cademail" id="cademail" placeholder="Insira seu e-mail">                                    

                                    </div>

                                    <div class="col-md-4">

                                        <label for="caddatanasc">Data de Nascimento:</label>

                                        <input type="text" name="caddatanasc" id="caddatanasc" placeholder="(00/00/0000)">

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-4">

                                        <label for="cadinstituicao">Instituição:</label>

                                        <input type="text" name="cadinstituicao" id="cadinstituicao" placeholder="Insira o nome da instituição de ensino">                                    

                                    </div>

                                    <div class="col-md-4">

                                        <label for="cadcampus">Campus:</label>

                                        <input type="text" name="cadcampus" id="cadcampus" placeholder="Insira o campus em que estuda">                                    

                                    </div>

                                    <div class="col-md-4">

                                        <label for="caddataform">Mês e Ano de Formação:</label>

                                        <input type="text" name="caddataform" id="caddataform" placeholder="(00/0000)">                                    

                                    </div>

                                </div>

                                <div class="row align-items-end">

                                    <div class="col-md-4">

                                        <label for="cadsenha">Senha:</label>

                                        <input minlength="8" required type="password" name="cadsenha" id="cadsenha" placeholder="Insira uma senha de 8 caracteres">                                    

                                    </div>

                                    <div class="col-md-4">

                                        <label for="cadsenhaconf">Confirmar Senha:</label>

                                        <input minlength="8" required type="password" name="cadsenhaconf" id="cadsenhaconf" placeholder="Confirme a sua senha">

                                    </div>

                                    <div class="col-md-4 text-md-right">

                                        <input type="submit" value="Cadastrar" class="btn">

                                    </div>

                                </div>

                            </form>                        

                        </div>

                    </div>

                </div>

            </div>

            <script>

                $('[data-cadastro-continuar]').hide();

                $('.msg-erro').hide();

                $('[data-cadastro]').on('click', function(e){

                    e.preventDefault()

                    var nome = $(this).parents('form').find('#prenome').val()

                    if(!nome){

                        $('#prenome').siblings('.msg-erro').show();

                    }

                    var email = $(this).parents('form').find('#preemail').val()

                    if(!email){

                        $('#preemail').siblings('.msg-erro').show();

                    }

                    if(nome && email){

                        $(this).parents('[data-cadastro-inicial]').hide();

                        $('[data-cadastro-continuar]').show();

                        $('[data-cadastro-continuar]').find('#cadnome').val(nome);

                        $('[data-cadastro-continuar]').find('#cademail').val(email);

                        $('#caddatanasc').mask('00/00/0000');

                        $('#caddataform').mask('00/0000');

                    }

                });

            </script>

        </section>

    <?php } 

    else { ?>

        <section class="bloco">

            <div class="container">

                <div class="row">
                    <div class="col">
                        <h2 class="titulo-2 uppercase"><?php _e('Download de <strong>materiais</strong>', 'estudio') ?></h2>
                    </div>
                    <div class="col text-md-right">
                        <a class="logout" href="<?php echo wp_logout_url(home_url()) ?>">Logout</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p><?php _e('Compartilhar informações é uma das maneiras que encontramos de levar mais qualidade aos nossos pacientes e amigos. Quanto mais profissionais atualizados, mais atendimento qualificado.','estudio') ?></p>
                        <p><?php _e('Fique a vontade para baixar os artigos, bem como nos enviar suas dúvidas ou sugestões.','estudio') ?></p>
                    </div>
                </div>

                <div class="row pt-3">

                    <aside class="col-md-4">

                        <h2 class="titulo-2"><strong><?php _e('Categorias','estudio') ?></strong></h2>

                        <ul class="controls px-0">

                            <li><a href="<?php the_permalink(16) ?>">Todos</a></li>

                            <?php

                            $all_categories = get_categories(array(

                                'hide_empty'  =>   true,

                                'taxonomy'    =>   'cat_materiais',                            

                            ));

                            $thisTrueCat = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

                            ?>                        

                                <!-- Output control button markup, setting the data-filter attribute as the category "slug" -->                            

                            <?php foreach($all_categories as $category): ?>

                                <li <?php if($category->name == $thisTrueCat->name)  {echo "class='active'";}?>>

                                    <a href="<?php echo get_category_link( $category->term_id ) ?>"><?php echo $category->name ?></a>

                                </li>

                            <?php endforeach; ?>

                        </ul>

                    </aside>

                    <div class="col-md-8 materiais">

                        <div class="row">

                            <?php if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }

                            elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }

                            else { $paged = 1; }

                            $query = new wp_query(array(

                                'post_type' => 'material',

                                'tax_query' => array(
                                    array (
                                        'taxonomy' => 'cat_materiais',
                                        'field' => 'id',
                                        'terms' => $thisTrueCat->term_id
                                    )
                                ),

                                'posts_per_page' => 8,

                                'paged' => $paged

                            ));

                            if ( $query->have_posts() ) : 

                            while ( $query->have_posts() ) : $query->the_post(); ?>

                                <div class="col-md-6" data-match-height>

                                    <div class="post">

                                        <div class="foto h-100" data-match-height>
                                            <?php the_post_thumbnail(); ?>
                                        </div>

                                        <div class="texto">

                                            <h2 class="titulo"><?php the_title() ?></h2>

                                            <?php the_content() ?>

                                            <div class="leia-mais">

                                                <a href="<?php echo get_field('arquivo') ?>" target="_blank">Download</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            <?php endwhile;?>

                        </div>                    

                        <div class="row">

                            <div class="col">

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

        </section>

    <?php } ?>

</div>

<?php get_footer();