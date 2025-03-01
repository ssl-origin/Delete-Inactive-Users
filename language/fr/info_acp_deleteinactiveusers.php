<?php
/**
*
* Delete Inactive Users [French]
* 
* @package phpBB Extension - Delete Inactive Users
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, [
	'ACP_DELETE_INACTIVE_USERS_TITLE'		=> 'Supprimer les utilisateurs inactifs',
	'ACP_DELETE_INACTIVE_USERS_SETTINGS'	=> 'Paramètres',
	//Log
	'LOG_DELETE_INACTIVE_USERS_SAVED'		=> '<strong>Paramètres de suppression des utilisateurs inactifs enregistrés.</strong>',
	'LOG_DELETE_INACTIVE_USERS'				=> '<strong>Supprimer %1$d utilisateurs inactifs</strong><br />» %2$s',
	'LOG_DELETE_INACTIVE_USERS_EMAIL'		=> '<strong>Envoi d‘e-mails aux utilisateurs inactifs dont les comptes ont été supprimés</strong><br />» %s',
]);
