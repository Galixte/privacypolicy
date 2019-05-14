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
	'CSV_DOWNLOAD'					=> 'Télécharger ses données personnelles au format CSV',

	'REMOVE_ACCOUNT'				=> 'Cliquer sur ce lien pour envoyer un e-mail à l’équipe du forum afin de demander la suppression de son compte',
	'REMOVE_MY_ACCOUNT'				=> 'Demande de suppression de mon compte',
	'REMOVE_MY_ACCOUNT_BODY'		=> 'Je ne souhaite plus poursuivre ma participation comme membre sur ce forum et demande à ce que mes données personnelles soient supprimés conformément au Règlement général sur la protection des données (RGPD - 2018).%1$sMon nom d’utilisateur est %2$s%1$s%1$sLa raison pour laquelle je souhaite supprimer mon compte utilisateur est : [veuillez saisir la raison ici. Si aucune raison n’est entrée ici, vos données personnelles ne seront pas supprimées].',

	'UCP_PRIVACY_POLICY_EXPLAIN'	=> 'Ci-dessous le détail de vos données personnelles que nous stockons sur ce forum.',
	'UCP_PRIVACY_TITLE'				=> 'Données personnelles',
));
