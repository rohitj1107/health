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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'lKhb-GUzL:jyk7~makfsQ}/},t4N07OH}ynGR uS{fTK- ZH^Ae#-+SZY*#g9 F%' );
define( 'SECURE_AUTH_KEY',  'g-E%^H2*CXp97GW+p],<vZG<2Tav6@|r+EW-6P`4=)L;bne]m:-Ym!LWSSg GD,i' );
define( 'LOGGED_IN_KEY',    'S8mgQm(j)sL9wEdE?k*,gTSU@x=g`B4*ZcCQoAeiK>4tZl|c>$)q,a4CZN~4ZaDl' );
define( 'NONCE_KEY',        '4RQ^|{zvs=Y~jO>/ax]Wezf/+g;[Kk}tCprZ/@63q<q#,fz_Li^%H#gYagww6#l5' );
define( 'AUTH_SALT',        'L]H@PLnZkfaE]Xg^%]TE#pItuHFvm!.Ls~w$R6Ut[ESI0w(B1<p_,:ZQ,oyCCec+' );
define( 'SECURE_AUTH_SALT', '_So7g:XM(-Hasdpg`}ez|u!ALeLOyW=i37ZcQf1YNF?Cas]H-z9dKW}u@X#XUfj[' );
define( 'LOGGED_IN_SALT',   '?v;1#b3Dk~DNga~<fza4H84;U$sjzfO>`tssH|STvf2#Wcvnpvc}d>c>sk+}V2|W' );
define( 'NONCE_SALT',       'OA>3)9.1-?)KAl/y>k0Ab{K/$z}!zrLo`7jRMFmfFHs+}:d{h8#IffH6TVpeaAW&' );

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
define( 'WP_DEBUG', true );

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
