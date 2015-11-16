<?php
/**
*
* @package phpBB Extension - Advanced Profile System
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'WALL'					=> 'Wall',
	'FRIENDS'				=> 'Friends',
	'ACTIVITY_FEED'			=> 'Activity Feed',

	'AT'					=> 'at', // example: User1 posted "at" Tuesday 10 Nov.
	'FIRST_POST_WALL'		=> 'Be the first to post on %s\'s wall!', // %s will be replaced by username
	'USER_NO_FRIENDS'		=> 'No friends yet',
	'USER_NO_POSTS'			=> '%s hasn\'t made any posts yet..', // %s will be replaced by username
	
	'CONFIRM_WALL_DEL'		=> 'The wall post has successfully been deleted.',
	'CONFIRM_WALL_EXPLAIN'	=> 'Are you sure you want to delete this wall post?',
	'RETURN_WALL'			=> '%sReturn to %s\'s wall%s', // %s will be replaced by <a> tags and username
));