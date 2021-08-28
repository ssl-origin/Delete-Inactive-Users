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
	'DELETE_INACTIVE_USERS_ALLOW'						=> 'Activer la suppression des utilisateurs inactifs',
	'DELETE_INACTIVE_USERS_ALLOW_EXPLAIN'				=> 'Si cette option est définie sur Oui, la tâche cron sur les utilisateurs sera activée.',
	'DELETE_INACTIVEUSERS_ENABLE_MES'					=> 'Activer l‘enregistrement du message',
	'DELETE_INACTIVEUSERS_ENABLE_MES_EXPLAIN'			=> 'Afficher un message après l‘enregistrement des membres avec des détails sur le nombre de messages et la période avant la suppression du compte.',
	'DELETE_INACTIVEUSERS_ENABLE_EMAIL'					=> 'Activer l‘e-mail',
	'DELETE_INACTIVEUSERS_ENABLE_EMAIL_EXPLAIN'			=> 'Envoyer un e-mail aux utilisateurs inactifs avec un message de suppression de compte.',
	'DELETE_INACTIVE_USERS_TIME_VALUE'					=> 'Définir la période d‘inactivité avant la suppression de compte',
	'DELETE_INACTIVE_USERS_TIME_VALUE_EXPLAIN'			=> 'Cette option définira la minuterie de suppression. La valeur par défaut est de 24 heures.',
	'DELETE_INACTIVE_USERS_HOURS'	=> array(
		1 => 'Heure',
		2 => 'Heures',
	),
	'DELETE_INACTIVE_USERS_POSTS'						=> 'Définir le nombre de messages',
	'DELETE_INACTIVE_USERS_POSTS_EXPLAIN'				=> 'Définir le nombre de messages pour les utilisateurs. La valeur par défaut est 0.',
	'DELETE_INACTIVE_USERS_INACTIVE_PERIOD'				=> 'Sélectionnez la période',
	'DELETE_INACTIVE_USERS_INACTIVE_PERIOD_EXPLAIN'		=> 'Définir la période d‘inactivité des utilisateurs. Date d‘inscription et date de la dernière activité.',
	'DELETE_INACTIVE_USERS_SAVED'						=> 'Paramètres de suppression des utilisateurs inactifs enregistrés.',
	'DELETE_INACTIVE_USERS_GROUP_EXCEPTIONS'			=> 'Exception(s) de groupe',
	'DELETE_INACTIVE_USERS_GROUP_EXCEPTIONS_EXPLAIN'	=> 'Exclure ici les groupes qui ne seront pas supprimés.<br />Sélectionnez plusieurs groupes en maintenant <samp>CTRL</samp> (ou <samp>&#8984;CMD</samp> sur Mac) et sélectionnez les groupes.',
]);
