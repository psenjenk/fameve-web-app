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
define( 'DB_NAME', 'fameve-cloud' );

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
define( 'AUTH_KEY',         'Lu5~kB~^ToaX-h>zb-bT*rh%)`6??mGk+Fg:Zk05pc#VcYT88{*tpvED5ML^-$Pf' );
define( 'SECURE_AUTH_KEY',  'pg<c.W|Ueo.Hsp`^O*_va{ArFX c&6jlM7hgV&1akMJ+WNTkE?&?5ept{NSBX.hL' );
define( 'LOGGED_IN_KEY',    'y&pEwAxE^3^1>^B|eNimOS|=QX3b;LCib{jrNc.H:Dk14j|;{vR.3ox,8ClhKaC3' );
define( 'NONCE_KEY',        'lVup?Ba*IkLFu%3WLsNnpC6]Q~5-p59Vf8<pnF!rtYTIk4!pZE&P.6xTrRcuO^4Y' );
define( 'AUTH_SALT',        '4;A:J+i[yw`4lcj{Sbl=^ $gro!z7n4In-SN&G_d1c/-];{Xp M^NNL<=;tbI&(w' );
define( 'SECURE_AUTH_SALT', 'Cv/7Egcz>:w+urpU|>-7b5au]i,b2+]9BR^zU8.0l~t/$cA/H7L45$+AQLuT5~m2' );
define( 'LOGGED_IN_SALT',   ')})v7aBI)9u9v%LRInC&Aec %OjW Vx*|Xobt%-c/m_GSV}p}F9F#h$YKg#^tev9' );
define( 'NONCE_SALT',       'c&fAq!b[Xz{W%B*j5cO/-lYmFRZm,[]0<(+IQboi6$rSbD8!38Cgm%=:Cum|<Pq)' );

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
define( 'FS_METHOD', 'direct');