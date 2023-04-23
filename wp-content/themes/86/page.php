<?php get_header('alt'); ?>
<div class="main">
	<div class="conteudo-servicos">
        <div class="conteudo">
            <h1><?php the_title() ?></h1>
            <?php the_content() ?>
        </div>
	    <div class="sidebar">
            <h3>Solicitar proposta</h3>
            <label for="nome">Nome:</label>
            <input type="text" id="nome">
            <label for="email">E-mail:</label>
            <input type="mail" id="email">
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone">
            <label for="mensagem">Mensagem:</label>
            <textarea type="tel" id="mensagem"></textarea>
            <button>Enviar</button>
        </div>
	</div>
    <section class="galeria">
        <?php add_revslider('corporate-clients1-1'); ?>
    </section>
    <section class="contate">
        <div class="texto">
            <p>Contrate A PPA:</p>
            <h2>A sua necessidade, o seu desejo, é a nossa prioridade.</h2>
            <a href="<?php the_permalink(14)?>">Solicite agora mesmo uma proposta</a>
        </div>
    </section>
</div>
<?php get_footer();