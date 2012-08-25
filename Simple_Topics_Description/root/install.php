<?php

/**
* @author Saske salva_bxt@hotmail.com http://www.phpbb-es.com
* @package Simple Topic Description
* @version $Id install.php
* @copyright (c) 2012 Saske ( http://www.phpbb-es.com/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
   trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

$language_file = 'mods/info_acp_description';
$mod_name = 'ACP_DESCRIPTION';
$version_config_name = 'description_version';

$versions = array(
   // Version 1.0.0
   '1.0.0'   => array(
      // Lets add a config setting
      'config_add' => array(
         array('description_character', '40'),
		 array('description_enable', '0'),
      ),
	  // Lets add a new column to the phpbb_users table 
	  'table_column_add' => array(
			array('phpbb_drafts', 'draft_description', array('VCHAR', '')),
			array('phpbb_topics', 'topic_description', array('VCHAR', '')),
		),
		// Now add the module
		 'module_add' => array(
			// First, lets add a new category named ACP_DESCRIPTION to ACP_CAT_DOT_MODS
			 array('acp', 'ACP_CAT_DOT_MODS', 'ACP_DESCRIPTION'),
			// next let's add our module
			 array('acp', 'ACP_DESCRIPTION', array(
				'module_basename'	=> 'description',
				'modes'				=> array('settings'),
					),
				),
			),
		//Cache purge		
		 'cache_purge' => array(
			array('template', 0),
		),
	),
);

// Include the UMIF Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>