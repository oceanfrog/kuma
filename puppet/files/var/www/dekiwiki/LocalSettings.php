<?php

# This file was automatically generated by the Deki Wiki installer.
# If you make manual changes, please keep track in case you need to
# recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.

$IP = "/var/www/dekiwiki";
ini_set( "include_path", ".:/var/www/dekiwiki:/var/www/dekiwiki/includes:/var/www/dekiwiki/languages" );
require_once( "includes/DefaultSettings.php" );
	
$wgEmergencyContact = "lorchard@mozilla.com";
$wgPasswordSender = "lorchard@mozilla.com";

$wgDekiApiKey		= "GFxaNVK37fLPsFEYM7NwdIuNpGIiFTOX";

$wgDBserver = "localhost";
$wgDBname = "wikidb";
$wgDBadminuser = "wikiuser";
$wgDBadminpassword = "2yeOr7ByBUMBiB4z";

$wgDekiSpecialPages[] = 'special_tagrename';
$wgDekiSpecialPages[] = 'special_userregistration_mdc';
?>
