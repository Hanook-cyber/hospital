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
define( 'DB_NAME', 'hospital-site' );

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
define( 'AUTH_KEY',         'CQ;p%t<9/zx<(lyXohtUX+pW*pb2?s4!]^Bsv2`@SA3T0}[M({F]XMKMf}]mCw%(' );
define( 'SECURE_AUTH_KEY',  '79_t]jYZq|CO%fM <ql;]E.hZyw>mRa0wq6$hv[^3*Eh!)f8#BCPb7Nj*kXrBZX^' );
define( 'LOGGED_IN_KEY',    '/`k$N?U$A.j@wfqiAX3[d]]0PWq5x=HT4x`v4T ~KiU~x];_f*i&[AgmpBJ|FR4W' );
define( 'NONCE_KEY',        '!SR`NzGffU)%x075H#SK0=7!7HIG4a@4u#v@0K3^jw&kUCgJ#4*0!+datbNCB=Zn' );
define( 'AUTH_SALT',        '=,@l$h2J-LP{R3A`qMkluHikB6_>xwODE#:j)ySRz9*q;l$^mQbXLk&PfS4AcI7x' );
define( 'SECURE_AUTH_SALT', '~L3w/72/_j={B5uVhyQihJAmXE2Jm={:>Wx+h>V< $sgVR+[9lz8VO<oRlA*Jd-.' );
define( 'LOGGED_IN_SALT',   '[w:Srq01HD$|3C&Di^0li)WS)$V&hk|G4!&w:hDH7?WO6{pnxC;uMg*J+C~}h  W' );
define( 'NONCE_SALT',       'C$$Jb2*nVN?<`?!E;c<Okyi.Fw/+=howy~OI<8P7&zgS0=Dq/:$:)%3~le7A{cS*' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
