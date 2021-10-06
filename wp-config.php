<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'repetition' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wpuser' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'wppassword' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']VK{8aiVZgT8/;x3+dUUh+Qg&a]n6ARIXO*hO2b`3;oA8cN@&/&&87-Ji}F&U5^9' );
define( 'SECURE_AUTH_KEY',  't#p6yJ/}7[e0 rYA_H#HkVQP@?H7OU}^GTj1LlZJy786x.m_f2}0n,LLRz;EkUlM' );
define( 'LOGGED_IN_KEY',    '4nOI>1)y3^og]>pr?$!=YC_|!eD-d[3D|K/}?V)_(cZZ f-b{&CE[k$Ua8-b*B~!' );
define( 'NONCE_KEY',        'UB?J-y.VfbS^XE8gkBM/^&j|8?7{bq5-mpoaxhs4iLK;j;mc68!=LJ6ghI#*BU=T' );
define( 'AUTH_SALT',        'Nb_LqY)FL>+Pi68(}8ny i_WW%(xu1pp[AY:BND>oHF%/~OI*8ZdlElm!ShR&J+W' );
define( 'SECURE_AUTH_SALT', '1gkysW8DtJ |j{G,4h4&aA_ zLJ|a#i4#]|ke96x8_-(lX.e`gKNekR/bjfJ)4y_' );
define( 'LOGGED_IN_SALT',   '+B//oi:Vrs,@y+~MGc(m7w[Y~9m=RLW65kUu9L8DLA5 Rw>hM6/&tFxf!^1%:Ox^' );
define( 'NONCE_SALT',       ' wI%lc{2$?]5Cj? !_Tc*!kovySQ%A]]-8`C4ycdauF.:gsjNxFFOFH6m@t( T4B' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
