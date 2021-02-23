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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bd_argis' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'xtsxWrl]jlNXX&H&@>3WESK~@AP-,Yo^R7]|kfr6bR4eluw_ewpfBG*#lT+U,gzC' );
define( 'SECURE_AUTH_KEY',  'H1gx1n>cnzgF)-7[Vkq.+q59eJg@.cLO(f*nYt$SEqig^x]f2a!uJ5=,)wWA4x@Y' );
define( 'LOGGED_IN_KEY',    'Z):a&`m]gh,yu-ToS=ZIwWjw.S0K%2_3;1xLu }<&Qy|k_q]]|[bWe!Jmg*2z#Lf' );
define( 'NONCE_KEY',        '7+bP=@v}vB(?b^o/soSU%MX`S.I@FJEwllqxW;@>w#Ewv7fD9C-YJv($,^#rLLT9' );
define( 'AUTH_SALT',        'vO4J/sFWd.>+o|jh>eLK?FtC^D+|COp5r3*]MMI`PGRW}oT~2dgU3,P|KfW8o[K-' );
define( 'SECURE_AUTH_SALT', 'mua91[h~F-QiE K.oV0,.j5VIq]a>YD7=(`}-fc_:_0?t0Ku4Vp,:|!K?7%6sPoJ' );
define( 'LOGGED_IN_SALT',   '}aZAId[>VWaB#!c^^PHr4~x>N<~&Y.AObZyzhfPT,Dd<)Rf3x2-m)|AT%;A#2vWw' );
define( 'NONCE_SALT',       '1ZtLEVKYmwi5X@yc,M9`aPtNI_&U[+7q7Md64UocGn|OrENiri +`:5Oiiz-?arY' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
