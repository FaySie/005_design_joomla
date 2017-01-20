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
$doc->addStyleSheet('templates/fay/css/index.css');

?>
<div class="content">
    <div class="section section1" id="section1">
    	<img class="img-responsive" src="<?php echo $logo; ?>" alt="logo" />
	    	<a class="scroll" href="#section2">
	    		<span class='mouse-container'>
					<span class='mouse'>
			    		<span class='scroll-down'></span>
	  				</span>
				</span>
	    	</a>
    </div>
    <div class="section section2" id="section2">
        <div>
            <h1><?php echo $section2_title; ?></h1>
            <h4><?php echo $section2_desc ?></h4>
            <a class="btn_more" href="<?php echo $section2_link ?>"><?php echo $section2_link_desc ?></a>
        </div>
    </div>
    <div class="section section3" id="section3">
        <div>
            <h1><?php echo $section3_title ?></h1>
            <h4><?php echo $section3_desc ?></h4>
            <a class="btn_more" href="<?php echo $section3_link ?>"><?php echo $section3_link_desc ?></a>
        </div>
    </div>
    <div class="section section4" id="section4">
        <div>
            <h1><?php echo $section4_title ?></h1>
            <h4><?php echo $section4_desc ?></h4>
            <a class="btn_more" href="<?php echo $section4_link ?>"><?php echo $section4_link_desc ?></a>
        </div>
    </div>
    <div class="section section5" id="section5">
        <div>
            <section class="col-md-6 article">
                <h5><?php echo $section5_info ?></h5>
                <h4><?php echo $section5_desc ?></h4>
                <h4><?php echo $section5_title ?></h4>
                <p>
                	<?php echo nl2br($section5_text); ?>
                </p>
            </section>
            <section class="col-md-6 map">
                <img class="img-responsive" src="<?php echo $section5_map ?>" alt="map" />
            </section>    
        </div>
    </div>
</div>