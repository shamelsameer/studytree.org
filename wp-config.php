<?php
define( 'WP_CACHE', true ) ;
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
define( 'DB_NAME', 'u384435920_fbT3W' );

/** MySQL database username */
define( 'DB_USER', 'u384435920_rKdJy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'BfQbaZVzgQ' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          '!,pQ*w1meL{]<^@ksR,(x([f_b9Uf!zK;b&5M *PM`K.d~,/YRq(oRjj#3=,Z4xk' );
define( 'SECURE_AUTH_KEY',   'auYE?-|2Y1+&Ne0>ZM2]8<PDD4!ZPR$m[T[Ih,*q,_F7|LZ~muq~c@w)*dbbj2^8' );
define( 'LOGGED_IN_KEY',     '*nn{]y1|-[lp:b#wb/G#dEd%{()MMGxk`DpW^Z2gOBB=x s=2bMB~>#G1ES04R~w' );
define( 'NONCE_KEY',         ' K_jOJ|f>{Dc;*l:WW;YpWd#R[SW!75n|-p@Dh{Jv)W!`48GU]f$/EmK+PbuOD^/' );
define( 'AUTH_SALT',         'dJ~z.MR@Ux1EE&jfT#AQBMX,A8Qgklk~(Z3r2*RLbL[&Od{iHK++lzQZqT-tWahM' );
define( 'SECURE_AUTH_SALT',  'sJ`02.*#14wMV|OCBe./P.<ZQM^l:ey^E:T|z9RC5Sl?m%~eHa*hzEy`coZn4OD%' );
define( 'LOGGED_IN_SALT',    'KboqpB+v>l-d-2,Mpyep|C)|c2EfFPF~aRe4lC3foO<[]3{6dI52:3]r~m/_2E{M' );
define( 'NONCE_SALT',        ')zyNN 8Z{0Og|i+=i,h/U{:qsEDS 5]N{+Lh?YWUdyHNXR.yEctO tr]IPBG!).H' );
define( 'WP_CACHE_KEY_SALT', 'gG^j~clmv@THI&CW&f0n/Ej~K>dXR&y(s,-O<+z/,/!0!*RkmY{&Yb`</ON~+EA>' );

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
