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

				$("#p-personal")
    			.insertBefore("#ubc-banner");

				$("#footer-ubc")
    			.insertAfter("#footer");

    			$("#mw-panel")
    			.insertAfter("#ubc-banner");

    			$("#mw-head")
    			.insertAfter("#mw-panel");
                $( "#p-personal, #ubc-banner, #mw-panel, #mw-head, #toc" ).addClass( "noprint" );    					
    	');

		$out->prependHTML('<!-- UBC Global Utility Menu -->
			<noscript><div class="alert"><i class="icon-warning-sign icon-2x"></i> Your browser does not support JavaScript or is for some reason turned off! Please note that this website will not display correctly.</div><style>div#mw-head {top: 0;}div#mw-panel {top: 185px;}</style></noscript>
                <div id="ubc-banner" class="full-width full-width-left noprint" role="banner">
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
       $out->addHTML( '
       	<div id="footer-ubc" class="full-width full-width-left noprint" role="footer">
	       	<footer id="ubc7-footer" class="expand ubc7-minimal-footer" role="contentinfo">
	            <div class="row-fluid expand" id="ubc7-global-footer">
	                <div class="span5" id="ubc7-signature"><a href="http://www.ubc.ca/">The University of British Columbia</a></div>
	                <div class="span7" id="ubc7-footer-menu">
	                </div>
	            </div>
	            <div class="row-fluid expand" id="ubc7-minimal-footer">
	                <div class="span12">
	                    <ul>
	                        <li><a href="//cdn.ubc.ca/clf/ref/emergency">Emergency Procedures</a> <span class="divider">|</span></li>
	                        <li><a href="//cdn.ubc.ca/clf/ref/terms">Terms of Use</a> <span class="divider">|</span></li>
	                        <li><a href="//cdn.ubc.ca/clf/ref/copyright">Copyright</a> <span class="divider">|</span></li>
	                        <li><a href="//cdn.ubc.ca/clf/ref/accessibility">Accessibility</a></li>
	                    </ul>
	                </div>
	            </div>
	        </footer>
        </div>
        ' );	
	}
	/**
	 * @param $out OutputPage object
	 */
	function setupSkinUserCss( OutputPage $out ){
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( "skins.WikiClf" );
		$out->addStyle( '//cdn.ubc.ca/clf/7.0.4/css/ubc-clf-full-bw.min.css', 'screen' );
		$out->addStyle( 'WikiClf/css/wikiclf.css', 'screen' );
	}
} 
