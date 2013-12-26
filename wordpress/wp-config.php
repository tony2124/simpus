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
define('DB_NAME', 'tutoriales');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'g88Z[sJEgRw|sF`ZReHH&=FayIWCNnIXcdI?$x=Fr5_E7%cj%WA0Q8%=tidE/U 6');
define('SECURE_AUTH_KEY',  '$tAKTG!{W-8xPL$bzalk58JLikJG6;meTYwaPKE#s{C~9FY3%=Ab/%-n@|FLdd8i');
define('LOGGED_IN_KEY',    'MQUiiRnJa^~mF)k`Z(39d#sulMEkAO`M7Z8@LPMqL/FRxq&v=zT~9t THU:JxJ2T');
define('NONCE_KEY',        'bty8=.^4@jv~<rRtF<ZiIzKH`1<1~3qP@Xk9NTH^`rVk3.|H5d@Om>-^DirYZBzM');
define('AUTH_SALT',        'Wz|#W Lj1YWTjy[Br)m9#AZWV1z<NB699C#zy3+HZ>YrBZ*@7#_ofi8l|!x[u<)l');
define('SECURE_AUTH_SALT', 'Qb:nUm>h[7!Pd*,mreQ*3ihB,[&a(DBn$#]VAJ*:+GuW(w|h>R5Xd&!pND8D{e*0');
define('LOGGED_IN_SALT',   'n 34@ke}~TV]%@$7K-%3&U wJ64Hs})4tS?=KK{(,]12 :9jq[tYFo1=,)KuAcQT');
define('NONCE_SALT',       '~U(P$PY<iS:z; ToIagk1;p>J{S[,Z.z0~Xmg)I7wfC#y6bp0>Y+*,DEAw:)z]h`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tut_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'es_ES');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
