<?php // no direct access
/**
* @package RokHeadRotator
* @copyright Copyright (C) 2007 RocketWerx. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
*/
defined('_JEXEC') or die('Restricted access'); 
$doc = &JFactory::getDocument();
$doc->addScript(JURI::base() . 'modules/mod_rokheadrotator/tmpl/rokheadrotator.js');
JHTML::_('behavior.mootools');

$showControls 	= $params->get( 'showControls', 1 );
$altTag = $params->get( 'altTag', 'RokHeadRotator - http://www.rockettheme.com' );
$imageDuration = $params->get( 'imageDuration', 9000 );
$transDuration = $params->get( 'transDuration', 1000);
$imageStart = $params->get( 'imageStart', 0);
$autoPlay = $params->get( 'autoPlay', 1);
$showControls = $params->get( 'showControls', 1);

if (count($images) > 0) :
?>
	<div id="rokheadrotator"></div>
	<script type="text/javascript">
		window.addEvent('load', function(){
				var headers = [];

				<?php foreach($images as $img) { ?>
					headers.push('<?php echo JURI::base() . $imagePath . trim($img); ?>');
				<?php } ?>
				
				var rok = new RokHeadRotator('rokheadrotator', headers, {
        		    'duration': <?php echo $transDuration; ?>,
        		    'delay': <?php echo $imageDuration; ?>,
        			'start': <?php echo $imageStart; ?>,
        			'autoplay': <?php echo $autoPlay; ?>,
        			'controls': <?php echo $showControls; ?>,
        			'blank': '<?php echo JURI::base(); ?>/images/blank.png'
        		});
			
			});
			</script>
<?php
else:
    echo '<span class="alert">RokHeadRotatorError: No Images Found in ' . $imagePath . '</span><br />';
endif;
?>