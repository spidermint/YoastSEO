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
define( 'DB_NAME', 'huyhoang25' );

/** Database username */
define( 'DB_USER', 'huyhoang25' );

/** Database password */
define( 'DB_PASSWORD', 'hoan25072002' );

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
define( 'AUTH_KEY',         '.su#;9k~8/a7dxp`Nw+wsN^c?~x e1qBc<ylEOB*D(pg>3aZhjygt;tU,6zcU7hW' );
define( 'SECURE_AUTH_KEY',  '^swIJQtj@!/u-0(1=]7U`9:lfKwvd@3,D/t[_!#9<{|~;p0cV?^.Ql~&5K@bMmh&' );
define( 'LOGGED_IN_KEY',    ' @*6=~)3AfCM>0mT<Qdt<e?Syni@ZRSe;_V~EkH*|c@KjGgdjkeuX@{.s| hlcG<' );
define( 'NONCE_KEY',        'NM||QE22QaZI62>I.w.DVQkvT->dhL2J0;{8<CPJyOpT(!{BJXk2rjsmi_alvwx^' );
define( 'AUTH_SALT',        'KDvQPbx=21_FHD*eQls|Eyc`m{<<%uwFr?zod$<9i;<A)C@p4hi#_K&_M`dONKRt' );
define( 'SECURE_AUTH_SALT', 't2Y5eGVx<GFc`kdC*1q;eClg1z+/)g/tv2Tr~>/isG,T &,7!a$[O27E<H{W]q3e' );
define( 'LOGGED_IN_SALT',   '3`GDABNm@v^3d<V5F{?+>T-8sc5pm>>InzT++R/e5,r=V%p5./v=K%9dHvtK9?6,' );
define( 'NONCE_SALT',       'ue;`>{,^7eTO&+Sp&*bjU+W;vjKS|l|{|8W-]mLX8Z1w1Ch8/M{? `DOny0jsB[n' );

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
