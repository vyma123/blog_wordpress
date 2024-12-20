<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 * 
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wordpress' );

/** Database username */
define( 'DB_USER', 'mavanvy' );

/** Database password */
define( 'DB_PASSWORD', 'Matkhaumoi1@' );

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
define( 'AUTH_KEY',         '4p@9QHGc>*f`Zgk/b^w=(_rGMR]=MWgLw*qptT1~FU-8x2ArmHs&T6+hONQq0j<J' );
define( 'SECURE_AUTH_KEY',  '.H 8^I$B.?!Gv+_E+6UZfCJ&]ZO5@D2%$YM}[!KAx!;-d$ekS$@%EFw8HR2[z~)x' );
define( 'LOGGED_IN_KEY',    'P}r|uMnh8<Q3fWTv-YU}<AMfCAu}voG3?rf-(.7S}Te+k6?x&HuqGi9T?Jg A/?;' );
define( 'NONCE_KEY',        'rJ<>`$fc#}23RPO4JqHiiK1qP3CvQ(}HTc>h*H#*mdtl;#<;WbwUXWPF^qJR$QHK' );
define( 'AUTH_SALT',        'f1z`Bq?Dp~PA^,s8]:IqLC[[CE)+?_$gQTX_^.zkR)?4=o9&GQtE1<,zH#Pz)Xb)' );
define( 'SECURE_AUTH_SALT', 'P<=]-]QGmn3`,e9g:$0TCx@sed{$h}s#B#&Meo7u[<;w1+!xL$ UoK?l!*AmxJ]+' );
define( 'LOGGED_IN_SALT',   'hN!)JpQ*zknJ2(+|.{@lCW%wQ|AdzN7R#S{k_)87AS(wrAnm7R`@5#.-&J%(*6N_' );
define( 'NONCE_SALT',       'vtm 2:*V Zt@0}:~GLaXWv&X@k4U|<5r;B9J*KRN&I+/J6J@$,yuGT.Yb>G@8Ds8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
