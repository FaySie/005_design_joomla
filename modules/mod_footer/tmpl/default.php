<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_footer
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$doc = JFactory::getDocument();
$doc->addStyleSheet('templates/fay/css/about.css');

?>
<div class="footer1<?php echo $moduleclass_sfx ?>"><?php echo $lineone; ?></div>
<div class="footer2<?php echo $moduleclass_sfx ?>"><?php echo JText::_('MOD_FOOTER_LINE2'); ?></div>

<footer>
    <div class="container" id="footer">
        <div class="col-md-4">
            <div class="logo">
                <img class="img-responsive" src="templates/fay/img/footer_daanriver.png" alt="logo" />
            </div>
        </div>
        <div class="col-md-4">
            <div class="contact">
                <a href="<?php echo $footer_link_fb ?>" target="_blank">
                    <img class="img-responsive" src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/img/facebook.svg" alt="facebook">
                </a>
                <a href="<?php echo $footer_link_mail ?>">
                    <img class="img-responsive" src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/img/contact.svg" alt="contact">
                </a>
                <h6>© 2016 Daanriver Association.</h6>
            </div>
        </div>
    </div>
</footer>