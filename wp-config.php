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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'nextgengaming' );

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
define( 'AUTH_KEY',         'Ac2%zKBCE:Zr=*=q=S>*o`q!jHk4{%b6[cO(#Jy]BjZ|JH3kPf/HSwvvV%-N5yLU' );
define( 'SECURE_AUTH_KEY',  'b4(@[A83L;z``SD!tzHXoM78Gt@V8Zkz$/q{fkRFFdCbyCn.0~<1#(M2,aQ|Eo33' );
define( 'LOGGED_IN_KEY',    '-?SRYYl]&T@uwM*V^Jz]JA7O]Was0ST`Wyue.Yp1>z[lXd?TFso#ouqA-^z4<}G ' );
define( 'NONCE_KEY',        'SW./Yh:5wVg9:8m]{P}f{:*H >LVf9XiX%au7_=.N;E`Ibd#8Yasj;nebw ,`.kO' );
define( 'AUTH_SALT',        'I&?9qY}VG4pz(/RlNBNEc# hm|0Vt Th1Ksx7!{_,;0:q^w2X$ 5%C WG^b]N1QA' );
define( 'SECURE_AUTH_SALT', '}}v@~)/Gln=14f5Ti{VJ` @vGQF6N6S[G)U~btl@(f+orzfVB4BsckD!_&GTFOWG' );
define( 'LOGGED_IN_SALT',   'EV- m]$)&viz?Ij!P!t#}:$Tuk^4j.d1uiSDP-Ar4qA6ni2V9D#B+6WvWEQHgy#D' );
define( 'NONCE_SALT',       'R#S(H[mzj8|7R3!1!Mf%:&,M<)<y2g<9%>pVX)z-$.p<$I/kt#a.l{8L8KIUv&}K' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
