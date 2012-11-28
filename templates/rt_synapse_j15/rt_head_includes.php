<?php

// This information has been pulled out of index.php to make the template more readible.
//
// This data goes between the <head></head> tags of the template

?>

<link rel="shortcut icon" href="<?php echo $this->baseurl; ?>/images/favicon.ico" />
<?php if($mtype=="moomenu" or $mtype=="suckerfish") :?>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/rokmoomenu.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/template.css" rel="stylesheet" type="text/css" />
<?php if($show_moduleslider=="true") :?>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/rokslidestrip.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/<?php echo $tstyle; ?>.css" rel="stylesheet" type="text/css" />
<?php if($enable_rokzoom=="true") :?>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/rokzoom/rokzoom.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<style type="text/css">
	div.wrapper { <?php echo $template_width; ?>padding:0;}
	td.leftcol { width:<?php echo $leftcolumn_width; ?>px;padding:0;}
	td.rightcol { width:<?php echo $rightcolumn_width; ?>px;padding:0;}
</style>	
<?php if (rok_isIe7()) :?>
<!--[if IE 7]>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/template_ie7.css" rel="stylesheet" type="text/css" />	
<![endif]-->	
<?php endif; ?>
<?php if (rok_isIe6()) :?>
<!--[if lte IE 6]>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/template_ie6.css" rel="stylesheet" type="text/css" />
<style type="text/css">
    img#logo {
    	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/images/<?php echo $tstyle; ?>/logo.png', sizingMethod='scale');
    	background: none;
    }
<?php if($enable_pngfix=="true") : ?>
img { behavior: url(<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/iepngfix.htc); } 
<?php endif; ?>
</style>
<![endif]-->
<?php endif; ?>
<?php if($show_moduleslider=="true") :?>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/rokslidestrip.js"></script>
<?php endif; ?>
<?php if($enable_rokzoom=="true") :?>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/rokzoom/rokzoom.js"></script>
<?php endif; ?>
<?php if($enable_ie6warn=="true") : ?>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/rokie6warn.js"></script>
<?php endif; ?>
<?php if($enable_fontspans=="true") :?>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/rokfonts.js"></script>   
<script type="text/javascript">
	window.addEvent('domready', function() {
		var modules = ['module','module-featured','moduletable','moduletable-hilite1','moduletable-hilite2','module-hilite3','module-hilite4','module-hilite5','module-hilite6'];
		var header = "h3";
		RokBuildSpans(modules, header);
	});
</script>
<?php endif; ?>
<?php if($mtype=="moomenu") :?>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/rokmoomenu.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/mootools.bgiframe.js"></script>
<script type="text/javascript">
window.addEvent('domready', function() {
	new Rokmoomenu($E('ul.menutop '), {
		bgiframe: <?php echo $moo_bgiframe; ?>,
		delay: <?php echo $moo_delay; ?>,
		animate: {
			props: ['height'],
			opts: {
				duration:<?php echo $moo_duration; ?>,
				fps: <?php echo $moo_fps; ?>,
				transition: Fx.Transitions.<?php echo $moo_transition; ?>
			}
		}
	});
});
</script>
<?php endif; ?>	
<?php if($mtype=="suckerfish" or $mtype=="splitmenu") :
	echo "<!--[if IE]>\n";		
	echo "<script type=\"text/javascript\" src=\"" . $this->baseurl . "/templates/" . $this->template . "/js/ie_suckerfish.js\"></script>\n";
	echo "<![endif]-->\n";
endif; ?>	
<?php if($enable_rokzoom=="true") :?>
<script type="text/javascript">
	window.addEvent('load', function() {
		RokZoom.init({
			imageDir: '<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/rokzoom/images/',
			resizeFX: {
				duration: 700,
				transition: Fx.Transitions.Cubic.easeOut,
				wait: true
			},
			opacityFX: {
				duration: 500,
				wait: false	
			}
		});
	});
</script>
<?php endif; ?>