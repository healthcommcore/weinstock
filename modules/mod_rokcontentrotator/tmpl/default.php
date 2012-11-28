<?php // no direct access
/**
* @package RokLatestNews
* @copyright Copyright (C) 2007 RocketWerx. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
*/
defined('_JEXEC') or die('Restricted access'); 
$doc = &JFactory::getDocument();
$doc->addScript(JURI::base() . 'modules/mod_rokcontentrotator/rokcontentrotator-packed.js');
JHTML::_('behavior.mootools');
?>
<script type="text/javascript">
	window.addEvent('domready', function() {
		var crotator = new RokContentRotator({hover: <?php echo $params->get('click_title')==1 ? "true": "false"; ?>});
	});
</script>
<div class="rok-content-rotator<?php echo $params->get('moduleclass_sfx'); ?>">
    <ul>
        <?php foreach ($list as $item) :  ?>
        <li>
            <h2><a class="rok-content-rotator-link" href="#"><?php echo $item->title; ?></a></h2>
            <div class="content">
                <?php echo $item->introtext; ?> 
                <?php if ($params->get('show_readmore') == 1) :?>
                <a href="<?php echo $item->link; ?>" class="readon"><?php echo $params->get('readmore'); ?></a> 
                <?php endif; ?>
            </div>
        </li>
    <?php endforeach; ?>
    </ul>
</div>
