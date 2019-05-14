<?php
/**
 *
 * Privacy policy. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2018 david63
 * @license GNU General Public License, version 2 (GPL-2.0-only)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ACCEPT' 				=> 'J’accepte cette politique',

	'COOKIE_ACCEPT_TEXT'	=> 'Ce forum utilise les cookies pour vous offrir la meilleure et la plus pertinente des expériences utilisateur. Afin d’utiliser ce forum, vous avez besoin d’accepter sa politique.<br />Pour en savoir plus sur les cookies utilisés sur ce forum cliquez sur le lien « Politiques & cookies » situé en pied de page.',
	'COOKIE_ACCEPT'			=> '[ J’accepte ]',
	'COOKIE_ACCESS'			=> 'Accès aux cookies',

	'COOKIE_BLOCK'			=> 'Il est nécessaire d’accepter la « Politique des cookies » pour accéder aux différentes pages de ce forum.',

	'COOKIE_POLICY'			=> 'Politique des cookies',
	'COOKIE_PRIV_POLICY'	=> 'Politiques & cookies',

	'COOKIE_REQUIRE_ACCESS'	=> '<h3>Acceptation des cookies requise</h3>
	<p>Il est nécessaire d’accepter la « Politique des cookies » du forum « %1$s » avant de pourvoir se connecter ou s’enregistrer sur ce forum.</p>',

	'DECLINE' 				=> 'Je n’accepte pas cette politique',

	'HR_BBCODE_HELPLINE' 	=> 'Insérer une ligne horizontale',

	'POLICY_ACCEPT' 		=> 'Accepter la « Politique de vie privée »',
));
