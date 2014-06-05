<?php
/**
 * ML Erudite MW skin
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
	'name' => 'MLErudite',
	'url' => 'https://www.mediawiki.org/wiki/Skin:MLErudite',
	'author' => array( 'Nick White', 'Matt Wiebe', 'Colin Andrew Ferm', 'Sebastian Olsson' ),
	'version' => '1.8',
	'descriptionmsg' => 'mlerudite-desc',
);

$wgValidSkinNames['mlerudite'] = 'MLErudite';
$wgAutoloadClasses['SkinMLErudite'] = dirname(__FILE__) . '/MLErudite.skin.php';
$wgExtensionMessagesFiles['MLErudite'] = dirname(__FILE__) . '/MLErudite.i18n.php';

$wgResourceModules['skins.mlerudite'] = array(
	'styles' => array(
		'mlerudite/assets/cssreset.css' => array( 'media' => 'screen' ),
		'mlerudite/assets/mlerudite.css' => array( 'media' => 'screen' ),
		'mlerudite/assets/mlerudite66em.css' => array( 'media' => 'screen and (max-width: 66em)' ),
		'mlerudite/assets/mlerudite60em.css' => array( 'media' => 'screen and (max-width: 60em)' ),
		'mlerudite/assets/mlerudite55em.css' => array( 'media' => 'screen and (max-width: 55em)' ),
		'mlerudite/assets/mlerudite40em.css' => array( 'media' => 'screen and (max-width: 40em)' ),
		'mlerudite/assets/mlerudite20em.css' => array( 'media' => 'screen and (max-width: 20em)' ),
		'mlerudite/assets/print.css' => array( 'media' => 'print' ),
	),
	'remoteBasePath' => &$GLOBALS['wgStylePath'],
	'localBasePath' => &$GLOBALS['wgStyleDirectory'],
);
