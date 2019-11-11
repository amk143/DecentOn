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
define( 'DB_NAME', 'am_db' );

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
define( 'AUTH_KEY',         'L8aZ3$97+xaadoh:bDQX_Ga}0,asz#W*cUk0ux.}hb4Xf4D3_mhAI6T4mPFq=_L1' );
define( 'SECURE_AUTH_KEY',  ' 8]>2iiUHjwG;Bmbw=21Ri~hcE&]y|H:{pS e<Y|~?z|1%;PM%tFx{NqQl#JX<~~' );
define( 'LOGGED_IN_KEY',    ':n[/mo6m.nSmkQDKX}AU}/2tgsEJb#u7vSRZ,pprM/PFr[(b)WhWktOv<TIcYpnU' );
define( 'NONCE_KEY',        ';Rd@K<W$Je{mupXn:`(FE7r(@rdtG#kvCdEpB1Z}Cj|hwf$0`I?PCkCFHv1o:0;p' );
define( 'AUTH_SALT',        'Joz<=^E 6GI`yU%#RYRR/Zcr</!!Yn^7cwzyn4VUm J-kS/sBkrCT4i{:>&C-P&L' );
define( 'SECURE_AUTH_SALT', 'sEci{[V)J=8G%1TuWR@=!RPlTh;TaNL:J{xX3+ox0^R}]HJfqknS%,3b9lU2bEmF' );
define( 'LOGGED_IN_SALT',   'e{WHAhi!!fRSM3W7x#^F%ac}UKTQpc6LN;f-v!9no3%ph:V#<I*x,Ntwm(k*?}Z:' );
define( 'NONCE_SALT',       ':8:WFAYI]Jc.pBRH2Qbr=t!]BTdF^A:Rd/0Te<q r||+mlNn7#nofIIOeK>:KYuE' );

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
