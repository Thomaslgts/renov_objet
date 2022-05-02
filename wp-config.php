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
define( 'DB_NAME', 'renov' );

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
define( 'AUTH_KEY',         'iZQ$_W/.8a8jRmHX`28jrE0H;O]v;4>DvJejfFSzU/O&+2i!$UR`>DiqvAEK8J5M' );
define( 'SECURE_AUTH_KEY',  'o0~zD]I}eKkl%v-$SWik^)qZWshxir-qiw.vRPOXRCHe2gZb<?My{l22}rqoLpkK' );
define( 'LOGGED_IN_KEY',    '1m@ ts$vGjyif&>FBazpWDO.Mvg#OuGk:nz(?p&;x=3D%u7[c*_uqFN);A S]Nu4' );
define( 'NONCE_KEY',        'Of/.-[UlIHSl &F4Z}eb@$6k/_ ?eO!Y{ZOK-y3O^!{&BPI^*&6n^6yv9rOQbfub' );
define( 'AUTH_SALT',        'n[3FjcCxYY$-Yr%7LjNpW;ICvva3jb2Wo);$u?t)LGBST>b^.),U5k%h~8fd+@DB' );
define( 'SECURE_AUTH_SALT', '&w*c`eOws5;e+I{D>E(/<& 9E^>X%U(|7Z^ TfGHokky*{t Mh.xQU`)UWRv]xp.' );
define( 'LOGGED_IN_SALT',   'n$dkP~)?9> S{G)SQm[5#J`pr(.qrUd- 8iA/# `6e~JGX?X^7(,a]qi/{?7)c:)' );
define( 'NONCE_SALT',       '[kMGj0>r_,5@C_~5^^&s~@tUi qZKj7Z{.OcR1=BoX@|Adz0%_(-SbG7F~b%@%mp' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rvo_';

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
