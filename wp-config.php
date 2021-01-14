<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_airi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{blhK1BNIU8Msa?DxW-|Wy/1q)_Y{0|<I>SrD:$<LkG/+[~0n?(NLd+<]z`e&EJO' );
define( 'SECURE_AUTH_KEY',  'KY5s)ZeYH]}Z`w;d8Rx v=Vkp=>#s[/3y+Qn+Q K2$oal]Atu}.6F{+/8C1~n!:p' );
define( 'LOGGED_IN_KEY',    'm tukkXj^wza]!hF1w_e+l>kU0x2JT8`gq!vkS*e.3zA):%l.&VYT/:Lw<yyYz=;' );
define( 'NONCE_KEY',        'w&roVI.9M#E.:BsvE7]O?%)!K(i(9)V_#;J6h30&,jfFaJYBe8Z}C5+4YffXBD`e' );
define( 'AUTH_SALT',        'F0aF>UD-U5&&6zJC8D=&vXX4c?pT,>H#o)f2osq){(1h6mfU!D>6 Ce&w{E(20_S' );
define( 'SECURE_AUTH_SALT', 'e*F;fzZ6wz971L=99zPYq!,FaVx3](uwI{]6#I9!RN~zq2HP+A6PvB@1nJ$9mW%p' );
define( 'LOGGED_IN_SALT',   'ls-,Jhd;4fc`eL8H%hh21n^HaLfz[qqAI<tIu)umNlsXFf++FlG:t`24twumrS%s' );
define( 'NONCE_SALT',       '@-t$pl99_Lu^j;X:9=JD_:v@#/gz}jOng|M}fVQ`,9}By/weqkj2A4VZd,.,~+]C' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'airi_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
