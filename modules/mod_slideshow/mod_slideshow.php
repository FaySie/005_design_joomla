<?php
/**
 * @package        Asikart.Module
 * @subpackage     mod_slideshow
 * @copyright      Copyright (C) 2014 SMS Taiwan, Inc. All rights reserved.
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
JLoader::registerPrefix('ModSlideshow', __DIR__);

$model    = new ModSlideshowModel($params);
$items    = $model->getItems($params);
$classSfx = ModSlideshowHelper::escape($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_slideshow', $params->get('layout', 'default'));
