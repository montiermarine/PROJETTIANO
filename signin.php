<?php
session_start();
require_once 'models/database.php';
require_once 'models/usersModel.php';
require_once 'config.php';
require_once 'controllers/signinController.php';
require_once 'includes/header.php';
?>
<!-- Formulaire -->
<div class="container-fluid">
  <div class="row ms-5 mt-4">
    <div class="col-6">
      <form method="POST" action="signin.php">
        <h1> Inscrivez-vous</h1>
        <!-- On affiche qu'une erreur est survenue lors de l'envoie du formulaire !-->
        <?php if (isset($formErrors['db'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $formErrors['db'] ?>
                </div>
                <?php } ?>
        <div class="mb-3">
          <label for="lastname" class="form-label">Nom</label>
          <!-- On crée une ternaire dans l'input pour verifier si celui ci est "rempli" si ce n'est pas le cas le message d'erreur apparaitra
          On stock le $_POST dans la value afin de faire transiter les informations du formulaire à la db!-->
          <input type="text" placeholder="Montier" name="lastname" class="form-control <?= !empty($formErrors['lastname']) ? 'is-invalid' : ''; ?>" id="lastname" value="<?= @$_POST['lastname']; ?>" />
          <small class="invalid-feedback"><?= @$formErrors['lastname']; ?></small>
        </div>
        <div class="mb-3">
          <label for="firstname" class="form-label">Prénom</label>
          <input type="text" placeholder="Marine" name="firstname" class="form-control <?= !empty($formErrors['firstname']) ? 'is-invalid' : ''; ?>" id="firstname" value="<?= @$_POST['firstname']; ?>" />
          <small class="invalid-feedback"><?= @$formErrors['firstname']; ?></small>
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Pseudo</label>
          <input type="text" name="username" placeholder="MumBossof3children" class="form-control <?= !empty($formErrors['username']) ? 'is-invalid' : ''; ?>" id="username" value="<?= @$_POST['username']; ?>" />
          <small class="invalid-feedback"><?= @$formErrors['username']; ?></small>
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Adresse</label>
          <input type="text" placeholder="10 Chemin Étoilé 60400 NOYON" name="address" class="form-control <?= !empty($formErrors['address']) ? 'is-invalid' : ''; ?>" id="address" value="<?= @$_POST['address']; ?>" />
          <small class="invalid-feedback"><?= @$formErrors['address']; ?></small>
        </div>
        <div class="mb-3">
          <label for="mail" class="form-label">Mail</label>
          <input type="text" placeholder="Miel@beemail.com" name="mail" class="form-control <?= !empty($formErrors['mail']) ? 'is-invalid' : ''; ?>" id="mail" value="<?= @$_POST['mail']; ?>" />
          <small class="invalid-feedback"><?= @$formErrors['mail']; ?></small>
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Téléphone</label>
          <input type="text" placeholder="03 XX XX XX 50" name="phoneNumber" class="form-control <?= !empty($formErrors['phoneNumber']) ? 'is-invalid' : ''; ?>" id="phoneNumber" value="<?= @$_POST['phoneNumber']; ?>" />
          <small class="invalid-feedback"><?= @$formErrors['phoneNumber']; ?></small>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Mot de passe</label>
          <input type="password" name="password" class="form-control <?= !empty($formErrors['password']) ? 'is-invalid' : ''; ?> " id="password" value="<?= @$_POST['password']; ?>" />
          <small class="invalid-feedback"><?= @$formErrors['password']; ?></small>
        </div>
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirmation de Mot de passe</label>
          <input type="password" name="confirmPassword" class="form-control <?= !empty($formErrors['confirmPassword']) ? 'is-invalid' : ''; ?>" id="confirmPassword" value="<?= @$_POST['confirmPassword']; ?>" />
          <small class="invalid-feedback"><?= @$formErrors['confirmPassword']; ?></small>
        </div>
        <input type="submit" class="btn btn-success" value="Envoyer" />
      </form>
    </div>

    <div class="col-6 d-flex align-items-center">
      <svg class="animated" id="freepik_stories-sign-in" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
        <style>
          svg#freepik_stories-sign-in:not(.animated) .animable {
            opacity: 0;
          }

          svg#freepik_stories-sign-in.animated #freepik--Device--inject-10 {
            animation: 1.5s Infinite linear shake;
            animation-delay: 0s;
          }

          svg#freepik_stories-sign-in.animated #freepik--speech-bubble--inject-10 {
            animation: 1.5s Infinite linear floating;
            animation-delay: 0s;
          }

          @keyframes shake {

            10%,
            90% {
              transform: translate3d(-1px, 0, 0);
            }

            20%,
            80% {
              transform: translate3d(2px, 0, 0);
            }

            30%,
            50%,
            70% {
              transform: translate3d(-4px, 0, 0);
            }

            40%,
            60% {
              transform: translate3d(4px, 0, 0);
            }
          }

          @keyframes floating {
            0% {
              opacity: 1;
              transform: translateY(0px);
            }

            50% {
              transform: translateY(-10px);
            }

            100% {
              opacity: 1;
              transform: translateY(0px);
            }
          }
        </style>
        <g id="freepik--background-complete--inject-10" class="animable" style="transform-origin: 250px 228.23px;">
          <rect y="382.4" width="500" height="0.25" style="fill: rgb(235, 235, 235); transform-origin: 250px 382.525px;" id="eljdwqph08unq" class="animable"></rect>
          <rect x="416.78" y="398.49" width="33.12" height="0.25" style="fill: rgb(235, 235, 235); transform-origin: 433.34px 398.615px;" id="elh5u5kn5gwcm" class="animable"></rect>
          <rect x="322.53" y="401.21" width="8.69" height="0.25" style="fill: rgb(235, 235, 235); transform-origin: 326.875px 401.335px;" id="el2lca0k5o6h3" class="animable"></rect>
          <rect x="396.59" y="389.21" width="19.19" height="0.25" style="fill: rgb(235, 235, 235); transform-origin: 406.185px 389.335px;" id="elnr3jveoze2t" class="animable"></rect>
          <rect x="52.46" y="390.89" width="43.19" height="0.25" style="fill: rgb(235, 235, 235); transform-origin: 74.055px 391.015px;" id="elyjfsmqede3" class="animable"></rect>
          <rect x="104.56" y="390.89" width="6.33" height="0.25" style="fill: rgb(235, 235, 235); transform-origin: 107.725px 391.015px;" id="elewqcll52fqq" class="animable"></rect>
          <rect x="131.47" y="395.11" width="93.68" height="0.25" style="fill: rgb(235, 235, 235); transform-origin: 178.31px 395.235px;" id="elbjkcejhwsx5" class="animable"></rect>
          <path d="M237,337.8H43.91a5.71,5.71,0,0,1-5.7-5.71V60.66A5.71,5.71,0,0,1,43.91,55H237a5.71,5.71,0,0,1,5.71,5.71V332.09A5.71,5.71,0,0,1,237,337.8ZM43.91,55.2a5.46,5.46,0,0,0-5.45,5.46V332.09a5.46,5.46,0,0,0,5.45,5.46H237a5.47,5.47,0,0,0,5.46-5.46V60.66A5.47,5.47,0,0,0,237,55.2Z" style="fill: rgb(235, 235, 235); transform-origin: 140.46px 196.4px;" id="elf78x6yl595a" class="animable"></path>
          <path d="M453.31,337.8H260.21a5.72,5.72,0,0,1-5.71-5.71V60.66A5.72,5.72,0,0,1,260.21,55h193.1A5.71,5.71,0,0,1,459,60.66V332.09A5.71,5.71,0,0,1,453.31,337.8ZM260.21,55.2a5.47,5.47,0,0,0-5.46,5.46V332.09a5.47,5.47,0,0,0,5.46,5.46h193.1a5.47,5.47,0,0,0,5.46-5.46V60.66a5.47,5.47,0,0,0-5.46-5.46Z" style="fill: rgb(235, 235, 235); transform-origin: 356.75px 196.4px;" id="elx3rald5og7" class="animable"></path>
          <polygon points="199.23 308.79 190.8 308.79 185.24 308.79 200.82 321.69 203.68 321.69 206.23 321.69 202.59 316.16 213.21 321.69 215.77 321.69 218.79 321.69 199.23 308.79" style="fill: rgb(224, 224, 224); transform-origin: 202.015px 315.24px;" id="elvwz8koaqj8k" class="animable"></polygon>
          <polygon points="88.75 321.69 94.33 321.69 106.72 315.24 101.31 321.69 106.72 321.69 122.3 308.79 108.31 308.79 88.75 321.69" style="fill: rgb(224, 224, 224); transform-origin: 105.525px 315.24px;" id="elza5a76xrq79" class="animable"></polygon>
          <polygon points="103.85 321.69 116.74 308.79 108.31 308.79 88.75 321.69 91.77 321.69 106.72 313.47 101.31 321.69 103.85 321.69" style="fill: rgb(240, 240, 240); transform-origin: 102.745px 315.24px;" id="elifzs3lm61b" class="animable"></polygon>
          <path d="M60.26,321.69v61.18H248.68V321.69Zm185.34,24H94.33v-20H245.6Z" style="fill: rgb(224, 224, 224); transform-origin: 154.47px 352.28px;" id="elvyzccd54kll" class="animable"></path>
          <path d="M90.21,321.69v61.18H248.68V321.69Zm155.39,24H94.33v-20H245.6Z" style="fill: rgb(235, 235, 235); transform-origin: 169.445px 352.28px;" id="el048g2cplvc97" class="animable"></path>
          <rect x="218.02" y="325.66" width="27.58" height="19.99" style="fill: rgb(224, 224, 224); transform-origin: 231.81px 335.655px;" id="eldtnfj56ycuu" class="animable"></rect>
          <rect x="94.33" y="335.65" width="39.94" height="10" style="fill: rgb(224, 224, 224); transform-origin: 114.3px 340.65px;" id="elpzhv7muia8a" class="animable"></rect>
          <rect x="136.78" y="339.71" width="25.69" height="5.94" style="fill: rgb(224, 224, 224); transform-origin: 149.625px 342.68px;" id="el73rxgf0bmfg" class="animable"></rect>
          <rect x="168.41" y="333.5" width="30.29" height="12.15" style="fill: rgb(224, 224, 224); transform-origin: 183.555px 339.575px;" id="elr5y9yj8e3s" class="animable"></rect>
          <polygon points="124.4 350 123.67 352.39 113.84 352.39 113.11 350 94.33 350 94.33 376.55 143.18 376.55 143.18 350 124.4 350" style="fill: rgb(224, 224, 224); transform-origin: 118.755px 363.275px;" id="elzfmdthim3q9" class="animable"></polygon>
          <polygon points="175.54 350 174.81 352.39 164.99 352.39 164.26 350 145.47 350 145.47 376.55 194.33 376.55 194.33 350 175.54 350" style="fill: rgb(224, 224, 224); transform-origin: 169.9px 363.275px;" id="eldue1s3h76mh" class="animable"></polygon>
          <polygon points="226.69 350 225.96 352.39 216.14 352.39 215.4 350 196.62 350 196.62 376.55 245.47 376.55 245.47 350 226.69 350" style="fill: rgb(224, 224, 224); transform-origin: 221.045px 363.275px;" id="el48drnbdcney" class="animable"></polygon>
          <rect x="82.17" y="227.81" width="136.85" height="82.69" rx="3.53" style="fill: rgb(224, 224, 224); transform-origin: 150.595px 269.155px;" id="elol41yiq4y1d" class="animable"></rect>
          <rect x="85.39" y="227.81" width="136.85" height="82.69" rx="3.53" style="fill: rgb(230, 230, 230); transform-origin: 153.815px 269.155px;" id="el71ugk10wnwa" class="animable"></rect>
          <g id="elr4821nocjs">
            <rect x="116.49" y="204.75" width="74.65" height="128.81" style="fill: rgb(240, 240, 240); transform-origin: 153.815px 269.155px; transform: rotate(90deg);" class="animable"></rect>
          </g>
          <g id="elj8314uis6hm">
            <circle cx="372.32" cy="118.17" r="18.94" style="fill: rgb(224, 224, 224); transform-origin: 372.32px 118.17px; transform: rotate(-14.19deg);" class="animable"></circle>
          </g>
          <g id="elf4u4147h68">
            <circle cx="372.32" cy="118.17" r="16.1" style="fill: rgb(240, 240, 240); transform-origin: 372.32px 118.17px; transform: rotate(-76.72deg);" class="animable"></circle>
          </g>
          <polyline points="371.56 107.13 371.56 118.38 364.1 114.16" style="fill: rgb(240, 240, 240); transform-origin: 367.83px 112.755px;" id="el4jnayl1see6" class="animable"></polyline>
          <path d="M371.56,119.38a1,1,0,0,1-.5-.13L363.6,115a1,1,0,0,1-.37-1.36,1,1,0,0,1,1.36-.38l6,3.38v-9.54a1,1,0,0,1,2,0v11.25a1,1,0,0,1-1,1Z" style="fill: rgb(224, 224, 224); transform-origin: 367.845px 112.74px;" id="el7a3ote2vf1v" class="animable"></path>
          <path d="M114.37,118.24s-.92-6,3.48-9.89,4-6.16,2.75-6.46-2.41,3.56-4.34,4.62c0,0-.07-5.5,1.9-7.53s3-7.25,1.12-7.34-2.06,3.1-2.44,5.36a19.15,19.15,0,0,1-2.47,5.46s-.41-4.93-1.68-7,2.12-6.66.81-8.69-3.62,1.84-3.43,6.18,3.1,9,2.42,13.52c0,0-1.28-3.18-2.43-3.47s-2.3-2.4-3.08-3.18-1.73,1.92,0,4.43,6.19,9.23,5.51,14.66Z" style="fill: rgb(230, 230, 230); transform-origin: 113.724px 102.562px;" id="elveh3enrvmr" class="animable"></path>
          <path d="M117,115.5l1.43,9a4.58,4.58,0,0,1-4.53,5.31h-1.53a4.59,4.59,0,0,1-4.54-5.31l1.44-9Z" style="fill: rgb(230, 230, 230); transform-origin: 113.131px 122.655px;" id="el2050midkzot" class="animable"></path>
          <g id="elf9tg16kbmy">
            <rect x="95.23" y="126.51" width="101.72" height="5.23" style="fill: rgb(224, 224, 224); transform-origin: 146.09px 129.125px; transform: rotate(180deg);" class="animable"></rect>
          </g>
          <g id="ely6il703u0d">
            <rect x="187.79" y="107.24" width="4.48" height="19.26" style="fill: rgb(235, 235, 235); transform-origin: 190.03px 116.87px; transform: rotate(180deg);" class="animable"></rect>
          </g>
          <g id="elsjh2crs8pq8">
            <rect x="166.12" y="107.24" width="4.48" height="19.26" style="fill: rgb(235, 235, 235); transform-origin: 168.36px 116.87px; transform: rotate(180deg);" class="animable"></rect>
          </g>
          <g id="el0tnxt4pieja">
            <rect x="139.85" y="107" width="4.48" height="19.27" style="fill: rgb(235, 235, 235); transform-origin: 142.09px 116.635px; transform: rotate(-170.22deg);" class="animable"></rect>
          </g>
          <g id="el47mx0l1filb">
            <rect x="182.24" y="109.78" width="4.48" height="16.73" style="fill: rgb(235, 235, 235); transform-origin: 184.48px 118.145px; transform: rotate(180deg);" class="animable"></rect>
          </g>
          <g id="eln46ydy97du">
            <rect x="171.93" y="109.78" width="4.48" height="16.73" style="fill: rgb(235, 235, 235); transform-origin: 174.17px 118.145px; transform: rotate(180deg);" class="animable"></rect>
          </g>
          <g id="el51dafl4l7za">
            <rect x="145.94" y="109.78" width="4.48" height="16.73" style="fill: rgb(235, 235, 235); transform-origin: 148.18px 118.145px; transform: rotate(180deg);" class="animable"></rect>
          </g>
          <g id="elazceue4x7qp">
            <rect x="158.37" y="109.5" width="4.48" height="16.73" style="fill: rgb(235, 235, 235); transform-origin: 160.61px 117.865px; transform: rotate(-167.47deg);" class="animable"></rect>
          </g>
          <g id="el46t8j7z6cau">
            <rect x="178.36" y="106.29" width="2.24" height="20.22" style="fill: rgb(235, 235, 235); transform-origin: 179.48px 116.4px; transform: rotate(180deg);" class="animable"></rect>
          </g>
          <g id="el2np9jh5apik">
            <rect x="151.7" y="106.29" width="2.24" height="20.22" style="fill: rgb(235, 235, 235); transform-origin: 152.82px 116.4px; transform: rotate(180deg);" class="animable"></rect>
          </g>
          <rect x="95.23" y="165.52" width="101.72" height="5.23" style="fill: rgb(224, 224, 224); transform-origin: 146.09px 168.135px;" id="elmns1zexkpl" class="animable"></rect>
          <rect x="99.91" y="146.26" width="4.48" height="19.27" style="fill: rgb(235, 235, 235); transform-origin: 102.15px 155.895px;" id="el4umpgfet1e7" class="animable"></rect>
          <rect x="121.58" y="146.26" width="4.48" height="19.27" style="fill: rgb(235, 235, 235); transform-origin: 123.82px 155.895px;" id="elz7iz2r0qa9k" class="animable"></rect>
          <g id="elbzles90ggpp">
            <rect x="147.85" y="146.02" width="4.48" height="19.27" style="fill: rgb(235, 235, 235); transform-origin: 150.09px 155.655px; transform: rotate(-9.78deg);" class="animable"></rect>
          </g>
          <rect x="105.47" y="148.8" width="4.48" height="16.73" style="fill: rgb(235, 235, 235); transform-origin: 107.71px 157.165px;" id="elznrldrss8ba" class="animable"></rect>
          <rect x="115.77" y="148.8" width="4.48" height="16.73" style="fill: rgb(235, 235, 235); transform-origin: 118.01px 157.165px;" id="eldmcipm69nr" class="animable"></rect>
          <rect x="141.76" y="148.8" width="4.48" height="16.73" style="fill: rgb(235, 235, 235); transform-origin: 144px 157.165px;" id="elzmye09d8a1c" class="animable"></rect>
          <g id="elxo422hsuvfj">
            <rect x="129.33" y="148.51" width="4.48" height="16.73" style="fill: rgb(235, 235, 235); transform-origin: 131.57px 156.875px; transform: rotate(-12.53deg);" class="animable"></rect>
          </g>
          <rect x="111.58" y="145.3" width="2.24" height="20.22" style="fill: rgb(235, 235, 235); transform-origin: 112.7px 155.41px;" id="elmnwjdb8dhj" class="animable"></rect>
          <rect x="138.24" y="145.3" width="2.24" height="20.22" style="fill: rgb(235, 235, 235); transform-origin: 139.36px 155.41px;" id="el5r22jih0ef9" class="animable"></rect>
          <rect x="165.36" y="150.28" width="21.84" height="15.07" style="fill: rgb(235, 235, 235); transform-origin: 176.28px 157.815px;" id="elpno076ywu1" class="animable"></rect>
        </g>
        <g id="freepik--Shadow--inject-10" class="animable" style="transform-origin: 250px 416.24px;">
          <ellipse id="freepik--path--inject-10" cx="250" cy="416.24" rx="193.89" ry="11.32" style="fill: rgb(245, 245, 245); transform-origin: 250px 416.24px;" class="animable"></ellipse>
        </g>
        <g id="freepik--Plant--inject-10" class="animable" style="transform-origin: 92.318px 363.695px;">
          <path d="M90.55,379.14c0-.3-1-30-5.81-34.65-4.62-4.48-9.94-.16-10.17,0l-.64-.77c.06-.05,6.24-5.09,11.5,0,5.09,4.94,6.08,34.09,6.12,35.33Z" style="fill: rgb(0, 119, 182); transform-origin: 82.74px 360.293px;" id="el561a2u8ya1p" class="animable"></path>
          <path d="M91,385c-.14-1.46-3.31-35.74,9.62-50.59l.76.66C88.7,349.58,91.93,384.54,92,384.89Z" style="fill: rgb(0, 119, 182); transform-origin: 95.9691px 359.705px;" id="el7u2muddv08q" class="animable"></path>
          <path d="M90.73,381.25l-1-.07c0-.4,2.53-40.11-6.9-48.77l.68-.74C93.28,340.66,90.84,379.59,90.73,381.25Z" style="fill: rgb(0, 119, 182); transform-origin: 86.9544px 356.46px;" id="elh533w9f749l" class="animable"></path>
          <path d="M92,381.22H91c0-1.1.31-26.93,7.69-31.16a5.3,5.3,0,0,1,4.84-.47c4.48,1.86,6.69,9.79,6.78,10.12l-1,.27c0-.08-2.17-7.8-6.19-9.46a4.29,4.29,0,0,0-4,.41C92.27,354.86,92,381,92,381.22Z" style="fill: rgb(0, 119, 182); transform-origin: 100.655px 365.216px;" id="el16r9r62bm9h" class="animable"></path>
          <path d="M89.11,381.24l-1-.06c0-.2,1.1-20.31-4.31-27.38-1.3-1.68-2.69-2.49-4.16-2.38-3.5.24-6.46,5.4-6.48,5.45l-.88-.49c.14-.23,3.25-5.68,7.29-6,1.82-.13,3.51.8,5,2.78C90.24,360.56,89.16,380.4,89.11,381.24Z" style="fill: rgb(0, 119, 182); transform-origin: 80.7518px 365.804px;" id="el28hqk27tqss" class="animable"></path>
          <path d="M90.06,384c-.14-2-3.55-48,2.47-56.18l.8.6c-5.8,7.85-2.3,55-2.27,55.5Z" style="fill: rgb(0, 119, 182); transform-origin: 91.1511px 355.91px;" id="eld1p88va0hde" class="animable"></path>
          <path d="M105.08,354.36s-3.59,1.33-2.52,4.46S115,367.1,115,367.1s4.76-4.37.39-11.47S105.18,352.12,105.08,354.36Z" style="fill: rgb(0, 119, 182); transform-origin: 109.798px 359.271px;" id="el861taxz4lxw" class="animable"></path>
          <g id="elo9ljirzmo2h">
            <path d="M105.08,354.36s-3.59,1.33-2.52,4.46S115,367.1,115,367.1s4.76-4.37.39-11.47S105.18,352.12,105.08,354.36Z" style="fill: rgb(255, 255, 255); opacity: 0.2; isolation: isolate; transform-origin: 109.798px 359.271px;" class="animable"></path>
          </g>
          <path d="M89.45,348.4s3.83-.16,4,3.14S85.2,364,85.2,364s-6.08-2.19-4.78-10.43S88.49,346.37,89.45,348.4Z" style="fill: rgb(0, 119, 182); transform-origin: 86.8451px 355.484px;" id="el825x2uaj294" class="animable"></path>
          <g id="eluposh8f1fn">
            <path d="M89.45,348.4s3.83-.16,4,3.14S85.2,364,85.2,364s-6.08-2.19-4.78-10.43S88.49,346.37,89.45,348.4Z" style="fill: rgb(255, 255, 255); opacity: 0.2; isolation: isolate; transform-origin: 86.8451px 355.484px;" class="animable"></path>
          </g>
          <path d="M86.2,332.6s2.56-.28,2.35-1.83-9.93-5.56-15.66.91c0,0,3.67,6.31,9,6.39S86.2,332.6,86.2,332.6Z" style="fill: rgb(0, 119, 182); transform-origin: 80.7261px 333.093px;" id="elrkx4erd54xt" class="animable"></path>
          <g id="el0981pg9yvzgm">
            <path d="M86.2,332.6s2.56-.28,2.35-1.83-9.93-5.56-15.66.91c0,0,3.67,6.31,9,6.39S86.2,332.6,86.2,332.6Z" style="fill: rgb(255, 255, 255); opacity: 0.2; isolation: isolate; transform-origin: 80.7261px 333.093px;" class="animable"></path>
          </g>
          <path d="M91,328.82s-2.31,1.12-3-.31,5.49-10,13.78-7.51c0,0,.22,7.3-4.24,10.18S91,328.82,91,328.82Z" style="fill: rgb(0, 119, 182); transform-origin: 94.8646px 326.297px;" id="elv3dl1mhxtsk" class="animable"></path>
          <g id="eljv7lb2up0r">
            <path d="M91,328.82s-2.31,1.12-3-.31,5.49-10,13.78-7.51c0,0,.22,7.3-4.24,10.18S91,328.82,91,328.82Z" style="fill: rgb(255, 255, 255); opacity: 0.2; isolation: isolate; transform-origin: 94.8646px 326.297px;" class="animable"></path>
          </g>
          <path d="M78.87,353.1s1.76-1.42-.14-2.12-11.24-.49-11.33,8.75c0,0,10.87,1.81,12.21-1.71S78.87,353.1,78.87,353.1Z" style="fill: rgb(0, 119, 182); transform-origin: 73.73px 355.465px;" id="elrrrghxifzrs" class="animable"></path>
          <g id="ellquhh29jngi">
            <path d="M78.87,353.1s1.76-1.42-.14-2.12-11.24-.49-11.33,8.75c0,0,10.87,1.81,12.21-1.71S78.87,353.1,78.87,353.1Z" style="fill: rgb(255, 255, 255); opacity: 0.2; isolation: isolate; transform-origin: 73.73px 355.465px;" class="animable"></path>
          </g>
          <path d="M101,332.37s-1.77-1.43.14-2.12,11.23-.5,11.33,8.75c0,0-10.87,1.8-12.22-1.72S101,332.37,101,332.37Z" style="fill: rgb(0, 119, 182); transform-origin: 106.134px 334.734px;" id="el7hkciiz2c6u" class="animable"></path>
          <g id="elutlp11eunhk">
            <path d="M101,332.37s-1.77-1.43.14-2.12,11.23-.5,11.33,8.75c0,0-10.87,1.8-12.22-1.72S101,332.37,101,332.37Z" style="fill: rgb(255, 255, 255); opacity: 0.2; isolation: isolate; transform-origin: 106.134px 334.734px;" class="animable"></path>
          </g>
          <path d="M95.29,339.81s-.16-1.73,1.24-1.05,6.26,5.93,1.22,10.91c0,0-6.79-5-5.57-7.65S95.29,339.81,95.29,339.81Z" style="fill: rgb(0, 119, 182); transform-origin: 96.0094px 344.136px;" id="elqqougco6r8f" class="animable"></path>
          <g id="elrxjod3j8dgp">
            <path d="M95.29,339.81s-.16-1.73,1.24-1.05,6.26,5.93,1.22,10.91c0,0-6.79-5-5.57-7.65S95.29,339.81,95.29,339.81Z" style="fill: rgb(255, 255, 255); opacity: 0.2; isolation: isolate; transform-origin: 96.0094px 344.136px;" class="animable"></path>
          </g>
          <path d="M77.29,342.28s1.06-1.38-.49-1.55S68.35,342.4,70,349.3c0,0,8.42-.63,8.78-3.5S77.29,342.28,77.29,342.28Z" style="fill: rgb(0, 119, 182); transform-origin: 74.2867px 345.01px;" id="elvn3zl9cpfne" class="animable"></path>
          <g id="elugi9lfn5ct">
            <path d="M77.29,342.28s1.06-1.38-.49-1.55S68.35,342.4,70,349.3c0,0,8.42-.63,8.78-3.5S77.29,342.28,77.29,342.28Z" style="fill: rgb(255, 255, 255); opacity: 0.2; isolation: isolate; transform-origin: 74.2867px 345.01px;" class="animable"></path>
          </g>
          <polygon points="105.76 406.84 76.85 406.84 73.73 375.19 108.87 375.19 105.76 406.84" style="fill: rgb(0, 119, 182); transform-origin: 91.3px 391.015px;" id="elp6gopmegogl" class="animable"></polygon>
          <g id="elp2x976ifvx8">
            <polygon points="105.76 406.84 76.85 406.84 73.73 375.19 108.87 375.19 105.76 406.84" style="fill: rgb(255, 255, 255); opacity: 0.5; isolation: isolate; transform-origin: 91.3px 391.015px;" class="animable"></polygon>
          </g>
          <rect x="72.19" y="371.7" width="38.23" height="6.98" style="fill: rgb(0, 119, 182); transform-origin: 91.305px 375.19px;" id="elou4nb9dh0k" class="animable"></rect>
          <g id="elapw2q9h85p4">
            <rect x="72.19" y="371.7" width="38.23" height="6.98" style="fill: rgb(255, 255, 255); opacity: 0.2; isolation: isolate; transform-origin: 91.305px 375.19px;" class="animable"></rect>
          </g>
        </g>
        <g id="freepik--Interior--inject-10" class="animable" style="transform-origin: 373.385px 326.1px;">
          <polyline points="340.02 406.84 340.08 406.47 341.77 386.69 348.98 386.69 343.83 406.84" style="fill: rgb(38, 50, 56); transform-origin: 344.5px 396.765px;" id="elz25o4wfkhak" class="animable"></polyline>
          <polyline points="406.74 406.84 406.68 406.47 404.98 386.69 397.78 386.69 402.93 406.84" style="fill: rgb(38, 50, 56); transform-origin: 402.26px 396.765px;" id="elzjq89u0n98" class="animable"></polyline>
          <polyline points="330.52 406.84 330.58 406.47 333.86 386.69 341.06 386.69 334.33 406.84" style="fill: rgb(38, 50, 56); transform-origin: 335.79px 396.765px;" id="elt0ayncu4eo" class="animable"></polyline>
          <polyline points="416.24 406.84 416.17 406.47 412.9 386.69 405.7 386.69 412.43 406.84" style="fill: rgb(38, 50, 56); transform-origin: 410.97px 396.765px;" id="elth7idjkoo6h" class="animable"></polyline>
          <g id="ela4v502o1f6n">
            <g style="opacity: 0.2; isolation: isolate; transform-origin: 373.38px 396.765px;" class="animable">
              <polyline points="330.52 406.84 330.58 406.47 333.86 386.69 341.06 386.69 334.33 406.84" style="fill: rgb(255, 255, 255); transform-origin: 335.79px 396.765px;" id="elvohrl3kye1" class="animable"></polyline>
              <polyline points="416.24 406.84 416.17 406.47 412.9 386.69 405.7 386.69 412.43 406.84" style="fill: rgb(255, 255, 255); transform-origin: 410.97px 396.765px;" id="elchq863wexf7" class="animable"></polyline>
            </g>
          </g>
          <rect x="326.01" y="268.29" width="94.75" height="122.81" rx="3.98" style="fill: rgb(0, 119, 182); transform-origin: 373.385px 329.695px;" id="el3mfml1in4bc" class="animable"></rect>
          <g id="el5wsjj1mitzi">
            <rect x="326.01" y="268.29" width="94.75" height="122.81" rx="3.98" style="fill: rgb(255, 255, 255); opacity: 0.4; isolation: isolate; transform-origin: 373.385px 329.695px;" class="animable"></rect>
          </g>
          <g id="elr62ign1ipkh">
            <rect x="329.87" y="295.07" width="87.02" height="44.33" style="fill: rgb(255, 255, 255); opacity: 0.5; isolation: isolate; transform-origin: 373.38px 317.235px;" class="animable"></rect>
          </g>
          <g id="el7mtd2u6cr9g">
            <rect x="329.87" y="342.35" width="87.02" height="44.33" style="fill: rgb(255, 255, 255); opacity: 0.5; isolation: isolate; transform-origin: 373.38px 364.515px;" class="animable"></rect>
          </g>
          <g id="el7805lx6j90t">
            <rect x="329.87" y="272.7" width="87.02" height="19.41" style="fill: rgb(255, 255, 255); opacity: 0.5; isolation: isolate; transform-origin: 373.38px 282.405px;" class="animable"></rect>
          </g>
          <g id="elz576z53806n">
            <path d="M380.5,275.93H366.26a2.3,2.3,0,0,1-2.05-1.28l-.95-1.95H383.5l-1,1.95A2.27,2.27,0,0,1,380.5,275.93Z" style="opacity: 0.5; isolation: isolate; transform-origin: 373.38px 274.315px;" class="animable"></path>
          </g>
          <g id="elt67jq4mg5zi">
            <path d="M380.5,298.29H366.26a2.28,2.28,0,0,1-2.05-1.28l-.95-1.94H383.5l-1,1.94A2.25,2.25,0,0,1,380.5,298.29Z" style="opacity: 0.5; isolation: isolate; transform-origin: 373.38px 296.68px;" class="animable"></path>
          </g>
          <g id="elinmnvnf1w0j">
            <path d="M380.5,345.58H366.26a2.28,2.28,0,0,1-2.05-1.28l-.95-1.95H383.5l-1,1.95A2.25,2.25,0,0,1,380.5,345.58Z" style="opacity: 0.5; isolation: isolate; transform-origin: 373.38px 343.965px;" class="animable"></path>
          </g>
          <polygon points="398.69 254.74 406.21 268.29 396.85 268.29 398.69 254.74" style="fill: rgb(0, 119, 182); transform-origin: 401.53px 261.515px;" id="elfc3t9byl82i" class="animable"></polygon>
          <g id="elx449yf5bnv8">
            <polygon points="398.69 254.74 406.21 268.29 396.85 268.29 398.69 254.74" style="opacity: 0.2; isolation: isolate; transform-origin: 401.53px 261.515px;" class="animable"></polygon>
          </g>
          <polygon points="401.2 268.29 383.5 268.29 389.04 245.36 406.74 245.36 401.2 268.29" style="fill: rgb(0, 119, 182); transform-origin: 395.12px 256.825px;" id="ellhnt3uaeer" class="animable"></polygon>
          <g id="elfol2oxj4rmw">
            <polygon points="385.94 266.47 390.6 247.18 404.3 247.18 399.64 266.47 385.94 266.47" style="fill: rgb(255, 255, 255); opacity: 0.5; isolation: isolate; transform-origin: 395.12px 256.825px;" class="animable"></polygon>
          </g>
          <polygon points="349.41 257.85 345.02 268.29 356.76 268.29 349.41 257.85" style="fill: rgb(0, 119, 182); transform-origin: 350.89px 263.07px;" id="elo7ni6vx8kar" class="animable"></polygon>
          <polygon points="373.38 268.29 350.9 268.29 345.62 252 368.11 252 373.38 268.29" style="fill: rgb(0, 119, 182); transform-origin: 359.5px 260.145px;" id="elqu6lsnema9" class="animable"></polygon>
          <g id="el0usk87bx51y8">
            <polygon points="373.38 268.29 350.9 268.29 345.62 252 368.11 252 373.38 268.29" style="fill: rgb(255, 255, 255); opacity: 0.2; isolation: isolate; transform-origin: 359.5px 260.145px;" class="animable"></polygon>
          </g>
          <g id="elmztg2dyhiu">
            <polygon points="352.14 265.94 348.38 254.35 366.87 254.35 370.62 265.94 352.14 265.94" style="fill: rgb(255, 255, 255); opacity: 0.5; isolation: isolate; transform-origin: 359.5px 260.145px;" class="animable"></polygon>
          </g>
        </g>
        <g id="freepik--Device--inject-10" class="animable" style="transform-origin: 201.395px 283.705px;">
          <rect x="119.16" y="145.79" width="164.47" height="275.83" rx="10.4" style="fill: rgb(38, 50, 56); transform-origin: 201.395px 283.705px;" id="elp0c39fyz9e" class="animable"></rect>
          <path d="M278.08,155.7V411.18a4,4,0,0,1-4.09,4H128.36a3.6,3.6,0,0,1-3.65-3.69V155.37a3.24,3.24,0,0,1,3.13-3.38h36.41a2.57,2.57,0,0,1,2.34,1.63l1.51,3.72a2.55,2.55,0,0,0,2.34,1.62h62a2.53,2.53,0,0,0,2.34-1.6l1.51-3.73a2.57,2.57,0,0,1,2.34-1.64h35.89A3.67,3.67,0,0,1,278.08,155.7Z" style="fill: rgb(0, 119, 182); transform-origin: 201.394px 283.585px;" id="elo6jy9bhky7" class="animable"></path>
          <g id="el5c48h1xpor3">
            <path d="M278.08,155.7V411.18a4,4,0,0,1-4.09,4H128.36a3.6,3.6,0,0,1-3.65-3.69V155.37a3.24,3.24,0,0,1,3.13-3.38h36.41a2.57,2.57,0,0,1,2.34,1.63l1.51,3.72a2.55,2.55,0,0,0,2.34,1.62h62a2.53,2.53,0,0,0,2.34-1.6l1.51-3.73a2.57,2.57,0,0,1,2.34-1.64h35.89A3.67,3.67,0,0,1,278.08,155.7Z" style="opacity: 0.3; isolation: isolate; transform-origin: 201.394px 283.585px;" class="animable"></path>
          </g>
          <g id="eljatznv4thz">
            <rect x="124.71" y="169.2" width="153.37" height="227.21" style="fill: rgb(255, 255, 255); opacity: 0.6; isolation: isolate; transform-origin: 201.395px 282.805px;" class="animable"></rect>
          </g>
          <g id="elw02anzd3gki">
            <rect x="141.61" y="160.56" width="1.89" height="2.53" style="fill: rgb(255, 255, 255); opacity: 0.6; isolation: isolate; transform-origin: 142.555px 161.825px; transform: rotate(180deg);" class="animable"></rect>
          </g>
          <g id="el32gfou7rabo">
            <rect x="138.52" y="159.72" width="1.89" height="3.37" style="fill: rgb(255, 255, 255); opacity: 0.6; isolation: isolate; transform-origin: 139.465px 161.405px; transform: rotate(180deg);" class="animable"></rect>
          </g>
          <g id="elnwvd199uyoj">
            <rect x="135.44" y="158.88" width="1.89" height="4.21" style="fill: rgb(255, 255, 255); opacity: 0.6; isolation: isolate; transform-origin: 136.385px 160.985px; transform: rotate(180deg);" class="animable"></rect>
          </g>
          <g id="elardomuhlpes">
            <rect x="132.35" y="158.03" width="1.89" height="5.05" style="fill: rgb(255, 255, 255); opacity: 0.6; isolation: isolate; transform-origin: 133.295px 160.555px; transform: rotate(180deg);" class="animable"></rect>
          </g>
          <g id="elleztvulx4po">
            <rect x="259.6" y="159.64" width="1.12" height="2.53" style="fill: rgb(255, 255, 255); opacity: 0.6; isolation: isolate; transform-origin: 260.16px 160.905px;" class="animable"></rect>
          </g>
          <g id="elzk5zhiqx0m">
            <rect x="261.5" y="158.72" width="8.95" height="4.37" style="fill: rgb(255, 255, 255); opacity: 0.6; isolation: isolate; transform-origin: 265.975px 160.905px; transform: rotate(180deg);" class="animable"></rect>
          </g>
          <g id="ely7pmy3nb6p">
            <path d="M201.37,152.35a2.11,2.11,0,1,1-2.11-2.11A2.1,2.1,0,0,1,201.37,152.35Z" style="fill: rgb(255, 255, 255); opacity: 0.6; isolation: isolate; transform-origin: 199.26px 152.35px;" class="animable"></path>
          </g>
          <g id="elwz214ta8wlr">
            <path d="M205.63,152.35a1.35,1.35,0,1,1-1.35-1.35A1.35,1.35,0,0,1,205.63,152.35Z" style="fill: rgb(255, 255, 255); opacity: 0.6; isolation: isolate; transform-origin: 204.28px 152.35px;" class="animable"></path>
          </g>
          <rect x="124.71" y="169.2" width="153.37" height="26.23" style="fill: rgb(0, 119, 182); transform-origin: 201.395px 182.315px;" id="elznxiqjg1p4" class="animable"></rect>
          <path d="M271.57,184.46v-2h-1.78a4.43,4.43,0,0,0-.6-1.43l1.26-1.26L269,178.32l-1.26,1.26a4.5,4.5,0,0,0-1.43-.59v-1.78h-2V179a4.6,4.6,0,0,0-1.43.59l-1.26-1.26-1.42,1.43,1.26,1.26a4.43,4.43,0,0,0-.6,1.43h-1.78v2h1.78a4.47,4.47,0,0,0,.6,1.42l-1.26,1.26,1.42,1.43,1.26-1.26a4.88,4.88,0,0,0,1.43.6v1.77h2v-1.77a4.77,4.77,0,0,0,1.43-.6l1.26,1.26,1.42-1.43-1.26-1.26a4.47,4.47,0,0,0,.6-1.42Zm-6.24.85a1.87,1.87,0,1,1,1.87-1.86A1.86,1.86,0,0,1,265.33,185.31Z" style="fill: rgb(255, 255, 255); transform-origin: 265.325px 183.44px;" id="eldtmphqw5me" class="animable"></path>
          <polygon points="137.97 177.94 131.22 184.35 133.31 184.35 133.31 188.95 142.63 188.95 142.63 184.35 144.71 184.35 137.97 177.94" style="fill: rgb(255, 255, 255); transform-origin: 137.965px 183.445px;" id="elmz1d5h5gvx" class="animable"></polygon>
          <g id="elgpa51y4y0l9">
            <path d="M229.89,239.47A28.5,28.5,0,1,1,201.4,211,28.44,28.44,0,0,1,229.89,239.47Z" style="opacity: 0.4; isolation: isolate; transform-origin: 201.39px 239.5px;" class="animable"></path>
          </g>
          <g id="elzjyk6p9zr8">
            <path d="M222.94,258.13a28.5,28.5,0,0,1-43.08,0,22.38,22.38,0,0,1,15.49-15.53,11,11,0,1,1,12.09,0A22.41,22.41,0,0,1,222.94,258.13Z" style="fill: rgb(255, 255, 255); opacity: 0.8; transform-origin: 201.4px 245.189px;" class="animable"></path>
          </g>
          <g id="elzg8s0i8nuva">
            <g style="opacity: 0.5; isolation: isolate; transform-origin: 153.995px 283.161px;" class="animable">
              <path d="M147.9,284.88v.52h-3.05v-4.2h3v.52h-2.36V283h2.11v.51h-2.11v1.36Z" id="elpbcwwelr4t" class="animable" style="transform-origin: 146.375px 283.3px;"></path>
              <path d="M148.46,283.5h1.62v.5h-1.62Z" id="el2sgxj5hk06f" class="animable" style="transform-origin: 149.27px 283.75px;"></path>
              <path d="M156.24,283.57v1.83h-.57v-1.76c0-.63-.3-.93-.82-.93a.92.92,0,0,0-1,1.05v1.64h-.57v-1.76c0-.63-.3-.93-.83-.93a.92.92,0,0,0-1,1.05v1.64H151v-3.18h.55v.48a1.25,1.25,0,0,1,1.09-.51,1.18,1.18,0,0,1,1.11.59,1.43,1.43,0,0,1,1.22-.59A1.22,1.22,0,0,1,156.24,283.57Z" id="eldf28wevl2i8" class="animable" style="transform-origin: 153.625px 283.793px;"></path>
              <path d="M159.83,283.48v1.92h-.55V285a1.18,1.18,0,0,1-1,.46c-.72,0-1.18-.39-1.18-.94s.33-.93,1.28-.93h.91v-.11c0-.49-.28-.77-.85-.77a1.62,1.62,0,0,0-1,.34l-.24-.43a2.07,2.07,0,0,1,1.31-.41C159.33,282.19,159.83,282.61,159.83,283.48Zm-.58.95V284h-.89c-.57,0-.73.23-.73.5s.26.51.7.51A.93.93,0,0,0,159.25,284.43Z" id="eliw84nwgnpng" class="animable" style="transform-origin: 158.465px 283.835px;"></path>
              <path d="M160.79,281.24a.38.38,0,0,1,.39-.38.38.38,0,1,1-.39.38Zm.11,1h.57v3.18h-.57Z" id="elomya6bizqol" class="animable" style="transform-origin: 161.17px 283.14px;"></path>
              <path d="M162.57,281h.57v4.45h-.57Z" id="el6b9ilplpyyt" class="animable" style="transform-origin: 162.855px 283.225px;"></path>
            </g>
          </g>
          <g id="elmgurci9cegi">
            <g style="opacity: 0.8; transform-origin: 201.395px 298.67px;" class="animable">
              <path d="M251.05,306.19H151.74a7.52,7.52,0,0,1-7.52-7.52h0a7.52,7.52,0,0,1,7.52-7.52h99.31a7.52,7.52,0,0,1,7.52,7.52h0A7.52,7.52,0,0,1,251.05,306.19Z" style="fill: rgb(255, 255, 255); transform-origin: 201.395px 298.67px;" id="elibvglf8r7or" class="animable"></path>
            </g>
          </g>
          <g id="elihr3h16ee6r">
            <g style="opacity: 0.5; transform-origin: 158.97px 320.246px;" class="animable">
              <path d="M148.24,319.67c0,.91-.66,1.46-1.75,1.46h-1v1.27h-.6v-4.2h1.64C147.58,318.2,148.24,318.75,148.24,319.67Zm-.6,0c0-.6-.4-.95-1.17-.95h-1v1.89h1C147.24,320.61,147.64,320.26,147.64,319.67Z" id="elu05zh4jh2d" class="animable" style="transform-origin: 146.565px 320.3px;"></path>
              <path d="M151.53,320.48v1.92H151V322a1.17,1.17,0,0,1-1,.46c-.72,0-1.18-.39-1.18-.94s.33-.93,1.28-.93H151v-.11c0-.49-.28-.77-.85-.77a1.62,1.62,0,0,0-1,.34l-.24-.43a2.1,2.1,0,0,1,1.32-.41C151,319.19,151.53,319.61,151.53,320.48Zm-.58.95V321h-.89c-.57,0-.73.23-.73.5s.27.51.7.51A.92.92,0,0,0,151,321.43Z" id="elhgkdmjuw604" class="animable" style="transform-origin: 150.175px 320.835px;"></path>
              <path d="M152.2,322.06l.24-.45a2,2,0,0,0,1.11.33c.53,0,.76-.16.76-.43,0-.72-2-.1-2-1.37,0-.56.51-.95,1.32-.95a2.32,2.32,0,0,1,1.16.29l-.25.45a1.67,1.67,0,0,0-.91-.25c-.51,0-.75.19-.75.44,0,.75,2,.14,2,1.37,0,.58-.53.95-1.37.95A2.27,2.27,0,0,1,152.2,322.06Z" id="elnhfs7nlx31l" class="animable" style="transform-origin: 153.54px 320.815px;"></path>
              <path d="M155.2,322.06l.24-.45a2.06,2.06,0,0,0,1.12.33c.53,0,.75-.16.75-.43,0-.72-2-.1-2-1.37,0-.56.51-.95,1.33-.95a2.34,2.34,0,0,1,1.16.29l-.25.45a1.73,1.73,0,0,0-.92-.25c-.5,0-.75.19-.75.44,0,.75,2,.14,2,1.37,0,.58-.53.95-1.38.95A2.29,2.29,0,0,1,155.2,322.06Z" id="el0rzz3ncq262" class="animable" style="transform-origin: 156.54px 320.815px;"></path>
              <path d="M163.36,319.22l-1.19,3.18h-.55L160.7,320l-.93,2.41h-.55L158,319.22h.54l.93,2.53,1-2.53H161l1,2.54.94-2.54Z" id="elx8ep32sl87l" class="animable" style="transform-origin: 160.68px 320.815px;"></path>
              <path d="M163.56,320.81a1.65,1.65,0,1,1,1.65,1.63A1.58,1.58,0,0,1,163.56,320.81Zm2.72,0a1.07,1.07,0,1,0-2.14,0,1.07,1.07,0,1,0,2.14,0Z" id="elleidd62c16n" class="animable" style="transform-origin: 165.21px 320.791px;"></path>
              <path d="M169.37,319.19v.56h-.13a1,1,0,0,0-1,1.08v1.58h-.58v-3.18h.55v.53A1.22,1.22,0,0,1,169.37,319.19Z" id="ellol5zrx4vyp" class="animable" style="transform-origin: 168.515px 320.797px;"></path>
              <path d="M173.05,318v4.45h-.55v-.5a1.35,1.35,0,0,1-1.14.54,1.63,1.63,0,0,1,0-3.25,1.35,1.35,0,0,1,1.11.51V318Zm-.57,2.86a1.07,1.07,0,1,0-1.07,1.12A1,1,0,0,0,172.48,320.81Z" id="el9xtlw56mazu" class="animable" style="transform-origin: 171.454px 320.246px;"></path>
            </g>
          </g>
          <g id="elvqx839oybr">
            <g style="opacity: 0.8; transform-origin: 201.395px 335.67px;" class="animable">
              <path d="M251.05,343.19H151.74a7.52,7.52,0,0,1-7.52-7.52h0a7.52,7.52,0,0,1,7.52-7.52h99.31a7.52,7.52,0,0,1,7.52,7.52h0A7.52,7.52,0,0,1,251.05,343.19Z" style="fill: rgb(255, 255, 255); transform-origin: 201.395px 335.67px;" id="el6n572jgouhh" class="animable"></path>
            </g>
          </g>
          <path d="M226.05,374.19H176.74a7.52,7.52,0,0,1-7.52-7.52h0a7.52,7.52,0,0,1,7.52-7.52h49.31a7.52,7.52,0,0,1,7.52,7.52h0A7.52,7.52,0,0,1,226.05,374.19Z" style="fill: rgb(0, 119, 182); transform-origin: 201.395px 366.67px;" id="elvp18x49tnnn" class="animable"></path><text transform="translate(186.56 369.92)" style="font-size:8.47605037689209px;fill:#fff;font-family:Montserrat-Medium, Montserrat;font-weight:500">Sign in</text>
        </g>
        <g id="freepik--speech-bubble--inject-10" class="animable" style="transform-origin: 358.905px 180.75px;">
          <path d="M380.1,184.92l-42.94-.4a3.7,3.7,0,0,1-3.65-3.74l.41-12.95a3.69,3.69,0,0,1,3.73-3.65l43,.41a3.7,3.7,0,0,1,3.65,3.74l-.41,12.95A3.68,3.68,0,0,1,380.1,184.92Z" style="fill: rgb(0, 119, 182); transform-origin: 358.905px 174.551px;" id="el9kavdtsd9rc" class="animable"></path>
          <path d="M358,181.65s-5.44,12-17.34,15.67c0,0,6.6-3.7,6.26-16.31Z" style="fill: rgb(0, 119, 182); transform-origin: 349.33px 189.165px;" id="eligf0tslg10d" class="animable"></path>
          <path d="M344.65,174.4l1,.56-.46.77-1-.62,0,1.14h-.88v-1.14l-1,.62-.45-.77,1-.56-1-.56.45-.77,1,.62v-1.15h.88l0,1.15,1-.62.46.77Z" style="fill: rgb(255, 255, 255); transform-origin: 343.755px 174.395px;" id="el2t2zq045se9" class="animable"></path>
          <path d="M350.79,174.4l1,.56-.46.77-1-.62,0,1.14h-.88v-1.14l-1,.62L348,175l1-.56-1-.56.46-.77,1,.62v-1.15h.88l0,1.15,1-.62.46.77Z" style="fill: rgb(255, 255, 255); transform-origin: 349.9px 174.415px;" id="elh4xuzc7pbe" class="animable"></path>
          <path d="M356.94,174.4l1,.56-.46.77-1-.62,0,1.14h-.89v-1.14l-1,.62-.45-.77,1-.56-1-.56.45-.77,1,.62v-1.15h.89l0,1.15,1-.62.46.77Z" style="fill: rgb(255, 255, 255); transform-origin: 356.04px 174.395px;" id="elguhc4ul7bhc" class="animable"></path>
          <path d="M363.08,174.4l1,.56-.46.77-1-.62,0,1.14h-.88v-1.14l-1,.62-.45-.77,1-.56-1-.56.45-.77,1,.62v-1.15h.88l0,1.15,1-.62.46.77Z" style="fill: rgb(255, 255, 255); transform-origin: 362.185px 174.395px;" id="eldpa04idohf" class="animable"></path>
          <path d="M369.22,174.4l1,.56-.46.77-1-.62,0,1.14h-.88v-1.14l-1,.62-.46-.77,1-.56-1-.56.46-.77,1,.62v-1.15h.88l0,1.15,1-.62.46.77Z" style="fill: rgb(255, 255, 255); transform-origin: 368.32px 174.395px;" id="elhjqcwjmpr88" class="animable"></path>
          <path d="M375.37,174.4l1,.56-.46.77-1-.62,0,1.14H374v-1.14l-1,.62-.45-.77,1-.56-1-.56.45-.77,1,.62v-1.15h.89l0,1.15,1-.62.46.77Z" style="fill: rgb(255, 255, 255); transform-origin: 374.46px 174.395px;" id="el194kzaqkpug" class="animable"></path>
        </g>
        <g id="freepik--Character--inject-10" class="animable" style="transform-origin: 309.98px 293.965px;">
          <path d="M312.14,206c5.72.89,11.27,18.51,13.68,20s.34-16.5.34-16.5l4.58-.61s5.42,27.12-2.49,26.92c-6-.15-13.2-10.22-15-15.35Z" style="fill: rgb(235, 179, 118); transform-origin: 322.346px 220.906px;" id="elodn7g4lo5bc" class="animable"></path>
          <g id="elnbt2rr8if3q">
            <path d="M328.25,235.74c-3.65-.09-7.74-3.84-10.78-7.92a30.19,30.19,0,0,1-4.18-7.43l-.59-7.4-.56-7c5.72.89,11.27,18.51,13.68,20s.34-16.5.34-16.5l4.58-.61S336.16,235.94,328.25,235.74Z" style="opacity: 0.1; isolation: isolate; transform-origin: 322.346px 220.866px;" class="animable"></path>
          </g>
          <g id="elf57bteq0chs">
            <path d="M317.47,227.82a30.19,30.19,0,0,1-4.18-7.43l-.59-7.4h0S318.94,219.27,317.47,227.82Z" style="opacity: 0.2; isolation: isolate; transform-origin: 315.197px 220.405px;" class="animable"></path>
          </g>
          <path d="M291.08,169.56s-10.19-.12-9.7,13.89,10.29,14.2,7,18.25a23.67,23.67,0,0,0,18.48,0s-1.81-.71-.95-3.28,5.58-6.25,6-11.67S301.62,168.16,291.08,169.56Z" style="fill: rgb(38, 50, 56); transform-origin: 296.642px 186.517px;" id="eleu14xtwuwcs" class="animable"></path>
          <path d="M301.15,196.38s13-2.41,10.83-14.77c-1.78-10.13-6.51-13.38-10.83-14.83a9,9,0,0,0-10.31,3.46s-8.82-2.5-7.29,12S294.66,203,301.15,196.38Z" style="fill: rgb(38, 50, 56); transform-origin: 297.798px 182.663px;" id="elib7los969" class="animable"></path>
          <polygon points="324.85 403.49 319.07 400.53 321.17 391.89 323.11 383.98 330.39 386.36 327.46 395.43 324.85 403.49" style="fill: rgb(235, 179, 118); transform-origin: 324.73px 393.735px;" id="el83tiixw7kog" class="animable"></polygon>
          <path d="M317.46,399.17c.34-.64,8.1,3.86,8.1,3.86s2.43,7.47,6.66,11,.12,5.05-5.23,2.39l-13.24-6.6C310,407.91,313.94,405.85,317.46,399.17Z" style="fill: rgb(38, 50, 56); transform-origin: 323.099px 408.439px;" id="eltz06p5v7tv" class="animable"></path>
          <path d="M328.19,406.83a13.43,13.43,0,0,1-2.25-2.32.16.16,0,0,1,0-.07h0a.28.28,0,0,1,0-.09h0a.13.13,0,0,1,0-.06h0a.15.15,0,0,1,.06-.09c.07-.07,1.67-1.6,3-1.51a1.37,1.37,0,0,1,1,.54.82.82,0,0,1,.19.94c-.24.41-1,.54-1.84.57a3.66,3.66,0,0,1,1.7,1.09.94.94,0,0,1,.15.75c-.11.54-.4.71-.62.76A1.85,1.85,0,0,1,328.19,406.83Zm-1.45-2.09c.93,1.09,2.18,2.27,2.71,2.14.05,0,.19,0,.26-.39a.49.49,0,0,0-.09-.4C329.21,405.47,327.73,405,326.74,404.74Zm2.66-1.41a.9.9,0,0,0-.49-.17,3.93,3.93,0,0,0-2.23,1c1.41.14,2.87.08,3.07-.27.06-.11-.07-.3-.16-.41A.86.86,0,0,0,329.4,403.33Z" style="fill: rgb(0, 119, 182); transform-origin: 328.1px 405.015px;" id="el67qtls650w4" class="animable"></path>
          <g id="ele4dj8augzyq">
            <polygon points="327.39 395.61 321.11 392.06 323.07 384.06 330.38 386.4 327.39 395.61" style="opacity: 0.2; isolation: isolate; transform-origin: 325.745px 389.835px;" class="animable"></polygon>
          </g>
          <polygon points="314.65 410.71 308.04 410.71 306.15 402.21 304.43 394.42 312.16 393.24 313.48 402.49 314.65 410.71" style="fill: rgb(235, 179, 118); transform-origin: 309.54px 401.975px;" id="elwcztn4rf72b" class="animable"></polygon>
          <path d="M305.86,410.45c0-.73,9-.16,9-.16s5.51,5.6,10.86,6.86,2.36,4.47-3.62,4.47H307.27C303,421.62,305.68,418,305.86,410.45Z" style="fill: rgb(38, 50, 56); transform-origin: 316.685px 415.849px;" id="elnr09f6hut3i" class="animable"></path>
          <path d="M319.53,412.58a11.34,11.34,0,0,1-3.71-1.13l-.08-.06h0l0-.05a.31.31,0,0,1,0-.19c0-.08.79-2.17,2-2.68a1.38,1.38,0,0,1,1.16,0c.41.2.6.45.59.76,0,.47-.67.94-1.4,1.33a3.54,3.54,0,0,1,2,.22,1,1,0,0,1,.48.6.87.87,0,0,1-.22,1A1.24,1.24,0,0,1,319.53,412.58Zm-2.89-1.28c1.32.55,3,1.05,3.38.7,0,0,.15-.12.06-.47a.47.47,0,0,0-.25-.31C319.18,410.84,317.65,411.07,316.64,411.3Zm1.6-2.47a.94.94,0,0,0-.36.08,4,4,0,0,0-1.54,1.92c1.33-.5,2.61-1.2,2.63-1.6,0-.13-.19-.24-.31-.3A.92.92,0,0,0,318.24,408.83Z" style="fill: rgb(0, 119, 182); transform-origin: 318.184px 410.465px;" id="elfhg29dqwydi" class="animable"></path>
          <g id="elu9lbwh980q">
            <polygon points="313.5 402.68 306.17 402.38 304.44 394.5 312.17 393.28 313.5 402.68" style="opacity: 0.2; isolation: isolate; transform-origin: 308.97px 397.98px;" class="animable"></polygon>
          </g>
          <path d="M282.42,255.14l16.23-2.6,14.71-3,4,24s20.71,30,25.73,50.64-13.81,68.52-13.81,68.52l-8.65-3.83s6-46.05,5.86-51.58c-.09-3.6-11.9-20.2-20.16-31.39-.24,2.81,2.44,30.82,2.44,30.82l5.83,61.4H303.7C266.22,281.73,282.42,255.14,282.42,255.14Z" style="fill: rgb(38, 50, 56); transform-origin: 311.439px 323.83px;" id="eldxzb4ofhmt5" class="animable"></path>
          <g id="elgfymfrr2yit">
            <path d="M303.7,398.08h10.86l-5.83-61.4s-2.66-28.2-2.44-30.82c1.63,2.21,3.4,4.62,5.19,7.11,7.27,10.11,14.9,21.38,15,24.27.14,5.54-5.86,51.59-5.86,51.59l8.65,3.83s18.83-47.9,13.81-68.53-25.73-50.63-25.73-50.63l-4-24-14.71,3-16.23,2.6S266.22,281.73,303.7,398.08Z" style="fill: rgb(255, 255, 255); opacity: 0.6; isolation: isolate; transform-origin: 311.431px 323.79px;" class="animable"></path>
          </g>
          <polygon points="320.14 384.96 332.91 389.36 330.06 393.74 319.57 389.99 320.14 384.96" style="fill: rgb(0, 119, 182); transform-origin: 326.24px 389.35px;" id="el240z5eumv59" class="animable"></polygon>
          <polygon points="302.14 396.61 315.8 394.74 315.12 399.84 303.84 401.26 302.14 396.61" style="fill: rgb(0, 119, 182); transform-origin: 308.97px 398px;" id="elznwv1btk4p" class="animable"></polygon>
          <g id="el8ywjcw377">
            <path d="M306.29,305.86c1.63,2.21,3.4,4.62,5.19,7.11-2.86-14.82-6.23-29.25-6.23-29.25A106.13,106.13,0,0,0,306.29,305.86Z" style="opacity: 0.2; isolation: isolate; transform-origin: 308.277px 298.345px;" class="animable"></path>
          </g>
          <path d="M313.07,250.48l-29.61,2.05s-.4-15.86-2.76-24.11c-.32-1.11-.67-2.27-1.06-3.51-.55-1.74-1.18-3.61-1.9-5.65-.17-.48-.6-1.68-1.12-3.07a6.14,6.14,0,0,1,1.45-6.51,6,6,0,0,1,3-1.63c2.18-.48,4.33-.93,5.5-1.11a107.16,107.16,0,0,1,13.4-1.27c3.8,0,8,.22,10.4.39l2.08.16s.94.21,1.54,5.72C314.53,217.12,314.27,231.64,313.07,250.48Z" style="fill: rgb(0, 119, 182); transform-origin: 295.248px 229.1px;" id="el85hym1lgcmi" class="animable"></path>
          <path d="M299,212c-7.47-1.35-9.57-4.67-9.57-4.67,5-4.26,1.44-12.26,1.44-12.26l9,2.15a26,26,0,0,0-.55,3.79c-.35,5.49,2.13,5.67,2.13,5.67C302.82,209.69,299,212,299,212Z" style="fill: rgb(235, 179, 118); transform-origin: 295.588px 203.535px;" id="elxaenq8v7ic" class="animable"></path>
          <g id="el8kfn8aafz1">
            <path d="M299.8,197.17a26,26,0,0,0-.55,3.79c-4.31-1.23-8.41-5.94-8.41-5.94Z" style="opacity: 0.2; isolation: isolate; transform-origin: 295.32px 197.99px;" class="animable"></path>
          </g>
          <path d="M299.14,171.52c7.85.71,10,5.14,9.85,13.29-.19,10.18-3.08,17.17-12.71,14.12C283.2,194.8,286.09,170.35,299.14,171.52Z" style="fill: rgb(235, 179, 118); transform-origin: 298.395px 185.565px;" id="elgowca3nbo9i" class="animable"></path>
          <path d="M304,183.91a16.68,16.68,0,0,0,2,3.47,2.18,2.18,0,0,1-2.15.7Z" style="fill: rgb(213, 135, 69); transform-origin: 304.925px 186.024px;" id="elmxr0ekrn0t" class="animable"></path>
          <path d="M299.2,182.84c0,.64-.43,1.14-.86,1.12s-.74-.58-.7-1.23.43-1.14.86-1.12S299.24,182.19,299.2,182.84Z" style="fill: rgb(38, 50, 56); transform-origin: 298.42px 182.785px;" id="elh4vtvyw7zn6" class="animable"></path>
          <path d="M298.31,181.63l1.45-.46S299,182.31,298.31,181.63Z" style="fill: rgb(38, 50, 56); transform-origin: 299.035px 181.508px;" id="ela5ck1cvv68g" class="animable"></path>
          <path d="M307.25,183.24c-.05.64-.43,1.14-.86,1.11s-.75-.57-.7-1.22.42-1.15.86-1.12S307.29,182.59,307.25,183.24Z" style="fill: rgb(38, 50, 56); transform-origin: 306.469px 183.18px;" id="el4xfhdaqtxzc" class="animable"></path>
          <path d="M306.36,182l1.45-.46S307,182.71,306.36,182Z" style="fill: rgb(38, 50, 56); transform-origin: 307.085px 181.884px;" id="elxoczg1aj03e" class="animable"></path>
          <path d="M296.09,178.65a.39.39,0,0,1-.25-.1.38.38,0,0,1,0-.52,4.47,4.47,0,0,1,3.86-1,.36.36,0,0,1-.16.71,3.76,3.76,0,0,0-3.18.78A.36.36,0,0,1,296.09,178.65Z" style="fill: rgb(38, 50, 56); transform-origin: 297.861px 177.791px;" id="elkzjaghipsk" class="animable"></path>
          <path d="M308.42,178.88a.4.4,0,0,1-.23-.08,3.27,3.27,0,0,0-2.75-.86.37.37,0,0,1-.44-.26.36.36,0,0,1,.25-.44,4,4,0,0,1,3.4,1,.36.36,0,0,1,.05.51A.35.35,0,0,1,308.42,178.88Z" style="fill: rgb(38, 50, 56); transform-origin: 306.885px 178.03px;" id="el44mtcc6c419" class="animable"></path>
          <path d="M289.36,184s4.25-6.13,4.14-11.16c0,0,16.14-5,15.49,10.91,0,0,2.78-13.89-10.69-15.42s-15.2,18.24-8.75,24.75C289.55,193.07,286.72,187.82,289.36,184Z" style="fill: rgb(38, 50, 56); transform-origin: 297.578px 180.663px;" id="elowrl2n6e2j" class="animable"></path>
          <path d="M290.49,185.76a3.45,3.45,0,0,0-3.42-3.48c-2.46.05-4.07,4.94,1.88,6.69C289.8,189.22,290.37,188.41,290.49,185.76Z" style="fill: rgb(235, 179, 118); transform-origin: 287.673px 185.647px;" id="elcwe60dynw4j" class="animable"></path>
          <path d="M303.09,191.74a4.4,4.4,0,0,1-4.39-3,.35.35,0,0,1,.23-.44.36.36,0,0,1,.45.24,3.72,3.72,0,0,0,3.85,2.52.36.36,0,0,1,.38.33.36.36,0,0,1-.33.38Z" style="fill: rgb(38, 50, 56); transform-origin: 301.147px 190.027px;" id="elqvhn2ohlg5" class="animable"></path>
          <path d="M308.87,181.53a.36.36,0,0,1-.34-.25c-3.06-10-14.78-8.44-14.89-8.42a.35.35,0,1,1-.1-.7c.12,0,12.43-1.65,15.67,8.91a.35.35,0,0,1-.24.44Z" style="fill: rgb(38, 50, 56); transform-origin: 301.231px 176.798px;" id="eliev37fkciy" class="animable"></path>
          <path d="M329.2,198.42s4.13-.07,4.27.65-.13,6.77-.68,7.62a12.39,12.39,0,0,1-2.05,2.07l.4,10.72-2.46.86-2.23-9.81s-2.53-2.47-1.79-5.6S329.2,198.42,329.2,198.42Z" style="fill: rgb(235, 179, 118); transform-origin: 329.015px 209.379px;" id="elvofts9xam8k" class="animable"></path>
          <g id="elgzh8u5mjbf">
            <path d="M329.2,198.42s4.13-.07,4.27.65-.13,6.77-.68,7.62a12.39,12.39,0,0,1-2.05,2.07l.4,10.72-2.46.86-2.23-9.81s-2.53-2.47-1.79-5.6S329.2,198.42,329.2,198.42Z" style="opacity: 0.1; isolation: isolate; transform-origin: 329.015px 209.379px;" class="animable"></path>
          </g>
          <path d="M322.19,203.7a.63.63,0,0,0,.69.65l7-.54a.82.82,0,0,0,.74-.77l.5-14a.71.71,0,0,0-.7-.75l-7,.54a.92.92,0,0,0-.74.87Z" style="fill: rgb(38, 50, 56); transform-origin: 326.655px 196.321px;" id="elhcxk9b6861a" class="animable"></path>
          <g id="el20or265cy5b">
            <path d="M323.46,189.56,323,203.68a.54.54,0,0,0,.61.62l5.95-.46c.4,0,1.12-.31,1.13-.71l.5-14.16c0-.4-.69-.66-1.09-.63l-6,.46A.72.72,0,0,0,323.46,189.56Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 327.092px 196.322px;" class="animable"></path>
          </g>
          <path d="M315.05,214.32l2.67-6.23s.87-8.35,1.29-9.25,7.22-.56,8-.61.6,8.28-.11,9.16-3.49,1.58-3.49,1.58l-4.27,8.28Z" style="fill: rgb(235, 179, 118); transform-origin: 321.285px 207.729px;" id="el3gpad7831rr" class="animable"></path>
          <path d="M307.53,210.94c-.72,2.86-3.49,5.06-9.22,5a15.46,15.46,0,0,1-9-3.08,22.36,22.36,0,0,1-5.3-5.52c.83-.15,1.67-.28,2.51-.41a107.16,107.16,0,0,1,13.4-1.27c2.37,0,4.88.07,7,.18A8.21,8.21,0,0,1,307.53,210.94Z" style="fill: rgb(235, 179, 118); transform-origin: 295.851px 210.801px;" id="eldjimwsvzdr" class="animable"></path>
          <polygon points="283.38 250.29 282.14 255.71 314.1 254.03 313.18 248.68 283.38 250.29" style="fill: rgb(38, 50, 56); transform-origin: 298.12px 252.195px;" id="elrebyhttjn7n" class="animable"></polygon>
          <path d="M301.54,254.92a1.19,1.19,0,0,1-1.19-1.07l-.37-3.46h0a1.26,1.26,0,0,1,.28-.91,1.18,1.18,0,0,1,.84-.42l4.66-.32a1.2,1.2,0,0,1,1.28,1.09l.32,3.41a1.24,1.24,0,0,1-.27.89,1.18,1.18,0,0,1-.83.42l-4.62.37Zm-.56-4.64.36,3.46a.21.21,0,0,0,.22.18l4.62-.36a.21.21,0,0,0,.14-.08.21.21,0,0,0,.05-.15l-.33-3.41a.19.19,0,0,0-.21-.18l-4.66.32a.18.18,0,0,0-.15.07.19.19,0,0,0,0,.15Z" style="fill: rgb(255, 255, 255); transform-origin: 303.67px 251.828px;" id="elnyvx42beeo" class="animable"></path>
          <path d="M306,252h-1.72a.5.5,0,0,1-.5-.5.51.51,0,0,1,.5-.5H306a.51.51,0,0,1,.5.5A.5.5,0,0,1,306,252Z" style="fill: rgb(255, 255, 255); transform-origin: 305.14px 251.5px;" id="eldre1xlxv3op" class="animable"></path>
          <g id="elkz37t50wkhr">
            <path d="M287.79,227.35c-2.83,1-6-.75-8.15-2.44-.55-1.74-1.18-3.61-1.9-5.65-.17-.48-.6-1.68-1.12-3.07a6.14,6.14,0,0,1,1.45-6.51C283.51,214.81,291.57,226.06,287.79,227.35Z" style="opacity: 0.2; isolation: isolate; transform-origin: 282.501px 218.661px;" class="animable"></path>
          </g>
          <path d="M278,209a5.31,5.31,0,0,1,7.69,1.1c4.39,6.29,11.76,16.75,12.65,17.26,1.27.74,10.85-8.09,19.39-19.29l5.23,2s-13.51,27.78-23.1,27.9c-7.19.09-18-14.49-22.91-21.82A5.32,5.32,0,0,1,278,209Z" style="fill: rgb(235, 179, 118); transform-origin: 299.489px 222.897px;" id="elordyf4zu2a" class="animable"></path>
          <g id="el4gr684sptw8">
            <path d="M287.79,260.15s-2.44,6.63-8.47,9v2.38s8.84-3.76,10.08-10Z" style="opacity: 0.2; isolation: isolate; transform-origin: 284.36px 265.84px;" class="animable"></path>
          </g>
          <g id="elor8m6agkexm">
            <polygon points="280.93 295.07 289.4 293.48 291.42 310.5 283.31 311.68 282.14 300.6 289.46 299.56 289.04 295.36 288.92 299.09 280.69 300.41 280.93 295.07" style="opacity: 0.2; isolation: isolate; transform-origin: 286.055px 302.58px;" class="animable"></polygon>
          </g>
        </g>
        <defs>
          <filter id="active" height="200%">
            <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
            <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
            <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
            <feMerge>
              <feMergeNode in="OUTLINE"></feMergeNode>
              <feMergeNode in="SourceGraphic"></feMergeNode>
            </feMerge>
          </filter>
          <filter id="hover" height="200%">
            <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
            <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
            <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
            <feMerge>
              <feMergeNode in="OUTLINE"></feMergeNode>
              <feMergeNode in="SourceGraphic"></feMergeNode>
            </feMerge>
            <feColorMatrix type="matrix" values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "></feColorMatrix>
          </filter>
        </defs>
      </svg>
    </div>
  </div>
</div>

<?php
require_once 'includes/footer.php';
