<?php
/**
 * ML Simple MW skin
 *
 * @file
 * @ingroup Skins
 * @author Nick White
 * @author Matt Wiebe
 * @author Colin Andrew Ferm
 * @author Sebastian Olsson
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

if( !defined( 'MEDIAWIKI' ) ) die( 'This is an extension to the MediaWiki package and cannot be run standalone.' );

$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'MLSimple',
	'url' => 'https://www.mediawiki.org/wiki/Skin:MLSimple',
	'author' => array( 'Nick White', 'Matt Wiebe', 'Colin Andrew Ferm', 'Sebastian Olsson' ),
	'version' => '1.8',
	'descriptionmsg' => 'mlsimple-desc',
);

$wgValidSkinNames['mlsimple'] = 'MLSimple';
$wgAutoloadClasses['SkinMLSimple'] = dirname(__FILE__) . '/MLSimple.skin.php';
$wgExtensionMessagesFiles['MLSimple'] = dirname(__FILE__) . '/MLSimple.i18n.php';

$wgResourceModules['skins.mlsimple'] = array(
	'styles' => array(
		'mlskins/assets/cssreset.css' => array( 'media' => 'screen' ),
		'mlskins/assets/ml.css' => array( 'media' => 'screen' ),
		'mlskins/assets/ml66em.css' => array( 'media' => 'screen and (max-width: 66em)' ),
		'mlskins/assets/ml60em.css' => array( 'media' => 'screen and (max-width: 60em)' ),
		'mlskins/assets/ml55em.css' => array( 'media' => 'screen and (max-width: 55em)' ),
		'mlskins/assets/ml40em.css' => array( 'media' => 'screen and (max-width: 40em)' ),
		'mlskins/assets/ml20em.css' => array( 'media' => 'screen and (max-width: 20em)' ),
		'mlskins/assets/print.css' => array( 'media' => 'print' ),
	),
	'remoteBasePath' => &$GLOBALS['wgStylePath'],
	'localBasePath' => &$GLOBALS['wgStyleDirectory'],
);
