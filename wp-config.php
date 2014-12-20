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
define('DB_NAME', 'wordpress860');

/** MySQL database username */
define('DB_USER', 'wordpressuser860');

/** MySQL database password */
define('DB_PASSWORD', '#sQa[L#wsZ|[');

/** MySQL hostname */
define('DB_HOST', '.\SQLExpress');

/** Database Type.*/
define('DB_TYPE', 'pdo_sqlsrv');

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
define('AUTH_KEY',         '%K*FDY(`+^3wVk}LlkfYXpYi,MH](Vc*abZ$WAc{9|+/1b1<Tu09HT$`c(+F2)zZ');
define('SECURE_AUTH_KEY',  '}}^`|{AKzH$vg}Y-|oK{p-C>pj[<pb*lwM07Cs3@;bze{GG!sp(jq}Rq|$PFAXQs');
define('LOGGED_IN_KEY',    'f5w>jKNJA$mm*+U)xS,!zv!H<%fL_*azXb$`/-njl?.W0~IE_,+(Y>5Iw>(X(~fv');
define('NONCE_KEY',        'gV,Z&FuPkEKr1fQwdW;E_|Z&A&BX!.`BZpMvSU;z>N3qzXllqp wN#T&di_P1$q%');
define('AUTH_SALT',        'p_Nk^P-Ij?6{sl59coP.YjH~2;dOufi8kC`X;+^)L.dpF{u6+BL@g/r8%|nlqA@K');
define('SECURE_AUTH_SALT', 'g(:7SaH^!^*>[~NM{**l[p/MvWY:NCE qMZ6:=92=WWR#:8y=Q~rNmX<*BO6,LMz');
define('LOGGED_IN_SALT',   'Wh+K=1^OVhbdtL= /}GO+JOdZf.R;u>KB> %![B0{q:@v)Qw<`nCW-oO4)<P]rSD');
define('NONCE_SALT',       'fY@DDS9tF@bnA7,>t%F|S{/S:@KbmjILxFF$`^&d?+-mSXu)[2kHuvAS0a7(YL)M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/** Query Logging Settings */
define('SAVEQUERIES', FALSE);
define('QUERY_LOG', 'ResourcePatch//wp-content/queries.log');

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
