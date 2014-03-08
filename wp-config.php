<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'diegof_comunicherete');

/** MySQL database username */
define('DB_USER', 'fabrizio');

/** MySQL database password */
define('DB_PASSWORD', 'fabrizi0');

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
define('AUTH_KEY',         '#DdOSh2N[J=@<|?dGV-(flJVMEoFA/NkmmRq!eKe+l_S=R=>Co536rdD@aDHy*{r');
define('SECURE_AUTH_KEY',  'YDu%y4C4Y.j.AG+-pxLqf/E?i#2^J!$A`/N{lk`Es,u:_$MTtxJ?M,1u!x/h&kH1');
define('LOGGED_IN_KEY',    'v}_K&iD5/t++NUW+#oNaRE(@^n)DH-9ItWvw$`Dq}Syd$&,c!$oV2$}GkQ,6)@f3');
define('NONCE_KEY',        'Kk:ujW90*wEpA2`_14|]SwL+5=v3>,s?n*=5Z|/gZ88[@+fy-Za$O$qfg+[Gez_>');
define('AUTH_SALT',        'r`N4}{jZeQX}M:5meFP:^3=C#A-B=@VDQmMC|J$:?++`+L-lW(<@p/3m])xq?(v|');
define('SECURE_AUTH_SALT', ':,zBRJ}c-QyD{@)`Ank*wlJU{Lp`ciqTbK7|Q? n#v|)XK:n03~h+LDVaj,|{/!^');
define('LOGGED_IN_SALT',   '|etEmJh]b%CbuDWxI&>bK*i2Pfm_)+G[I-g<mMlE[IBC8S-&Qx3u9?+fjKNdPk+0');
define('NONCE_SALT',       ']R<+S<Nt[w}a> :i=+10K|_IWI4>.Nr%>uE~0}<#.iu!!Af%->Vm||Mn(^!7:Rfb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'it_IT');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);
// Abilita il salvataggio del log degli errori in /wp-content/debug.log
define('WP_DEBUG_LOG', true);
 
// Disabilita la visualizzazione degli errori nel sito
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors',0);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
