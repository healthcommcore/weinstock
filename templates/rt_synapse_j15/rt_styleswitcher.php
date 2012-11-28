<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );

$cookie_prefix = "synapse-";
$cookie_time = time()+31536000;
$template_properties = array('fontstyle','fontfamily','tstyle','mtype','hstyle');

foreach ($template_properties as $tprop) {
    $my_session = &JFactory::getSession();
	
	if (isset($_REQUEST[$tprop])) {
	    $$tprop = JRequest::getString($tprop, null, 'get');
    	$my_session->set($cookie_prefix.$tprop, $$tprop);
    	setcookie ($cookie_prefix. $tprop, $$tprop, $cookie_time, '/', false);   
    	global $$tprop; 
    }
}

//cludgy special case for prev/next
if (isset($_REQUEST['pstyle'])) {
  $tstyle = "style1";
  
  if ($my_session->get($cookie_prefix.'tstyle')) {
      $tstyle = $my_session->get($cookie_prefix.'tstyle');
  } elseif (isset($_COOKIE[$cookie_prefix. 'tstyle'])) {
      $tstyle = JRequest::getVar($cookie_prefix. 'tstyle', '', 'COOKIE', 'STRING');
  }

  $stylenum = intval(substr($tstyle,5));
  $stylenum = ($stylenum + (JRequest::getString('tstyle', null, 'get') == "prev" ? -1 : +1))%10;
  if ($stylenum == 0) $stylenum = 10;
  $tstyle = "style$stylenum";
  $my_session->set($cookie_prefix. 'tstyle', $tstyle);
  setcookie ($cookie_prefix. 'tstyle', $tstyle, $cookie_time, '/', false);
  global $tstyle;
}


?>
