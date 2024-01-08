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
define( 'DB_NAME', 'admin_n211' );

/** Database username */
define( 'DB_USER', 'admin_n211' );

/** Database password */
define( 'DB_PASSWORD', 'n211' );

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
define( 'AUTH_KEY',         'gxANCa&3ax*%~>VoRR:4k|#xT=F%(}H)&D-$At j|;JQXcvp-z<P0j8^uv2/9GIM' );
define( 'SECURE_AUTH_KEY',  '.}dJI2Kf:|44.AW:{$]t:Ozs`a!FpSjwWJ|4?x.}XC_H8%&?Yq}c`]@/bQqy :Y9' );
define( 'LOGGED_IN_KEY',    'hB+*Eu{|rtLR/~vzg<oj}K/_pEMl*%BO3$~niw<kdc2[wh~nFh3ZirY#5E(|L%/v' );
define( 'NONCE_KEY',        '(r5>%1x!L/i3zPe|,jkZhjUhd0fQ<>6&!/|m/O+I_N{)p=oG_8[43SB)#H2_9Ff+' );
define( 'AUTH_SALT',        '{<BaM^&!@;aM5F4:X}oYLN15oVFSyj}eB)ub/64>l}s&]6GHzN{1%-H zAj3hGBG' );
define( 'SECURE_AUTH_SALT', '<(B`B(fmB0J)x}ng4[84M&t4NNkU(K&#q.YTd_M(,;.P5/S*eylB>KF_IAslb#5,' );
define( 'LOGGED_IN_SALT',   '9iD]45hfGH^ IYss3EzC!hoxpbiN>E,NNr!w$=aWn0zj6S~IMU=W`5[]8R.9c[m<' );
define( 'NONCE_SALT',       'l3J>?N#{|*t>*5a;4)+!4iLB5S[%=;z[tV[~rcs;`nu-lG,6jd+%#(l$Us^r{*uQ' );

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
