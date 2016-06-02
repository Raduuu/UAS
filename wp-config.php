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
define('DB_NAME', 'UAS');

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
define('AUTH_KEY',         'KFRt1p;jU,xxRkR}FjY&7ro3~M?@)m(a$m*UoCp?Efw[[wgJpyx__>Jow-`Zd5uJ');
define('SECURE_AUTH_KEY',  '4nT(d:zSfq1toLy~7c1_ mWl64MUh1%=m$%cT-8.We(bZ*chB|2W@XF[Ws9X9{Mq');
define('LOGGED_IN_KEY',    'fA7J;QDB-tSR2o1(IM.lnG7xb}G64+[[toecBuT 0MAz:B=_~~82u59)Ff%@$=`~');
define('NONCE_KEY',        'G-{{Cca9eni{M-j5}De-d*FDn.CqQIMpI^ NGoE5-nZF4 y.TH}gZ|dqB0 8W3l>');
define('AUTH_SALT',        'YwCe_?{oi3#;HP8Wb}nHM+P;Em]M,MdAO<H^v]<5rYw)*X%otJ! <s~D:}>?rR-8');
define('SECURE_AUTH_SALT', 'r=`>q0#Omhcy5~%L[-6H!oyXFAAh/rx^Z~tEugLMMk8510gSAyN]RpU67Y97<|]t');
define('LOGGED_IN_SALT',   'Ace_v0#2OqC2H;)utfo>G_C|%HGXT._@L~GjgMs@ZApT )e >3zrI*6G>w:a8E|x');
define('NONCE_SALT',       'iO%{_z;5i_%cwe)SAPb#[/+Wx(WdxWOno[h!jX}.pWxf0wre{$c9Hz/OOsw`,_7T');

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
