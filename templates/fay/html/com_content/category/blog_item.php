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
$doc->addStyleSheetVersion(JUri::base(true) . '/templates/fay/css/about.css');

// Create a shortcut for params.
$params = $this->item->params;
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
$canEdit = $this->item->params->get('access-edit');
$info    = $params->get('info_block_position', 0);
$images = json_decode($this->item->images); 
$link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language));
?>
<div class="row">
    <div class="col-md-6">
        <figure>
            <img class="img-responsive" src="<?php echo htmlspecialchars($images->image_intro, ENT_COMPAT, 'UTF-8'); ?>" alt="coverPhoto">
        </figure>
    </div>
    <div class="col-md-4">
        <article>
            <div>
                <h4><?php echo $this->item->title; ?></h4>
            </div>
            <div class="info">
                <?php echo $this->item->introtext; ?>
            </div>
            <a href="<?php echo $link; ?>">
                <h5 class="more">查看更多</h5>
            </a>
        </article>
    </div>
</div>