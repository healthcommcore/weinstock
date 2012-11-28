<?php // no direct access
/**
* @package RokIntroScroller
* @copyright Copyright (C) 2007 RocketWerx. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
*/
defined('_JEXEC') or die('Restricted access'); 
$doc = &JFactory::getDocument();
$doc->addScript(JURI::base() . 'modules/mod_rokintroscroller/rokintroscroller.js');
JHTML::_('behavior.mootools');
?>
<script type="text/javascript">
window.addEvent((window.safari) ? 'load' : 'domready', function() {
	var rnu = new RokIntroScroller('rokintroscroller', {
		'arrows': {
			'effect': true,
			'opacity': 0.25
		},
		'scroll': {
			'duration': <?php echo $params->get('duration'); ?>,
			'itemsPerClick': <?php echo $params->get('items_per_click', 2); ?>,
			'transition': Fx.Transitions.Quad.easeOut
		}
	});
});
</script>
<div class="scroller-bottom">
	<div class="scroller-bottom1">
		<div class="scroller-bottom2">
			<div class="scroller-top">
				<div class="scroller-top1">
					<div class="scroller-top2">
						<!-- Content START -->
							<div id="rokintroscroller" class="<?php echo $params->get('moduleclass_sfx'); ?>">
								


        <?php foreach ($list as $item) :  ?>
        <div>
			<?php if ($params->get('show_title') == 1) :?>
				<?php if ($params->get('link_title') == 1) :?>
				<h2><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h2>
				<?php else: ?>
				<h2><?php echo $item->title; ?></h2>
				<?php endif; ?>
			<?php endif; ?>
	
            <?php echo $item->introtext; ?> 

            <?php if ($params->get('show_readmore') == 1) :?>
            <a href="<?php echo $item->link; ?>" class="readon3"><?php echo $params->get('readmore'); ?></a> 
            <?php endif; ?>
       
        </div>
    <?php endforeach; ?>
							<!-- Content END -->		


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

