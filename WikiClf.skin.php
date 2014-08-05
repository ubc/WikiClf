<?php
/**
* Skin file for skin My Skin.
*
* @file
* @ingroup Skins
*/

require_once( dirname( __FILE__ ) . '/../Vector.php' );



/**
 * SkinTemplate class for My Skin skin
 * @ingroup Skins
 */
class SkinWikiClf extends SkinVector {

	var $skinname = 'WikiClf', $stylename = 'wikiclf';
	/**
	 * @param $out OutputPage object
	 */
	public function initPage( OutputPage $out ) {
		global $wgLocalStylePath;
		
		parent::initPage( $out );
		$out->addMeta( "viewport", "width=device-width" );
		$out->addHeadItem( 'favicon', '<link rel="shortcut icon" href="http://cdn.ubc.ca/clf/7.0.3/img/favicon.ico">') ;
		$out->addHeadItem( 'favicon-touch-144', '<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://cdn.ubc.ca/clf/7.0.3/img/apple-touch-icon-144-precomposed.png">') ;
		$out->addHeadItem( 'favicon-touch-114', '<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://cdn.ubc.ca/clf/7.0.3/img/apple-touch-icon-114-precomposed.png">') ;
		$out->addHeadItem( 'favicon-touch-72', '<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://cdn.ubc.ca/clf/7.0.3/img/apple-touch-icon-72-precomposed.png">') ;
		$out->addHeadItem( 'favicon-touch-57', '<link rel="apple-touch-icon-precomposed" href="http://cdn.ubc.ca/clf/7.0.3/img/apple-touch-icon-57-precomposed.png">') ;
		//$out->addScript('<script type="text/javascript" src="//cdn.ubc.ca/clf/7.0.4/js/ubc-clf.min.js?ver=1"></script>');
		$out->addInlineScript( '
				$("#ubc-banner")
    			.insertBefore("#mw-page-base");
		');

	}
	/**
	 * @param $out OutputPage object
	 */
	function setupSkinUserCss( OutputPage $out ){
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( "skins.WikiClf" );
		$out->addStyle( '//cdn.ubc.ca/clf/7.0.4/css/ubc-clf-full-bw.min.css', 'screen' );
		$out->addStyle( 'WikiClf/wikiclf.css', 'screen' );
	}
} 
