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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ref_project_2' );

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
define( 'AUTH_KEY',         'f_twazdmH<2Bkr+45CLH!!QLhxL$#V/gso?7k/M-I1=%K@IO$rsam+VZZTb$N`.U' );
define( 'SECURE_AUTH_KEY',  'gT/; HD(Yur`8@LP1Ndbw$7^:RQ/}(4$8NMHOE/tmg[vgs[w2AT},Z+_P3.Ej{G6' );
define( 'LOGGED_IN_KEY',    'hQ5rj#6^BZARcd]ufS%VKI#q!FlJDGE,)yB6#9/2h*GF-/cyqhY2b`95?JbP}w+|' );
define( 'NONCE_KEY',        '}W;?l;nn+*?<s:U:ldWu5HEkF6<.s!i_[Nf27:r0L?WZZC.)==V8?[(3+LB8!D/V' );
define( 'AUTH_SALT',        '+4UEnn(s3(^1]h=c1iK c6W--M9-A}yq:Ty`:L9Ou}*AATFoC=5W]*1WI$$cX$aT' );
define( 'SECURE_AUTH_SALT', '>?:+R~@mnZRQ6GscC({4Nb56al_Th7sNF8}Lq>Ox?Z0e&^P(O2?bI<Xjn-zY-^Sl' );
define( 'LOGGED_IN_SALT',   'R>#!~{qRf;=$zI#uspi-w_N:%?7Go_f$_8f?qaGjq32Pc+E%_8?MUsR1*K&LRr.{' );
define( 'NONCE_SALT',       '#H5x_q1nfc]%-Gq%&~x#3Bi##A0L]}%J)lKPnlTTYP??HJ|}.nF`#||.ph0ZEb-B' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
