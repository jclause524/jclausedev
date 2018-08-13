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
define('DB_NAME', 'jclausedev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         '4@#spl0.]fGh@saR9h_hlh]@oW(2%,%t+C<dscY)mRQl%5#F(Clhpfr:Kwi~6a-r');
define('SECURE_AUTH_KEY',  'e#^n>W|uk.c+]wIr/[ Lc_Tr@~Ax*@T#(F(P;E3K8pRf+Dx5ahZ k^m1Rp&`)4;]');
define('LOGGED_IN_KEY',    'WcPDMox^|`K3YBd.a)4`CJ-FDsQ[zQ}tq$& ~di=Lh)>I(BG3[J_W$1D=XzV*!>C');
define('NONCE_KEY',        'RLrURuVU[hHe=mAd6hX7&>-CixQe{[EWjkpG5$ t_9ATY`;]DHWVV2M4AIyC<8Dd');
define('AUTH_SALT',        'y;&/+za(,*PD/KA~+:,Y{:F&rOSeei@q84bW?Qn0@VF ^GI>(;t<?+d^(ZgOvDT-');
define('SECURE_AUTH_SALT', '`ToQrkPOTc>]6VZR,=b||g <#*ud{acGk^O&wIJG*4}NAaxlh8>-Y1nk=hzXrOqV');
define('LOGGED_IN_SALT',   'c!g?txi$lWJt%|<S>Qf3{L165(;VRNb.hzikUVGzv)fiqfZs,Q>vLze+u_q`DWzI');
define('NONCE_SALT',       '}`kth+>Owq2Zd}`=QnUy9%=@oX86{-v-brKSZ2<>taq_R74&#B5NNqlL2OlZuf.I');

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
