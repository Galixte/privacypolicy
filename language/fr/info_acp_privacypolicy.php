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
	'ACP_USER_UTILS'				=> 'Utilitaires utilisateur',
	'AUTOGROUPS_TYPE_PPACCPT'		=> '« Politique de vie privée » acceptée',

	'COOKIE_POLICY'					=> '« Politique des cookies » & « Politique de vie privée »',

	'POLICY_RESET_LOG'				=> '<strong>Acceptations de la « Politique de vie privée » réinitialisée pour tous les membres</strong>',
	'POLICY_USER_ACCEPT_LOG'		=> '<strong>Acceptations de la « Politique de vie privée » définie pour un membre</strong><br />»» %1$s',
	'POLICY_USER_UNSET_LOG'			=> '<strong>Acceptations de la « Politique de vie privée » retirée pour un membre</strong><br />»» %1$s',
	'PRIVACY_DATA'					=> 'Données personnelles',
	'PRIVACY_LIST'					=> 'Liste des acceptations',
	'PRIVACY_POLICY'				=> 'Politique de vie privée',
	'PRIVACY_POLICY_ADD_LOG'		=> '<strong>« Politique de vie privée » ajoutée</strong><br />»» %1$s',
	'PRIVACY_POLICY_EDIT'			=> 'Éditeur de fichiers',
	'PRIVACY_POLICY_EDIT_LOG'		=> '<strong>« Politique de vie privée » modifiée</strong><br />»» %1$s',
	'PRIVACY_POLICY_LOG'			=> '<strong>Paramètres de la « Politique de vie privée » mis à jour</strong>',
	'PRIVACY_POLICY_MANAGE'			=> 'Paramètres',

	'TAPATALK_INSTALLED'			=> 'Extension « Tapatalk » détecté',
	'TAPATALK_INSTALLED_EXPLAIN'	=> 'L’extension « Tapatalk » a été détectée comme étant installée sur ce forum laquelle est incompatible avec l’extension « Privacy Policy ».<br /><br />Cela aura pour conséquence que les utilisateurs de Tapatalk consultant ce forum ne seront pas assujettis aux exigences de la « Politique de vie privée ».',
));
