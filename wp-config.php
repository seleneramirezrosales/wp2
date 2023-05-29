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
define( 'DB_NAME', 'wp2' );

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
define( 'AUTH_KEY',         ')lVk(c,[kUMQsGP1IGK%PRQ~cHhdsqF2?TN{gj$.e@p<1TuI^5m#G}NnZ?`MSA;C' );
define( 'SECURE_AUTH_KEY',  '`]f>j^5<lV7]E~=_[Kvrprl%?P,+/97[cajT(ZF#W%T]JT[rncW>++RIAk+g{Nrr' );
define( 'LOGGED_IN_KEY',    'qKBb7l9753Y]GEI(,l~ ^3iZV-ZAu%jW>i=*m2&^DjCk~2psyfYk ikSkj5F Mr>' );
define( 'NONCE_KEY',        '<2UES}3M[wB :g&ADvw^_+M(wU .})JXIv-&jCjjGf@zY`?;2oE<a0]vy{:oTk;l' );
define( 'AUTH_SALT',        '9DO$etgce4D^< [%u8bI)dUuZ;?`M,9TaXRlVg%N5eXudgwZ;T}Y2DPbS@)&z2u1' );
define( 'SECURE_AUTH_SALT', 'J>5YG`ct9px*=@g1]0CUH*7lj$XthqDM<P}`?.N!MWym)GC3:tI&=d%6g2I7Z*zg' );
define( 'LOGGED_IN_SALT',   'nrQg]d $!rcD;fc8@p{hp{`mHF,I$5/Td7Y+LQJ!PGb^eBlX92Rb&F=gR~.HHjJc' );
define( 'NONCE_SALT',       ' mq J*b@p6Ud79|dJ5NVHyc]<C*1  %+)3${#@g$58<J9:{rF*ybV|p$,IvZRxoK' );

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
