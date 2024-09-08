<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'keluh kesah remaja' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',TLbCMED1Tt9JG37S^?Lr&)+VNb2V.mp26^wgp59mo_(:{B6JBg8kAU*2=XMXzj>' );
define( 'SECURE_AUTH_KEY',  'H_Tu9:UcA:y<*CdgvoHh=QnZ[{nWy6ps}lPi?{=y|>Ek)RIye9R6jM.}zz$t/gN4' );
define( 'LOGGED_IN_KEY',    'mM6i}=/~;ts+gpZxQuy[e_<2$fnqv$%SNN(LcBLR L&!yBOIER&uuYg,p-Zg$DnX' );
define( 'NONCE_KEY',        'Umh!%T5$8Q|G/tp`Y?l>zj8hNSJZ)dgL,:,>XBZF2-O#b@sASXb@,6z&XE@Y<:=<' );
define( 'AUTH_SALT',        'IBzNe7u](mq&y.>{Q?MiEv0{#k[YiK]^&g}4%0?MDiLj8xSA&rdOuPS#_{.y$kR2' );
define( 'SECURE_AUTH_SALT', 'D6hq{{Vd`k{pkn+Y9zH`^@%(7-e|D5MrRq4nPlBVATk/7q)0*5_3j[i]=?;T;;@0' );
define( 'LOGGED_IN_SALT',   'iD< ,t!+cl3I([VR1EVKOr6dzsPZ]iqr>.dKwSq]-a#13DqmJ+n<v4<yz|.GE1 !' );
define( 'NONCE_SALT',       '1=q}|@_ZwMTdQbuo|HX3=MJ?thC(WKkIYWW2o^W0(5NT~)TB2^zB]*l^RRzM{kX7' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
