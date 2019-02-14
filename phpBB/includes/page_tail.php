<?php
/***************************************************************************
 *                              page_tail.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: page_tail.php 5204 2005-09-14 18:14:30Z acydburn $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

if ( !defined('IN_PHPBB') )
{
	die('Hacking attempt');
}

global $do_gzip_compress;

//
// Show the overall footer.
//
$userdata['user_level'] = (isset($userdata['user_level'])) ? $userdata['user_level'] : '';
$admin_link = ( $userdata['user_level'] == ADMIN ) ? '<a href="admin/index.' . $phpEx . '?sid=' . $userdata['session_id'] . '&amp;p_sid=' . $userdata['priv_session_id'] . '">' . $lang['Admin_panel'] . '</a><br /><br />' : '';

$template->set_filenames(array(
	'overall_footer' => ( empty($gen_simple_header) ) ? 'overall_footer.tpl' : 'simple_footer.tpl')
);

$template->assign_vars(array(
	'TRANSLATION_INFO' => (isset($lang['TRANSLATION_INFO'])) ? $lang['TRANSLATION_INFO'] : ((isset($lang['TRANSLATION'])) ? $lang['TRANSLATION'] : ''),
	'FISTYLE' => "Style <a href=\"http://www.forumimages.us\" target=\"_blank\" title=\"subSilver in Bootstrap 4\">FI subSilver</a> &#169; 2006 - 2019 by <b>ForumImages</b><br />",
	'ADMIN_LINK' => $admin_link)
);

//
// IM Portal
//

if(!$layout_forum_wide_flag&&$portal_config['portal_tail']&&(!defined('HAS_DIED'))&&(!defined('IN_LOGIN')))
{
	$template->set_filenames(array(
		'portal_tail'         => 'portal_page_tail.tpl')
	);
	portal_parse_blocks($portal_config['default_portal'], TRUE, 'tail');
	$template->assign_vars(array('PORTAL_TAIL' => portal_assign_var_from_handle($template, 'portal_tail')));
}

$template->pparse('overall_footer');

//
// Close our DB connection.
//
$db->sql_close();

//
// Compress buffered output if required and send to browser
//
if( $do_gzip_compress && headers_sent() != TRUE )
{
	$gzip_contents = ob_get_contents();
	ob_end_clean();
	$gzip_size = strlen($gzip_contents);
	$gzip_crc = crc32($gzip_contents);
	$gzip_contents = gzcompress($gzip_contents, 9);
	$gzip_contents = substr($gzip_contents, 0, strlen($gzip_contents) - 4);
	$gzip_contents .= pack("V",$gzip_crc) . pack("V", $gzip_size);
	header("Content-Encoding: gzip");
	header("Vary: Accept-Encoding");
	header("Content-Length: ".strlen($gzip_contents));
	header('X-Content-Encoded-By: phpBB '.$board_config['phpbb_version']);
	echo "\x1f\x8b\x08\x00\x00\x00\x00\x00";
	echo $gzip_contents;
	echo pack('V', $gzip_crc);
	echo pack('V', $gzip_size);
}

exit;

?>