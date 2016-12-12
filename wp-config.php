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
define('DB_NAME', 'valerieWP');

/** MySQL database username */
define('DB_USER', 'valerie');

/** MySQL database password */
define('DB_PASSWORD', 'azura1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'asdfpuasdft y123ou123r uasdfni234qusdafe 345phasdfrase2345 asdfheasdJfre');
define('SECURE_AUTH_KEY',  '11put3 yadsfaso4ur5 6u7aasdfsdasdffniqasdfue asdfpasdfhr324gfsagastHedsf h2354ere');
define('LOGGED_IN_KEY',    'aaapdgfu345t yfgd435our eegugniqu44eg p654hjghrjgfa7k,se34 hmjgh34G6easdfre');
define('NONCE_KEY',        'asdfpasdfu4tt yhyje4ousdgfr u345nigqfhgu435e pzxcvbht54rafdhgse 4F545h33333asdferasd33e');
define('AUTH_SALT',        'sdgfputsdgf sdgfysdfgour434553 sghfdun465645dgdgfff4h543dfhgsijjDjjqu555554555674567fghjejfghj fghjphnm,.rassdgf;hjkle her111dffghgyjhjjhggf2h5654433122211e');
define('SECURE_AUTH_SALT', 'a23;plmd;lfhmg;klmn23l5rnkljnawjsnflkjb1wekhbahsdvbh11b34kjhbiuSghiug34iughi123uput your unique phrase here');
define('LOGGED_IN_SALT',   'puAt 345y345ou345r dgrunaisdqfuasdef sadfph34r24a2seasdf he6r6asjdhfkjskjhfaskdflasdjflkwjeljldkjflasdjflkjlkasjdlfjk3j45ie');
define('NONCE_SALT',       'pAu456tfhg uilyoghjfur675fhjg u675fjghnique pfghjhfghjr65567aghfgjfse54564dgfhgj hghjgesdk7777g6k,jhi7fre');

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

define('FTP_PUBKEY','/home/wp-user/wp_rsa.pub');
define('FTP_PRIKEY','/home/wp-user/wp_rsa');
define('FTP_USER','wp-user');
define('FTP_PASS','');
define('FTP_HOST','192.168.1.5:22');
