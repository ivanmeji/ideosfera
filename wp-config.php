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
define( 'DB_NAME', 'ideosfera' );

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
define( 'AUTH_KEY',         '<as.`yWWglH}2wb?PC-2yM)V6i U~3o>|1nz`6{*abEgV3B:cBlu1e.]-:qMr#@_' );
define( 'SECURE_AUTH_KEY',  ',9Ya~|I>q8)^F0Ix$(4w7[lfs6)tx:Ev#~f1]$[p5Axm$q%FmMxg;?3n8?E91W&[' );
define( 'LOGGED_IN_KEY',    'fFa<I_pkpw>sH>,dR/g$;`%_9i-Urv4vVd?pq1)GL_ >0c$OXkk ,(r^~C)Y}G/(' );
define( 'NONCE_KEY',        '3(C_5f$FE2VL>/()0@z_qGyp>X,F@SD$n,00:Vh!r+aZk)sYMRVd#Ecei$Fj<Rxj' );
define( 'AUTH_SALT',        'R!Yh1Gk*I8*;x|6.N>&a3tl4c3%mi$|z(mEn)MT^tcZAVKIy:+Z;!2b/;B{K_1v{' );
define( 'SECURE_AUTH_SALT', 'KMEUJg~c@9RJ&hBuCoiG5zLLvrzsFWQA;/:{>*<ukI|[<B{ rQ;h?{^CVHa-!]ih' );
define( 'LOGGED_IN_SALT',   'c!Yg(TCQMq%UTb`nyzS%Sf2Q,db8~>GoEO2D3Y{3pT6}xHk,FvMDh2TdTKPda!BL' );
define( 'NONCE_SALT',       'F}bAN|j:$b8amiR%%f]e+FP $#EnHj%LC!Uu$3;eg=XhP^[CxFwVX,M/}k:AI:.W' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ri_';

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
