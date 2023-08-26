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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */


// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'xido');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         ']5Kw]T{J:=^|i3>[} MS;uUcKiu=&@jYn.?PiCtf/*i]Zv_S1<=kF1|NMJk2lNl1');
define('SECURE_AUTH_KEY',  'Z{fgtT LwDCP.J-:%NWF~#%~Ilp/5;C90pAIz Zd]z{vwN8v~A-Q+R!n>3:DQOTK');
define('LOGGED_IN_KEY',    '-4Q]a`%z*9a8y&If?/5L[gk)}j3hxL*b/Idr2mS)A>#<V6rM&{9s(x{]S2uhkN#.');
define('NONCE_KEY',        '4}or>;qn!k:2lZ2KQi%X1#f#mQ_,3Lcro_-V`QWM~Sw=ta*]zsP|}~KCM@`R5Qhe');
define('AUTH_SALT',        '=743Ff`o|;45!k]=%_0_xl^&w|e4I_[YS?J_gN;i)TC9CUIkKk.`[3qI8qoE#aYE');
define('SECURE_AUTH_SALT', 'Rz]D#tYUHspD[_JMO4C3yCw]>mo=))aSA,:>05)%D%M}VX[JrClcUwb?)?7@AFNe');
define('LOGGED_IN_SALT',   'l@#nb|ZuNh-M+]rY{gGd1F0Tu`*{YOQg,|Xo+/_0?[:uVmA?Cb5#6cL+c~ieXcy}');
define('NONCE_SALT',       'ox`JI9SkeVC(#s56i={B0r{{s=3%5]]H9Bu`<Gd-Lpox;x!v}=g~x,^,xz[g,pf#');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
