<?php
/**
* @package RokHeadRotator
* @copyright Copyright (C) 2008 RocketTheme. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
*/


// no direct access
defined('_JEXEC') or die('Restricted access');
// Include the syndicate functions only once
require_once (dirname(__FILE__).DS.'helper.php');

$imagePath 	= modRokHeadRotatorHelper::cleanDir($params->get( 'imagePath', 'images/stories/fruit' ));
$appendTemplateStyle = $params->get( 'appendTemplateStyle', 0 );
$sortCriteria = $params->get( 'sortCriteria', 0);
$sortOrder = $params->get( 'sortOrder', 'asc');
$sortOrderManual = $params->get( 'sortOrderManual', '');

global $tstyle;  // suck in template style
if (isset($tstyle) && $appendTemplateStyle==1) $imagePath.=$tstyle . "/";

if (trim($sortOrderManual) != "")
	$images = explode(",", $sortOrderManual);
else
	$images = modRokHeadRotatorHelper::imageList($imagePath, $sortCriteria, $sortOrder);

require(JModuleHelper::getLayoutPath('mod_rokheadrotator'));