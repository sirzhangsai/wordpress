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
define("FS_METHOD","direct");

define("FS_CHMOD_DIR", 0777);

define("FS_CHMOD_FILE", 0777);
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '000000' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('WPLANG', 'zh_CN');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':?oFmG#}6L}<:@[p,F_!+Tg&63GtB[%L<mO~#zuQcl!D3wXm$~kLHezbagOkY&j)' );
define( 'SECURE_AUTH_KEY',  '8c*>[&+qbgd9{diX1CeCH]$stFLGiA_&0|+fYvn(<9f&K4|1UxJ^L@PG$YH{.[S(' );
define( 'LOGGED_IN_KEY',    'AaH6b7sykF[k1#<%bk<qL8D+{(ss GxSt8J)w4-ZwMahVVtn[Va#[Ti)+5RbCji%' );
define( 'NONCE_KEY',        'a=,ysRRlWTE<:TduU-.R5MP:2iy1a&c~<$d%bGbK#=o]H6f`0qF5efTG<rfbgR2(' );
define( 'AUTH_SALT',        'lB,9Obzv/0jJpC,5~B/NLB.KMMp5w:zDAe<v=<Cv~<&H-k=7)W>|.3-QvP6qD!6M' );
define( 'SECURE_AUTH_SALT', '`Q-K:fuY9KE%vE`Ou.(nsF$5<-8G%B/4^nj*xtu*<q,[?9u?PYsbKum%Gfq,*d<L' );
define( 'LOGGED_IN_SALT',   '+bYx^LDYP*ToTE uVAd.M=uSp|R!vTQAy[W#hD=o+|G )*zRK6PzZ8I`c~Az[DSZ' );
define( 'NONCE_SALT',       '>b#8C7,Jl@L+6a*;N>pnJ/wriRg1U4aYt9wTx$gKh(KJQT8262Y.+v+MzmHZTJ^t' );

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
