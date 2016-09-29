<?php
/**
 *
 * phpBB Media Embed PlugIn extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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
	'ACP_PHPBB_MEDIA_EMBED'				=> 'Media Embed',
	'ACP_PHPBB_MEDIA_EMBED_MANAGE'		=> 'Manage sites',
	'ACP_PHPBB_MEDIA_EMBED_SETTINGS'	=> 'Settings',
));
