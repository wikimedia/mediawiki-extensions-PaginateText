<?php
/**
 * PaginateText extension - Paginates a long block of text.
 *
 * For more info see http://mediawiki.org/wiki/Extension:PaginateText
 *
 * @file
 * @ingroup Extensions
 * @author Ike Hecht, 2014
 * @license GNU General Public Licence 2.0 or later
 */
$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'PaginateText',
	'author' => array(
		'Ike Hecht',
	),
	'version' => '0.1.0',
	'url' => 'https://www.mediawiki.org/wiki/Extension:PaginateText',
	'descriptionmsg' => 'paginatetext-desc',
	'license-name' => 'GPL-2.0+',
);

/* Setup */

// Register files
$wgAutoloadClasses['PaginateTextHooks'] = __DIR__ . '/PaginateText.hooks.php';
$wgMessagesDirs['PaginateText'] = __DIR__ . '/i18n';

// Register hooks
$wgHooks['ParserFirstCallInit'][] = 'PaginateTextHooks::addTag';
$wgHooks['BeforePageDisplay'][] = 'PaginateTextHooks::addModules';

// Register modules
$wgResourceModules['ext.PaginateText'] = array(
	'scripts' => array(
		'modules/ext.PaginateText.js',
	),
	'styles' => array(
		'modules/ext.PaginateText.css',
	),
	'dependencies' => array(
		'ext.PaginateText.TextPager'
	),
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'PaginateText',
);
$wgResourceModules['ext.PaginateText.TextPager'] = array(
	'scripts' => array(
		'modules/jquery_textpager/jquery.textpager.js',
	),
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'PaginateText',
);
