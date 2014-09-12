<?php
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

$__hasconfigured = false;
$__configuration_files = array(
	'localhost' => "wp-config-localhost.php",
	'qa' => "wp-config-qa.php",
);
foreach ($__configuration_files as $enviroment => $file) {
	if( file_exists( ABSPATH . $file ) && !$__hasconfigured) {
		require_once( ABSPATH . $file );

		$__hasconfigured = true;

		define('WP_ENV', $enviroment);
	}
}

if( !$__hasconfigured ) {
	/**
	 * The base configurations of the WordPress.
	 *
	 * This file has the following configurations: MySQL settings, Table Prefix,
	 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
	 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
	 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
	 *
	 * This file is used by the wp-config.php creation script during the
	 * installation. You don't have to use the web site, you can just copy this file
	 * to "wp-config.php" and fill in the values.
	 *
	 * @package WordPress
	 */

	// ** MySQL settings - You can get this info from your web host ** //
	/** The name of the database for WordPress */
	define('DB_NAME', '');

	/** MySQL database username */
	define('DB_USER', '');

	/** MySQL database password */
	define('DB_PASSWORD', '');

	/** MySQL hostname */
	define('DB_HOST', '');

	/** Database Charset to use in creating database tables. */
	define('DB_CHARSET', 'utf8');

	/** The Database Collate type. Don't change this if in doubt. */
	define('DB_COLLATE', '');

}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1|t1Ms-+^#A~nH,|CSsjTtLbeB)H2hFVd-~y$v9HJUtXHtIPG#+HI*Jdx5|Y`ePE');
define('SECURE_AUTH_KEY',  'r-:)=BCL/):K3L:kRT|:A}r[[R`L>6A[pFcQ}wl-rN%1/CR%tELrn^mL2F@TNlp3');
define('LOGGED_IN_KEY',    'L|A=B#CrN<gV)7+C34>j[s5CD+q0,%ph>.&Bv]o+@m~f~k3vuCo:Er]emq^y1!o4');
define('NONCE_KEY',        'eO%`U5MrGC`Y^~Z<g``Ov7bA) ]akY;{*q-V%XDl<Z~6Ct{V;W;0_?t-rJ9(D8]]');
define('AUTH_SALT',        '(9pkh+[Q/LdbOyGl6vH*|kBZb,$/0#1G9W-XYGfv(ML+f{ZF>f?i#&0,s(Y&&l@l');
define('SECURE_AUTH_SALT', 'qQYn87^^+dr~Iz,|#GWOx7/Hqf(Dsa=uxdy3;5f8A0OCl3-8^h+lm}Zw|EV#%{:.');
define('LOGGED_IN_SALT',   'O PPH6|(0 T8-]%&~kHhhO8#VT+$ypQ~[#m]m806AGj-yvrWEa,Cp5+HRQl6z%3r');
define('NONCE_SALT',       'O{UZz_NS#-4|A^&A:1>pZ7|G36J_-]Zd]|-^A-y/u@c/!igZ3$^$kY[PD>k9Avf.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ck_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'pt_BR');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', false);

define( 'WP_MEMORY_LIMIT', '512M' );
/**
 * WordPress Network Activate
 * You must comment this line so you can start a new localhost
 */

define('WP_ALLOW_MULTISITE', false);

/**
 * WordPress Network Configurations
 * You must comment these lines so you can start a new localhost
 */
if (defined('WP_ALLOW_MULTISITE')){
	define( 'MULTISITE', false );
	define( 'SUBDOMAIN_INSTALL', false );
	$base = '/';
}



/**
 * WordPress Files Edition Security
 * Nobody can be able to edit files within the admin it self
 */

define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );
// define( 'ACF_LITE', true );

/* That's all, stop editing! Happy blogging. */

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

