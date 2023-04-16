<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'estud250_ppa' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'estud250_ppa' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'u1)yZ&6p%%iF' );

/** Nome do host do MySQL */
define( 'DB_HOST', '108.167.188.185' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5zDh/fo;,Ho:-37>~7_)BB{_S-oJ^=[<@^UJ=1B>;3f,&t&SzrZA.(Eo&Qq 1JVF' );
define( 'SECURE_AUTH_KEY',  'PEzcvd/sm-5osays7sWeNFXqSkrLd8=BH]8/a^Czm*b>U0fVe5PA?e+S-&6^le39' );
define( 'LOGGED_IN_KEY',    '>LzNTzkpF,&|NvgFL|/2J9}C3]f|nA0Vdxk6/aI6:FoFhq<S>;#nP9t/<~PSuee-' );
define( 'NONCE_KEY',        '#GL*2nvA?1E&#bt4jX<8I&x*Zz9#;`X3m7YJs:Y,X6(<6k7$J67IM.: ,&kH# /P' );
define( 'AUTH_SALT',        '#vq5%o%$JQpq3qO$Xc9k[g`$)+mz.t OcVa9!74D.LZ%&Rv9dpUTM?&Q3kA*$d:2' );
define( 'SECURE_AUTH_SALT', '4t@&4q=kP1Q5OcgvQZU,[BVC:+wh#/{o}!@f6G[uCn$|pM(}1}3=:$$sBD<V9L+>' );
define( 'LOGGED_IN_SALT',   'nXO{Kt`(pen$+?ZE1x.J[<vvO$IN0?!vWIL/|v-OK]Bm:omW)GVoKA~o)cokU(N|' );
define( 'NONCE_SALT',       'oj&t}tl!S|C-%+e?#nJ%j7`&`f]N;h0#aZ0G=_uW6Z&X~E m-4xw9iyPr0!UV%eF' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
