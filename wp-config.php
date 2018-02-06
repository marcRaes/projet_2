<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'db697156624');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo697156624');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'M@r62cus');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'db697156624.db.1and1.com');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$D;WO]]UGbn6*cE~j]B$/@q !8eDY*+oXlwMM{5islXN:4?>sQJEZGw| wNh:dN^');
define('SECURE_AUTH_KEY',  '8,ka6oPy9g*kCY).~J@Z.g2lEe%J-w+u3q-nOQVe/Qe)I|L1c2HS- ,8]R7vFB%X');
define('LOGGED_IN_KEY',    '|zn%Z[!5tNo_yA&&47%tbNVpe:?t.Av9c#:_{ .wr1{g|e }J,3v>,j_:j6QQV|4');
define('NONCE_KEY',        'o>7By*=[+Q+r6_}Xe1*U0.#rCqpV4u(Po u[`, lDuq, DG*p)sGBNiD|_TW$w2A');
define('AUTH_SALT',        '_Tn>J)!m|d&<01Y?&:lW;$gHxZQ-9H$zi$e2LvVX*2=?ft(8`x[8r*s0xkrfJpHi');
define('SECURE_AUTH_SALT', '?sBo?aIYed|Nb:]~y[nx+[5 j0Y3$p> l)Hheb8l;!KlOEZT6wtmg(f9#Nj^tE+~');
define('LOGGED_IN_SALT',   '>y5Ff[)&qYz].QoWb[O/JiH6>:Gtc3_yiM,-nXIFfS:/<B:;/?UN&Ys/5}zGfZOV');
define('NONCE_SALT',       '*;Q%lI4}2_151)~`F2;LjNpd3(GOoXI;.Kmb.J.AB1lMk(`!CL5U<dF;M:/CM@BO');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_p2';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');