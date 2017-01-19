<?php
/**
 * @package        Asikart.Module
 * @subpackage     mod_fay
 * @copyright      Copyright (C) 2014 SMS Taiwan, Inc. All rights reserved.
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
JLoader::registerPrefix('ModFay', __DIR__);

$logo = $params->get('logo');

$section2_title = $params->get('section2_title');
$section2_desc = $params->get('section2_desc');
$section2_link = $params->get('section2_link');
$section2_link_desc = $params->get('section2_link_desc');

$section3_title = $params->get('section3_title');
$section3_desc = $params->get('section3_desc');
$section3_link = $params->get('section3_link');
$section3_link_desc = $params->get('section3_link_desc');

$section4_title = $params->get('section4_title');
$section4_desc = $params->get('section4_desc');
$section4_link = $params->get('section4_link');
$section4_link_desc = $params->get('section4_link_desc');

$section5_title = $params->get('section5_title');
$section5_desc = $params->get('section5_desc');
$section5_info = $params->get('section5_info');
$section5_text = $params->get('section5_text');
$section5_map = $params->get('section5_map');

$classSfx = $params->get('moduleclass_sfx');

require JModuleHelper::getLayoutPath('mod_fay', $params->get('layout', 'default'));
