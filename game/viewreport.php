<?php

/**
 * viewreport.php
 *
 * @version 1
 * @copyright 2008 by MadnessRed
 * Created by Anthony for Darkness of Evolution
 */

define('INSIDE'  , true);
define('INSTALL' , false);

define('ROOT_PATH' , '');
include(ROOT_PATH . 'common.php');

	includeLang('viewreport');

	$BodyTPL = gettemplate('viewreport');
	$parse   = $lang;

	$page = parsetemplate($BodyTPL, $parse);
	display($page, $lang['vr_title'], false);

// -----------------------------------------------------------------------------------------------------------
// History version
// 1.0 - Created by MadnessRed
?>
