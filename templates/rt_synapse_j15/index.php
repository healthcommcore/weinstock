<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted index access' );
define( 'YOURBASEPATH', dirname(__FILE__) );
require( YOURBASEPATH.DS."rt_styleswitcher.php");
JHTML::_( 'behavior.mootools' );

	$live_site        			= $mainframe->getCfg('live_site');
	$default_style 				= $this->params->get("defaultStyle", "style1");
	$header_style               = $this->params->get("headerStyle", "header5");
	$enable_ie6warn             = ($this->params->get("enableIe6warn", 1)  == 0)?"false":"true";
	$enable_rokzoom				= ($this->params->get("enableRokzoom", 1)  == 0)?"false":"true";
	$enable_pngfix				= ($this->params->get("enablePngfix", 1)  == 0)?"false":"true";
	$enable_fontspans           = ($this->params->get("enableFontspans", 1)  == 0)?"false":"true";
	$font_family                = $this->params->get("fontFamily", "synapse");
	$template_width 			= $this->params->get("templateWidth", "962");
	$leftcolumn_width			= $this->params->get("leftcolumnWidth", "280");
	$rightcolumn_width			= $this->params->get("rightcolumnWidth", "280");
	$splitmenu_col				= $this->params->get("splitmenuCol", "rightcol");
	$menu_name 					= $this->params->get("menuName", "mainmenu");
	$menu_type 					= $this->params->get("menuType", "moomenu");
	$default_font 				= $this->params->get("defaultFont", "default");
	$show_fontbuttons			= ($this->params->get("showFontbuttons", 1)  == 0)?"false":"true";
	$show_breadcrumbs 			= ($this->params->get("showBreadcrumbs", 1)  == 0)?"false":"true";
	$show_moduleslider			= ($this->params->get("showModuleslider", 1)  == 0)?"false":"true";
	
	// moomenu options
	$moo_bgiframe     			= ($this->params->get("moo_bgiframe'","0") == 0)?"false":"true";
	$moo_delay       			= $this->params->get("moo_delay", "500");
	$moo_duration    			= $this->params->get("moo_duration", "700");
	$moo_fps          			= $this->params->get("moo_fps", "300");
	$moo_transition   			= $this->params->get("moo_transition", "Back.easeOut");	

	// rokzoom options
	$enable_rokzoom   			= ($this->params->get("enableRokzoom", 1)  == 0)?"false":"true";
	$zoom_resize_duration     	= $this->params->get("zoom_resize_duration", "700");
	$zoom_opacity_duration     	= $this->params->get("zoom_opacity_duration", "500");
	$zoom_transition   			  = $this->params->get("zoom_transition", "Cubic.easeOut");

	// module title for moduleslider
	$max_mods_per_row			= $this->params->get("maxModsPerRow", 3);
	$ms_title1					= $this->params->get("msTitle1", "Group 1 Tab");	
	$ms_title2					= $this->params->get("msTitle2", "Group 2 Tab");	
	$ms_title3					= $this->params->get("msTitle3", "Group 3 Tab");	
	$ms_title4					= $this->params->get("msTitle4", "Group 4 Tab");	
	$ms_title5					= $this->params->get("msTitle5", "Group 5 Tab");		
	$ms_module1					= $this->params->get("msModule1", "user7");		
	$ms_module2					= $this->params->get("msModule2", "user8");			
	$ms_module3					= $this->params->get("msModule3", "user9");			
	$ms_module4					= $this->params->get("msModule4", "user10");			
	$ms_module5					= $this->params->get("msModule5", "user11");
								
	require(YOURBASEPATH .DS."rt_styleloader.php");
								
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<jdoc:include type="head" />
		<?php							
		require(YOURBASEPATH .DS."rt_tabmodules.php");
		require(YOURBASEPATH .DS."rt_utils.php");
	    require(YOURBASEPATH .DS."rt_head_includes.php");
	    ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32659961-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</head>
	<body id="ff-<?php echo $fontfamily; ?>" class="<?php echo $fontstyle; ?> <?php echo $tstyle; ?> <?php echo $hstyle; ?>">
		<!-- begin header -->
		<div id="header">
			<div class="wrapper">
				<a href="<?php echo $this->baseurl;?>" class="nounder"><img src="<?php echo $this->baseurl;?>/images/blank.png" border="0" alt="" id="logo" /></a>
				<div id="horiz-menu" class="<?php echo $mtype; ?>">
					<?php if($mtype != "module") : ?>
						<?php echo $topnav; ?>
					<?php else: ?>
						<jdoc:include type="modules" name="toolbar" style="none" />
					<?php endif; ?>	
				</div>
				<!-- begin font buttons -->
				<?php if ($show_fontbuttons == "true") : ?>
				<div id="accessibility-section">
					<div id="access-buttons">
						<a href="<?php echo JROUTE::_($thisurl . "fontstyle=f-larger"); ?>" title="Increase size" class="large"><span class="button">&nbsp;</span></a>
						<a href="<?php echo JROUTE::_($thisurl . "fontstyle=f-default"); ?>" title="Default size" class="default"><span class="button">&nbsp;</span></a>
						<a href="<?php echo JROUTE::_($thisurl . "fontstyle=f-smaller"); ?>" title="Decrease size" class="small"><span class="button">&nbsp;</span></a>
					</div>
				</div>
				<?php endif; ?>
				<!-- end font buttons -->
				<?php if ($this->countModules('banner')) : ?>
				<div id="banner">
					<jdoc:include type="modules" name="banner" style="xhtml" />
				</div>
				<?php endif; ?>
			</div>
		</div>
		<!-- end header -->
		<!-- begin showcase area -->
		<div id="showcase">
			<div id="showcase2">
				<div id="showcase-padding">
					<div class="wrapper">
						<?php if ($this->countModules('advert1') or $this->countModules('advert2') or $this->countModules('advert3')) : ?>
							<div id="showcasemodules" class="spacer<?php echo $showcasemod_count; ?>">
								<?php if ($this->countModules('advert3')) : ?>
									<div class="block3">
										<jdoc:include type="modules" name="advert3" style="rounded" />
									</div>
								<?php endif; ?>

								<?php if ($this->countModules('advert1')) : ?>
									<div class="block1">
										<jdoc:include type="modules" name="advert1" style="rounded" />
									</div>
								<?php endif; ?>

								<?php if ($this->countModules('advert2')) : ?>
									<div class="block2">
										<jdoc:include type="modules" name="advert2" style="rounded" />
									</div>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<!-- end showcase area -->
		<!-- begin mainbody -->
		<div id="body-bg">
			<div class="wrapper">
				<table class="mainbody" border="0" cellspacing="0" cellpadding="0">
					<tr valign="top">
						<!-- begin leftcolumn-->
						<?php if ($this->countModules('left') or ($subnav and $splitmenu_col=="leftcol")) : ?>
							<td class="leftcol">
								<div id="leftcol">
									<div id="leftcol2">
										<?php if($subnav and $splitmenu_col=="leftcol") : ?>
											<div id="sub-menu">
												<?php echo $subnav; ?>
											</div>
											<?php endif; ?>
										<jdoc:include type="modules" name="left" style="xhtml" />
									</div>
								</div>
							</td>
						<?php endif; ?>
						<!-- end leftcolumn -->
						<!-- begin maincolumn -->
						<td class="maincol">
							<div id="maincol">
								<?php if ($show_breadcrumbs == "true") : ?>
									<div id="pathway">
										<jdoc:include type="module" name="breadcrumbs" style="none" />
									</div>
								<?php endif; ?>
								<jdoc:include type="message" />
								<jdoc:include type="component" />
								<?php if ($show_moduleslider=="true" and ($this->countModules('user7') or $this->countModules('user8') 
	    					or $this->countModules('user9') or $this->countModules('user10') or $this->countModules('user11'))) : ?>
	    							<div id="moduleslider-size">
	    								<?php displayTabs($this); ?>
	    							</div>
	    						<?php endif; ?>
								<?php if ($this->countModules('user1') or $this->countModules('user2')) : ?>
	    							<div id="mainmodules" class="spacer<?php echo $mainmod_width; ?>">
	    								<?php if ($this->countModules('user1')) : ?>
	    									<div class="block">
	    										<jdoc:include type="modules" name="user1" style="rounded" />
	    									</div>
	    								<?php endif; ?>
	    								<?php if ($this->countModules('user2')) : ?>
	    									<div class="block">
	    										<jdoc:include type="modules" name="user2" style="rounded" />
	    									</div>
	    								<?php endif; ?>
	    							</div>
	    						<?php endif; ?>
							</div>
						</td>
						<!-- end maincolumn -->
						<!-- begin rightcolumn -->
						<?php if ($this->countModules('right') or ($subnav and $splitmenu_col=="rightcol")) : ?>
							<td class="rightcol">
								<div id="rightcol">
									<div id="rightcol2">
										<?php if($subnav and $splitmenu_col=="rightcol") : ?>
											<div id="sub-menu">
												<?php echo $subnav; ?>
											</div>
											<?php endif; ?>
										<jdoc:include type="modules" name="right" style="xhtml" />
									</div>
								</div>
							</td>
						<?php endif; ?>
						<!-- end rightcolumn -->
					</tr>
				</table>
			</div>
		</div>
		<!-- end mainbody -->
		<!-- begin bottom section -->
		<div id="bottom-topbar">
			<div class="wrapper">
				<?php if ($this->countModules('bottom')) : ?>
					<div id="bottom-menu">
						<jdoc:include type="modules" name="bottom" style="xhtml" />
					</div>
				<?php endif; ?>
				<!--<a href="http://www.rockettheme.com/" title="RocketTheme Joomla Template Club" class="nounder"><img src="<?php echo $this->baseurl;?>/templates/<?php echo $this->template; ?>/images/blank.gif" border="0" alt="RocketTheme Joomla Templates" id="rocket" /></a>-->
			</div>
		</div>
		<div id="bottom">
			<div class="wrapper">
				<?php if ($this->countModules('user3') or $this->countModules('user4') or $this->countModules('user5') or $this->countModules('user6')) : ?>
					<div id="bottommodules" class="spacer<?php echo $bottommods_width; ?>">
						<?php if ($this->countModules('user3')) : ?>
							<div class="block">
								<jdoc:include type="modules" name="user3" style="rounded" />
							</div>
						<?php endif; ?>
						<?php if ($this->countModules('user4')) : ?>
							<div class="block">
								<jdoc:include type="modules" name="user4" style="rounded" />
							</div>
						<?php endif; ?>
						<?php if ($this->countModules('user5')) : ?>
							<div class="block">
								<jdoc:include type="modules" name="user5" style="rounded" />
							</div>
						<?php endif; ?>
						<?php if ($this->countModules('user6')) : ?>
							<div class="block">
								<jdoc:include type="modules" name="user6" style="rounded" />
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<!-- end bottom section -->
		<div class="wrapper">
		<jdoc:include type="modules" name="debug" style="none" />
		</div>
	</body>
</html>
