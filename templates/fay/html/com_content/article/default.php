<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$doc = JFactory::getDocument();
$doc->addStyleSheetVersion(JUri::base(true) . '/templates/fay/css/bootstrap.css');
$doc->addStyleSheetVersion(JUri::base(true) . '/templates/fay/css/article.css');

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

// Create shortcuts to some parameters.
$params  = $this->item->params;
$images  = json_decode($this->item->images);
$urls    = json_decode($this->item->urls);
$canEdit = $params->get('access-edit');
$user    = JFactory::getUser();
$info    = $params->get('info_block_position', 0);
JHtml::_('behavior.caption');
$images = json_decode($this->item->images); 
$link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language));
?>

<div class="row">
    <div class="col-md-6">
        <article>
            <div>
                <h4><?php echo $this->item->title; ?></h4>
            </div>
            <div class="blog_info">
                <?php echo $this->item->text; ?>
            </div>
        </article>
    </div>
</div>