<?php
/**
 * UBC WIki CLF
 *
 * @file
 * @ingroup Skins
 * @author David Brabbins (http://wiki.ubc.ca)
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

if( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['skin'][] = array (
	'path' => __FILE__,
	'name' => 'WikiClf',
	'url' => 'http://wiki.ubc.ca',
	'author' => 'CTLT',
	'version' => 1,
	'descriptionmsg' => 'UBC Wiki- A skinned version of Vector.',
);
// Register Files
$wgValidSkinNames['WikiClf'] = 'WikiClf';
$wgAutoloadClasses['SkinWikiClf'] = dirname(__FILE__).'/WikiClf.skin.php';
$wgExtensionMessagesFiles['WikiClf'] = dirname(__FILE__).'/WikiClf.i18n.php';

$wgResourceModules['skins.WikiClf'] = array(
	'styles' => array(
		'/WikiClfv2/css/screen.css' => array( 'media' => 'screen' ),
	),
	'remoteBasePath' => &$GLOBALS['wgStylePath'],
	'localBasePath' => &$GLOBALS['wgStyleDirectory'],
);