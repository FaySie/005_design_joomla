<?php
/**
 * Part of Component Slideshow files.
 *
 * @copyright   Copyright (C) 2014 Asikart. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

include_once JPATH_LIBRARIES . '/windwalker/src/init.php';

JLoader::registerPrefix('Slideshow', JPATH_BASE . '/components/com_slideshow');
JLoader::registerNamespace('Slideshow', JPATH_ADMINISTRATOR . '/components/com_slideshow/src');
JLoader::registerNamespace('Windwalker', __DIR__);
JLoader::register('SlideshowComponent', JPATH_BASE . '/components/com_slideshow/component.php');
