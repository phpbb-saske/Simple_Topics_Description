<?php
/**
*
* @package Simple Topic Description [English]
* @version $Id$
* @copyright (c) 2012 Saske salva_bxt@hotmail.com http://www.phpbb-es.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
	// acp module, titles 
	'ACP_DESCRIPTION' 			=> 'Simple Topic Description',
	'ACP_DESCRIPTION_SETTINGS'	=> 'Settings',
	'ACP_DESCRIPTION_EXPLAIN'		=> 'Here you can manage descriptions topic on your board.',
	
	// acp config
	'ACP_DESCRIPTION_ENABLE'		=> 'Enable',
	'ACP_DESCRIPTION_ENABLE_EXPLAIN'		=> 'Enable Simple Description Mod',
	'ACP_DESCRIPTION_CHARACTER'	=> 'Characters Description',
	'ACP_DESCRIPTION_CHARACTER_EXPLAIN'=> 'Insert the maximum number of characters. Example: 40.',
	'ACP_DESCRIPTION_FILL_FIELD'		=> 'Error. Please fill the field with the characters for the descriptions.',
	
	// install
	'DESCRIPTION_INSTALL' 		=> 'Simple Topic Description',

	));
?>