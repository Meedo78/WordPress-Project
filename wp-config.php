<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u248068700_Phq8z' );

/** Database username */
define( 'DB_USER', 'u248068700_O1PcO' );

/** Database password */
define( 'DB_PASSWORD', 'A6zcuhbvBp' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'QhLC+sc=2X^NXq]w3EE4J_RHFbO*}c7hdITxY6=RBAZRQ^4jyeuVD(YU~y8E#:2S' );
define( 'SECURE_AUTH_KEY',   'C*1:k1/ZMnUHa<r^c1oD1}^Z{wxJs=48-aEjG?(p,Ke}8^fk5Lbcge{m+/]c#B~.' );
define( 'LOGGED_IN_KEY',     'vb<11&(*d#6TF= *a~a2X_##{9S9QLB)abaK-7(TBV]=(AJ{?K,.u=wi`^o@Jz:k' );
define( 'NONCE_KEY',         'CnP]oxx>}/R:ZXfk-4$00au+ztZ:DTDIC}[KpH8#57nJLq7,,YMkO.M[ik[bYr7&' );
define( 'AUTH_SALT',         '[Pf9Wy,lfsas6]e9xco<yT)K/{#zky)!*HPsu=W<h!J6WP0pI:+2D1Bo{s]bdAV!' );
define( 'SECURE_AUTH_SALT',  '5S$T5i?B TL)_8fb/_BYWwC3%@,-->P5RACLjK&j <M9dAE-F61O)5*}fM=ik+,_' );
define( 'LOGGED_IN_SALT',    'b,2K`>IMdg9r@gUJ_y:[fD)07}Q,OVikA;1Ci0(1CuK_UGqj);DCoan#-jME7:,a' );
define( 'NONCE_SALT',        '(y]#_`Q*FjZ/:C89q>Yyfc?4V<;VY4+|YTtIU+d1]qkCL|]lY:poSt}@TK FGyOa' );
define( 'WP_CACHE_KEY_SALT', 'mQf8l/)9@jT>E&k8z6wF-?[{[X%SWSU{*|OGq>X/S$dAEeQm3hq~M9arm(kM_Y?w' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
