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
define('DB_NAME', 'wildfusion');

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


define('FS_METHOD', 'direct');
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
define('AUTH_KEY',         ']j/}=e)7sR!s[#GN0{z(_(A#|9me1b7Nn.18K=7]GQG|d[.of^-nbn2*yOAqU3.y');
define('SECURE_AUTH_KEY',  'IYTS&{<<c@{QLkq|Ezr,Ocd1(wErjc{~x7`HvRq|L}nZMpyLKFF?rJ%wUBUzL7>9');
define('LOGGED_IN_KEY',    '.a=.Pb!/[>xV{2mMVKy@#40<#Z6-?t1rvjw82o-3;cW%a}2bkO2q^8l1prKr~p[D');
define('NONCE_KEY',        '>h>iH+7s}3pm3b1~KJz8U>Ru<GGd@wce[u,Gv0V&FfHifeg;.,=pXd+B]:WEaZRX');
define('AUTH_SALT',        '|[d%)qC2)FY$.WNj$,[ea.~$D0Pp3#<PvP hA7}g{]j*FW0`0=fE,B@uE)Kvf3Yn');
define('SECURE_AUTH_SALT', 'eJ AI$A6xQ7!Af5LP9;o3 BS|IIL+|N=cz!>pk@YGe;`KcB,+)>`$7W$#s]MSRvy');
define('LOGGED_IN_SALT',   'es^Lw::4<$jEPpdE2A!`@8><JY>nx+ xZ3BA^yq5*aA)eSNGT9N8L|<far@x~7(y');
define('NONCE_SALT',       '+l] J7E_CqU#3mJXPQiI@2-2(vpSNQSbv!yJ*Ng.VUa)4BP^ui{>_t]fPFQ%4rK:');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
