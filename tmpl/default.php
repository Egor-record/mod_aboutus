<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */


defined('_JEXEC') or die;


$service_name = $params->get('services-name');
$service_href = $params->get('services-href');
$example_name = $params->get('examples-name');
$example_href = $params->get('examples-href');


?>

<div class="moduletable bottom_blocks  span7">
	<div class="mod-newsflash-adv mod-newsflash-adv__bottom_blocks">
		<div class="row">
			<div class="span3 item item_num0 item__module">
				<a href="<?php echo $service_href; ?>">
	        		<strong class="dropcap">a</strong>
					<!-- Intro Image -->
					<div class="item_content">
					<!-- Item title -->
						<h4 class="item_title item_title__bottom_blocks">
							<span class="item_title_part0"><?php echo $service_name; ?></span> 				
						</h4>
				</a>
				<!-- Introtext -->
				<div class="item_introtext">
			</div><!-- Read More link -->
		</div>
	<div class="clearfix"></div>
</div>
 <div class="span3 item item_num1 item__module  lastItem">
 		<a href=" <?php echo $example_href; ?> "></a>
        <strong class="dropcap">b</strong>        
		<!-- Intro Image -->
		<div class="item_content">
	<!-- Item title -->
			<h4 class="item_title item_title__bottom_blocks">
					<span class="item_title_part0"><?php echo $example_name; ?></span> 				

			</h4>
	<!-- Introtext -->
	<div class="item_introtext"></div>

	<!-- Read More link -->
	</div>

<div class="clearfix"></div>      </a></div>
</div> 
<div class="clearfix"></div>
</div>
</div>
