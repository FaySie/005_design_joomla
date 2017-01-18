<?php
/**
 * @package        Asikart.Module
 * @subpackage     mod_slideshow
 * @copyright      Copyright (C) 2014 SMS Taiwan, Inc. All rights reserved.
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

$doc = JFactory::getDocument();
$doc->addStyleSheet('modules/' . $module->module . '/css/bootstrap.css');
$doc->addStyleSheet('modules/' . $module->module . '/css/index.css');
$doc->addStyleSheet('modules/' . $module->module . '/css/slidshow.css');
$doc->addScript( 'modules/' . $module->module . '/js/bootstrap.js');
$doc->addScript( 'modules/' . $module->module . '/js/isMobile.js');
$doc->addScript( 'modules/' . $module->module . '/js/mouseWheel.js');
$doc->addScript( 'modules/' . $module->module . '/js/scroll.js');
$doc->addScript( 'modules/' . $module->module . '/js/slidshow.js');
$doc->addScript( 'modules/' . $module->module . '/js/smooth-scroll.js');
$doc->addScript( 'modules/' . $module->module . '/js/style.js');



?>
<ul class="cb-slideshow">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
            <li><span>Image 03</span></li>
            <li><span>Image 04</span></li>
            <li><span>Image 05</span></li>
            <li><span>Image 06</span></li>
        </ul>
<div class="container" id="main">
    <div class="content">

			<?php foreach ($items as $key => &$item) : ?>
				<div class="section">
					
					<!-- <div class="images">
						<?php // echo JHtml::_('link', $item->item_url, JHtml::_('image', $item->item_images, $item->item_title), array('target' => '_blank')); ?>
					</div> -->
					<div class="content">
						<div class="title">
							<?php echo JHtml::_('link', $item->item_url, $item->item_title, array('target' => '_blank')); ?>
						</div>
						<div class="text">
							<?php echo $item->item_introtext; ?>
						</div>
					</div>
				</div>

			<?php endforeach; ?>

	</div>
</div>