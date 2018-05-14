<?php


// Site settings

define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/html/corp_wp/wp-content/plugins/wp-super-cache/' );
define('WP_HOME','https://www.bazzic.com');
define('WP_SITEURL','https://www.bazzic.com');

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'corp_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9+n-N*6qhX1VL9&|o%:V%~/O7--0w `bxRGVx(dIa!OwylS]M@p_bU`^!fZ{uJa(');
define('SECURE_AUTH_KEY',  '!0iGE#vggw&6s/(i{`~5K?qWKe/BT`:O6X%gNXc-;iewh5c n5u7PE&XWMWhPrv<');
define('LOGGED_IN_KEY',    'nxyecz|K]!Gxcud4u0K)Y)6H1ELyv{3yXZTBnJpy@b>$+wuL:<5oi.K6TaKar}i,');
define('NONCE_KEY',        'JE. ^#9`;-W&tkW5kR)]Ru}9(.!$0Cx2(.2J7ARc@YB4P|~AdX(5Age>{7GvNg^-');
define('AUTH_SALT',        'S_0Epgg;dCL7[Es,=gL=_&Qhn#D2bZgD-H2];J!KPo )&%iSnvlbkLeW{Ry:[u3u');
define('SECURE_AUTH_SALT', 'GlyXO[kB.YWdIiY&P#JQ[s0ggD8PMmM9hne9H~c`Y04Hd+dFzay Y!2;vqP6P;MT');
define('LOGGED_IN_SALT',   'D^.Xj,eflqQ[B|41DZ:>oK>pJ1@=m{!v;{t&cfY3M<e~Ko~;Xl|(x/;}KcMWU2XG');
define('NONCE_SALT',       'Lk/jZug0,3rUdV}l>:j~tw#tOEGUT`K[Si,;,9]nb+jv CCJoAlIecV;o]wQk^6#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
