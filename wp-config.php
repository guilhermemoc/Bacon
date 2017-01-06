<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UEH[caaNmb).UYXESnG^:@oFw92H1@VRwRHx;I];EAvz8Hg%1;TcKkJIHe2I~K%r');
define('SECURE_AUTH_KEY',  '*%1f{H!O;~g{,_7_Fgt#Iptmq<nAwt~Iv9zp $v$4}D48Ezn9pn4]@r+[3Q@/o5n');
define('LOGGED_IN_KEY',    '>P2o.W^1=4}/t E-r::mYVIQ{lgCE4WjSFbv2RoG3]uM]D)^Wr^1f4L5+ H~C6$&');
define('NONCE_KEY',        '&[^ZV0SM&t:]RcxI|xN8|];+, uk/?zu,qF1J;_dJ:[)yLTDN]7F(V.*3HS]V4mg');
define('AUTH_SALT',        '^X}cn.!n*]@(;c<)bb5^;_)U?fL#g}Zvo8e|@LJB/{?A>WhJh?PW1F]Y-<m<,zg8');
define('SECURE_AUTH_SALT', 'mo+NImkeSkWRX46ys{h&m7kGV#Tg0^@^2 XD``&brk}TS$c&ak}KEx@+&HR|1f}Z');
define('LOGGED_IN_SALT',   '/Yu]sr)?O02y4]Y)A6[mYNTDI,fvwXFL5|mm]Hnp[U1Gs/V]X=S$S3X{iFbUG{9s');
define('NONCE_SALT',       'DF`h.V8_a@m4ial%R8wQj 0d1]`oLxN=%T y>WcdsD*JT<15rjq0(=o;$XF+N$(v');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
