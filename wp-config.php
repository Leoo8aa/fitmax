<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         ')@<u%EiJKG:xlK;)>gE3_G.#J]3G9a`)j<mezp|BStZA:Upu8vNFozqy21QL5H&p' );
define( 'SECURE_AUTH_KEY',  'IZM8W9LxaF&tU<l9sKKl8H~M&cT^rPhjw5la%|3`a!5WB9|j_`^sCap0E]ba^:Lc' );
define( 'LOGGED_IN_KEY',    '^5%$APK[h!@ ?n2r<Ad(T*sEq8nlh#J!)l&A0Ty1RDg~n{2P?Eg# %I_2bSyn2<<' );
define( 'NONCE_KEY',        'wfX4P9fi?[6T^gDl>,>PuaUuRf5qk(`ET]vJ7cEz,mR&=M_|W5v/b&F28f&Pi.{G' );
define( 'AUTH_SALT',        'E 35${qS``m@Luz4$+V09a8cnZKJDqQ0t8jv9m>Hl%:.r|ToGEzrSiv(RXULE98-' );
define( 'SECURE_AUTH_SALT', '5sdAoQ%ZoEJLh)P{oA;{_,/FOi5%`a5tafMK[G]O#Y5Ww:7Ye_ZSPhA,p[-#*om/' );
define( 'LOGGED_IN_SALT',   'p?eBle|OQ}>O U#.Z?;6.YAiC^D;o%m>QVX%#jq?WWO<Tr2bV*0jo)rCj(QmQoen' );
define( 'NONCE_SALT',       '&}rXW`&B=vUX5:#$PEm28/11b1W}@]0e&Jt}E<UQ}5:goy0|PbZI2 t#nr4*PJ3T' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
