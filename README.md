UBC Wiki CLF
==========

Adds UBC CLF to Wiki.

In localsettings.php add require_once( "$IP/skins/WiKiClf/WiKiClf.php" );

localsettings.php options

# disable collapsible sidebar on MediaWiki 1.23
$wgHooks['ResourceLoaderRegisterModules'][] = 'lfRemoveCollapsibleNav';
function lfRemoveCollapsibleNav( &$resourceLoader ) {
        try {
            $rl = new ReflectionClass($resourceLoader);
            $mi = $rl->getProperty("moduleInfos");
            $mi->setAccessible(true);
            $moduleInfos = $mi->getValue($resourceLoader);
            $moduleInfos["skins.vector.collapsibleNav"] = array();
            $mi->setValue($resourceLoader, $moduleInfos);
            $mi->setAccessible(false);
        }
        catch (Exception $e) {
            exit("Error disabling collapsible sidebar (".basename(__FILE__)." line ".__LINE__."). This is supported only on MediaWiki 1.23, there is no need for this on MediaWiki 1.24.");
        }
}

# Disable Create Account Link
$wgHooks['PersonalUrls'][] = 'lfRemoveLoginLink';
	function lfRemoveLoginLink( &$personal_urls, $title ) {
		unset( $personal_urls['createaccount'] );
	return true;
}