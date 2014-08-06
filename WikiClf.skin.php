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
		$out->addHeadItem( 'htmlshiv', '<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>');
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

		$out->prependHTML('<!-- UBC Global Utility Menu -->
                <div id="ubc-banner" class="full-width full-width-left">
                <div class="collapse expand" id="ubc7-global-menu">
                        <div id="ubc7-search" class="expand">
                                <div class="container" style="border-left: 1px solid #d7e0e7; border-right: 1px solid #d7e0e7; padding-left: 14px;padding-right: 14px;">
                                        <div id="ubc7-search-box">
                                                <form class="form-search" method="get" action="http://www.ubc.ca/search/refine/" role="search">
                                                        <input type="text" name="q" placeholder="Search UBC websites" class="input-xlarge search-query">
                                                        <input type="hidden" name="label" value="Search UBC" />
                                                        <input type="hidden" name="site" value="wiki.ubc.ca" />
                                                        <button type="submit" class="btn">Search</button>
                                                </form>
                                        </div>
                                </div>
                        </div>
                        <div class="row-fluid">
                                <div id="ubc7-global-header" class="expand">
                                        <!-- Global Utility Header from CDN -->
                                </div>
                        </div>
                </div>
                <!-- End of UBC Global Utility Menu -->
                <!-- UBC Header -->
                <header id="ubc7-header" class="row-fluid expand" role="banner">
                        <div class="container">
                                <div class="span1">
                                        <div id="ubc7-logo">
                                                <a href="http://www.ubc.ca" title="The University of British Columbia (UBC)">The University of British Columbia</a>
                                        </div>
                                </div>
                                <div class="span2">
                                        <div id="ubc7-apom">
                                                <a href="//cdn.ubc.ca/clf/ref/aplaceofmind" title="UBC a place of mind">UBC - A Place of Mind</a>                        
                                        </div>
                                </div>
                                <div class="span9" id="ubc7-wordmark-block">
                                        <div id="ubc7-wordmark">
                                                <a href="http://www.ubc.ca" title="The University of British Columbia (UBC)">The University of British Columbia</a>
                                                <!--<span class="ubc7-campus" id="ubc7-vancouver-campus">Vancouver Campus</span>-->
                                        </div>
                                        <!-- <div id="ubc7-global-utility">
                                                <button type="button" data-toggle="collapse" data-target="#ubc7-global-menu"><span>UBC Search</span></button>
                                                <noscript><a id="ubc7-global-utility-no-script" href="http://www.ubc.ca/" title="UBC Search">UBC Search</a></noscript>
                                        </div> -->
                                </div>
                        </div>
                </header>
                <!-- End of UBC Header -->
                <!-- UBC Unit Identifier -->
            <div id="ubc7-unit" class="row-fluid expand">
                <div class="container">
                        <div class="span12">
                            <div id="ubc7-unit-name" class="ubc7-single-element">
                                <a href="/"><span id="ubc7-unit-faculty"></span><span id="ubc7-unit-identifier">UBC Wiki</span></a>
                            </div>
                        </div>
                        </div>
            </div>
        </div><!-- End of Full Width -->');	
	}
	/**
	 * @param $out OutputPage object
	 */
	function setupSkinUserCss( OutputPage $out ){
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( "skins.WikiClf" );
		$out->addStyle( '//cdn.ubc.ca/clf/7.0.4/css/ubc-clf-full-bw.min.css', 'screen' );
		$out->addStyle( 'WikiClf/wikiclf.css', 'screen' );
		$out->addStyle( 'WikiClf/wikiclf.css', 'screen' );
	}
} 
