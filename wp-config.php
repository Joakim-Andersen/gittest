<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'IqkBTMJje3tWmJ' );

/** MySQL database username */
define( 'DB_USER', 'IqkBTMJje3tWmJ' );

/** MySQL database password */
define( 'DB_PASSWORD', 'taj0tDbWlJUJJ9' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '[3wSu=;J+3L?GWr;g<Z(rdY-=z;5*UFWt7,oN8%2pW];9zv#GQl4mTQIU)t:`sc~' );
define( 'SECURE_AUTH_KEY',   'n~ Z/C[PKh!3Hd,zAR#z*+(d}1zXV9T(7{FQeeF#dm/%)fumOVQ~@GhXs>/* Vf.' );
define( 'LOGGED_IN_KEY',     'Zes [cMvV3$N2&I&f[#ie;K91g~!_%DDrOf2Txaf7+sp$&1Tb}B27%sxb;bSp6#g' );
define( 'NONCE_KEY',         'qzm-Lvd4f|?%Zkq@f7viCCv![x>H7EqAg]J8q%e6uUUJx?/g@v{07o/Gb?m?DJ1~' );
define( 'AUTH_SALT',         'sGCxb<-VIC5,LijKK=#l|YwS!bnuqlMqFaHGVar]+ZfGl38%_.0eo1-qXHXmN[ }' );
define( 'SECURE_AUTH_SALT',  'Fsj=:$z/?/}H%OYO(((omlg2W+%0Z lmx0`P[_J--}ml0p6Lxx5YbdSH]8)Ggy;F' );
define( 'LOGGED_IN_SALT',    'j7-jJh6=``0?Ia2r6UF!bME@zp LDfND;G=@{#=6Wu=nvSyS*TPy8SSmz? Qb41<' );
define( 'NONCE_SALT',        '56~*%gfo$}1+FWAd2+s&`(uPq4-y&R&irB-Ce|C)IOiOw kM4.bW(A>6|.Zr}2iz' );
define( 'WP_CACHE_KEY_SALT', 'QiJ#3#L}|GD@^9Mx}UQ?<Q2ZO,]cs|S}=VM^sxe9tL+!V*zO3Jpb&,P1,^|@i4x5' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
