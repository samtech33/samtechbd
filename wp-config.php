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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'samtechbd_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'kbT_4}qWusT.Zv`f#sKn3CW8wDby=aiB Hvz>~T2%nAF#!rJ@EgV#_0k+[bz]H>E');
define('SECURE_AUTH_KEY',  'XpnYzf?2Bc8B;sR A6sC8S`|]:Z567p~2FkWg*DWcw5IDg2s*!Id~w]C}mC^xaI|');
define('LOGGED_IN_KEY',    'x]Wm* a,qva3CW0Y.jwwX)qC9zqi8;MM]0Ww#IQCc8qu.a _+^H EPL;BLS;lJ$;');
define('NONCE_KEY',        'JPkE(n^H-+q^OG>U>zX=iwo. i@_6xfC>fqJ`Fm)W]IQp62a`mZ5zSX~+j>&![:@');
define('AUTH_SALT',        '[zE 4j8}H4)L|dM3^PZWkFqqWN:+^Rb,TU<4|!JDg3Q@ 3+2RiY2j)ni6On$SBV ');
define('SECURE_AUTH_SALT', '`Ir^:FwI(i,aq//dBQF_eejR,~#rB6v[ZM1]dpBXK/QXFfInLJJ%WS0*)KkB41R#');
define('LOGGED_IN_SALT',   'n=/KT^tW|=Mnd*<9j*(Wwn):T&3<y11zQpS,/+u(z=scOr?zZ;g:%+%h|kX4y4)k');
define('NONCE_SALT',       'x,9i&7~Z>|RWG>m@w%pB|4W+#{u?)N^[Z8jXQoBFk]cA+)2g u@;qv%@3_{X{{;.');

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
