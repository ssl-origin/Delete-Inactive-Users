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
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, [
	'DELETE_INACTIVE_USERS_MESSAGE_REG'		=> '<strong>%1$s</strong> les comptes de publication seront supprimés après <strong>%2$s</strong>. <br />Restez actif sur ce forum et postez au minimum <strong>%3$s</strong> pour éviter la suppression de votre compte utilisateur.',
	'DELETE_INACTIVE_USERS_TOPIC'	=> [
		1 => '%1$s sujet ou message',
		2 => '%1$s sujets ou messages',
	],
	'DELETE_INACTIVE_USERS_MESSAGE_RETURN'	=> '%sRetour à la page d‘index%s',
]);
