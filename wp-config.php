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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_mikitours' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '5?-m@<]4,^ulw|J}-aHzXUL>B30l3O>CdZ%-g* Li-eq:vMf^E~s[HJ5x|0&ljEG' );
define( 'SECURE_AUTH_KEY',  ':lcFI[*DIILpON~|COVLm~jYg#Ym0`M#9O>LEoaWHq7aN70:H2gp=2>E3Zh!~Z.x' );
define( 'LOGGED_IN_KEY',    'D&Bn3O+1  kkj#arkjCV?ln281tzuz.>S)YM4ovrAZ*~,^DMx=ka%9C3V/~:f8Br' );
define( 'NONCE_KEY',        'ZKkYfs3MB^E,qJ&&QQq5R>w*Of^?sw,1dG_Ik2x=tf?3*TSX |Q; yAln+=^HF>Q' );
define( 'AUTH_SALT',        'vOZ4o-fVgP]5yqu]]=I~qMsK8-PB.~bHUY7gTJ#&-w#g6&]M`y@(UbYq}WG>d=?T' );
define( 'SECURE_AUTH_SALT', '$mXk*r~MY4RjHARM1Iazk_pb~DoVP3#S=V9sc.dIP|f=:2ltaRczM+[fbz;H%|TN' );
define( 'LOGGED_IN_SALT',   ' v[:KN}D6nGB5P7GYQfhZxBNKHIWG>izI]JlYTd(WS-0NbjrBFfbGz3y5ytEd `P' );
define( 'NONCE_SALT',       'Y(H)8Y?CpsQTR<`Z04v=KOEf4_!,INn^zn?=?>@(UT3GiqUF(^FTc~SKU1p2=KZK' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
