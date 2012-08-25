<?php
/**
*
* @package Simple Topic Description
* @version $Id$
* @copyright (c) 2012 Saske salva_bxt@hotmail.com http://www.phpbb-es.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class acp_description_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_description',
			'title'		=> 'ACP_DESCRIPTION',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'settings'		=> array('title' => 'ACP_DESCRIPTION_SETTINGS', 'auth' => 'acl_a_board', 'cat' => array('ACP_DESCRIPTION')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>