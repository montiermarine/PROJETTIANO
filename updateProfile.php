<?php
session_start();
require_once 'models/database.php';
require_once 'models/usersModel.php';
require_once 'config.php';
require_once 'controllers/updateProfileController.php';
require_once 'includes/header.php';
?>
<div class="container-fluid">
    <div class="row">
    <h1> MODIFIEZ VOS INFORMATIONS</h1>
        <div class="col-md-5">
            <form method="POST" action="updateProfile.php">
                <!-- On affiche qu'une erreur est survenue lors de l'envoie du formulaire !-->
                <?php if (isset($formErrors['db'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $formErrors['db'] ?>
                    </div>
                <?php } ?>
                <div class="mt-4 mb-3">
                    <label for="lastname" class="form-label">Nom</label>
                    <!-- On crée une ternaire dans l'input pour verifier si celui ci est "rempli" si ce n'est pas le cas le message d'erreur apparaitra
          On stock le $_POST dans la value afin de faire transiter les informations du formulaire à la db!-->
                    <input type="text" placeholder="Montier" name="lastname" class="form-control <?= !empty($formErrors['lastname']) ? 'is-invalid' : ''; ?>" id="lastname" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : $usersProfile->lastname; ?>" />
                    <small class="invalid-feedback"><?= @$formErrors['lastname']; ?></small>
                </div>
                <div class="mb-3">
                    <label for="firstname" class="form-label">Prénom</label>
                    <input type="text" placeholder="Marine" name="firstname" class="form-control <?= !empty($formErrors['firstname']) ? 'is-invalid' : ''; ?>" id="firstname" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : $usersProfile->firstname; ?>" />
                    <small class="invalid-feedback"><?= @$formErrors['firstname']; ?></small>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Pseudo</label>
                    <input type="text" name="username" placeholder="MumBossof3children" class="form-control <?= !empty($formErrors['username']) ? 'is-invalid' : ''; ?>" id="username" value="<?= isset($_POST['username']) ? $_POST['username'] : $usersProfile->username; ?>" />
                    <small class="invalid-feedback"><?= @$formErrors['username']; ?></small>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Adresse</label>
                    <input type="text" placeholder="10 Chemin Étoilé 60400 NOYON" name="address" class="form-control <?= !empty($formErrors['address']) ? 'is-invalid' : ''; ?>" id="address" value="<?= isset($_POST['address']) ? $_POST['address'] : $usersProfile->address; ?>" />
                    <small class="invalid-feedback"><?= @$formErrors['address']; ?></small>
                </div>
                <div class="mb-3">
                    <label for="mail" class="form-label">Mail</label>
                    <input type="text" placeholder="Miel@beemail.com" name="mail" class="form-control <?= !empty($formErrors['mail']) ? 'is-invalid' : ''; ?>" id="mail" value="<?= isset($_POST['mail']) ? $_POST['mail'] : $usersProfile->mail; ?>" />
                    <small class="invalid-feedback"><?= @$formErrors['mail']; ?></small>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Téléphone</label>
                    <input type="text" placeholder="03 XX XX XX 50" name="phoneNumber" class="form-control <?= !empty($formErrors['phoneNumber']) ? 'is-invalid' : ''; ?>" id="phoneNumber" value="<?= isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : $usersProfile->phoneNumber; ?>" />
                    <small class="invalid-feedback"><?= @$formErrors['phoneNumber']; ?></small>
                </div>
                <input type="submit" class="btn btn-success" value="Envoyer" />
            </form>
        </div>
        <div class="col-md-6">
            <svg class="animated" id="freepik_stories-phone-maintenance" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                <style>
                    svg#freepik_stories-phone-maintenance:not(.animated) .animable {
                        opacity: 0;
                    }

                    svg#freepik_stories-phone-maintenance.animated #freepik--Barrier--inject-83 {
                        animation: 1.5s Infinite linear shake;
                        animation-delay: 0s;
                    }

                    svg#freepik_stories-phone-maintenance.animated #freepik--Gears--inject-83 {
                        animation: 1.5s Infinite linear floating;
                        animation-delay: 0s;
                    }

                    svg#freepik_stories-phone-maintenance.animated #freepik--Cones--inject-83 {
                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideUp, 1.5s Infinite linear heartbeat;
                        animation-delay: 0s, 1s;
                    }

                    svg#freepik_stories-phone-maintenance.animated #freepik--Character--inject-83 {
                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideRight;
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

                    @keyframes slideUp {
                        0% {
                            opacity: 0;
                            transform: translateY(30px);
                        }

                        100% {
                            opacity: 1;
                            transform: inherit;
                        }
                    }

                    @keyframes heartbeat {
                        0% {
                            transform: scale(1);
                        }

                        10% {
                            transform: scale(1.1);
                        }

                        30% {
                            transform: scale(1);
                        }

                        40% {
                            transform: scale(1);
                        }

                        50% {
                            transform: scale(1.1);
                        }

                        60% {
                            transform: scale(1);
                        }

                        100% {
                            transform: scale(1);
                        }
                    }

                    @keyframes slideRight {
                        0% {
                            opacity: 0;
                            transform: translateX(30px);
                        }

                        100% {
                            opacity: 1;
                            transform: translateX(0);
                        }
                    }
                </style>
                <g id="freepik--Floor--inject-83" class="animable" style="transform-origin: 250px 348.74px;">
                    <ellipse id="freepik--floor--inject-83" cx="250" cy="348.74" rx="243.61" ry="145.8" style="fill: rgb(250, 250, 250); transform-origin: 250px 348.74px;" class="animable"></ellipse>
                </g>
                <g id="freepik--Shadows--inject-83" class="animable" style="transform-origin: 247.595px 383.067px;">
                    <ellipse id="freepik--Shadow--inject-83" cx="428.72" cy="390.74" rx="59.72" ry="34.48" style="fill: rgb(224, 224, 224); transform-origin: 428.72px 390.74px;" class="animable"></ellipse>
                    <path id="freepik--shadow--inject-83" d="M309.92,349.73l-45.57-26.31c-1.69-1-1.69-2.56,0-3.53l45.57-26.31a6.74,6.74,0,0,1,6.12,0l45.57,26.31c1.69,1,1.69,2.55,0,3.53L316,349.73A6.8,6.8,0,0,1,309.92,349.73Z" style="fill: rgb(224, 224, 224); transform-origin: 312.98px 321.646px;" class="animable"></path>
                    <path id="freepik--shadow--inject-83" d="M347.33,466.68l-32-18.48a1.31,1.31,0,0,1,0-2.49l32-18.48a4.75,4.75,0,0,1,4.31,0l32,18.48a1.31,1.31,0,0,1,0,2.49l-32,18.48A4.75,4.75,0,0,1,347.33,466.68Z" style="fill: rgb(224, 224, 224); transform-origin: 349.485px 446.955px;" class="animable"></path>
                    <path id="freepik--shadow--inject-83" d="M65.74,435.25l-58-33.6c-1.32-.76-1.32-2,0-2.76l139-80.24a5.32,5.32,0,0,1,4.79,0L209.6,352.2c1.32.76,1.32,2,0,2.76L70.52,435.26A5.26,5.26,0,0,1,65.74,435.25Z" style="fill: rgb(224, 224, 224); transform-origin: 108.67px 376.955px;" class="animable"></path>
                    <path id="freepik--shadow--inject-83" d="M121.92,433.59a5.61,5.61,0,0,1-5.08,0L95,421c-1.4-.81-1.4-2.12,0-2.93L251.9,327.5a5.61,5.61,0,0,1,5.08,0l21.81,12.59c1.4.81,1.41,2.13,0,3Z" style="fill: rgb(224, 224, 224); transform-origin: 186.897px 380.545px;" class="animable"></path>
                    <path id="freepik--shadow--inject-83" d="M324.76,400.74s-4.28,2.48-13.23,0L242,440.86c-4.28,2.48-23.16,5.74-23.16,5.74l-36.4,21L175.66,470l-.81-.43,4.31-3.82,36.4-21s9.93-9.56,13.23-11.47l69.5-40.12s-4-5.32,0-7.64C303.35,383.55,328.45,397.52,324.76,400.74Z" style="fill: rgb(224, 224, 224); transform-origin: 249.989px 427.665px;" class="animable"></path>
                    <path id="freepik--shadow--inject-83" d="M116,472.77,84,454.28a1.31,1.31,0,0,1,0-2.48l32-18.48a4.72,4.72,0,0,1,4.3,0l32,18.48a1.31,1.31,0,0,1,0,2.48l-32,18.49A4.72,4.72,0,0,1,116,472.77Z" style="fill: rgb(224, 224, 224); transform-origin: 118.15px 453.045px;" class="animable"></path>
                </g>
                <g id="freepik--Lader--inject-83" class="animable" style="transform-origin: 316.557px 296.239px;">
                    <g id="freepik--Ladder--inject-83" class="animable" style="transform-origin: 316.557px 296.239px;">
                        <path d="M330.07,250l-17.61,48.37c-.79,1.56,1.85,2.43,3,1.75a3,3,0,0,0,.83-.89l17.3-47.37Z" style="fill: rgb(55, 71, 79); transform-origin: 322.952px 275.177px;" id="eldc1u15mhpde" class="animable"></path>
                        <polygon points="306.25 319.92 279.5 304.41 280.33 300.71 307.08 316.22 306.25 319.92" style="fill: rgb(38, 50, 56); transform-origin: 293.29px 310.315px;" id="elzjx2chxlz7l" class="animable"></polygon>
                        <path d="M287.22,277.23,271,321.78c-.79,1.57,1.85,2.43,3,1.76a1.62,1.62,0,0,0,.81-.87v0l15.8-43.24Z" style="fill: rgb(55, 71, 79); transform-origin: 280.732px 300.5px;" id="elf2hgq13mc3r" class="animable"></path>
                        <polygon points="348.27 295.54 322.97 280.88 324.24 277.43 349.1 291.85 348.27 295.54" style="fill: rgb(38, 50, 56); transform-origin: 336.035px 286.485px;" id="elg698votee0q" class="animable"></polygon>
                        <path d="M356.23,320.42a2.62,2.62,0,0,0,0-.35l-13.73-64.26L337,252.66l14.53,67.9a1.16,1.16,0,0,0,.57.67,4,4,0,0,0,3.58,0,1,1,0,0,0,.55-.6A1.72,1.72,0,0,0,356.23,320.42Z" style="fill: rgb(69, 90, 100); transform-origin: 346.618px 287.156px;" id="elc9rheemwui" class="animable"></path>
                        <path d="M309.91,312.84l-15.08-8.71a2,2,0,0,1-.9-1.55v-.36a2,2,0,0,1,.9-1.56l44.44-25.78a2,2,0,0,1,1.8,0l15.08,8.71a2,2,0,0,1,.9,1.56v.36a2,2,0,0,1-.9,1.55l-44.44,25.78A2,2,0,0,1,309.91,312.84Z" style="fill: rgb(0, 119, 182); transform-origin: 325.49px 293.86px;" id="elymsv8zrdjzn" class="animable"></path>
                        <g id="el9dfpm9aqha">
                            <path d="M294.19,301.33a1.86,1.86,0,0,0-.26.89v.36a2,2,0,0,0,.9,1.55l15.08,8.71a1.87,1.87,0,0,0,.9.21v-2.13Z" style="opacity: 0.1; transform-origin: 302.37px 307.19px;" class="animable"></path>
                        </g>
                        <g id="ela3mdb07rb2h">
                            <path d="M310.81,310.92v2.13a1.9,1.9,0,0,0,.9-.21l18.08-10.44,26.36-15.34a2,2,0,0,0,.9-1.55v-.36a1.86,1.86,0,0,0-.26-.89Z" style="opacity: 0.15; transform-origin: 333.93px 298.655px;" class="animable"></path>
                        </g>
                        <path d="M315.12,335.28,300,326.57a2,2,0,0,1-.9-1.55v-.36a2,2,0,0,1,.9-1.56l44.45-25.78a2,2,0,0,1,1.8,0L361.36,306a2,2,0,0,1,.9,1.56v.35a2,2,0,0,1-.9,1.56l-44.44,25.78A2,2,0,0,1,315.12,335.28Z" style="fill: rgb(0, 119, 182); transform-origin: 330.68px 316.293px;" id="elujacfjgm2h" class="animable"></path>
                        <g id="eldp1xpko3vqc">
                            <path d="M299.41,323.77a1.88,1.88,0,0,0-.27.89V325a2,2,0,0,0,.9,1.55l15.08,8.71a1.87,1.87,0,0,0,.9.21v-2.13Z" style="opacity: 0.1; transform-origin: 307.58px 329.62px;" class="animable"></path>
                        </g>
                        <g id="elj5befjcrych">
                            <path d="M316,333.36v2.13a1.87,1.87,0,0,0,.9-.21L335,324.84l26.35-15.34a2,2,0,0,0,.9-1.56v-.35a1.86,1.86,0,0,0-.26-.89Z" style="opacity: 0.15; transform-origin: 339.125px 321.095px;" class="animable"></path>
                        </g>
                        <path d="M305.45,290.39l-25.06-14.46a2,2,0,0,1-.9-1.56V274a2,2,0,0,1,.9-1.56l44.45-25.77a2,2,0,0,1,1.8,0l25.05,14.46a2,2,0,0,1,.9,1.56v.36a2,2,0,0,1-.9,1.55l-44.44,25.78A2,2,0,0,1,305.45,290.39Z" style="fill: rgb(0, 119, 182); transform-origin: 316.04px 268.528px;" id="elqggqpmoj5k" class="animable"></path>
                        <g id="elflw90d5owsf">
                            <path d="M306.35,288.47v2.13a1.9,1.9,0,0,0,.9-.21L325.33,280l26.36-15.34a2,2,0,0,0,.9-1.55v-.36a1.86,1.86,0,0,0-.26-.89Z" style="opacity: 0.15; transform-origin: 329.47px 276.23px;" class="animable"></path>
                        </g>
                        <g id="elu0uj418turp">
                            <path d="M279.76,273.12a1.91,1.91,0,0,0-.27.89v.36a2,2,0,0,0,.9,1.56l25.06,14.46a1.87,1.87,0,0,0,.9.21v-2.13Z" style="opacity: 0.1; transform-origin: 292.92px 281.86px;" class="animable"></path>
                        </g>
                        <path d="M302.22,288.53l11.95,55.93a1.18,1.18,0,0,1,.05.37,1.16,1.16,0,0,1,0,.17,1.14,1.14,0,0,1-.56.6,3.61,3.61,0,0,1-1.79.42,3.54,3.54,0,0,1-1.79-.42,1.24,1.24,0,0,1-.51-.47l-.06-.18,0-.07-12.74-59.51" style="fill: rgb(69, 90, 100); transform-origin: 305.497px 315.696px;" id="el5brtn6bn0lu" class="animable"></path>
                    </g>
                </g>
                <g id="freepik--Barrier--inject-83" class="animable" style="transform-origin: 97.9517px 331.062px;">
                    <g id="freepik--barrier--inject-83" class="animable" style="transform-origin: 97.9517px 331.062px;">
                        <path d="M128,342.31,121.66,346a2.58,2.58,0,0,1-2.3,0l-2-1.17a2,2,0,0,1-.88-2l21-99.64a3.39,3.39,0,0,1,1.43-2l6.33-3.66a2.61,2.61,0,0,1,2.31,0l2,1.17a1.94,1.94,0,0,1,.88,2l-21.05,99.64A3.42,3.42,0,0,1,128,342.31Z" style="fill: rgb(69, 90, 100); transform-origin: 133.458px 291.766px;" id="elbgz16iodsya" class="animable"></path>
                        <path d="M128,342.31,121.66,346c-.64.36-1,.08-.88-.64l21.05-99.64a3.39,3.39,0,0,1,1.43-2l6.33-3.65c.64-.37,1-.09.88.63l-21.05,99.64A3.42,3.42,0,0,1,128,342.31Z" style="fill: rgb(38, 50, 56); transform-origin: 135.625px 293.032px;" id="elygkcgxs9p3h" class="animable"></path>
                        <polygon points="124.61 335.8 126.49 326.91 130.81 324.42 170.81 347.52 172.69 358.58 168.37 361.06 124.61 335.8" style="fill: rgb(55, 71, 79); transform-origin: 148.65px 342.74px;" id="el70licg1542n" class="animable"></polygon>
                        <polygon points="168.37 361.06 124.61 335.8 126.49 326.91 166.49 350.01 168.37 361.06" style="fill: rgb(69, 90, 100); transform-origin: 146.49px 343.985px;" id="elx3irx1wvje" class="animable"></polygon>
                        <path d="M175.51,369.74l-6.34,3.66a2.58,2.58,0,0,1-2.3,0l-2-1.17a3.19,3.19,0,0,1-1.37-2L142.33,245.7a2,2,0,0,1,.93-2l6.33-3.65a2.54,2.54,0,0,1,2.31,0l2,1.16a3.23,3.23,0,0,1,1.38,2l21.15,124.55A2.07,2.07,0,0,1,175.51,369.74Z" style="fill: rgb(55, 71, 79); transform-origin: 159.376px 306.721px;" id="elsstsksyrx6" class="animable"></path>
                        <path d="M142.33,245.7l.8,4.71,20.35,119.84a3.19,3.19,0,0,0,1.37,2l2,1.17a2.61,2.61,0,0,0,2.31,0l6.32-3.66a2.06,2.06,0,0,0,.94-2L155.36,243.63l-.07-.42a3.25,3.25,0,0,0-1.37-2l-2-1.17a2.61,2.61,0,0,0-2.31,0l-6.34,3.66A2.07,2.07,0,0,0,142.33,245.7Z" style="fill: rgb(55, 71, 79); transform-origin: 159.375px 306.73px;" id="elwgklvwxgh1" class="animable"></path>
                        <path d="M155.29,243.21l21.15,124.55a2.07,2.07,0,0,1-.93,2l-6.34,3.66a.86.86,0,0,1-1.37-.65L146.65,248.19a2,2,0,0,1,.93-2l6.33-3.66A.87.87,0,0,1,155.29,243.21Z" style="fill: rgb(69, 90, 100); transform-origin: 161.542px 307.976px;" id="el84vdbare49u" class="animable"></path>
                        <g id="eldzvuaf8qgmk">
                            <path d="M136.49,248.05l3.32,1.91a5,5,0,0,0,3.32.45,4.31,4.31,0,0,0,1.28-.45l11-6.33-.07-.42a3.25,3.25,0,0,0-1.37-2l-2-1.17a2.61,2.61,0,0,0-2.31,0c.16-.71.64-1,0-1.33l-2-1.16a2.54,2.54,0,0,0-2.31,0l-6.33,3.66a3.36,3.36,0,0,0-1.43,2Z" style="opacity: 0.15; transform-origin: 145.95px 243.894px;" class="animable"></path>
                        </g>
                        <path d="M132.64,240.28a1.63,1.63,0,0,1,1-1.35l12.67-7.31a5.06,5.06,0,0,1,4.61,0l6.2,3.58a1.6,1.6,0,0,1,.95,1.31c0,.49,0,2.41,0,2.89a1.61,1.61,0,0,1-.95,1.33l-12.67,7.32a5.13,5.13,0,0,1-4.61,0l-6.2-3.59a1.63,1.63,0,0,1-1-1.31C132.64,242.67,132.65,240.76,132.64,240.28Z" style="fill: rgb(55, 71, 79); transform-origin: 145.355px 239.831px;" id="elcjex8xmthyr" class="animable"></path>
                        <path d="M132.64,240.28a1.63,1.63,0,0,1,1-1.35l8.51-4.91V248.6a4.81,4.81,0,0,1-2.31-.55l-6.2-3.59a1.63,1.63,0,0,1-1-1.31C132.64,242.67,132.65,240.76,132.64,240.28Z" style="fill: rgb(38, 50, 56); transform-origin: 137.395px 241.31px;" id="eluglahua7bu9" class="animable"></path>
                        <path d="M144.41,245.17l12.67-7.31c1.27-.74,1.27-1.93,0-2.66l-6.2-3.58a5.06,5.06,0,0,0-4.61,0l-12.67,7.31c-1.27.74-1.27,1.93,0,2.66l6.2,3.58A5.06,5.06,0,0,0,144.41,245.17Z" style="fill: rgb(69, 90, 100); transform-origin: 145.34px 238.395px;" id="el0srb5218flk" class="animable"></path>
                        <path d="M28.63,399.68l-6.33,3.65a2.54,2.54,0,0,1-2.31,0l-2-1.16a2,2,0,0,1-.88-2l21-99.64a3.37,3.37,0,0,1,1.42-2l6.34-3.66a2.52,2.52,0,0,1,2.3,0l2,1.16a2,2,0,0,1,.88,2l-21,99.64A3.39,3.39,0,0,1,28.63,399.68Z" style="fill: rgb(69, 90, 100); transform-origin: 34.08px 349.1px;" id="elnrn6eqy19m" class="animable"></path>
                        <path d="M28.63,399.68l-6.33,3.65c-.64.37-1,.09-.88-.63l21-99.64a3.42,3.42,0,0,1,1.42-2l6.34-3.66c.64-.36,1-.08.88.64l-21,99.64A3.39,3.39,0,0,1,28.63,399.68Z" style="fill: rgb(38, 50, 56); transform-origin: 36.24px 350.368px;" id="el0h6uv5993tx" class="animable"></path>
                        <polygon points="25.14 393.32 27.02 384.43 31.33 381.94 71.33 405.04 73.21 416.09 68.9 418.58 25.14 393.32" style="fill: rgb(55, 71, 79); transform-origin: 49.175px 400.26px;" id="elpsbhz1xbg29" class="animable"></polygon>
                        <polygon points="68.9 418.58 25.14 393.32 27.02 384.43 67.02 407.52 68.9 418.58" style="fill: rgb(69, 90, 100); transform-origin: 47.02px 401.505px;" id="el5fcqo2ygdrl" class="animable"></polygon>
                        <path d="M76.14,427.11l-6.33,3.65a2.52,2.52,0,0,1-2.3,0l-2-1.16a3.17,3.17,0,0,1-1.37-2L43,303.07a2.07,2.07,0,0,1,.93-2l6.34-3.66a2.58,2.58,0,0,1,2.3,0l2,1.17a3.19,3.19,0,0,1,1.37,2L77.07,425.13A2,2,0,0,1,76.14,427.11Z" style="fill: rgb(55, 71, 79); transform-origin: 60.0364px 364.089px;" id="elftekhoruw66" class="animable"></path>
                        <path d="M43,303.06l.8,4.71L64.11,427.62a3.27,3.27,0,0,0,1.38,2l2,1.17a2.58,2.58,0,0,0,2.3,0l6.33-3.66a2.08,2.08,0,0,0,.94-2L56,301l-.07-.42a3.24,3.24,0,0,0-1.38-2l-2-1.17a2.58,2.58,0,0,0-2.3,0l-6.34,3.66A2.07,2.07,0,0,0,43,303.06Z" style="fill: rgb(55, 71, 79); transform-origin: 60.0291px 364.1px;" id="ellk6mxl6uubi" class="animable"></path>
                        <path d="M55.92,300.57,77.07,425.13a2,2,0,0,1-.93,2l-6.33,3.65a.87.87,0,0,1-1.38-.64L47.28,305.56a2.08,2.08,0,0,1,.93-2l6.34-3.65A.86.86,0,0,1,55.92,300.57Z" style="fill: rgb(69, 90, 100); transform-origin: 62.1781px 365.344px;" id="elntf819zpz7s" class="animable"></path>
                        <g id="elnp9sj82spb">
                            <path d="M37.13,305.41l3.31,1.92a5,5,0,0,0,3.32.44,4,4,0,0,0,1.29-.44L56,301l-.07-.42a3.24,3.24,0,0,0-1.38-2l-2-1.17a2.58,2.58,0,0,0-2.3,0c.16-.71.63-1,0-1.33l-2-1.16a2.54,2.54,0,0,0-2.31,0l-6.34,3.66a3.33,3.33,0,0,0-1.42,2Z" style="opacity: 0.15; transform-origin: 46.565px 301.261px;" class="animable"></path>
                        </g>
                        <path d="M33.28,297.65a1.6,1.6,0,0,1,.95-1.35L46.91,289a5.1,5.1,0,0,1,4.6,0l6.21,3.59a1.61,1.61,0,0,1,1,1.31c0,.49,0,2.41,0,2.89a1.63,1.63,0,0,1-1,1.33L45,305.41a5,5,0,0,1-4.6,0l-6.21-3.58a1.65,1.65,0,0,1-.95-1.31C33.27,300,33.29,298.12,33.28,297.65Z" style="fill: rgb(55, 71, 79); transform-origin: 45.98px 297.211px;" id="el2cgq2szbzq2" class="animable"></path>
                        <path d="M33.28,297.65a1.6,1.6,0,0,1,.95-1.35l8.51-4.91V306a4.69,4.69,0,0,1-2.3-.55l-6.21-3.58a1.65,1.65,0,0,1-.95-1.31C33.27,300,33.29,298.12,33.28,297.65Z" style="fill: rgb(38, 50, 56); transform-origin: 38.0086px 298.695px;" id="el024tgo55m8g5" class="animable"></path>
                        <path d="M45,302.54l12.68-7.32c1.27-.73,1.27-1.92,0-2.65L51.51,289a5.1,5.1,0,0,0-4.6,0L34.23,296.3c-1.27.73-1.27,1.92,0,2.66l6.21,3.58A5,5,0,0,0,45,302.54Z" style="fill: rgb(69, 90, 100); transform-origin: 45.955px 295.771px;" id="elqdjgi5f2xr" class="animable"></path>
                        <polygon points="38.42 319.21 172.32 241.91 170.14 240.65 36.24 317.95 38.42 319.21" style="fill: rgb(0, 119, 182); transform-origin: 104.28px 279.93px;" id="eladtn7tzefwk" class="animable"></polygon>
                        <g id="el2lefi2dli4a">
                            <polygon points="38.42 319.21 172.32 241.91 170.14 240.65 36.24 317.95 38.42 319.21" style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 104.28px 279.93px;" class="animable"></polygon>
                        </g>
                        <polygon points="38.42 319.21 44.92 357.88 178.82 280.57 172.32 241.91 38.42 319.21" style="fill: rgb(0, 119, 182); transform-origin: 108.62px 299.895px;" id="elixsbrct4qn" class="animable"></polygon>
                        <polygon points="36.24 317.95 42.74 356.62 44.92 357.88 38.42 319.21 36.24 317.95" style="fill: rgb(224, 224, 224); transform-origin: 40.58px 337.915px;" id="elgrx0qo1jwi5" class="animable"></polygon>
                        <polygon points="50.71 312.12 44.92 357.88 38.42 319.21 50.71 312.12" style="fill: rgb(235, 235, 235); transform-origin: 44.565px 335px;" id="el5dps4n0l5mu" class="animable"></polygon>
                        <polygon points="166.53 287.66 172.32 241.91 178.82 280.57 166.53 287.66" style="fill: rgb(235, 235, 235); transform-origin: 172.675px 264.785px;" id="ely1hr9kdof7e" class="animable"></polygon>
                        <polygon points="67.4 344.9 73.19 299.14 59.89 306.81 54.1 352.56 67.4 344.9" style="fill: rgb(235, 235, 235); transform-origin: 63.645px 325.85px;" id="elqgys9c6xw6a" class="animable"></polygon>
                        <polygon points="89.89 331.92 95.67 286.16 82.38 293.83 76.59 339.58 89.89 331.92" style="fill: rgb(235, 235, 235); transform-origin: 86.13px 312.87px;" id="el41u5ftqggn2" class="animable"></polygon>
                        <polygon points="112.38 318.94 118.16 273.18 104.86 280.85 99.08 326.6 112.38 318.94" style="fill: rgb(235, 235, 235); transform-origin: 108.62px 299.89px;" id="elxoddtj7uand" class="animable"></polygon>
                        <polygon points="134.86 305.95 140.65 260.2 127.35 267.87 121.56 313.62 134.86 305.95" style="fill: rgb(235, 235, 235); transform-origin: 131.105px 286.91px;" id="eln5ttwd1gncf" class="animable"></polygon>
                        <polygon points="157.35 292.97 163.13 247.22 149.83 254.89 144.05 300.64 157.35 292.97" style="fill: rgb(235, 235, 235); transform-origin: 153.59px 273.93px;" id="eltzgot1kb8xj" class="animable"></polygon>
                        <polygon points="59.89 306.81 57.71 305.55 71.01 297.88 73.19 299.14 59.89 306.81" style="fill: rgb(250, 250, 250); transform-origin: 65.45px 302.345px;" id="elg1a6u0l9o47" class="animable"></polygon>
                        <polygon points="82.38 293.83 80.2 292.57 93.5 284.9 95.67 286.16 82.38 293.83" style="fill: rgb(250, 250, 250); transform-origin: 87.935px 289.365px;" id="elvhdpsfczx4f" class="animable"></polygon>
                        <polygon points="104.86 280.85 102.68 279.59 115.98 271.92 118.16 273.18 104.86 280.85" style="fill: rgb(250, 250, 250); transform-origin: 110.42px 276.385px;" id="elccsi5rq5xr" class="animable"></polygon>
                        <polygon points="127.35 267.87 125.17 266.61 138.47 258.94 140.65 260.2 127.35 267.87" style="fill: rgb(250, 250, 250); transform-origin: 132.91px 263.405px;" id="elzn46uxnwj3b" class="animable"></polygon>
                        <polygon points="149.83 254.89 147.66 253.63 160.96 245.96 163.13 247.22 149.83 254.89" style="fill: rgb(250, 250, 250); transform-origin: 155.395px 250.425px;" id="el7qowht8rm9f" class="animable"></polygon>
                        <polygon points="38.42 319.21 36.24 317.95 48.53 310.86 50.71 312.12 38.42 319.21" style="fill: rgb(250, 250, 250); transform-origin: 43.475px 315.035px;" id="eld07wxdzb2mp" class="animable"></polygon>
                    </g>
                </g>
                <g id="freepik--Screwdriver--inject-83" class="animable" style="transform-origin: 248.976px 413.967px;">
                    <g id="freepik--screwdriver--inject-83" class="animable" style="transform-origin: 248.976px 413.967px;">
                        <path d="M235.41,417.94c-3.65-2.11-6.61-.4-6.61,3.82a14.63,14.63,0,0,0,6.61,11.46c3.66,2.11,6.62.4,6.62-3.82A14.61,14.61,0,0,0,235.41,417.94Z" style="fill: rgb(224, 224, 224); transform-origin: 235.415px 425.58px;" id="eloppk2g5nzc" class="animable"></path>
                        <path d="M304.81,368.19v0c1.92-1.35,4.69-1.3,7.79.49,5.8,3.35,10.5,11.5,10.5,18.2,0,3.7-1.44,6.18-3.7,7.1h0c-4.82,2.7-10.76.09-10.76.09l-8.42-16.75C300.23,372.87,302,369.88,304.81,368.19Z" style="fill: rgb(0, 119, 182); transform-origin: 311.66px 381.226px;" id="elepcqhqnjkvr" class="animable"></path>
                        <g id="eltu5j4vxlenl">
                            <path d="M304.81,368.19v0c1.92-1.35,4.69-1.3,7.79.49,5.8,3.35,10.5,11.5,10.5,18.2,0,3.7-1.44,6.18-3.7,7.1h0c-4.82,2.7-10.76.09-10.76.09l-8.42-16.75C300.23,372.87,302,369.88,304.81,368.19Z" style="opacity: 0.1; transform-origin: 311.66px 381.226px;" class="animable"></path>
                        </g>
                        <g id="elwzx8adfjhnc">
                            <path d="M310.93,385.8a13.42,13.42,0,0,0,11-5.16,19,19,0,0,1,1.18,6.26c0,3.7-1.44,6.18-3.7,7.1h0c-4,2.26-8.84.8-10.3.27a1,1,0,0,0-.46-.18l-2.72-5.41Z" style="opacity: 0.1; transform-origin: 314.52px 387.932px;" class="animable"></path>
                        </g>
                        <path d="M214.45,431.69h0s14.7-13.31,16.25-14.2l69.53-40.14h0l0,0h0c1.19-.68,2.84-.57,4.65.47a14.66,14.66,0,0,1,6.62,11.47c0,2.1-.74,3.59-1.94,4.28h0c-.29.17-66.64,38.49-69.51,40.13s-20.34,6.94-20.34,6.94h0a2.62,2.62,0,0,1-2.53-.29,8.14,8.14,0,0,1-3.68-6.38A2.7,2.7,0,0,1,214.45,431.69Z" style="fill: rgb(0, 119, 182); transform-origin: 262.496px 408.881px;" id="elf0l7nrz9mhm" class="animable"></path>
                        <g id="elkvle8q8ctnc">
                            <path d="M213.53,434a2.7,2.7,0,0,1,.92-2.27s13.59-12.3,16-14c1.21-.89,3-.86,4.95.28A14.61,14.61,0,0,1,242,429.4c0,2.12-.74,3.6-1.94,4.29h0c-2.87,1.65-20.34,6.94-20.34,6.94h0a2.62,2.62,0,0,1-2.53-.29A8.14,8.14,0,0,1,213.53,434Z" style="opacity: 0.1; transform-origin: 227.76px 428.967px;" class="animable"></path>
                        </g>
                        <path d="M273.18,414.59c1.2-.69,1.95-2.18,1.95-4.29a14.66,14.66,0,0,0-6.62-11.47c-1.83-1.05-3.48-1.15-4.68-.46,0,0-3.84,1.56-16.31,8.1s-10.19,7.2-10.19,7.2l.9-.52c1.2-.69,2.85-.59,4.68.47a14.64,14.64,0,0,1,6.62,11.46c0,2.11-.75,3.59-1.94,4.29l-1.21.69s1.63.52,10.22-4.48A196.28,196.28,0,0,0,273.18,414.59Z" style="fill: rgb(55, 71, 79); transform-origin: 256.148px 414.003px;" id="el71c6o6vrlq2" class="animable"></path>
                        <path d="M268.51,398.83c-1.83-1.05-3.48-1.15-4.68-.46,0,0-3.84,1.56-16.31,8.1s-10.19,7.2-10.19,7.2l.9-.52c1.2-.69,2.85-.59,4.68.47a11.74,11.74,0,0,1,2.8,2.34l25.6-14.78A11.79,11.79,0,0,0,268.51,398.83Z" style="fill: rgb(69, 90, 100); transform-origin: 254.238px 406.945px;" id="el30mzjfpp4h2" class="animable"></path>
                        <g id="el01o2gwlneefw">
                            <path d="M220.9,438.21a8.12,8.12,0,0,0-3.69-6.37c-2-1.18-3.68-.23-3.68,2.12a8.14,8.14,0,0,0,3.68,6.38C219.25,441.51,220.9,440.56,220.9,438.21Z" style="opacity: 0.25; transform-origin: 217.215px 436.087px;" class="animable"></path>
                        </g>
                        <path d="M174.85,460.28a.48.48,0,0,0,.22.39.16.16,0,0,0,.14,0h0c.33-.12,5.29-1.94,6.84-2.59l.42-.19,35.5-20.5a.75.75,0,0,0,.34-.71,2.32,2.32,0,0,0-.32-1.08,2.28,2.28,0,0,0-.78-.82.78.78,0,0,0-.77-.07l-35.52,20.51a9.19,9.19,0,0,0-.94.67c-1.75,1.33-4.85,4-5.09,4.22h0A.17.17,0,0,0,174.85,460.28Z" style="fill: rgb(69, 90, 100); transform-origin: 196.578px 447.663px;" id="elopxpzpdtkx" class="animable"></path>
                        <path d="M174.85,460.28a.48.48,0,0,0,.22.39.16.16,0,0,0,.14,0h0c.33-.12,5.29-1.94,6.84-2.59-.46-.44-1.45-.2-2.4.22s-4.24,2.2-4.42,2,2.1-1.55,3.45-2.54,1.67-1.78,1.3-1.85c-1.75,1.33-4.85,4-5.09,4.22h0A.17.17,0,0,0,174.85,460.28Z" style="fill: rgb(55, 71, 79); transform-origin: 178.448px 458.298px;" id="elh8bqiiybqss" class="animable"></path>
                        <g id="ele5wf2pcl07s">
                            <path d="M216.83,435.2s-35.39,20.34-35.92,20.73c-.27.21-.5.71-1.11,1.26a22.89,22.89,0,0,1-2.83,2c-2.27,1.44.6.16,3.14-1.56.58-.39.69-1.35,1.35-1.72,2.95-1.67,36.13-19.93,36.13-19.93S217.25,435.3,216.83,435.2Z" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 196.868px 447.507px;" class="animable"></path>
                        </g>
                    </g>
                </g>
                <g id="freepik--Device--inject-83" class="animable" style="transform-origin: 177.746px 225.043px;">
                    <g id="freepik--Mobile--inject-83" class="animable" style="transform-origin: 177.746px 225.043px;">
                        <path d="M256.59,332.24V41.55c0-5.73-.25-10.38-6.32-14S239.92,26.19,235,29.06L107.89,102.42c-5,2.87-9,9.84-9,15.57V408.68c0,5.73,2.83,12,6.32,14s10.35,1.32,15.31-1.54L247.61,347.8A16.89,16.89,0,0,0,256.59,332.24Z" style="fill: rgb(55, 71, 79); transform-origin: 177.746px 224.753px;" id="elaefhl0pgr4s" class="animable"></path>
                        <path d="M248.51,335.15,117.84,410.59l0-292-16.35-9.44A18.33,18.33,0,0,0,98.9,118V408.68c0,5.73.67,10.68,6.32,14s10.35,1.32,15.31-1.54L247.61,347.8a17.17,17.17,0,0,0,7.78-8.68l-.51-.29Z" style="fill: rgb(38, 50, 56); transform-origin: 177.145px 266.778px;" id="elvzn25a82t1e" class="animable"></path>
                        <path d="M247.37,38.89,119.93,112.47a14,14,0,0,0-6.31,10.92V411.57c0,6.16,4.37,8.67,9.7,5.59l124.05-71.61a15.88,15.88,0,0,0,7.15-12.38V43C254.52,38.47,251.3,36.62,247.37,38.89Z" style="fill: rgb(69, 90, 100); transform-origin: 184.07px 228.198px;" id="el7c3qklbjrre" class="animable"></path>
                        <path d="M248.3,57.6V325.88a15,15,0,0,1-6.79,11.77L126.63,404c-3.75,2.18-6.79.43-6.79-3.91V129.7a15.2,15.2,0,0,1,4.76-10.24l.65-.58a11.21,11.21,0,0,1,1.38-.94l32.31-18.66,2.11-1.22c1.16-.67,2.1-.13,2.1,1.22s1,1.86,2.26,1.13l37.66-21.74a4.86,4.86,0,0,0,2.25-3.73,4.75,4.75,0,0,1,1.89-3.52,1.28,1.28,0,0,1,.21-.14L239,53l.68-.4C244.44,49.91,248.3,52.15,248.3,57.6Z" style="fill: rgb(38, 50, 56); transform-origin: 184.07px 228.2px;" id="elql221gpnhsd" class="animable"></path>
                        <path d="M239,53V319.51a15.07,15.07,0,0,1-6.78,11.77l-112.41,64.9V129.7a15.2,15.2,0,0,1,4.76-10.24l.65-.58a11.21,11.21,0,0,1,1.38-.94l32.31-18.66,2.11-1.22c1.16-.67,2.1-.13,2.1,1.22s1,1.86,2.26,1.13l37.66-21.74a4.86,4.86,0,0,0,2.25-3.73,4.75,4.75,0,0,1,1.89-3.52,1.28,1.28,0,0,1,.21-.14Z" id="el8c38zmthv2a" class="animable" style="transform-origin: 179.405px 224.59px;"></path>
                        <path d="M171.12,88.93l17.27-10c1-.6,1.86-.17,1.86.94a4,4,0,0,1-1.86,3.1L171.12,93c-1,.59-1.86.17-1.86-1A4,4,0,0,1,171.12,88.93Z" style="fill: rgb(38, 50, 56); transform-origin: 179.755px 85.9619px;" id="elprbyy35e9bc" class="animable"></path>
                        <path d="M197.25,73c1.16-.67,2.1-.13,2.1,1.21a4.65,4.65,0,0,1-2.1,3.64c-1.16.67-2.1.12-2.1-1.22A4.6,4.6,0,0,1,197.25,73Z" style="fill: rgb(38, 50, 56); transform-origin: 197.25px 75.424px;" id="elj1cxf13dz49" class="animable"></path>
                        <path d="M110.69,154.91a7.61,7.61,0,0,0-3.32-6,2.2,2.2,0,0,0-2.28-.18c-.42.25-2.06,1.16-2.49,1.42a2.61,2.61,0,0,0-1,2.36v25.07a7.59,7.59,0,0,0,3.33,6,2.22,2.22,0,0,0,2.19.23c.46-.24,2.13-1.21,2.57-1.47a2.59,2.59,0,0,0,1-2.36Z" style="fill: rgb(69, 90, 100); transform-origin: 106.146px 166.246px;" id="elc8xclfkf4jw" class="animable"></path>
                        <path d="M108.22,156.33v25.08c0,2.26-1.49,3.23-3.32,2.17a7.59,7.59,0,0,1-3.33-6V152.5c0-2.26,1.49-3.23,3.33-2.17A7.61,7.61,0,0,1,108.22,156.33Z" style="fill: rgb(55, 71, 79); transform-origin: 104.895px 166.955px;" id="elsyx0a9exsns" class="animable"></path>
                        <path d="M110.69,198.8a7.61,7.61,0,0,0-3.32-6,2.23,2.23,0,0,0-2.28-.19c-.42.25-2.06,1.17-2.49,1.43a2.59,2.59,0,0,0-1,2.35v25.08a7.59,7.59,0,0,0,3.33,6,2.25,2.25,0,0,0,2.19.23c.46-.24,2.13-1.21,2.57-1.47a2.61,2.61,0,0,0,1-2.36Z" style="fill: rgb(69, 90, 100); transform-origin: 106.145px 210.133px;" id="elxyvreityy68" class="animable"></path>
                        <path d="M108.22,200.22V225.3c0,2.25-1.49,3.22-3.32,2.17a7.59,7.59,0,0,1-3.33-6V196.38c0-2.25,1.49-3.23,3.33-2.17A7.61,7.61,0,0,1,108.22,200.22Z" style="fill: rgb(55, 71, 79); transform-origin: 104.895px 210.838px;" id="el28zq85yw5ni" class="animable"></path>
                    </g>
                </g>
                <g id="freepik--Gears--inject-83" class="animable" style="transform-origin: 191.313px 242.52px;">
                    <g id="freepik--Gear--inject-83" class="animable" style="transform-origin: 184.095px 193.865px;">
                        <path d="M230.72,164.27h0l-8.26-4.74h0a.94.94,0,0,0-.85,0L216,162.09a2.5,2.5,0,0,1,.17-1.37l6.51-13.13a1.47,1.47,0,0,0-.58-1.91L215,141.6h0l-8.21-4.72a1.48,1.48,0,0,0-1.95.45l-8.11,12.21a2.48,2.48,0,0,1-1.07.82l-.62-6.19a.94.94,0,0,0-.42-.74h0l-8.27-4.75h0a.9.9,0,0,0-.89.07l-11,6.34a3,3,0,0,0-1.31,2l-1.1,12.21a4.1,4.1,0,0,1-1.14,2.28,65.81,65.81,0,0,0-6.1,6.46,2.11,2.11,0,0,1-2.16.61l-7-2.46a1.73,1.73,0,0,0-2,.73l-8.07,14a1.74,1.74,0,0,0,.36,2.09l5.65,4.87a2.11,2.11,0,0,1,.55,2.17,64.48,64.48,0,0,0-2.54,8.51,4.1,4.1,0,0,1-1.41,2.12l-10,7.06a3,3,0,0,0-1.12,2.16v12.67a.91.91,0,0,0,.39.82h0l8.27,4.74h0a.91.91,0,0,0,.85,0l5.64-2.54A2.5,2.5,0,0,1,152,227l-6.51,13.13a1.48,1.48,0,0,0,.57,1.91l9.93,5.7h0l5.38,3.1a1.48,1.48,0,0,0,2-.45l8.11-12.21a2.42,2.42,0,0,1,1.07-.82l.62,6.19a.92.92,0,0,0,.43.75h0L181.8,249h0a.89.89,0,0,0,.9-.06l11-6.34a3,3,0,0,0,1.31-2.05l1.1-12.21a4.1,4.1,0,0,1,1.14-2.28,66.84,66.84,0,0,0,6.1-6.45,2.1,2.1,0,0,1,2.15-.62l7.05,2.46a1.73,1.73,0,0,0,2-.73l8.07-14a1.72,1.72,0,0,0-.36-2.08l-5.65-4.88a2.11,2.11,0,0,1-.55-2.17,64.48,64.48,0,0,0,2.54-8.51A4.1,4.1,0,0,1,220,187l10-7.06a3,3,0,0,0,1.12-2.16V165.09A.91.91,0,0,0,230.72,164.27Zm-61.07,42.64c0-11.83,8.31-26.2,18.55-32.12,4-2.31,7.7-3,10.74-2.23,1.56,2.18,2.4,5.49,2.4,9.83,0,11.82-8.3,26.2-18.54,32.11-4,2.31-7.41,3.06-10.08,2.43C170.78,214.66,169.65,211.26,169.65,206.91Z" style="fill: rgb(0, 119, 182); transform-origin: 184.095px 193.871px;" id="elh1edq90zjt9" class="animable"></path>
                        <g id="elxlbkf200l6">
                            <path d="M230.72,164.27h0l-8.26-4.74h0a.94.94,0,0,0-.85,0L216,162.09a2.5,2.5,0,0,1,.17-1.37l6.51-13.13a1.47,1.47,0,0,0-.58-1.91L215,141.6h0l-8.21-4.72a1.48,1.48,0,0,0-1.95.45l-8.11,12.21a2.48,2.48,0,0,1-1.07.82l-.62-6.19a.94.94,0,0,0-.42-.74h0l-8.27-4.75h0a.9.9,0,0,0-.89.07l-11,6.34a3,3,0,0,0-1.31,2l-1.1,12.21a4.1,4.1,0,0,1-1.14,2.28,65.81,65.81,0,0,0-6.1,6.46,2.11,2.11,0,0,1-2.16.61l-7-2.46a1.73,1.73,0,0,0-2,.73l-8.07,14a1.74,1.74,0,0,0,.36,2.09l5.65,4.87a2.11,2.11,0,0,1,.55,2.17,64.48,64.48,0,0,0-2.54,8.51,4.1,4.1,0,0,1-1.41,2.12l-10,7.06a3,3,0,0,0-1.12,2.16v12.67a.91.91,0,0,0,.39.82h0l8.27,4.74h0a.91.91,0,0,0,.85,0l5.64-2.54A2.5,2.5,0,0,1,152,227l-6.51,13.13a1.48,1.48,0,0,0,.57,1.91l9.93,5.7h0l5.38,3.1a1.48,1.48,0,0,0,2-.45l8.11-12.21a2.42,2.42,0,0,1,1.07-.82l.62,6.19a.92.92,0,0,0,.43.75h0L181.8,249h0a.89.89,0,0,0,.9-.06l11-6.34a3,3,0,0,0,1.31-2.05l1.1-12.21a4.1,4.1,0,0,1,1.14-2.28,66.84,66.84,0,0,0,6.1-6.45,2.1,2.1,0,0,1,2.15-.62l7.05,2.46a1.73,1.73,0,0,0,2-.73l8.07-14a1.72,1.72,0,0,0-.36-2.08l-5.65-4.88a2.11,2.11,0,0,1-.55-2.17,64.48,64.48,0,0,0,2.54-8.51A4.1,4.1,0,0,1,220,187l10-7.06a3,3,0,0,0,1.12-2.16V165.09A.91.91,0,0,0,230.72,164.27Zm-61.07,42.64c0-11.83,8.31-26.2,18.55-32.12,4-2.31,7.7-3,10.74-2.23,1.56,2.18,2.4,5.49,2.4,9.83,0,11.82-8.3,26.2-18.54,32.11-4,2.31-7.41,3.06-10.08,2.43C170.78,214.66,169.65,211.26,169.65,206.91Z" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 184.095px 193.871px;" class="animable"></path>
                        </g>
                        <g id="elrjxjlmdptlc">
                            <path d="M157.92,224.47a1.15,1.15,0,0,0-1.62-.75l-4.12,1.85A2.35,2.35,0,0,1,152,227l-6.51,13.13a1.47,1.47,0,0,0,.58,1.91l9.92,5.7-1.67-1a1.46,1.46,0,0,1-.58-1.9l6.51-13.13a2.71,2.71,0,0,0-.15-2.37A22.7,22.7,0,0,1,157.92,224.47ZM181.71,249a1.1,1.1,0,0,1-.33-.7l-1.07-10.66a1.15,1.15,0,0,0-1.46-1,22.39,22.39,0,0,1-5.29.53,2.52,2.52,0,0,0-1.05.23l.62,6.19a.9.9,0,0,0,.42.75h0Z" style="opacity: 0.1; transform-origin: 163.526px 236.302px;" class="animable"></path>
                        </g>
                        <g id="elwpoot7co90i">
                            <path d="M206.73,185.5c0,11.82-8.29,26.2-18.53,32.11-6.47,3.74-12.17,3.2-15.49-.69,2.66.65,6.08-.1,10.09-2.42,10.24-5.91,18.54-20.29,18.54-32.11,0-4.33-.83-7.65-2.39-9.84C203.66,173.71,206.73,178.3,206.73,185.5Z" style="opacity: 0.1; transform-origin: 189.72px 196.347px;" class="animable"></path>
                        </g>
                        <path d="M206.75,136.86a1.48,1.48,0,0,0-1.94.47l-8.12,12.2a2.19,2.19,0,0,1-.53.52l8.26,4.74a1.91,1.91,0,0,0,.53-.53l8.11-12.21a1.51,1.51,0,0,1,1.78-.53Zm15.7,22.66h0a.94.94,0,0,0-.85,0L216,162.1a2.82,2.82,0,0,0,.33,1,21.43,21.43,0,0,1,2.09,4.61.92.92,0,0,1,.09.23,1.28,1.28,0,0,0,.29.51l.14.13a1.41,1.41,0,0,0,.32.17,1,1,0,0,0,.61,0,1,1,0,0,0,.27-.08l9.76-4.41a1.44,1.44,0,0,1,.25-.08.5.5,0,0,1,.34,0,.66.66,0,0,1,.28.09h0Zm-36.14-20.86a.87.87,0,0,0-.88.09l-11,6.33a2.81,2.81,0,0,0-1.1,1.33l8.24,4.73a2.8,2.8,0,0,1,1.11-1.32l11-6.34a.93.93,0,0,1,.84-.11Zm-37.37,61.22a3.3,3.3,0,0,1-.76.81l-10,7.06a2.77,2.77,0,0,0-.67.76l8.24,4.73a2.36,2.36,0,0,1,.68-.75l10-7.06a3.21,3.21,0,0,0,.77-.82Zm6.1-33.73a1.73,1.73,0,0,0-1.41.81l-8.07,14a1.71,1.71,0,0,0-.18,1l8.25,4.75a1.6,1.6,0,0,1,.18-1l8.08-14a1.71,1.71,0,0,1,1.3-.81Z" style="fill: rgb(0, 119, 182); transform-origin: 184.14px 174.959px;" id="eltqjafcsahsg" class="animable"></path>
                        <g id="eledq7un78xqs">
                            <path d="M206.75,136.86a1.48,1.48,0,0,0-1.94.47l-8.12,12.2a2.19,2.19,0,0,1-.53.52l8.26,4.74a1.91,1.91,0,0,0,.53-.53l8.11-12.21a1.51,1.51,0,0,1,1.78-.53Zm15.7,22.66h0a.94.94,0,0,0-.85,0L216,162.1a2.82,2.82,0,0,0,.33,1,21.43,21.43,0,0,1,2.09,4.61.92.92,0,0,1,.09.23,1.28,1.28,0,0,0,.29.51l.14.13a1.41,1.41,0,0,0,.32.17,1,1,0,0,0,.61,0,1,1,0,0,0,.27-.08l9.76-4.41a1.44,1.44,0,0,1,.25-.08.5.5,0,0,1,.34,0,.66.66,0,0,1,.28.09h0Zm-36.14-20.86a.87.87,0,0,0-.88.09l-11,6.33a2.81,2.81,0,0,0-1.1,1.33l8.24,4.73a2.8,2.8,0,0,1,1.11-1.32l11-6.34a.93.93,0,0,1,.84-.11Zm-37.37,61.22a3.3,3.3,0,0,1-.76.81l-10,7.06a2.77,2.77,0,0,0-.67.76l8.24,4.73a2.36,2.36,0,0,1,.68-.75l10-7.06a3.21,3.21,0,0,0,.77-.82Zm6.1-33.73a1.73,1.73,0,0,0-1.41.81l-8.07,14a1.71,1.71,0,0,0-.18,1l8.25,4.75a1.6,1.6,0,0,1,.18-1l8.08-14a1.71,1.71,0,0,1,1.3-.81Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 184.14px 174.959px;" class="animable"></path>
                        </g>
                        <path d="M231.11,177.76V165.09a.82.82,0,0,0-1.25-.81l-9.77,4.4a1.15,1.15,0,0,1-1.62-.75,21.88,21.88,0,0,0-2.18-4.84,2.71,2.71,0,0,1-.15-2.37l6.51-13.13a1.47,1.47,0,0,0-.58-1.91L215,141.6a1.48,1.48,0,0,0-1.95.46L205,154.26a2.74,2.74,0,0,1-2.12,1.06,21.88,21.88,0,0,0-5.29.53,1.15,1.15,0,0,1-1.46-1L195,144.16a.82.82,0,0,0-1.33-.68l-11,6.34a2.92,2.92,0,0,0-1.31,2l-1.1,12.22a4.1,4.1,0,0,1-1.14,2.28,64.59,64.59,0,0,0-6.1,6.45,2.09,2.09,0,0,1-2.15.61l-7-2.46a1.73,1.73,0,0,0-2,.73l-8.07,14a1.72,1.72,0,0,0,.36,2.08l5.65,4.87a2.11,2.11,0,0,1,.55,2.17,67,67,0,0,0-2.54,8.51,4.17,4.17,0,0,1-1.4,2.13l-10,7.06a2.94,2.94,0,0,0-1.12,2.15v12.68a.82.82,0,0,0,1.25.8l9.77-4.4a1.15,1.15,0,0,1,1.62.75,22,22,0,0,0,2.18,4.85,2.66,2.66,0,0,1,.15,2.36l-6.51,13.13a1.46,1.46,0,0,0,.58,1.91l7.06,4.08a1.48,1.48,0,0,0,2-.45l8.11-12.21a2.73,2.73,0,0,1,2.13-1,21.88,21.88,0,0,0,5.28-.54,1.15,1.15,0,0,1,1.46,1l1.08,10.66a.82.82,0,0,0,1.32.68l11-6.34a3,3,0,0,0,1.31-2.05l1.1-12.21a4.1,4.1,0,0,1,1.14-2.28,66.84,66.84,0,0,0,6.1-6.45,2.1,2.1,0,0,1,2.15-.62l7.05,2.46a1.73,1.73,0,0,0,2-.73l8.07-14a1.72,1.72,0,0,0-.36-2.08l-5.65-4.88a2.11,2.11,0,0,1-.55-2.17,64.48,64.48,0,0,0,2.54-8.51A4.1,4.1,0,0,1,220,187l10-7.06A3,3,0,0,0,231.11,177.76ZM188.2,217.61c-10.24,5.91-18.55,1.12-18.55-10.7s8.31-26.2,18.55-32.12,18.54-1.12,18.54,10.71S198.44,211.7,188.2,217.61Z" style="fill: rgb(0, 119, 182); transform-origin: 188.206px 196.202px;" id="elw0hg34ycb9" class="animable"></path>
                        <g id="eljckbzxso9sl">
                            <path d="M231.11,177.76V165.09a.82.82,0,0,0-1.25-.81l-9.77,4.4a1.15,1.15,0,0,1-1.62-.75,21.88,21.88,0,0,0-2.18-4.84,2.71,2.71,0,0,1-.15-2.37l6.51-13.13a1.47,1.47,0,0,0-.58-1.91L215,141.6a1.48,1.48,0,0,0-1.95.46L205,154.26a2.74,2.74,0,0,1-2.12,1.06,21.88,21.88,0,0,0-5.29.53,1.15,1.15,0,0,1-1.46-1L195,144.16a.82.82,0,0,0-1.33-.68l-11,6.34a2.92,2.92,0,0,0-1.31,2l-1.1,12.22a4.1,4.1,0,0,1-1.14,2.28,64.59,64.59,0,0,0-6.1,6.45,2.09,2.09,0,0,1-2.15.61l-7-2.46a1.73,1.73,0,0,0-2,.73l-8.07,14a1.72,1.72,0,0,0,.36,2.08l5.65,4.87a2.11,2.11,0,0,1,.55,2.17,67,67,0,0,0-2.54,8.51,4.17,4.17,0,0,1-1.4,2.13l-10,7.06a2.94,2.94,0,0,0-1.12,2.15v12.68a.82.82,0,0,0,1.25.8l9.77-4.4a1.15,1.15,0,0,1,1.62.75,22,22,0,0,0,2.18,4.85,2.66,2.66,0,0,1,.15,2.36l-6.51,13.13a1.46,1.46,0,0,0,.58,1.91l7.06,4.08a1.48,1.48,0,0,0,2-.45l8.11-12.21a2.73,2.73,0,0,1,2.13-1,21.88,21.88,0,0,0,5.28-.54,1.15,1.15,0,0,1,1.46,1l1.08,10.66a.82.82,0,0,0,1.32.68l11-6.34a3,3,0,0,0,1.31-2.05l1.1-12.21a4.1,4.1,0,0,1,1.14-2.28,66.84,66.84,0,0,0,6.1-6.45,2.1,2.1,0,0,1,2.15-.62l7.05,2.46a1.73,1.73,0,0,0,2-.73l8.07-14a1.72,1.72,0,0,0-.36-2.08l-5.65-4.88a2.11,2.11,0,0,1-.55-2.17,64.48,64.48,0,0,0,2.54-8.51A4.1,4.1,0,0,1,220,187l10-7.06A3,3,0,0,0,231.11,177.76ZM188.2,217.61c-10.24,5.91-18.55,1.12-18.55-10.7s8.31-26.2,18.55-32.12,18.54-1.12,18.54,10.71S198.44,211.7,188.2,217.61Z" style="fill: rgb(255, 255, 255); opacity: 0.55; transform-origin: 188.206px 196.202px;" class="animable"></path>
                        </g>
                        <g id="elqpoionx73h">
                            <g style="opacity: 0.55; transform-origin: 188.22px 196.18px;" class="animable">
                                <path d="M214.29,142.34a.43.43,0,0,1,.25.07l7.07,4.08a.54.54,0,0,1,.21.69l-6.51,13.13a3.59,3.59,0,0,0,.19,3.26,21.8,21.8,0,0,1,2.08,4.64,2.1,2.1,0,0,0,2,1.52,2.18,2.18,0,0,0,.9-.2l9.7-4.37v12.6a2,2,0,0,1-.72,1.4l-10,7.06a5,5,0,0,0-1.78,2.68,63.66,63.66,0,0,1-2.5,8.39,3,3,0,0,0,.81,3.2l5.66,4.87a.81.81,0,0,1,.15.91l-8.07,14a.8.8,0,0,1-.67.36.58.58,0,0,1-.19,0l-7.05-2.46a2.53,2.53,0,0,0-.87-.15,3.06,3.06,0,0,0-2.31,1,64.27,64.27,0,0,1-6,6.36,5.08,5.08,0,0,0-1.44,2.88l-1.09,12.22a2.08,2.08,0,0,1-.85,1.32l-10.92,6.3-1.06-10.59a2.07,2.07,0,0,0-2.09-1.9,2.92,2.92,0,0,0-.5,0,21.13,21.13,0,0,1-4.58.53h-.55a3.62,3.62,0,0,0-2.85,1.47l-8.12,12.2a.54.54,0,0,1-.45.23.51.51,0,0,1-.25-.06l-7.07-4.08a.54.54,0,0,1-.21-.69l6.51-13.13a3.61,3.61,0,0,0-.19-3.27,21.36,21.36,0,0,1-2.08-4.64,2.1,2.1,0,0,0-2-1.52,2.22,2.22,0,0,0-.9.2l-9.7,4.38V214.64a2,2,0,0,1,.73-1.39l10-7.06a5,5,0,0,0,1.78-2.69,65.08,65.08,0,0,1,2.5-8.38,3,3,0,0,0-.81-3.2l-5.65-4.87a.8.8,0,0,1-.16-.91l8.07-14a.82.82,0,0,1,.67-.35.58.58,0,0,1,.19,0l7,2.46a2.8,2.8,0,0,0,.88.14,3.06,3.06,0,0,0,2.3-1,66.56,66.56,0,0,1,6-6.36,5,5,0,0,0,1.44-2.88l1.1-12.21a2,2,0,0,1,.84-1.33l10.92-6.3,1.06,10.59a2.1,2.1,0,0,0,2.59,1.85,21.1,21.1,0,0,1,4.58-.52h.55a3.65,3.65,0,0,0,2.86-1.47l8.11-12.21a.54.54,0,0,1,.45-.23h0m-34.37,78.73a17.63,17.63,0,0,0,8.74-2.65c10.48-6,19-20.82,19-32.92,0-4.27-1.06-7.85-3-10.35a10.06,10.06,0,0,0-8.14-3.82,17.59,17.59,0,0,0-8.75,2.66c-10.48,6-19,20.82-19,32.92,0,8.6,4.4,14.16,11.2,14.16m34.37-79.66a1.48,1.48,0,0,0-1.23.65L205,154.26a2.7,2.7,0,0,1-2.08,1.06h-.55a22.53,22.53,0,0,0-4.78.54,1.53,1.53,0,0,1-.3,0,1.13,1.13,0,0,1-1.16-1.06L195,144.16c-.06-.54-.37-.84-.78-.84a1.11,1.11,0,0,0-.55.16l-11,6.34a2.92,2.92,0,0,0-1.31,2l-1.1,12.22a4.1,4.1,0,0,1-1.14,2.28,64.59,64.59,0,0,0-6.1,6.45,2.1,2.1,0,0,1-1.58.7,1.75,1.75,0,0,1-.57-.09l-7-2.46a1.42,1.42,0,0,0-.5-.08,1.75,1.75,0,0,0-1.48.81l-8.07,14a1.72,1.72,0,0,0,.36,2.08l5.65,4.87a2.11,2.11,0,0,1,.55,2.17,67,67,0,0,0-2.54,8.51,4.17,4.17,0,0,1-1.4,2.13l-10,7.06a2.94,2.94,0,0,0-1.12,2.15v12.68c0,.57.32.91.77.91a1.11,1.11,0,0,0,.48-.11l9.77-4.4a1.19,1.19,0,0,1,.51-.12,1.17,1.17,0,0,1,1.11.87,22,22,0,0,0,2.18,4.85,2.66,2.66,0,0,1,.15,2.36l-6.51,13.13a1.46,1.46,0,0,0,.58,1.91l7.06,4.08a1.41,1.41,0,0,0,.72.19,1.49,1.49,0,0,0,1.23-.64l8.11-12.21a2.72,2.72,0,0,1,2.08-1h.55a21.93,21.93,0,0,0,4.78-.55,1.53,1.53,0,0,1,.3,0,1.14,1.14,0,0,1,1.16,1.07l1.08,10.66c.05.53.36.84.77.84a1.11,1.11,0,0,0,.55-.16l11-6.34a3,3,0,0,0,1.31-2.05l1.1-12.21a4.1,4.1,0,0,1,1.14-2.28,66.84,66.84,0,0,0,6.1-6.45,2.12,2.12,0,0,1,1.59-.71,1.73,1.73,0,0,1,.56.09l7.05,2.46a1.43,1.43,0,0,0,.5.09,1.72,1.72,0,0,0,1.48-.82l8.07-14a1.72,1.72,0,0,0-.36-2.08l-5.65-4.88a2.11,2.11,0,0,1-.55-2.17,64.48,64.48,0,0,0,2.54-8.51A4.1,4.1,0,0,1,220,187l10-7.06a3,3,0,0,0,1.12-2.16V165.09c0-.57-.32-.92-.77-.92a1.28,1.28,0,0,0-.48.11l-9.77,4.4a1.19,1.19,0,0,1-.51.12,1.17,1.17,0,0,1-1.11-.87,21.88,21.88,0,0,0-2.18-4.84,2.71,2.71,0,0,1-.15-2.37l6.51-13.13a1.48,1.48,0,0,0-.57-1.91L215,141.6a1.41,1.41,0,0,0-.72-.19Zm-34.37,78.73c-6.09,0-10.27-4.85-10.27-13.23,0-11.83,8.31-26.2,18.55-32.12a16.85,16.85,0,0,1,8.28-2.53c6.08,0,10.26,4.85,10.26,13.24,0,11.82-8.3,26.2-18.54,32.11a16.81,16.81,0,0,1-8.28,2.53Z" style="fill: rgb(255, 255, 255); transform-origin: 188.22px 196.18px;" id="ell1oz9opajg" class="animable"></path>
                            </g>
                        </g>
                    </g>
                    <g id="freepik--gear--inject-83" class="animable" style="transform-origin: 160.104px 302.945px;">
                        <path d="M188.25,295a5.84,5.84,0,0,1,1.56-3.17L196.2,286a3.91,3.91,0,0,0,1.08-3.15l-1.2-7a1.3,1.3,0,0,0-.62-1h0l-7.57-4.37h0a1.2,1.2,0,0,0-1.32.12l-2.75,1.81,2.65-7.18a1.56,1.56,0,0,0-.73-2l0,0-7.58-4.38h0a1.69,1.69,0,0,0-.5-.2l-4.82-1.08a2.62,2.62,0,0,0-2.73,1.26l-4.52,8.63a4.56,4.56,0,0,1-1.8,1.67l-.21-.69a1.41,1.41,0,0,0-.61-.84h0l-7.6-4.38h0a1.22,1.22,0,0,0-1.42.19l-7.22,5.67a4.07,4.07,0,0,0-1.37,3.06l.43,6.87a5.41,5.41,0,0,1-1.12,3.32q-1.77,2.13-3.35,4.44a3.7,3.7,0,0,1-2.94,1.48l-4.64-.22a3,3,0,0,0-2.66,1.63l-4.36,9.78a1.86,1.86,0,0,0,.74,2.35h0l5.14,3a2.25,2.25,0,0,1,.12,1.33,46.08,46.08,0,0,0-.8,4.67A5.78,5.78,0,0,1,130.4,314l-6.4,5.88a3.87,3.87,0,0,0-1.07,3.15l1.2,7a1.32,1.32,0,0,0,.58.95h0l7.62,4.4h0a1.21,1.21,0,0,0,1.31-.13l2.75-1.81-2.66,7.18a1.61,1.61,0,0,0,.64,2h0l7.61,4.39v0a1.83,1.83,0,0,0,.53.24l4.82,1.07a2.6,2.6,0,0,0,2.72-1.26l4.53-8.63a4.56,4.56,0,0,1,1.8-1.67l.21.7a1.42,1.42,0,0,0,.62.84h0l7.53,4.35h0l.09.05h0a1.24,1.24,0,0,0,1.38-.22l7.22-5.67a4.07,4.07,0,0,0,1.37-3.06l-.43-6.87a5.41,5.41,0,0,1,1.12-3.32c1.18-1.41,2.3-2.9,3.35-4.43a3.71,3.71,0,0,1,2.94-1.49l4.64.23a3,3,0,0,0,2.66-1.64l4.36-9.78a1.85,1.85,0,0,0-1-2.47l-3.75-1.6a2.31,2.31,0,0,1-1.28-2.58A46.37,46.37,0,0,0,188.25,295Zm-38.51,21.22c-1.41-8.22,3.78-19.86,11.6-26a15.82,15.82,0,0,1,8.23-3.67,13.26,13.26,0,0,1,.9,3c1.41,8.21-3.78,19.85-11.6,26a15.8,15.8,0,0,1-8.2,3.66A12.09,12.09,0,0,1,149.74,316.26Z" style="fill: rgb(0, 119, 182); transform-origin: 160.104px 302.945px;" id="el1dqixemk1cc" class="animable"></path>
                        <g id="elipxbps6ebfs">
                            <path d="M188.25,295a5.84,5.84,0,0,1,1.56-3.17L196.2,286a3.91,3.91,0,0,0,1.08-3.15l-1.2-7a1.3,1.3,0,0,0-.62-1h0l-7.57-4.37h0a1.2,1.2,0,0,0-1.32.12l-2.75,1.81,2.65-7.18a1.56,1.56,0,0,0-.73-2l0,0-7.58-4.38h0a1.69,1.69,0,0,0-.5-.2l-4.82-1.08a2.62,2.62,0,0,0-2.73,1.26l-4.52,8.63a4.56,4.56,0,0,1-1.8,1.67l-.21-.69a1.41,1.41,0,0,0-.61-.84h0l-7.6-4.38h0a1.22,1.22,0,0,0-1.42.19l-7.22,5.67a4.07,4.07,0,0,0-1.37,3.06l.43,6.87a5.41,5.41,0,0,1-1.12,3.32q-1.77,2.13-3.35,4.44a3.7,3.7,0,0,1-2.94,1.48l-4.64-.22a3,3,0,0,0-2.66,1.63l-4.36,9.78a1.86,1.86,0,0,0,.74,2.35h0l5.14,3a2.25,2.25,0,0,1,.12,1.33,46.08,46.08,0,0,0-.8,4.67A5.78,5.78,0,0,1,130.4,314l-6.4,5.88a3.87,3.87,0,0,0-1.07,3.15l1.2,7a1.32,1.32,0,0,0,.58.95h0l7.62,4.4h0a1.21,1.21,0,0,0,1.31-.13l2.75-1.81-2.66,7.18a1.61,1.61,0,0,0,.64,2h0l7.61,4.39v0a1.83,1.83,0,0,0,.53.24l4.82,1.07a2.6,2.6,0,0,0,2.72-1.26l4.53-8.63a4.56,4.56,0,0,1,1.8-1.67l.21.7a1.42,1.42,0,0,0,.62.84h0l7.53,4.35h0l.09.05h0a1.24,1.24,0,0,0,1.38-.22l7.22-5.67a4.07,4.07,0,0,0,1.37-3.06l-.43-6.87a5.41,5.41,0,0,1,1.12-3.32c1.18-1.41,2.3-2.9,3.35-4.43a3.71,3.71,0,0,1,2.94-1.49l4.64.23a3,3,0,0,0,2.66-1.64l4.36-9.78a1.85,1.85,0,0,0-1-2.47l-3.75-1.6a2.31,2.31,0,0,1-1.28-2.58A46.37,46.37,0,0,0,188.25,295Zm-38.51,21.22c-1.41-8.22,3.78-19.86,11.6-26a15.82,15.82,0,0,1,8.23-3.67,13.26,13.26,0,0,1,.9,3c1.41,8.21-3.78,19.85-11.6,26a15.8,15.8,0,0,1-8.2,3.66A12.09,12.09,0,0,1,149.74,316.26Z" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 160.104px 302.945px;" class="animable"></path>
                        </g>
                        <g id="elprzcaxm59yh">
                            <path d="M142.58,331.58A1.84,1.84,0,0,0,140,331l-3.65,2.4-2.65,7.18a1.6,1.6,0,0,0,.64,1.95l7.52,4.33a1.58,1.58,0,0,1-.56-1.9l3.26-8.82a3.18,3.18,0,0,0-.75-3A13.49,13.49,0,0,1,142.58,331.58Zm22.21,11a1.4,1.4,0,0,1-.61-.83l-1.62-5.41a1.65,1.65,0,0,0-2.28-1,20.49,20.49,0,0,1-3,1,3.91,3.91,0,0,0-.94.39l.21.7a1.38,1.38,0,0,0,.62.83v0Z" style="opacity: 0.1; transform-origin: 149.188px 338.779px;" class="animable"></path>
                        </g>
                        <g id="el91v9mc1cg2">
                            <path d="M166.46,320c-6.75,5.3-13.24,4.8-15.79-.73a15.66,15.66,0,0,0,8.19-3.65c7.82-6.15,13-17.78,11.61-26a12.15,12.15,0,0,0-.91-3c4.29-.37,7.61,2.21,8.51,7.39C179.48,302.21,174.28,313.84,166.46,320Z" style="opacity: 0.1; transform-origin: 164.485px 305.147px;" class="animable"></path>
                        </g>
                        <path d="M139.75,288a3.08,3.08,0,0,1-1.32.28l-4.65-.22a2.89,2.89,0,0,0-1.92.7l7.6,4.38a2.94,2.94,0,0,1,1.92-.7l4.64.22a3.07,3.07,0,0,0,1.33-.25Zm15.66-24.76a1.23,1.23,0,0,0-1.42.2l-7.22,5.67a4,4,0,0,0-1.19,1.89l7.59,4.38a3.93,3.93,0,0,1,1.2-1.89l7.21-5.66a1.21,1.21,0,0,1,1.43-.19v0Zm-25.09,50.78L124,319.87a3.71,3.71,0,0,0-1,1.82l7.59,4.36a3.65,3.65,0,0,1,1-1.8l6.32-5.79Zm47.88-55.14a1.36,1.36,0,0,0-.51-.2l-4.81-1.08a2.61,2.61,0,0,0-2.72,1.26l-4.53,8.63a4.12,4.12,0,0,1-1,1.16l7.6,4.38a3.93,3.93,0,0,0,1-1.16l4.53-8.63a2.6,2.6,0,0,1,2.73-1.26l4.81,1.08a3.12,3.12,0,0,1,.49.18Zm9.7,11.6v0a1.24,1.24,0,0,0-1.33.12l-2.74,1.81-.61,1.63a3.17,3.17,0,0,0,.76,3,12.42,12.42,0,0,1,1.24,1.52,3.68,3.68,0,0,0,.32.37,2.64,2.64,0,0,0,.29.21,1.74,1.74,0,0,0,.64.25,1.64,1.64,0,0,0,.85,0,1.18,1.18,0,0,0,.46-.21l6.39-4.2a2,2,0,0,1,.47-.22.92.92,0,0,1,.54,0,.75.75,0,0,1,.3.09Z" style="fill: rgb(0, 119, 182); transform-origin: 159.24px 291.804px;" id="el6lb31srjsiy" class="animable"></path>
                        <g id="el2y7tk0yhgpf">
                            <path d="M139.75,288a3.08,3.08,0,0,1-1.32.28l-4.65-.22a2.89,2.89,0,0,0-1.92.7l7.6,4.38a2.94,2.94,0,0,1,1.92-.7l4.64.22a3.07,3.07,0,0,0,1.33-.25Zm15.66-24.76a1.23,1.23,0,0,0-1.42.2l-7.22,5.67a4,4,0,0,0-1.19,1.89l7.59,4.38a3.93,3.93,0,0,1,1.2-1.89l7.21-5.66a1.21,1.21,0,0,1,1.43-.19v0Zm-25.09,50.78L124,319.87a3.71,3.71,0,0,0-1,1.82l7.59,4.36a3.65,3.65,0,0,1,1-1.8l6.32-5.79Zm47.88-55.14a1.36,1.36,0,0,0-.51-.2l-4.81-1.08a2.61,2.61,0,0,0-2.72,1.26l-4.53,8.63a4.12,4.12,0,0,1-1,1.16l7.6,4.38a3.93,3.93,0,0,0,1-1.16l4.53-8.63a2.6,2.6,0,0,1,2.73-1.26l4.81,1.08a3.12,3.12,0,0,1,.49.18Zm9.7,11.6v0a1.24,1.24,0,0,0-1.33.12l-2.74,1.81-.61,1.63a3.17,3.17,0,0,0,.76,3,12.42,12.42,0,0,1,1.24,1.52,3.68,3.68,0,0,0,.32.37,2.64,2.64,0,0,0,.29.21,1.74,1.74,0,0,0,.64.25,1.64,1.64,0,0,0,.85,0,1.18,1.18,0,0,0,.46-.21l6.39-4.2a2,2,0,0,1,.47-.22.92.92,0,0,1,.54,0,.75.75,0,0,1,.3.09Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 159.24px 291.804px;" class="animable"></path>
                        </g>
                        <path d="M197.28,282.84l-1.2-7a1.16,1.16,0,0,0-1.91-.83l-6.39,4.21a1.85,1.85,0,0,1-2.56-.58,13.35,13.35,0,0,0-1.24-1.53,3.12,3.12,0,0,1-.75-3l3.25-8.81a1.61,1.61,0,0,0-1.19-2.19L180.48,262a2.62,2.62,0,0,0-2.73,1.27l-4.53,8.62a4.73,4.73,0,0,1-2.73,2.06,23.4,23.4,0,0,0-3,1,1.64,1.64,0,0,1-2.27-1l-1.63-5.4a1.21,1.21,0,0,0-2-.65l-7.21,5.68A4,4,0,0,0,153,276.6l.43,6.86a5.4,5.4,0,0,1-1.13,3.32q-1.77,2.13-3.35,4.44a3.74,3.74,0,0,1-2.93,1.49l-4.64-.23a3,3,0,0,0-2.66,1.63l-4.37,9.78a1.85,1.85,0,0,0,1,2.47l3.74,1.6a2.34,2.34,0,0,1,1.29,2.59,41.31,41.31,0,0,0-.8,4.66,5.86,5.86,0,0,1-1.57,3.17l-6.39,5.88a3.84,3.84,0,0,0-1.07,3.14l1.2,7a1.14,1.14,0,0,0,1.9.82L140,331a1.84,1.84,0,0,1,2.56.58,13.49,13.49,0,0,0,1.25,1.52,3.17,3.17,0,0,1,.75,3L141.32,345a1.61,1.61,0,0,0,1.19,2.19l4.82,1.07a2.6,2.6,0,0,0,2.72-1.26l4.53-8.63a4.75,4.75,0,0,1,2.74-2.06,21.35,21.35,0,0,0,3-1,1.64,1.64,0,0,1,2.28,1l1.63,5.4a1.2,1.2,0,0,0,2,.64l7.22-5.67a4.07,4.07,0,0,0,1.37-3.06l-.43-6.87a5.41,5.41,0,0,1,1.12-3.32c1.18-1.41,2.3-2.9,3.35-4.43a3.71,3.71,0,0,1,2.94-1.49l4.64.23a3,3,0,0,0,2.66-1.64l4.36-9.78a1.85,1.85,0,0,0-1-2.47l-3.75-1.6a2.31,2.31,0,0,1-1.28-2.58,46.37,46.37,0,0,0,.8-4.66,5.84,5.84,0,0,1,1.56-3.17L196.2,286A3.91,3.91,0,0,0,197.28,282.84ZM166.46,320c-7.82,6.15-15.3,4.48-16.72-3.74s3.78-19.85,11.6-26,15.31-4.47,16.72,3.74S174.28,313.85,166.46,320Z" style="fill: rgb(0, 119, 182); transform-origin: 163.914px 305.131px;" id="el6h9g6jxqw5h" class="animable"></path>
                        <g id="ela73folfwit">
                            <path d="M197.28,282.84l-1.2-7a1.16,1.16,0,0,0-1.91-.83l-6.39,4.21a1.85,1.85,0,0,1-2.56-.58,13.35,13.35,0,0,0-1.24-1.53,3.12,3.12,0,0,1-.75-3l3.25-8.81a1.61,1.61,0,0,0-1.19-2.19L180.48,262a2.62,2.62,0,0,0-2.73,1.27l-4.53,8.62a4.73,4.73,0,0,1-2.73,2.06,23.4,23.4,0,0,0-3,1,1.64,1.64,0,0,1-2.27-1l-1.63-5.4a1.21,1.21,0,0,0-2-.65l-7.21,5.68A4,4,0,0,0,153,276.6l.43,6.86a5.4,5.4,0,0,1-1.13,3.32q-1.77,2.13-3.35,4.44a3.74,3.74,0,0,1-2.93,1.49l-4.64-.23a3,3,0,0,0-2.66,1.63l-4.37,9.78a1.85,1.85,0,0,0,1,2.47l3.74,1.6a2.34,2.34,0,0,1,1.29,2.59,41.31,41.31,0,0,0-.8,4.66,5.86,5.86,0,0,1-1.57,3.17l-6.39,5.88a3.84,3.84,0,0,0-1.07,3.14l1.2,7a1.14,1.14,0,0,0,1.9.82L140,331a1.84,1.84,0,0,1,2.56.58,13.49,13.49,0,0,0,1.25,1.52,3.17,3.17,0,0,1,.75,3L141.32,345a1.61,1.61,0,0,0,1.19,2.19l4.82,1.07a2.6,2.6,0,0,0,2.72-1.26l4.53-8.63a4.75,4.75,0,0,1,2.74-2.06,21.35,21.35,0,0,0,3-1,1.64,1.64,0,0,1,2.28,1l1.63,5.4a1.2,1.2,0,0,0,2,.64l7.22-5.67a4.07,4.07,0,0,0,1.37-3.06l-.43-6.87a5.41,5.41,0,0,1,1.12-3.32c1.18-1.41,2.3-2.9,3.35-4.43a3.71,3.71,0,0,1,2.94-1.49l4.64.23a3,3,0,0,0,2.66-1.64l4.36-9.78a1.85,1.85,0,0,0-1-2.47l-3.75-1.6a2.31,2.31,0,0,1-1.28-2.58,46.37,46.37,0,0,0,.8-4.66,5.84,5.84,0,0,1,1.56-3.17L196.2,286A3.91,3.91,0,0,0,197.28,282.84ZM166.46,320c-7.82,6.15-15.3,4.48-16.72-3.74s3.78-19.85,11.6-26,15.31-4.47,16.72,3.74S174.28,313.85,166.46,320Z" style="fill: rgb(255, 255, 255); opacity: 0.55; transform-origin: 163.914px 305.131px;" class="animable"></path>
                        </g>
                        <g id="el0v3b4g1hncs">
                            <g style="opacity: 0.55; transform-origin: 163.903px 305.132px;" class="animable">
                                <path d="M180,262.9l.27,0,4.81,1.08a.7.7,0,0,1,.5.35.72.72,0,0,1,0,.61l-3.26,8.81a4.11,4.11,0,0,0,1,4,13.39,13.39,0,0,1,1.16,1.41,2.9,2.9,0,0,0,2.35,1.27,2.66,2.66,0,0,0,1.49-.45l6.38-4.2a.63.63,0,0,1,.3-.12c.1,0,.16.21.18.33l1.2,7a3,3,0,0,1-.79,2.31l-6.39,5.87a6.76,6.76,0,0,0-1.86,3.75,40.68,40.68,0,0,1-.78,4.56,3.27,3.27,0,0,0,1.83,3.65l3.74,1.6a.91.91,0,0,1,.51.51,1,1,0,0,1,0,.73l-4.36,9.77a2.09,2.09,0,0,1-1.71,1.09h-.06l-4.64-.23h-.16a4.66,4.66,0,0,0-3.59,1.9c-1,1.53-2.15,3-3.29,4.36a6.35,6.35,0,0,0-1.34,4l.43,6.87a3.14,3.14,0,0,1-1,2.27l-7.21,5.67a.64.64,0,0,1-.32.15c-.15,0-.24-.28-.25-.33l-1.63-5.4a2.52,2.52,0,0,0-2.45-1.85,2.87,2.87,0,0,0-1.07.21,20.51,20.51,0,0,1-2.84.94,5.69,5.69,0,0,0-3.33,2.53l-4.53,8.63a1.71,1.71,0,0,1-1.44.81,1.09,1.09,0,0,1-.26,0l-4.82-1.07a.77.77,0,0,1-.5-.35.76.76,0,0,1,0-.61l3.26-8.81a4.09,4.09,0,0,0-.95-4,11.49,11.49,0,0,1-1.15-1.42,2.93,2.93,0,0,0-2.36-1.27,2.73,2.73,0,0,0-1.48.45l-6.39,4.2a.6.6,0,0,1-.3.12c-.12,0-.17-.31-.18-.32l-1.2-7a3,3,0,0,1,.79-2.31l6.39-5.88a6.73,6.73,0,0,0,1.86-3.75,41.15,41.15,0,0,1,.79-4.56,3.26,3.26,0,0,0-1.83-3.64l-3.75-1.6a.91.91,0,0,1-.5-.52.9.9,0,0,1,0-.72l4.37-9.78a2.05,2.05,0,0,1,1.7-1.08h.06l4.64.23h.16a4.66,4.66,0,0,0,3.59-1.9c1-1.52,2.15-3,3.3-4.36a6.31,6.31,0,0,0,1.33-4l-.43-6.86a3.16,3.16,0,0,1,1-2.27l7.22-5.67a.51.51,0,0,1,.32-.15c.14,0,.23.27.25.33l1.62,5.4a2.53,2.53,0,0,0,2.46,1.84,2.82,2.82,0,0,0,1.06-.21,23.71,23.71,0,0,1,2.85-.94,5.68,5.68,0,0,0,3.33-2.52l4.52-8.63a1.72,1.72,0,0,1,1.44-.82h0m-22.53,61.73c3,0,6.31-1.35,9.56-3.9,8.05-6.33,13.4-18.4,11.94-26.9-.89-5.14-4.12-8.22-8.65-8.22-3,0-6.31,1.36-9.56,3.91-8.05,6.33-13.41,18.39-11.94,26.89.88,5.15,4.12,8.22,8.65,8.22M180,262a2.63,2.63,0,0,0-2.26,1.32l-4.53,8.62a4.73,4.73,0,0,1-2.73,2.06,23.4,23.4,0,0,0-3,1,1.83,1.83,0,0,1-.71.14,1.59,1.59,0,0,1-1.56-1.18l-1.63-5.4a1.24,1.24,0,0,0-1.14-1,1.49,1.49,0,0,0-.9.34l-7.21,5.68A4,4,0,0,0,153,276.6l.43,6.86a5.4,5.4,0,0,1-1.13,3.32q-1.77,2.13-3.35,4.44a3.75,3.75,0,0,1-2.82,1.49H146l-4.64-.23h-.11a3,3,0,0,0-2.55,1.63l-4.37,9.78a1.85,1.85,0,0,0,1,2.47l3.74,1.6a2.34,2.34,0,0,1,1.29,2.59,41.31,41.31,0,0,0-.8,4.66,5.86,5.86,0,0,1-1.57,3.17l-6.39,5.88a3.84,3.84,0,0,0-1.07,3.14l1.2,7a1.14,1.14,0,0,0,1.09,1.09,1.45,1.45,0,0,0,.81-.27L140,331a1.78,1.78,0,0,1,1-.3,2,2,0,0,1,1.59.88,13.49,13.49,0,0,0,1.25,1.52,3.17,3.17,0,0,1,.75,3L141.32,345a1.61,1.61,0,0,0,1.19,2.19l4.82,1.07a1.8,1.8,0,0,0,.46,0,2.61,2.61,0,0,0,2.26-1.31l4.53-8.63a4.75,4.75,0,0,1,2.74-2.06,21.35,21.35,0,0,0,3-1,2.09,2.09,0,0,1,.72-.14,1.6,1.6,0,0,1,1.56,1.19l1.63,5.4a1.22,1.22,0,0,0,1.14,1,1.46,1.46,0,0,0,.89-.35l7.22-5.67a4.07,4.07,0,0,0,1.37-3.06l-.43-6.87a5.41,5.41,0,0,1,1.12-3.32c1.18-1.41,2.3-2.9,3.35-4.43a3.74,3.74,0,0,1,2.82-1.49h.12l4.64.23h.1a3,3,0,0,0,2.56-1.64l4.36-9.78a1.85,1.85,0,0,0-1-2.47l-3.75-1.6a2.31,2.31,0,0,1-1.28-2.58,46.37,46.37,0,0,0,.8-4.66,5.84,5.84,0,0,1,1.56-3.17L196.2,286a3.91,3.91,0,0,0,1.08-3.15l-1.2-7a1.16,1.16,0,0,0-1.1-1.1,1.53,1.53,0,0,0-.81.27l-6.39,4.21a1.74,1.74,0,0,1-1,.29,2,2,0,0,1-1.59-.87,13.35,13.35,0,0,0-1.24-1.53,3.12,3.12,0,0,1-.75-3l3.25-8.81a1.61,1.61,0,0,0-1.19-2.19L180.48,262a2.42,2.42,0,0,0-.47,0ZM157.48,323.7c-3.92,0-6.9-2.57-7.74-7.45-1.41-8.21,3.78-19.85,11.6-26,3.18-2.5,6.31-3.7,9-3.7,3.91,0,6.89,2.57,7.73,7.44,1.42,8.21-3.78,19.86-11.6,26-3.18,2.5-6.3,3.71-9,3.71Z" style="fill: rgb(255, 255, 255); transform-origin: 163.903px 305.132px;" id="elvj73fhbrm7q" class="animable"></path>
                            </g>
                        </g>
                    </g>
                    <g id="freepik--gear--inject-83" class="animable" style="transform-origin: 229.582px 253.036px;">
                        <path d="M252.29,246.63a4.77,4.77,0,0,1,1.26-2.57l5.18-4.75a3.11,3.11,0,0,0,.86-2.55l-1-5.64a1.06,1.06,0,0,0-.49-.78h0L252,226.8h0a1,1,0,0,0-1.07.1l-2.22,1.46,2.14-5.8a1.27,1.27,0,0,0-.59-1.61h0l-6.13-3.54h0a1.29,1.29,0,0,0-.4-.16l-3.9-.87a2.09,2.09,0,0,0-2.2,1l-3.67,7a3.59,3.59,0,0,1-1.45,1.35l-.17-.56a1.2,1.2,0,0,0-.49-.68h0l-6.15-3.55h0a1,1,0,0,0-1.15.15l-5.84,4.59a3.25,3.25,0,0,0-1.1,2.48l.34,5.55a4.38,4.38,0,0,1-.9,2.69,43.1,43.1,0,0,0-2.71,3.58A3,3,0,0,1,212,241.2l-3.75-.19a2.4,2.4,0,0,0-2.15,1.33l-3.53,7.9a1.49,1.49,0,0,0,.6,1.9h0l4.16,2.4a1.79,1.79,0,0,1,.09,1.07,37.32,37.32,0,0,0-.64,3.78A4.76,4.76,0,0,1,205.5,262l-5.17,4.75a3.17,3.17,0,0,0-.87,2.55l1,5.64a1.08,1.08,0,0,0,.47.76h0l6.17,3.56h0a1,1,0,0,0,1.06-.11l2.22-1.46-2.15,5.8a1.3,1.3,0,0,0,.52,1.59h0l6.16,3.56v0a1.4,1.4,0,0,0,.43.19l3.89.87a2.1,2.1,0,0,0,2.21-1l3.66-7a3.76,3.76,0,0,1,1.46-1.35l.17.56a1.11,1.11,0,0,0,.5.68h0l6.1,3.51h0l.07,0h0a1,1,0,0,0,1.12-.17l5.83-4.59a3.26,3.26,0,0,0,1.11-2.48l-.35-5.55a4.45,4.45,0,0,1,.91-2.69c1-1.14,1.86-2.34,2.71-3.58a3,3,0,0,1,2.37-1.21l3.76.19a2.41,2.41,0,0,0,2.15-1.32l3.53-7.91a1.51,1.51,0,0,0-.79-2l-3-1.29a1.88,1.88,0,0,1-1-2.09A34.61,34.61,0,0,0,252.29,246.63Zm-31.14,17.16c-1.15-6.65,3-16.06,9.38-21a12.67,12.67,0,0,1,6.65-3,10,10,0,0,1,.73,2.44c1.14,6.65-3.06,16.06-9.38,21a12.84,12.84,0,0,1-6.63,3A9.84,9.84,0,0,1,221.15,263.79Z" style="fill: rgb(0, 119, 182); transform-origin: 229.527px 253.04px;" id="el6xmzb47zkip" class="animable"></path>
                        <g id="el965fax5fdpr">
                            <path d="M252.29,246.63a4.77,4.77,0,0,1,1.26-2.57l5.18-4.75a3.11,3.11,0,0,0,.86-2.55l-1-5.64a1.06,1.06,0,0,0-.49-.78h0L252,226.8h0a1,1,0,0,0-1.07.1l-2.22,1.46,2.14-5.8a1.27,1.27,0,0,0-.59-1.61h0l-6.13-3.54h0a1.29,1.29,0,0,0-.4-.16l-3.9-.87a2.09,2.09,0,0,0-2.2,1l-3.67,7a3.59,3.59,0,0,1-1.45,1.35l-.17-.56a1.2,1.2,0,0,0-.49-.68h0l-6.15-3.55h0a1,1,0,0,0-1.15.15l-5.84,4.59a3.25,3.25,0,0,0-1.1,2.48l.34,5.55a4.38,4.38,0,0,1-.9,2.69,43.1,43.1,0,0,0-2.71,3.58A3,3,0,0,1,212,241.2l-3.75-.19a2.4,2.4,0,0,0-2.15,1.33l-3.53,7.9a1.49,1.49,0,0,0,.6,1.9h0l4.16,2.4a1.79,1.79,0,0,1,.09,1.07,37.32,37.32,0,0,0-.64,3.78A4.76,4.76,0,0,1,205.5,262l-5.17,4.75a3.17,3.17,0,0,0-.87,2.55l1,5.64a1.08,1.08,0,0,0,.47.76h0l6.17,3.56h0a1,1,0,0,0,1.06-.11l2.22-1.46-2.15,5.8a1.3,1.3,0,0,0,.52,1.59h0l6.16,3.56v0a1.4,1.4,0,0,0,.43.19l3.89.87a2.1,2.1,0,0,0,2.21-1l3.66-7a3.76,3.76,0,0,1,1.46-1.35l.17.56a1.11,1.11,0,0,0,.5.68h0l6.1,3.51h0l.07,0h0a1,1,0,0,0,1.12-.17l5.83-4.59a3.26,3.26,0,0,0,1.11-2.48l-.35-5.55a4.45,4.45,0,0,1,.91-2.69c1-1.14,1.86-2.34,2.71-3.58a3,3,0,0,1,2.37-1.21l3.76.19a2.41,2.41,0,0,0,2.15-1.32l3.53-7.91a1.51,1.51,0,0,0-.79-2l-3-1.29a1.88,1.88,0,0,1-1-2.09A34.61,34.61,0,0,0,252.29,246.63Zm-31.14,17.16c-1.15-6.65,3-16.06,9.38-21a12.67,12.67,0,0,1,6.65-3,10,10,0,0,1,.73,2.44c1.14,6.65-3.06,16.06-9.38,21a12.84,12.84,0,0,1-6.63,3A9.84,9.84,0,0,1,221.15,263.79Z" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 229.527px 253.04px;" class="animable"></path>
                        </g>
                        <g id="elzv9dl123v1">
                            <path d="M215.36,276.18a1.49,1.49,0,0,0-2.08-.47l-2.95,1.94-2.14,5.81a1.29,1.29,0,0,0,.52,1.58l6.08,3.5a1.29,1.29,0,0,1-.46-1.54l2.64-7.13a2.59,2.59,0,0,0-.6-2.46A9.46,9.46,0,0,1,215.36,276.18Zm18,8.89a1.07,1.07,0,0,1-.49-.67L231.51,280a1.33,1.33,0,0,0-1.84-.85,16.88,16.88,0,0,1-2.4.8,3.38,3.38,0,0,0-.76.31l.17.57a1.16,1.16,0,0,0,.51.67h0Z" style="opacity: 0.1; transform-origin: 220.728px 282.005px;" class="animable"></path>
                        </g>
                        <g id="eli2rcol72kyh">
                            <path d="M234.67,266.81c-5.46,4.29-10.71,3.88-12.77-.59a12.76,12.76,0,0,0,6.63-3c6.32-5,10.53-14.39,9.38-21a9.83,9.83,0,0,0-.73-2.43c3.47-.3,6.15,1.78,6.87,6C245.2,252.42,241,261.83,234.67,266.81Z" style="opacity: 0.1; transform-origin: 233.07px 254.786px;" class="animable"></path>
                        </g>
                        <path d="M213.07,241a2.68,2.68,0,0,1-1.07.23l-3.76-.19a2.41,2.41,0,0,0-1.56.57l6.15,3.54a2.35,2.35,0,0,1,1.55-.56l3.76.18a2.46,2.46,0,0,0,1.07-.21Zm12.66-20a1,1,0,0,0-1.14.16l-5.85,4.59a3.24,3.24,0,0,0-1,1.53l6.14,3.54a3.11,3.11,0,0,1,1-1.53l5.83-4.58a1,1,0,0,1,1.15-.15v0ZM205.44,262l-5.11,4.7a3,3,0,0,0-.79,1.47l6.13,3.53a3,3,0,0,1,.81-1.46l5.11-4.68Zm38.72-44.6a1.06,1.06,0,0,0-.41-.15l-3.89-.88a2.11,2.11,0,0,0-2.2,1l-3.67,7a3.29,3.29,0,0,1-.83.94l6.15,3.54a3.16,3.16,0,0,0,.83-.94l3.66-7a2.13,2.13,0,0,1,2.21-1l3.89.88a1.72,1.72,0,0,1,.4.14ZM252,226.8h0a1,1,0,0,0-1.08.1l-2.21,1.47-.5,1.31a2.58,2.58,0,0,0,.62,2.47,10.29,10.29,0,0,1,1,1.23,3.73,3.73,0,0,0,.26.3l.23.17a1.53,1.53,0,0,0,1.21.17,1.22,1.22,0,0,0,.37-.17l5.17-3.4a1.85,1.85,0,0,1,.38-.18.74.74,0,0,1,.44,0,.67.67,0,0,1,.24.07Z" style="fill: rgb(0, 119, 182); transform-origin: 228.835px 244.017px;" id="elo7ywy57ncxj" class="animable"></path>
                        <g id="eldm1odhopii6">
                            <path d="M213.07,241a2.68,2.68,0,0,1-1.07.23l-3.76-.19a2.41,2.41,0,0,0-1.56.57l6.15,3.54a2.35,2.35,0,0,1,1.55-.56l3.76.18a2.46,2.46,0,0,0,1.07-.21Zm12.66-20a1,1,0,0,0-1.14.16l-5.85,4.59a3.24,3.24,0,0,0-1,1.53l6.14,3.54a3.11,3.11,0,0,1,1-1.53l5.83-4.58a1,1,0,0,1,1.15-.15v0ZM205.44,262l-5.11,4.7a3,3,0,0,0-.79,1.47l6.13,3.53a3,3,0,0,1,.81-1.46l5.11-4.68Zm38.72-44.6a1.06,1.06,0,0,0-.41-.15l-3.89-.88a2.11,2.11,0,0,0-2.2,1l-3.67,7a3.29,3.29,0,0,1-.83.94l6.15,3.54a3.16,3.16,0,0,0,.83-.94l3.66-7a2.13,2.13,0,0,1,2.21-1l3.89.88a1.72,1.72,0,0,1,.4.14ZM252,226.8h0a1,1,0,0,0-1.08.1l-2.21,1.47-.5,1.31a2.58,2.58,0,0,0,.62,2.47,10.29,10.29,0,0,1,1,1.23,3.73,3.73,0,0,0,.26.3l.23.17a1.53,1.53,0,0,0,1.21.17,1.22,1.22,0,0,0,.37-.17l5.17-3.4a1.85,1.85,0,0,1,.38-.18.74.74,0,0,1,.44,0,.67.67,0,0,1,.24.07Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 228.835px 244.017px;" class="animable"></path>
                        </g>
                        <path d="M259.59,236.76l-1-5.64a.93.93,0,0,0-1.54-.66l-5.16,3.4a1.51,1.51,0,0,1-2.08-.47,10.29,10.29,0,0,0-1-1.24,2.57,2.57,0,0,1-.6-2.46l2.63-7.12a1.29,1.29,0,0,0-1-1.77l-3.89-.88a2.12,2.12,0,0,0-2.21,1l-3.66,7a3.87,3.87,0,0,1-2.21,1.67,18.17,18.17,0,0,0-2.4.79,1.32,1.32,0,0,1-1.84-.84l-1.32-4.37a1,1,0,0,0-1.65-.52l-5.83,4.59a3.25,3.25,0,0,0-1.11,2.47l.35,5.55a4.43,4.43,0,0,1-.91,2.69,43.8,43.8,0,0,0-2.71,3.59,3,3,0,0,1-2.38,1.2l-3.75-.18a2.39,2.39,0,0,0-2.15,1.32l-3.53,7.91a1.51,1.51,0,0,0,.79,2l3,1.29a1.87,1.87,0,0,1,1,2.09,34.2,34.2,0,0,0-.65,3.77,4.69,4.69,0,0,1-1.27,2.56l-5.17,4.76a3.1,3.1,0,0,0-.86,2.54l1,5.64a.93.93,0,0,0,1.54.67l5.16-3.4a1.51,1.51,0,0,1,2.08.47,11.15,11.15,0,0,0,1,1.23,2.56,2.56,0,0,1,.61,2.46L214.34,287a1.29,1.29,0,0,0,1,1.77l3.89.87a2.1,2.1,0,0,0,2.21-1l3.66-7a3.82,3.82,0,0,1,2.21-1.66,18.17,18.17,0,0,0,2.4-.79,1.32,1.32,0,0,1,1.84.84l1.32,4.37a1,1,0,0,0,1.65.52l5.83-4.59a3.26,3.26,0,0,0,1.11-2.48l-.35-5.55a4.45,4.45,0,0,1,.91-2.69c1-1.14,1.86-2.34,2.71-3.58a3,3,0,0,1,2.37-1.21l3.76.19a2.41,2.41,0,0,0,2.15-1.32l3.53-7.91a1.51,1.51,0,0,0-.79-2l-3-1.29a1.88,1.88,0,0,1-1-2.09,34.61,34.61,0,0,0,.65-3.77,4.77,4.77,0,0,1,1.26-2.57l5.18-4.75A3.11,3.11,0,0,0,259.59,236.76Zm-24.92,30.05c-6.32,5-12.38,3.62-13.52-3s3-16.06,9.38-21,12.38-3.62,13.52,3S241,261.84,234.67,266.81Z" style="fill: rgb(0, 119, 182); transform-origin: 232.542px 254.781px;" id="eli48uv6eimu" class="animable"></path>
                        <g id="elbj9mjpark2r">
                            <path d="M259.59,236.76l-1-5.64a.93.93,0,0,0-1.54-.66l-5.16,3.4a1.51,1.51,0,0,1-2.08-.47,10.29,10.29,0,0,0-1-1.24,2.57,2.57,0,0,1-.6-2.46l2.63-7.12a1.29,1.29,0,0,0-1-1.77l-3.89-.88a2.12,2.12,0,0,0-2.21,1l-3.66,7a3.87,3.87,0,0,1-2.21,1.67,18.17,18.17,0,0,0-2.4.79,1.32,1.32,0,0,1-1.84-.84l-1.32-4.37a1,1,0,0,0-1.65-.52l-5.83,4.59a3.25,3.25,0,0,0-1.11,2.47l.35,5.55a4.43,4.43,0,0,1-.91,2.69,43.8,43.8,0,0,0-2.71,3.59,3,3,0,0,1-2.38,1.2l-3.75-.18a2.39,2.39,0,0,0-2.15,1.32l-3.53,7.91a1.51,1.51,0,0,0,.79,2l3,1.29a1.87,1.87,0,0,1,1,2.09,34.2,34.2,0,0,0-.65,3.77,4.69,4.69,0,0,1-1.27,2.56l-5.17,4.76a3.1,3.1,0,0,0-.86,2.54l1,5.64a.93.93,0,0,0,1.54.67l5.16-3.4a1.51,1.51,0,0,1,2.08.47,11.15,11.15,0,0,0,1,1.23,2.56,2.56,0,0,1,.61,2.46L214.34,287a1.29,1.29,0,0,0,1,1.77l3.89.87a2.1,2.1,0,0,0,2.21-1l3.66-7a3.82,3.82,0,0,1,2.21-1.66,18.17,18.17,0,0,0,2.4-.79,1.32,1.32,0,0,1,1.84.84l1.32,4.37a1,1,0,0,0,1.65.52l5.83-4.59a3.26,3.26,0,0,0,1.11-2.48l-.35-5.55a4.45,4.45,0,0,1,.91-2.69c1-1.14,1.86-2.34,2.71-3.58a3,3,0,0,1,2.37-1.21l3.76.19a2.41,2.41,0,0,0,2.15-1.32l3.53-7.91a1.51,1.51,0,0,0-.79-2l-3-1.29a1.88,1.88,0,0,1-1-2.09,34.61,34.61,0,0,0,.65-3.77,4.77,4.77,0,0,1,1.26-2.57l5.18-4.75A3.11,3.11,0,0,0,259.59,236.76Zm-24.92,30.05c-6.32,5-12.38,3.62-13.52-3s3-16.06,9.38-21,12.38-3.62,13.52,3S241,261.84,234.67,266.81Z" style="fill: rgb(255, 255, 255); opacity: 0.55; transform-origin: 232.542px 254.781px;" class="animable"></path>
                        </g>
                        <g id="elw0wbnu6viiq">
                            <g style="opacity: 0.55; transform-origin: 232.62px 254.756px;" class="animable">
                                <path d="M245.63,220.81h0l.17,0,3.9.87a.44.44,0,0,1,.29.2.4.4,0,0,1,0,.34l-2.63,7.13a3.5,3.5,0,0,0,.8,3.43,9.14,9.14,0,0,1,.92,1.12,2.53,2.53,0,0,0,2,1.11,2.34,2.34,0,0,0,1.3-.4l5.16-3.4.09,0a.3.3,0,0,1,0,.1l1,5.64a2.25,2.25,0,0,1-.58,1.7l-5.18,4.76a5.61,5.61,0,0,0-1.55,3.14,33.67,33.67,0,0,1-.64,3.67,2.82,2.82,0,0,0,1.59,3.15l3,1.29a.64.64,0,0,1,.31.32.58.58,0,0,1,0,.45l-3.53,7.91a1.52,1.52,0,0,1-1.26.77h0l-3.75-.18H247a4,4,0,0,0-3.05,1.61c-.83,1.23-1.73,2.41-2.65,3.52a5.33,5.33,0,0,0-1.13,3.34l.35,5.55a2.35,2.35,0,0,1-.75,1.69l-5.84,4.59c-.06.05-.11.06-.12.08a.69.69,0,0,1-.06-.14l-1.32-4.37a2.2,2.2,0,0,0-2.15-1.62,2.52,2.52,0,0,0-.93.18,17.41,17.41,0,0,1-2.28.76,4.69,4.69,0,0,0-2.8,2.13l-3.66,7a1.23,1.23,0,0,1-1,.56.47.47,0,0,1-.17,0l-3.9-.87a.43.43,0,0,1-.29-.19.43.43,0,0,1,0-.35l2.63-7.12a3.5,3.5,0,0,0-.8-3.43,9.14,9.14,0,0,1-.92-1.12,2.5,2.5,0,0,0-2.05-1.11,2.41,2.41,0,0,0-1.3.39l-5.16,3.4-.09.05a.46.46,0,0,1,0-.09l-1-5.64a2.28,2.28,0,0,1,.58-1.71l5.17-4.75a5.56,5.56,0,0,0,1.56-3.14,35.7,35.7,0,0,1,.63-3.67,2.82,2.82,0,0,0-1.58-3.16l-3-1.29a.57.57,0,0,1-.31-.32.56.56,0,0,1,0-.44l3.53-7.91a1.5,1.5,0,0,1,1.26-.77h0l3.75.18h.14a3.94,3.94,0,0,0,3.05-1.61c.83-1.22,1.73-2.41,2.65-3.51a5.35,5.35,0,0,0,1.13-3.34l-.35-5.56a2.34,2.34,0,0,1,.75-1.68l5.84-4.59.12-.08a.49.49,0,0,1,.06.14l1.32,4.37a2.21,2.21,0,0,0,2.15,1.62,2.58,2.58,0,0,0,.93-.19,17.34,17.34,0,0,1,2.28-.75,4.77,4.77,0,0,0,2.8-2.13l3.66-7a1.22,1.22,0,0,1,1-.57M227.4,270.74a13.11,13.11,0,0,0,7.85-3.2c6.55-5.15,10.91-15,9.72-21.92-.73-4.25-3.42-6.79-7.17-6.79A13.1,13.1,0,0,0,230,242c-6.55,5.16-10.91,15-9.72,21.92.73,4.26,3.41,6.8,7.17,6.8m18.23-50.86A2.13,2.13,0,0,0,243.8,221l-3.66,7a3.87,3.87,0,0,1-2.21,1.67,18.17,18.17,0,0,0-2.4.79,1.54,1.54,0,0,1-.58.12,1.29,1.29,0,0,1-1.26-1l-1.32-4.37a1,1,0,0,0-.92-.8,1.18,1.18,0,0,0-.73.28l-5.83,4.59a3.25,3.25,0,0,0-1.11,2.47l.35,5.55a4.43,4.43,0,0,1-.91,2.69,43.8,43.8,0,0,0-2.71,3.59,3,3,0,0,1-2.28,1.2h-.1l-3.75-.18h-.08a2.41,2.41,0,0,0-2.07,1.33l-3.53,7.91a1.51,1.51,0,0,0,.79,2l3,1.29a1.87,1.87,0,0,1,1,2.09,34.2,34.2,0,0,0-.65,3.77,4.69,4.69,0,0,1-1.27,2.56l-5.17,4.76a3.1,3.1,0,0,0-.86,2.54l1,5.64a.92.92,0,0,0,.88.89,1.21,1.21,0,0,0,.66-.22l5.16-3.4a1.46,1.46,0,0,1,.79-.24,1.61,1.61,0,0,1,1.29.71,11.15,11.15,0,0,0,1,1.23,2.56,2.56,0,0,1,.61,2.46L214.34,287a1.29,1.29,0,0,0,1,1.77l3.89.87a1.64,1.64,0,0,0,.38,0,2.12,2.12,0,0,0,1.83-1.06l3.66-7a3.82,3.82,0,0,1,2.21-1.66,18.17,18.17,0,0,0,2.4-.79,1.54,1.54,0,0,1,.58-.12,1.29,1.29,0,0,1,1.26,1l1.32,4.37a1,1,0,0,0,.92.8,1.18,1.18,0,0,0,.73-.28l5.83-4.59a3.26,3.26,0,0,0,1.11-2.48l-.35-5.55a4.45,4.45,0,0,1,.91-2.69c1-1.14,1.86-2.34,2.71-3.58a3,3,0,0,1,2.28-1.21h.09l3.76.19h.08a2.43,2.43,0,0,0,2.07-1.32l3.53-7.91a1.51,1.51,0,0,0-.79-2l-3-1.29a1.88,1.88,0,0,1-1-2.09,34.61,34.61,0,0,0,.65-3.77,4.77,4.77,0,0,1,1.26-2.57l5.18-4.75a3.11,3.11,0,0,0,.86-2.55l-1-5.64a.93.93,0,0,0-.88-.88,1.21,1.21,0,0,0-.66.22l-5.16,3.4a1.46,1.46,0,0,1-.79.24,1.61,1.61,0,0,1-1.29-.71,10.29,10.29,0,0,0-1-1.24,2.57,2.57,0,0,1-.6-2.46l2.63-7.12a1.29,1.29,0,0,0-1-1.77l-3.89-.88a2.45,2.45,0,0,0-.38,0ZM227.4,269.81c-3.17,0-5.57-2.08-6.25-6-1.15-6.65,3-16.06,9.38-21a12.15,12.15,0,0,1,7.27-3c3.16,0,5.57,2.08,6.25,6,1.15,6.64-3.05,16.06-9.38,21a12.21,12.21,0,0,1-7.27,3Z" style="fill: rgb(255, 255, 255); transform-origin: 232.62px 254.756px;" id="elmbbggwzbb3a" class="animable"></path>
                            </g>
                        </g>
                    </g>
                </g>
                <g id="freepik--Screen--inject-83" class="animable" style="transform-origin: 217.11px 242.88px;">
                    <g id="freepik--screen--inject-83" class="animable" style="transform-origin: 217.11px 242.88px;">
                        <g id="freepik--screen--inject-83" class="animable" style="transform-origin: 217.11px 242.88px;">
                            <g id="elauqckxt0l2h">
                                <path d="M156.63,419.08a2.81,2.81,0,0,1-2.3-1.08,5.15,5.15,0,0,1-.93-3.25V144.37a14.73,14.73,0,0,1,4.6-9.85l.19-.17a5.22,5.22,0,0,1,.43-.39,10.45,10.45,0,0,1,1.31-.89l32.31-18.66,2.1-1.22A1.52,1.52,0,0,1,195,113c.58,0,.64.69.64,1a1.77,1.77,0,0,0,1.72,2h0a2.71,2.71,0,0,0,1.32-.4L236.36,93.8a5.34,5.34,0,0,0,2.52-4.18,4.24,4.24,0,0,1,1.66-3.1l.18-.11,31.61-18.24.68-.4a7.25,7.25,0,0,1,3.56-1.09c2.62,0,4.25,2.14,4.25,5.6V340.56a14.44,14.44,0,0,1-6.53,11.32L159.41,418.21A5.69,5.69,0,0,1,156.63,419.08Z" style="fill: rgb(0, 119, 182); opacity: 0.6; transform-origin: 217.106px 242.881px;" class="animable"></path>
                            </g>
                            <g id="els1trwqh330c">
                                <path d="M250.42,80.81l-9.7,5.6-.18.11a4.24,4.24,0,0,0-1.66,3.1,5.34,5.34,0,0,1-2.52,4.18l-25.73,14.85L153.4,209.06v42Z" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 201.91px 165.935px;" class="animable"></path>
                            </g>
                            <g id="elqpzf77djlrb">
                                <path d="M280.82,157.34,153.4,380.87v33.88a5.15,5.15,0,0,0,.93,3.25,2.77,2.77,0,0,0,1.31.91L280.82,199.3Z" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 217.106px 288.125px;" class="animable"></path>
                            </g>
                            <g id="el9ldu3tbsxyp">
                                <path d="M153.4,185.51,194.72,113a1.72,1.72,0,0,0-.38.16l-2.1,1.22-13,7.5L153.4,167.25Z" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 174.06px 149.255px;" class="animable"></path>
                            </g>
                            <g id="elu1ss4tw3qqa">
                                <path d="M280.82,125.12V72.28c0-3.46-1.63-5.6-4.25-5.6A7.25,7.25,0,0,0,273,67.77l-.68.4L269.13,70,153.4,273v75.61Z" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 217.11px 207.645px;" class="animable"></path>
                            </g>
                            <g id="elr8e74s9okkm">
                                <polygon points="280.82 319.44 280.82 277.48 220.81 382.76 256.46 362.18 280.82 319.44" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 250.815px 330.12px;" class="animable"></polygon>
                            </g>
                            <g id="el93dmek71wxg">
                                <polygon points="280.82 248.33 280.82 230.07 180.52 406.02 196.04 397.06 280.82 248.33" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 230.67px 318.045px;" class="animable"></polygon>
                            </g>
                            <path d="M276.57,67.19h0c2.34,0,3.73,1.91,3.73,5.09V340.56A14.06,14.06,0,0,1,274,351.43L159.14,417.76a5.16,5.16,0,0,1-2.51.8c-1.7,0-2.71-1.42-2.71-3.81V144.37a14.15,14.15,0,0,1,4.42-9.46l.21-.19.38-.35a11.21,11.21,0,0,1,1.25-.86l32.32-18.66,2.11-1.21a.93.93,0,0,1,.44-.15s.11.15.11.47a2.27,2.27,0,0,0,2.23,2.5A3.12,3.12,0,0,0,199,116l37.67-21.74a5.9,5.9,0,0,0,2.76-4.63,3.75,3.75,0,0,1,1.46-2.68l.13-.08L272.6,68.61l.67-.39a6.8,6.8,0,0,1,3.3-1m0-1a7.76,7.76,0,0,0-3.82,1.16l-.68.4L240.46,86l-.21.13a4.78,4.78,0,0,0-1.89,3.53,4.86,4.86,0,0,1-2.25,3.73l-37.66,21.74a2.22,2.22,0,0,1-1.06.33c-.71,0-1.2-.54-1.2-1.46s-.47-1.51-1.16-1.51a2,2,0,0,0-.94.29L192,114l-32.31,18.66a11.21,11.21,0,0,0-1.38.94l-.65.58a15.19,15.19,0,0,0-4.76,10.23V414.75c0,3.07,1.52,4.85,3.75,4.85a6.14,6.14,0,0,0,3-.94l114.88-66.33a15,15,0,0,0,6.79-11.77V72.28c0-3.87-1.95-6.12-4.77-6.12Z" style="fill: rgb(69, 90, 100); transform-origin: 217.11px 242.88px;" id="elnk56sb93hhh" class="animable"></path>
                        </g>
                    </g>
                </g>
                <g id="freepik--Sparkles--inject-83" class="animable" style="transform-origin: 203.858px 131.635px;">
                    <g id="freepik--Shine--inject-83" class="animable" style="transform-origin: 203.858px 131.635px;">
                        <g id="freepik--shine--inject-83" class="animable" style="transform-origin: 46.875px 127.714px;">
                            <path d="M34.37,136a.22.22,0,0,1-.22-.2l-.56-6.17a1.08,1.08,0,0,0-1-1l-4.84-.54a.22.22,0,0,1,0-.44l4.84-.54a1.08,1.08,0,0,0,1-1l.56-6.17a.22.22,0,0,1,.44,0l.56,6.17a1.08,1.08,0,0,0,1,1l4.84.54a.22.22,0,0,1,0,.44l-4.84.54a1.08,1.08,0,0,0-1,1l-.56,6.17A.22.22,0,0,1,34.37,136Zm-4.53-8.12,2.83.31a1.55,1.55,0,0,1,1.37,1.4l.33,3.71.33-3.71a1.55,1.55,0,0,1,1.37-1.4l2.83-.31-2.83-.31a1.55,1.55,0,0,1-1.37-1.4l-.33-3.71L34,126.2h0a1.55,1.55,0,0,1-1.37,1.4Zm4-1.73h0Z" style="fill: rgb(0, 119, 182); transform-origin: 34.37px 127.86px;" id="elem9958lj24e" class="animable"></path>
                            <g id="freepik--shine--inject-83" class="animable" style="transform-origin: 57.405px 140.492px;">
                                <path d="M57.4,151a.29.29,0,0,1-.28-.26l-.72-8a1.42,1.42,0,0,0-1.26-1.28l-6.26-.69a.29.29,0,0,1,0-.58l6.26-.69a1.42,1.42,0,0,0,1.26-1.28l.72-8a.29.29,0,0,1,.57,0l.72,8h0a1.42,1.42,0,0,0,1.26,1.28l6.26.69a.29.29,0,0,1,0,.58l-6.26.69a1.42,1.42,0,0,0-1.26,1.28l-.72,8A.29.29,0,0,1,57.4,151Zm-5.86-10.52,3.67.41a2,2,0,0,1,1.76,1.8l.43,4.8.44-4.8a2,2,0,0,1,1.77-1.8l3.66-.41-3.66-.41a2,2,0,0,1-1.77-1.8l-.44-4.8-.43,4.8a2,2,0,0,1-1.76,1.8Z" style="fill: rgb(0, 119, 182); transform-origin: 57.405px 140.492px;" id="elcmf5k5wg0s" class="animable"></path>
                            </g>
                            <g id="elxmk02eqst08">
                                <g style="opacity: 0.5; transform-origin: 51px 110.019px;" class="animable">
                                    <path d="M51,115.61a.23.23,0,0,1-.22-.21l-.38-4.2a.68.68,0,0,0-.59-.61l-3.3-.36a.23.23,0,0,1-.2-.22.24.24,0,0,1,.2-.23l3.3-.36a.67.67,0,0,0,.59-.61l.38-4.2a.23.23,0,0,1,.45,0l.38,4.2a.65.65,0,0,0,.59.61l3.3.36a.23.23,0,0,1,.19.23.22.22,0,0,1-.19.22l-3.3.36a.66.66,0,0,0-.59.61l-.38,4.2A.23.23,0,0,1,51,115.61ZM48.58,110l1.29.14a1.13,1.13,0,0,1,1,1L51,112.9l.16-1.74a1.13,1.13,0,0,1,1-1l1.29-.14-1.29-.15a1.12,1.12,0,0,1-1-1L51,107.11l-.15,1.74h0a1.12,1.12,0,0,1-1,1Zm2.06-1.18h0Z" style="fill: rgb(0, 119, 182); transform-origin: 51px 110.019px;" id="eloykh9pf31vf" class="animable"></path>
                                </g>
                            </g>
                        </g>
                        <g id="freepik--shine--inject-83" class="animable" style="transform-origin: 108.3px 51.4401px;">
                            <path d="M115.94,58a.29.29,0,0,1-.29-.26l-.72-8a1.42,1.42,0,0,0-1.25-1.28l-6.27-.69a.29.29,0,0,1-.25-.29.28.28,0,0,1,.25-.28l6.27-.7a1.41,1.41,0,0,0,1.25-1.28l.72-8a.3.3,0,0,1,.29-.27.29.29,0,0,1,.29.27l.72,8h0a1.42,1.42,0,0,0,1.26,1.28l6.26.7a.28.28,0,0,1,.26.28.29.29,0,0,1-.26.29l-6.26.69A1.42,1.42,0,0,0,117,49.7l-.72,8A.28.28,0,0,1,115.94,58Zm-5.87-10.52,3.67.41a2,2,0,0,1,1.77,1.8l.43,4.81.44-4.81a2,2,0,0,1,1.76-1.8l3.67-.41-3.67-.4a2,2,0,0,1-1.76-1.81l-.44-4.8-.43,4.8A2,2,0,0,1,113.74,47Z" style="fill: rgb(0, 119, 182); transform-origin: 115.945px 47.4784px;" id="elh2ocpxuxj6i" class="animable"></path>
                            <g id="elqsivrk30z3">
                                <g style="opacity: 0.5; transform-origin: 96.835px 60.005px;" class="animable">
                                    <path d="M96.83,65.93a.23.23,0,0,1-.23-.21l-.4-4.45a.7.7,0,0,0-.63-.64l-3.49-.39a.23.23,0,0,1-.21-.23.23.23,0,0,1,.21-.24l3.49-.39a.7.7,0,0,0,.63-.64l.4-4.45a.23.23,0,0,1,.23-.21h0a.23.23,0,0,1,.24.21l.4,4.45a.7.7,0,0,0,.63.64l3.49.39a.23.23,0,0,1,.21.24.23.23,0,0,1-.21.23l-3.49.39a.7.7,0,0,0-.63.64l-.4,4.45A.23.23,0,0,1,96.83,65.93ZM94.25,60l1.37.15a1.18,1.18,0,0,1,1,1.07l.16,1.84L97,61.23a1.18,1.18,0,0,1,1-1.07L99.41,60l-1.36-.16a1.18,1.18,0,0,1-1-1.07h0l-.17-1.84-.16,1.84a1.18,1.18,0,0,1-1,1.07Z" style="fill: rgb(0, 119, 182); transform-origin: 96.835px 60.005px;" id="elkjcgl92z9c" class="animable"></path>
                                </g>
                            </g>
                        </g>
                        <g id="freepik--shine--inject-83" class="animable" style="transform-origin: 58.6749px 221.495px;">
                            <path d="M54.62,224.82a.25.25,0,0,1-.26-.24l-.67-7.38A1.32,1.32,0,0,0,52.53,216l-5.79-.64a.25.25,0,0,1-.23-.26.27.27,0,0,1,.23-.27l5.79-.64A1.3,1.3,0,0,0,53.69,213l.67-7.38a.26.26,0,0,1,.26-.25.28.28,0,0,1,.27.25l.66,7.38h0a1.31,1.31,0,0,0,1.16,1.18l5.79.64a.28.28,0,0,1,.24.27.26.26,0,0,1-.24.26l-5.79.64a1.33,1.33,0,0,0-1.16,1.19l-.66,7.38A.27.27,0,0,1,54.62,224.82Zm-5.42-9.71,3.39.37a1.85,1.85,0,0,1,1.63,1.67l.4,4.44.4-4.44a1.86,1.86,0,0,1,1.63-1.67l3.39-.37-3.39-.38A1.84,1.84,0,0,1,55,213.07l-.4-4.44-.4,4.44a1.83,1.83,0,0,1-1.63,1.66Z" style="fill: rgb(0, 119, 182); transform-origin: 54.6249px 215.095px;" id="elr8x8ffivyfk" class="animable"></path>
                            <g id="el6b5h4tmsv2">
                                <g style="opacity: 0.5; transform-origin: 66.255px 232.145px;" class="animable">
                                    <path d="M66.25,237.62a.23.23,0,0,1-.22-.2l-.37-4.11a.66.66,0,0,0-.58-.6l-3.22-.35a.22.22,0,0,1-.19-.22.22.22,0,0,1,.19-.22l3.22-.35a.65.65,0,0,0,.58-.6l.37-4.1a.22.22,0,0,1,.22-.2h0a.22.22,0,0,1,.22.2l.37,4.1a.66.66,0,0,0,.58.6l3.22.35a.23.23,0,0,1,.2.22.23.23,0,0,1-.2.22l-3.22.35a.67.67,0,0,0-.58.6l-.37,4.11A.23.23,0,0,1,66.25,237.62Zm-2.38-5.48,1.26.14a1.11,1.11,0,0,1,1,1l.15,1.7.15-1.7a1.11,1.11,0,0,1,1-1l1.27-.14L67.37,232a1.1,1.1,0,0,1-1-1h0l-.15-1.7L66.1,231a1.1,1.1,0,0,1-1,1Z" style="fill: rgb(0, 119, 182); transform-origin: 66.255px 232.145px;" id="elfe2weyo1k95" class="animable"></path>
                                </g>
                            </g>
                        </g>
                        <g id="freepik--shine--inject-83" class="animable" style="transform-origin: 301.809px 111.555px;">
                            <path d="M307.35,197.46a.24.24,0,0,1-.24-.22l-.61-6.72a1.2,1.2,0,0,0-1.05-1.08l-5.27-.58a.24.24,0,0,1,0-.48l5.27-.58a1.19,1.19,0,0,0,1.05-1.08l.61-6.71a.23.23,0,0,1,.24-.22.24.24,0,0,1,.24.22l.6,6.71h0a1.2,1.2,0,0,0,1.06,1.08l5.26.58a.24.24,0,0,1,.22.24.25.25,0,0,1-.22.24l-5.26.58a1.21,1.21,0,0,0-1.06,1.08l-.6,6.72A.25.25,0,0,1,307.35,197.46Zm-4.93-8.84,3.08.34a1.68,1.68,0,0,1,1.48,1.52l.37,4,.36-4A1.69,1.69,0,0,1,309.2,189l3.08-.34-3.08-.34a1.68,1.68,0,0,1-1.49-1.51l-.36-4-.37,4a1.67,1.67,0,0,1-1.48,1.51Z" style="fill: rgb(0, 119, 182); transform-origin: 307.336px 188.625px;" id="elr27yjqc801l" class="animable"></path>
                            <path d="M285.49,34.7a.13.13,0,0,1-.12-.12l-.31-3.43a.6.6,0,0,0-.54-.55l-2.69-.3a.12.12,0,0,1-.11-.12.12.12,0,0,1,.11-.13l2.69-.3a.6.6,0,0,0,.54-.55l.31-3.43a.13.13,0,0,1,.12-.12.13.13,0,0,1,.13.12l.31,3.43h0a.6.6,0,0,0,.54.55l2.69.3a.13.13,0,0,1,.11.13.13.13,0,0,1-.11.12l-2.69.3a.6.6,0,0,0-.54.55l-.31,3.43A.13.13,0,0,1,285.49,34.7ZM283,30.18l1.58.17a.86.86,0,0,1,.76.78l.18,2.06.19-2.06a.86.86,0,0,1,.76-.78l1.58-.17L286.44,30a.86.86,0,0,1-.76-.77l-.19-2.07-.18,2.07a.86.86,0,0,1-.76.77Z" style="fill: rgb(0, 119, 182); transform-origin: 285.495px 30.175px;" id="elwqur0owjz3" class="animable"></path>
                            <g id="elpmkmoaxrc4">
                                <g style="opacity: 0.5; transform-origin: 317.705px 169.54px;" class="animable">
                                    <path d="M317.7,174.52a.19.19,0,0,1-.19-.18l-.34-3.74a.6.6,0,0,0-.53-.54l-2.93-.32a.2.2,0,0,1,0-.4l2.93-.32a.6.6,0,0,0,.53-.54l.34-3.74a.19.19,0,0,1,.19-.18h0a.2.2,0,0,1,.2.18l.34,3.74a.6.6,0,0,0,.53.54l2.93.32a.2.2,0,0,1,0,.4l-2.93.32a.6.6,0,0,0-.53.54l-.34,3.74A.2.2,0,0,1,317.7,174.52Zm-2.16-5,1.14.13a1,1,0,0,1,.88.9l.14,1.54.14-1.54a1,1,0,0,1,.89-.9l1.14-.13-1.14-.13a1,1,0,0,1-.89-.9h0L317.7,167l-.14,1.54a1,1,0,0,1-.88.9Z" style="fill: rgb(0, 119, 182); transform-origin: 317.705px 169.54px;" id="ele1y1ehty2wc" class="animable"></path>
                                </g>
                            </g>
                        </g>
                        <g id="freepik--shine--inject-83" class="animable" style="transform-origin: 363.823px 59.945px;">
                            <path d="M353.37,66a.2.2,0,0,1-.2-.18l-.48-5.35a1,1,0,0,0-.84-.86l-4.2-.47a.19.19,0,0,1,0-.38l4.2-.47a.94.94,0,0,0,.84-.85l.48-5.36a.2.2,0,0,1,.2-.18.19.19,0,0,1,.19.18l.48,5.36a1,1,0,0,0,.84.85l4.2.47a.19.19,0,0,1,0,.38l-4.2.47a1,1,0,0,0-.84.86l-.48,5.35A.19.19,0,0,1,353.37,66Zm-3.94-7.05,2.46.27a1.35,1.35,0,0,1,1.19,1.21l.29,3.22.29-3.22a1.33,1.33,0,0,1,1.18-1.21l2.46-.27-2.46-.27a1.33,1.33,0,0,1-1.18-1.21h0l-.29-3.22-.29,3.22a1.35,1.35,0,0,1-1.19,1.21Z" style="fill: rgb(0, 119, 182); transform-origin: 353.365px 58.95px;" id="elp7jzh93n9i8" class="animable"></path>
                            <g id="elxqg3n3e0ybm">
                                <g style="opacity: 0.5; transform-origin: 376.128px 74.91px;" class="animable">
                                    <path d="M376.14,79.77a.2.2,0,0,1-.2-.18l-.33-3.65a.59.59,0,0,0-.51-.53l-2.86-.31a.19.19,0,0,1-.17-.19.2.2,0,0,1,.17-.2l2.86-.31a.58.58,0,0,0,.51-.53l.33-3.65a.2.2,0,0,1,.2-.17.19.19,0,0,1,.19.17l.33,3.65h0a.58.58,0,0,0,.52.53l2.85.31a.2.2,0,0,1,0,.39l-2.85.31a.59.59,0,0,0-.52.53l-.33,3.65A.19.19,0,0,1,376.14,79.77ZM374,74.91l1.12.12a1,1,0,0,1,.86.88l.14,1.51.13-1.51a1,1,0,0,1,.86-.88l1.12-.12-1.12-.13a1,1,0,0,1-.86-.88l-.13-1.51L376,73.9a1,1,0,0,1-.86.88Z" style="fill: rgb(0, 119, 182); transform-origin: 376.128px 74.91px;" id="el1kxj34cpd24" class="animable"></path>
                                </g>
                            </g>
                            <g id="elgqc8kkr4opm">
                                <g style="opacity: 0.5; transform-origin: 374.07px 44.9917px;" class="animable">
                                    <path d="M374,49.85a.19.19,0,0,1-.19-.18L373.5,46a.6.6,0,0,0-.52-.53l-2.86-.31A.19.19,0,0,1,370,45a.2.2,0,0,1,.17-.2l2.86-.31a.6.6,0,0,0,.52-.53l.33-3.65a.19.19,0,0,1,.38,0l.33,3.65h0a.6.6,0,0,0,.52.53l2.86.31a.2.2,0,0,1,.17.2.19.19,0,0,1-.17.19l-2.86.31a.6.6,0,0,0-.52.53l-.33,3.65A.19.19,0,0,1,374,49.85ZM371.9,45l1.12.12a1,1,0,0,1,.86.88L374,47.5l.14-1.51a1,1,0,0,1,.86-.88l1.12-.12L375,44.86a1,1,0,0,1-.86-.88L374,42.47,373.88,44a1,1,0,0,1-.86.88Z" style="fill: rgb(0, 119, 182); transform-origin: 374.07px 44.9917px;" id="elnkcgf6xtvha" class="animable"></path>
                                </g>
                            </g>
                        </g>
                        <g id="freepik--shine--inject-83">
                            <g style="opacity: 0.5; transform-origin: 295.571px 41.2018px;" class="animable">
                                <path d="M295.56,46.81a.21.21,0,0,1-.22-.2l-.38-4.2a.67.67,0,0,0-.6-.61l-3.29-.36a.23.23,0,0,1-.2-.23.23.23,0,0,1,.2-.22l3.29-.36A.68.68,0,0,0,295,40l.38-4.2a.22.22,0,0,1,.22-.21.23.23,0,0,1,.22.21l.38,4.2a.68.68,0,0,0,.6.61l3.29.36a.23.23,0,0,1,0,.45l-3.29.36a.67.67,0,0,0-.6.61l-.38,4.2A.22.22,0,0,1,295.56,46.81Zm-2.44-5.6,1.29.15a1.11,1.11,0,0,1,1,1l.16,1.74.15-1.74a1.12,1.12,0,0,1,1-1l1.29-.15-1.29-.14a1.13,1.13,0,0,1-1-1h0l-.15-1.74-.16,1.74a1.12,1.12,0,0,1-1,1Z" style="fill: rgb(0, 119, 182); transform-origin: 295.571px 41.2018px;" id="elwdj1bvdmmu" class="animable"></path>
                            </g>
                        </g>
                    </g>
                </g>
                <g id="freepik--Cones--inject-83" class="animable" style="transform-origin: 233.82px 435.569px;">
                    <g id="freepik--Cone--inject-83" class="animable" style="transform-origin: 118.16px 438.613px;">
                        <path d="M148.5,448.61l-28.43-16.42a4.2,4.2,0,0,0-3.82,0L87.82,448.61a1.33,1.33,0,0,0-.78,1.1v2.07a1.33,1.33,0,0,0,.78,1.1l28.43,16.41a4.2,4.2,0,0,0,3.82,0l28.43-16.41a1.31,1.31,0,0,0,.78-1.1v-2.07A1.31,1.31,0,0,0,148.5,448.61Z" style="fill: rgb(0, 119, 182); transform-origin: 118.16px 450.74px;" id="elx1vpeyst72k" class="animable"></path>
                        <g id="eljd5vytm76ua">
                            <path d="M149.28,449.71v2.07a1.31,1.31,0,0,1-.78,1.1l-28.43,16.41a3.86,3.86,0,0,1-1.91.46v-38a3.86,3.86,0,0,1,1.91.46l28.43,16.42A1.31,1.31,0,0,1,149.28,449.71Z" style="opacity: 0.1; transform-origin: 133.72px 450.75px;" class="animable"></path>
                        </g>
                        <g id="el4nu1kxf4uou">
                            <path d="M118.16,431.73v38a3.86,3.86,0,0,1-1.91-.46L87.82,452.88a1.33,1.33,0,0,1-.78-1.1v-2.07a1.33,1.33,0,0,1,.78-1.1l28.43-16.42A3.86,3.86,0,0,1,118.16,431.73Z" style="opacity: 0.3; transform-origin: 102.6px 450.73px;" class="animable"></path>
                        </g>
                        <path d="M116.25,467.23,87.82,450.81a1.16,1.16,0,0,1,0-2.2l28.43-16.42a4.22,4.22,0,0,1,3.82,0l28.43,16.42a1.16,1.16,0,0,1,0,2.2l-28.43,16.42A4.22,4.22,0,0,1,116.25,467.23Z" style="fill: rgb(0, 119, 182); transform-origin: 118.16px 449.71px;" id="elncu6osqzq9t" class="animable"></path>
                        <g id="eld3sj03j3wi4">
                            <path d="M116.25,467.23,87.82,450.81a1.16,1.16,0,0,1,0-2.2l28.43-16.42a4.22,4.22,0,0,1,3.82,0l28.43,16.42a1.16,1.16,0,0,1,0,2.2l-28.43,16.42A4.22,4.22,0,0,1,116.25,467.23Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 118.16px 449.71px;" class="animable"></path>
                        </g>
                        <g id="el6uku6uovzw">
                            <path d="M118.16,431.74a4,4,0,0,0-1.91.45L87.82,448.61a1.16,1.16,0,0,0,0,2.2l28.43,16.42a4,4,0,0,0,1.91.45Z" style="opacity: 0.05; transform-origin: 102.594px 449.71px;" class="animable"></path>
                        </g>
                        <path d="M135.71,447.64h0l-12.58-37.79v-.05h0a2.93,2.93,0,0,0-1.37-1.47,7.92,7.92,0,0,0-7.16,0,2.93,2.93,0,0,0-1.37,1.47h0v0h0l-12.57,37.79h0c-1.16,3.29.47,6.84,4.88,9.38,7,4,18.34,4,25.34,0C135.24,454.48,136.87,450.93,135.71,447.64Z" style="fill: rgb(0, 119, 182); transform-origin: 118.185px 433.722px;" id="elnabxrp82zs" class="animable"></path>
                        <path d="M126.74,420.69v0l-1.79-5.37a2.6,2.6,0,0,1-.78,2.7,5.09,5.09,0,0,1-1.12.86,10.82,10.82,0,0,1-9.76,0,5.09,5.09,0,0,1-1.12-.86,2.61,2.61,0,0,1-.78-2.71l-1.79,5.39v0a3.11,3.11,0,0,0,.39,2.71,5.79,5.79,0,0,0,2,1.81,10,10,0,0,0,2.17.89,14.57,14.57,0,0,0,8,0,9.78,9.78,0,0,0,2.17-.89,5.79,5.79,0,0,0,2-1.81A3.09,3.09,0,0,0,126.74,420.69Z" style="fill: rgb(250, 250, 250); transform-origin: 118.169px 420.99px;" id="el44sl03phr0v" class="animable"></path>
                        <path d="M134,442.34v0l-1.79-5.37a4.87,4.87,0,0,1,.1,2.7,6.22,6.22,0,0,1-1.52,2.72,10.27,10.27,0,0,1-2.5,1.94c-5.56,3.22-14.58,3.22-20.14,0a10.27,10.27,0,0,1-2.5-1.94,6.22,6.22,0,0,1-1.52-2.72,4.87,4.87,0,0,1,.1-2.7l-1.79,5.37v.05a5.4,5.4,0,0,0-.2,2.7c.37,2.05,1.9,4,4.62,5.61,6.28,3.63,16.46,3.63,22.74,0,2.72-1.57,4.25-3.56,4.62-5.61A5.44,5.44,0,0,0,134,442.34Z" style="fill: rgb(250, 250, 250); transform-origin: 118.229px 445.196px;" id="eloeup9e1zb2f" class="animable"></path>
                        <path d="M130.35,431.51v0l-1.79-5.38a3.67,3.67,0,0,1-.17,2.7,6.35,6.35,0,0,1-2.66,2.71l-.08.06a16.56,16.56,0,0,1-15,0l-.08-.06a6.35,6.35,0,0,1-2.66-2.71,3.61,3.61,0,0,1-.16-2.7L106,431.48l0,0a4.26,4.26,0,0,0,0,2.71,6.17,6.17,0,0,0,2,2.7,9.58,9.58,0,0,0,1.44,1,15.47,15.47,0,0,0,4.76,1.71,21.21,21.21,0,0,0,8,0,15.62,15.62,0,0,0,4.77-1.71,10,10,0,0,0,1.43-1,6.17,6.17,0,0,0,2-2.7A4.29,4.29,0,0,0,130.35,431.51Z" style="fill: rgb(250, 250, 250); transform-origin: 118.185px 433.055px;" id="elmvhzqwlnvtq" class="animable"></path>
                        <g id="elglh08j9aptq">
                            <path d="M118.16,407.48a7.32,7.32,0,0,0-3.58.85,2.93,2.93,0,0,0-1.37,1.47h0v0h0l-12.57,37.79h0c-1.16,3.29.47,6.84,4.88,9.38a25.92,25.92,0,0,0,12.67,3h-.11a10.65,10.65,0,0,1-8.71-12l5.24-37.62Z" style="opacity: 0.1; transform-origin: 109.234px 433.727px;" class="animable"></path>
                        </g>
                        <path d="M114.58,412.47c-2-1.14-2-3,0-4.14a7.92,7.92,0,0,1,7.16,0c2,1.15,2,3,0,4.14A7.92,7.92,0,0,1,114.58,412.47Z" style="fill: rgb(0, 119, 182); transform-origin: 118.16px 410.4px;" id="eluzr4xox3y2" class="animable"></path>
                        <g id="elheuy28rze7n">
                            <path d="M114.58,412.47c-2-1.14-2-3,0-4.14a7.92,7.92,0,0,1,7.16,0c2,1.15,2,3,0,4.14A7.92,7.92,0,0,1,114.58,412.47Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 118.16px 410.4px;" class="animable"></path>
                        </g>
                    </g>
                    <g id="freepik--cone--inject-83" class="animable" style="transform-origin: 349.485px 432.524px;">
                        <path d="M379.82,442.52,351.39,426.1a3.84,3.84,0,0,0-1.9-.46,3.9,3.9,0,0,0-1.92.46l-28.42,16.42a1.34,1.34,0,0,0-.79,1.1v2.07a1.35,1.35,0,0,0,.79,1.11l28.42,16.4a3.9,3.9,0,0,0,1.92.46,3.84,3.84,0,0,0,1.9-.46l28.43-16.4a1.35,1.35,0,0,0,.79-1.11v-2.07A1.34,1.34,0,0,0,379.82,442.52Z" style="fill: rgb(0, 119, 182); transform-origin: 349.485px 444.65px;" id="ellzbnchow2zg" class="animable"></path>
                        <g id="eld2p8l08xrsr">
                            <path d="M380.61,443.62v2.07a1.35,1.35,0,0,1-.79,1.11l-28.43,16.4a3.84,3.84,0,0,1-1.9.46v-38a3.84,3.84,0,0,1,1.9.46l28.43,16.42A1.34,1.34,0,0,1,380.61,443.62Z" style="opacity: 0.1; transform-origin: 365.05px 444.66px;" class="animable"></path>
                        </g>
                        <g id="elk2ixlijczv">
                            <path d="M349.49,425.64v38a3.9,3.9,0,0,1-1.92-.46l-28.42-16.4a1.35,1.35,0,0,1-.79-1.11v-2.07a1.34,1.34,0,0,1,.79-1.1l28.42-16.42A3.9,3.9,0,0,1,349.49,425.64Z" style="opacity: 0.3; transform-origin: 333.925px 444.64px;" class="animable"></path>
                        </g>
                        <path d="M347.58,461.14l-28.43-16.42a1.16,1.16,0,0,1,0-2.2l28.43-16.41a4.19,4.19,0,0,1,3.81,0l28.43,16.41a1.16,1.16,0,0,1,0,2.2l-28.43,16.42A4.19,4.19,0,0,1,347.58,461.14Z" style="fill: rgb(0, 119, 182); transform-origin: 349.485px 443.625px;" id="el1406fyj43q1f" class="animable"></path>
                        <g id="el96qdzxkvswq">
                            <path d="M347.58,461.14l-28.43-16.42a1.16,1.16,0,0,1,0-2.2l28.43-16.41a4.19,4.19,0,0,1,3.81,0l28.43,16.41a1.16,1.16,0,0,1,0,2.2l-28.43,16.42A4.19,4.19,0,0,1,347.58,461.14Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 349.485px 443.625px;" class="animable"></path>
                        </g>
                        <g id="elj4rrk37oay">
                            <path d="M349.49,425.65a3.87,3.87,0,0,0-1.92.46l-28.42,16.41a1.16,1.16,0,0,0,0,2.2l28.43,16.42a3.91,3.91,0,0,0,1.91.46Z" style="opacity: 0.05; transform-origin: 333.924px 443.625px;" class="animable"></path>
                        </g>
                        <path d="M367,441.55h0l-12.58-37.78v-.06h0a2.92,2.92,0,0,0-1.37-1.46,7.88,7.88,0,0,0-7.17,0,2.92,2.92,0,0,0-1.37,1.46h0l0,0h0l-12.58,37.79h0c-1.16,3.29.46,6.84,4.88,9.39,7,4,18.34,4,25.33,0C366.57,448.39,368.19,444.84,367,441.55Z" style="fill: rgb(0, 119, 182); transform-origin: 349.473px 427.639px;" id="elyiw47uwa0b" class="animable"></path>
                        <path d="M358.07,414.6v0l-1.79-5.37a2.63,2.63,0,0,1-.78,2.7,5.09,5.09,0,0,1-1.12.86,10.85,10.85,0,0,1-9.77,0,5.09,5.09,0,0,1-1.12-.86,2.63,2.63,0,0,1-.78-2.71l-1.79,5.39v0a3.09,3.09,0,0,0,.4,2.7,5.62,5.62,0,0,0,2,1.81,9.78,9.78,0,0,0,2.17.89,14.36,14.36,0,0,0,8,0,9.78,9.78,0,0,0,2.17-.89,5.7,5.7,0,0,0,2-1.81A3.09,3.09,0,0,0,358.07,414.6Z" style="fill: rgb(250, 250, 250); transform-origin: 349.495px 414.899px;" id="el2zg554al2u4" class="animable"></path>
                        <path d="M365.28,436.25l0,0-1.79-5.38a4.78,4.78,0,0,1,.1,2.7,6.09,6.09,0,0,1-1.51,2.72,10.69,10.69,0,0,1-2.5,1.95c-5.57,3.21-14.59,3.21-20.15,0a10.69,10.69,0,0,1-2.5-1.95,6.22,6.22,0,0,1-1.52-2.72,5,5,0,0,1,.1-2.7l-1.78,5.37,0,.05a5.55,5.55,0,0,0-.2,2.71c.37,2,1.91,4,4.62,5.6,6.28,3.63,16.47,3.63,22.75,0,2.71-1.57,4.25-3.56,4.62-5.6A5.6,5.6,0,0,0,365.28,436.25Z" style="fill: rgb(250, 250, 250); transform-origin: 349.52px 439.096px;" id="el1hirezk8vfq" class="animable"></path>
                        <path d="M361.67,425.43v0L359.87,420a3.65,3.65,0,0,1-.17,2.71,6.35,6.35,0,0,1-2.66,2.71l-.08.05a16.54,16.54,0,0,1-14.95,0l-.08-.05a6.35,6.35,0,0,1-2.66-2.71,3.65,3.65,0,0,1-.17-2.71l-1.79,5.38v0a4.19,4.19,0,0,0,0,2.71,6.17,6.17,0,0,0,2,2.7,10.12,10.12,0,0,0,1.44,1,15.62,15.62,0,0,0,4.77,1.71,21.16,21.16,0,0,0,8,0,15.62,15.62,0,0,0,4.77-1.71,10.12,10.12,0,0,0,1.44-1,6.17,6.17,0,0,0,2-2.7A4.19,4.19,0,0,0,361.67,425.43Z" style="fill: rgb(250, 250, 250); transform-origin: 349.501px 426.941px;" id="elhpvhocorngv" class="animable"></path>
                        <g id="elbz26iqabf6l">
                            <path d="M349.48,401.39a7.24,7.24,0,0,0-3.58.86,2.92,2.92,0,0,0-1.37,1.46h0l0,0h0l-12.58,37.79h0c-1.16,3.29.46,6.84,4.88,9.39a25.85,25.85,0,0,0,12.66,3l-.1,0a10.64,10.64,0,0,1-8.71-12l5.23-37.62Z" style="opacity: 0.1; transform-origin: 340.539px 427.642px;" class="animable"></path>
                        </g>
                        <path d="M345.9,406.38c-2-1.14-2-3,0-4.13a7.88,7.88,0,0,1,7.17,0c2,1.14,2,3,0,4.13A7.88,7.88,0,0,1,345.9,406.38Z" style="fill: rgb(0, 119, 182); transform-origin: 349.485px 404.315px;" id="elequwtk9mikl" class="animable"></path>
                        <g id="el814lci8des">
                            <path d="M345.9,406.38c-2-1.14-2-3,0-4.13a7.88,7.88,0,0,1,7.17,0c2,1.14,2,3,0,4.13A7.88,7.88,0,0,1,345.9,406.38Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 349.485px 404.315px;" class="animable"></path>
                        </g>
                    </g>
                </g>
                <g id="freepik--Character--inject-83" class="animable animator-active" style="transform-origin: 390.625px 250.605px;">
                    <g id="freepik--character--inject-83" class="animable" style="transform-origin: 390.625px 250.605px;">
                        <path d="M357.3,190.46a49.34,49.34,0,0,0-5.49-1.27c-1.41-.27-2.23.28-5.61,2.13s-4.13,2.81-4.44,3.88a2.33,2.33,0,0,0,.92,2.57,2,2,0,0,0,.55,3.44,1.85,1.85,0,0,0,.73,3c-.53.61-.29,2.93,1.79,3.44a37.12,37.12,0,0,0,5.46.74Z" style="fill: rgb(240, 153, 122); transform-origin: 349.484px 198.758px;" id="elpexf9bnhi1" class="animable"></path>
                        <g id="freepik--Flag--inject-83" class="animable" style="transform-origin: 343.404px 223.27px;">
                            <path d="M385.46,359.4a3.26,3.26,0,0,0,2.88-.65,1,1,0,0,0,.4-1L335.29,115.84l-4.06.92,53.45,241.93A1,1,0,0,0,385.46,359.4Z" style="fill: rgb(38, 50, 56); transform-origin: 359.994px 237.67px;" id="el4j5smry14jv" class="animable"></path>
                            <path d="M334.89,116.82a.9.9,0,0,0-.38-1.66,3.24,3.24,0,0,0-2.87.65.9.9,0,0,0,.37,1.66A3.26,3.26,0,0,0,334.89,116.82Z" style="fill: rgb(55, 71, 79); transform-origin: 333.264px 116.315px;" id="elubg3uobl2en" class="animable"></path>
                            <path d="M312.65,107h.08a.48.48,0,0,0,.37-.59l-2.66-11.5a.5.5,0,0,0-1,.22l2.67,11.5A.5.5,0,0,0,312.65,107Z" style="fill: rgb(55, 71, 79); transform-origin: 311.272px 100.757px;" id="el2jwvbxaq5yh" class="animable"></path>
                            <path d="M348.71,122.22a2.79,2.79,0,0,0,1.81-.73,3.48,3.48,0,0,0,.74-3.45l-2.78-12a.49.49,0,0,0-.59-.37.5.5,0,0,0-.37.6l2.78,12a2.13,2.13,0,0,1-3,2.79l-28.7-8.77a8.94,8.94,0,0,1-5.51-5.9.48.48,0,0,0-.59-.37.49.49,0,0,0-.37.59,10,10,0,0,0,6.18,6.62L347,122A4.71,4.71,0,0,0,348.71,122.22Z" style="fill: rgb(55, 71, 79); transform-origin: 331.777px 113.942px;" id="el0wb2s0f6ek2" class="animable"></path>
                            <polygon points="361.5 109.63 303.13 91.79 299.56 93.85 301.81 103.53 360.17 121.37 363.74 119.31 361.5 109.63" style="fill: rgb(0, 119, 182); transform-origin: 331.65px 106.58px;" id="elnvt0cmhqvue" class="animable"></polygon>
                            <g id="el7m0dg5ki6cf">
                                <polygon points="361.5 109.63 303.13 91.79 299.56 93.85 301.81 103.53 360.17 121.37 363.74 119.31 361.5 109.63" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 331.65px 106.58px;" class="animable"></polygon>
                            </g>
                            <polygon points="357.93 111.69 299.56 93.85 301.81 103.53 360.17 121.37 357.93 111.69" style="fill: rgb(0, 119, 182); transform-origin: 329.865px 107.61px;" id="el3jeaiwn74la" class="animable"></polygon>
                            <polygon points="357.93 111.69 361.5 109.63 363.74 119.31 360.17 121.37 357.93 111.69" style="fill: rgb(0, 119, 182); transform-origin: 360.835px 115.5px;" id="el8h9t1gd85dc" class="animable"></polygon>
                            <g id="elbgxch6smit">
                                <polygon points="357.93 111.69 361.5 109.63 363.74 119.31 360.17 121.37 357.93 111.69" style="opacity: 0.2; transform-origin: 360.835px 115.5px;" class="animable"></polygon>
                            </g>
                            <polygon points="355.83 104.7 298.05 87.04 299.56 93.85 357.93 111.69 360 110.49 355.83 104.7" style="fill: rgb(55, 71, 79); transform-origin: 329.025px 99.365px;" id="elnxdj953wy3" class="animable"></polygon>
                            <polygon points="355.83 104.7 357.93 111.69 360 110.49 355.83 104.7" style="fill: rgb(38, 50, 56); transform-origin: 357.915px 108.195px;" id="eljyd9cnyns8d" class="animable"></polygon>
                            <path d="M350,113.18c-.47-.14-.77.18-.66.73a1.75,1.75,0,0,0,1.09,1.25c.49.15.79-.18.66-.72A1.83,1.83,0,0,0,350,113.18Z" style="fill: rgb(69, 90, 100); transform-origin: 350.219px 114.172px;" id="eln6pimbjr4he" class="animable"></path>
                            <path d="M311.91,101.93c-.47-.15-.77.18-.66.72a1.79,1.79,0,0,0,1.09,1.26c.49.14.79-.19.66-.73A1.82,1.82,0,0,0,311.91,101.93Z" style="fill: rgb(69, 90, 100); transform-origin: 312.129px 102.918px;" id="elzi542a0ouj" class="animable"></path>
                            <path d="M351.21,208.38c.67,0,1.54-1.06,2.17-1.77s1.43-1.57,1.37-2.18c-.08-.87-1.29-.88-1.29-.88a5.16,5.16,0,0,0,.6-.53c.76-.74-.62-1.75-1.84-1.3,0,0,.52-.3.54-.65a1.59,1.59,0,0,0-1.7-1.54c.87-.43.58-1.66,0-2.6a5.8,5.8,0,0,0-2.57.45c-.77,3.15.25,7.25,1.43,10.9C349.91,208.28,350.71,208.38,351.21,208.38Z" style="fill: rgb(240, 153, 122); transform-origin: 351.488px 202.651px;" id="el59x1wmsburc" class="animable"></path>
                            <path d="M344,204.2a17.53,17.53,0,0,0,2.45.7,24.33,24.33,0,0,0,2.49.49,3.8,3.8,0,0,0,2.35-.57c.75-.38,1.49-.81,2.21-1.27a14.7,14.7,0,0,1-2.1,1.48,3.84,3.84,0,0,1-2.5.66,19,19,0,0,1-2.51-.56A10.87,10.87,0,0,1,344,204.2Z" style="fill: rgb(177, 102, 104); transform-origin: 348.75px 204.627px;" id="elrh9d90odo9j" class="animable"></path>
                            <path d="M352.22,201.72a18.86,18.86,0,0,1-2.16.95,3.11,3.11,0,0,1-1.19.21,10.07,10.07,0,0,1-1.17-.24,46.47,46.47,0,0,1-4.47-1.43c1.54.32,3,.75,4.55,1.13.37.09.75.2,1.11.25a3.25,3.25,0,0,0,1.1-.15C350.74,202.24,351.47,202,352.22,201.72Z" style="fill: rgb(177, 102, 104); transform-origin: 347.725px 202.045px;" id="elpj6m28i4g" class="animable"></path>
                            <path d="M351.06,199.53a4.55,4.55,0,0,1-2.16.47,14.66,14.66,0,0,1-2.14-.6c-1.38-.5-2.75-1-4.08-1.63,1.41.38,2.79.88,4.18,1.34a18.29,18.29,0,0,0,2.07.65A5.4,5.4,0,0,0,351.06,199.53Z" style="fill: rgb(177, 102, 104); transform-origin: 346.87px 198.886px;" id="elj5fcjwwp0gj" class="animable"></path>
                        </g>
                        <path d="M394.62,160.57c-6.14,13.15-8.82,18.51-8.82,18.51S362.29,189.83,361.64,190a8.41,8.41,0,0,1-4.68.4c-2.61-.36-3.74-.4-5.15.18s-5.9,2.4-6.72,3.53a24.16,24.16,0,0,0-2.23,4.4c-.76,1.62-.76,2.35.82,2.36,1.94,0,3.08-1.66,3.81-3a6.45,6.45,0,0,1,3.56-1,5.19,5.19,0,0,0,.41.86h0a12.28,12.28,0,0,0,1.86,2l.49,2.07c.32.28.67.76.23,1.15l-.6.53s1.23,0,1.31.87a1.6,1.6,0,0,1-.18.67l.65,2.77s3.92-.3,5.5-2c1.43-1.49,1.49-2.13,5.81-3.92,1.34-.56,14-4.67,23.63-7.43,7.39-2.12,7.63-2.89,11.13-8,5.47-8,11.73-18.92,11.73-18.92V142.77C403.84,144.12,401.38,146.09,394.62,160.57Z" style="fill: rgb(255, 189, 167); transform-origin: 377.693px 175.28px;" id="elsuuowp0z6o" class="animable"></path>
                        <path d="M353.32,199.81c1.38,1.84,4.26,2.72,6.72,2.58-4.07.88-6.23-.51-6.23-.51Z" style="fill: rgb(240, 153, 122); transform-origin: 356.68px 201.246px;" id="el235yxivm6da" class="animable"></path>
                        <g id="freepik--Bottom--inject-83" class="animable" style="transform-origin: 423.675px 302.575px;">
                            <path d="M465.51,372.34c-.91-12.5.6-26.24-.44-45.76h0c-.1-5-.28-10.36-.61-15.12-1.13-16-3.6-21.5-3.83-24.59,0,0-1.21-30.7-2.26-65.75-.49-16.49-5.27-21.48-9.09-30.24H403.9c-5.07,21.6-6.51,68.7-6.36,91,.07,11.35,4.66,72.05,4.75,73.45.32,4.95-.11,6.91-2.05,9-4.07,4.36-10,8.52-15.06,12.32.74,1.95,6.87,1.88,9.9.39a76.46,76.46,0,0,0,11.31-7.21c4.19-3.1,9.54-5.58,9.61-10.3a4.57,4.57,0,0,1,.14-.84c.08-2.75,6.5-43.36,7-52.79.46-8.1-.53-21.85-.53-21.85l5.23-34.32s4,26.06,7.27,39.91c2.66,11.28,7,30.52,10,44.39h0c2.87,16,7,31.53,7.71,39.53.22,1.91,2.39,20.66,3.28,25s10.25,4.41,10.86-3C467.4,390.57,465.68,374.7,465.51,372.34Z" style="fill: rgb(255, 189, 167); transform-origin: 426.106px 296.208px;" id="elglkzn9iux8k" class="animable"></path>
                            <path d="M376.51,381.58c-.26,0-.68,2.85.72,4.08,1.61,1.42,6.35,3.77,12.66,3s9.74-2.66,12.28-4.74,6.11-5,9-5.62c2.65-.56,5.54-1.72,6.4-2.53s.78-4.45.78-4.45Z" style="fill: rgb(38, 50, 56); transform-origin: 397.297px 380.066px;" id="el3lt9tsotq9e" class="animable"></path>
                            <path d="M416.27,357.31s.47,0,.63.86c.18,1,.36,3.92.76,5.57a29.47,29.47,0,0,1,.52,8.85c-.36,1.86-4.69,3.11-7.46,4.13a35.05,35.05,0,0,0-9,5.55c-3,2.41-9.24,4.79-13.35,4.8-6.27,0-10.31-1.72-11.54-4-1.52-2.81-.29-4.41,6.95-7.67,1.37-.62,6.2-3.4,7.84-4.41a37.13,37.13,0,0,0,4.94-3.6,26.49,26.49,0,0,0,2.22-2.15,9.74,9.74,0,0,0,1.85-2.31,6.32,6.32,0,0,0,.22-.61,9.8,9.8,0,0,0,.49-1.68c.12-.6.2-1.47.78-1.82a4.76,4.76,0,0,1,2.57-.28,19.83,19.83,0,0,1,2.78.42c1.06.25,2.28.36,2.9,1.36a5.37,5.37,0,0,1,.57,2.62c0,.42,0,.84,0,1.26,0,.18-.08.51.18.43s.51-.69.6-.9c.21-.47.34-1,.57-1.44a7.48,7.48,0,0,1,.91-1.51,7,7,0,0,1,1.15-1.15,13.06,13.06,0,0,0,1.24-.79A2.84,2.84,0,0,0,416.27,357.31Z" style="fill: rgb(55, 71, 79); transform-origin: 397.281px 372.19px;" id="el1imlqaihmdx" class="animable"></path>
                            <path d="M382.62,376c9.07.72,11.86,6.36,12.21,9.83a21.21,21.21,0,0,1-6.46,1.28c-6.27,0-10.57-1.72-11.8-4C375.14,380.44,376.16,378.33,382.62,376Z" style="fill: rgb(250, 250, 250); transform-origin: 385.417px 381.555px;" id="el6pfdy5r3ix9" class="animable"></path>
                            <path d="M396.22,376.2a.42.42,0,0,0,.28-.1.44.44,0,0,0,.07-.62,10.68,10.68,0,0,0-8.17-3.33.45.45,0,0,0,.09.89,9.85,9.85,0,0,1,7.39,3A.44.44,0,0,0,396.22,376.2Z" style="fill: rgb(240, 240, 240); transform-origin: 392.355px 374.171px;" id="elj6do2zef5gl" class="animable"></path>
                            <path d="M400.15,374a.46.46,0,0,0,.29-.1.44.44,0,0,0,.07-.62,10.68,10.68,0,0,0-8.18-3.32.43.43,0,0,0-.39.48.44.44,0,0,0,.48.4,9.85,9.85,0,0,1,7.39,3A.47.47,0,0,0,400.15,374Z" style="fill: rgb(240, 240, 240); transform-origin: 396.272px 371.976px;" id="eljj57n3w1lj" class="animable"></path>
                            <path d="M403.8,371.4a.46.46,0,0,0,.29-.1.43.43,0,0,0,.06-.62,10.65,10.65,0,0,0-8.17-3.32.45.45,0,0,0-.4.48.46.46,0,0,0,.49.4,9.89,9.89,0,0,1,7.39,3A.44.44,0,0,0,403.8,371.4Z" style="fill: rgb(240, 240, 240); transform-origin: 399.917px 369.376px;" id="elru95z9ovemc" class="animable"></path>
                            <path d="M407.38,368.84a.44.44,0,0,0,.28-.1.44.44,0,0,0,.07-.62c-1.71-2.21-5.62-3.7-8.92-3.38a.45.45,0,0,0-.4.49.45.45,0,0,0,.48.4c3-.29,6.62,1.07,8.14,3A.47.47,0,0,0,407.38,368.84Z" style="fill: rgb(240, 240, 240); transform-origin: 403.117px 366.768px;" id="el57heqdxask6" class="animable"></path>
                            <path d="M453.21,401.81c.25,4.28.91,7.12,2.43,9.63s4.39,3.3,7.29,2.57,6.62-2.7,7.45-6.4,1.32-6.22.66-10.19Z" style="fill: rgb(38, 50, 56); transform-origin: 462.278px 405.845px;" id="eltfac11feed" class="animable"></path>
                            <path d="M465.41,370.81c1.19.1,1.55,5.85,2.24,11.6.74,6.17,2.58,8.72,3.24,13.78.75,5.78-.2,8.36-2.23,11.85S459.47,415,455.94,410c-2.88-4.08-3-8.6-2.74-14.37a129.62,129.62,0,0,0-.38-14.62c-.24-4.33-1.2-8.69-.16-9.18.08.64.16,1.45.25,2.07a10,10,0,0,0,.38,2.31c.12.32.39.66.5.13a3.49,3.49,0,0,0,0-1.07c-.18-1.6.63-1.73,1.06-1.85a54.49,54.49,0,0,1,5.55-.79c.91-.06,4.06-.2,4.47.32a3.54,3.54,0,0,1,.4,1.68c.11.87.31,1.5.33,1.23.06-.62-.06-2.24-.08-2.63s-.07-.89-.08-1.27S465.43,371.18,465.41,370.81Z" style="fill: rgb(55, 71, 79); transform-origin: 461.666px 391.656px;" id="elnvqjrxra74p" class="animable"></path>
                            <path d="M471.22,399.54a14.36,14.36,0,0,1-2.24,8.78c-2,3.49-9.77,6.93-13.3,1.93-1.76-2.49-2.23-5.44-2.47-8.44C455.33,398,467.88,396.25,471.22,399.54Z" style="fill: rgb(250, 250, 250); transform-origin: 462.233px 405.283px;" id="elspdqnxgwml" class="animable"></path>
                            <path d="M455.82,395.53l.15,0s5.58-2.31,11-1.07a.46.46,0,0,0,.54-.33.45.45,0,0,0-.34-.53,20.8,20.8,0,0,0-11.55,1.13.45.45,0,0,0-.21.59A.46.46,0,0,0,455.82,395.53Z" style="fill: rgb(240, 240, 240); transform-origin: 461.444px 394.387px;" id="elzvi055rcs4" class="animable"></path>
                            <path d="M466.67,390.12a.45.45,0,0,0,.37-.3.45.45,0,0,0-.28-.57c-5.36-1.81-11.31.91-11.53,1a.44.44,0,0,0-.19.6.46.46,0,0,0,.6.19c.05,0,5.85-2.67,10.84-1A.58.58,0,0,0,466.67,390.12Z" style="fill: rgb(240, 240, 240); transform-origin: 461.026px 389.858px;" id="elcag6f3e53tu" class="animable"></path>
                            <path d="M466.48,386.05a.43.43,0,0,0,.37-.29.44.44,0,0,0-.27-.56c-5.89-2.12-11.54.86-11.75,1a.44.44,0,1,0,.46.76s5.5-2.88,11-.92A.46.46,0,0,0,466.48,386.05Z" style="fill: rgb(240, 240, 240); transform-origin: 460.745px 385.733px;" id="eljxtghgb7kfp" class="animable"></path>
                            <path d="M466.18,382.06a.45.45,0,0,0,.12-.86c-5.53-2.07-11.61,1-11.84,1.12a.45.45,0,0,0,.45.77s5.94-3,11.07-1.06A.49.49,0,0,0,466.18,382.06Z" style="fill: rgb(235, 235, 235); transform-origin: 460.43px 381.805px;" id="elkb2kvx37im8" class="animable"></path>
                            <path d="M450.5,191c5.37,9.8,9.36,17.82,9.91,47s1.24,43.09,1.36,46.61,2.16,9.79,4,27.11.15,37.59.15,37.59-1.71,3.14-8.34,3.74c-6.1.54-9.13-1.75-9.13-1.75s-8.37-33.72-10.69-44.15-9.84-50.49-9.84-50.49l-4,27.81s1.86,9.56,0,24.74S418.73,340,418.73,340a27.54,27.54,0,0,1-9.38,1.53,15.88,15.88,0,0,1-8.23-2.15s-5.19-45.18-5.19-62.39,1.45-60.24,6.87-85.72Z" style="fill: rgb(69, 90, 100); transform-origin: 431.279px 272.066px;" id="el53ndw2tz7xh" class="animable"></path>
                            <path d="M455,287.7s-3.36-3.51-9.82-2.73-9.08,4.58-9.08,4.58C443,286.43,455,287.7,455,287.7Zm-15.2,3.09c3.8.76,7.6,1.1,15.92-.55C451.74,289.28,439.77,290.79,439.77,290.79Z" style="fill: rgb(255, 189, 167); transform-origin: 445.91px 288.139px;" id="el8m3fs6hjkzx" class="animable"></path>
                            <path d="M412.75,282c-2.38-1.37-11.23-3.17-16.79-2.43l.06,1.87A81.26,81.26,0,0,1,412.75,282Zm-16.63,1.86.09,1.75s8.87-.45,12.59-1.45C402.46,283.65,396.12,283.85,396.12,283.85Z" style="fill: rgb(255, 189, 167); transform-origin: 404.355px 282.504px;" id="eljygubk9jta9" class="animable"></path>
                            <path d="M460.24,298.06c-.22-1-.42-1.95-.61-2.85-1.69-8-2.46-24.36-2.43-37.7,0-4,0-8.19,0-12.62-.16-17.36-1.49-36.81-10.28-49.34l-.7.49c5.9,8.43,8.39,20.09,9.42,32.13-8.72-1.15-10.63-9.76-13.23-21.62q-.52-2.43-1.12-5l-.84.19q.6,2.58,1.12,5c2.59,11.83,4.65,21.2,14.14,22.33.42,5.3.58,10.65.62,15.83,0,4.42,0,8.58,0,12.61,0,13.39.74,29.73,2.44,37.88.19.9.4,1.85.61,2.85,2.26,10.42,5.64,26.05,4,53.26a8.29,8.29,0,0,0,.9-.59C465.85,324,462.49,308.44,460.24,298.06Zm-55.73-82c1.22,5.72,10.36,10.55,14.51,11.54l1.05,5.83c-.2,3.1-.43,6.35-.65,9.71-1.27,18.52-2.58,37.66-1.63,42,2.49,11.37,1.76,18.58.42,31.67-.14,1.34-.28,2.74-.43,4.21-.75,7.6-1.59,15.05-2.15,19.83.32-.06.62-.13.9-.2.55-4.8,1.37-12.1,2.11-19.55.15-1.46.29-2.86.43-4.2,1.35-13.18,2.09-20.44-.44-31.94-.92-4.2.45-24.14,1.65-41.74.14-2.13.29-4.22.42-6.26l3.7,20.52-.52,27,4-27.81-5.45-33.1S410.91,222.74,404.51,216.05Z" style="fill: rgb(55, 71, 79); transform-origin: 434.597px 273.525px;" id="el4ojvhor5rnj" class="animable"></path>
                        </g>
                        <g id="freepik--Top--inject-83" class="animable" style="transform-origin: 441.265px 157.867px;">
                            <path d="M459.45,211.23c-2-9.3-4.6-19.73-4.88-21.77-1.59-11.84.51-17.85,1.29-23,1.69-11.28-1.55-20.73-4.17-23,0,0-2.73-.63-6-1.41a46.19,46.19,0,0,0-5.62-1,66.92,66.92,0,0,0-15.07-.41c-1.22.12-7,1.12-7,1.12-1.75.41-5,1-5,1a37,37,0,0,0-7.76,10c-2.86,5.11-4.49,9.39-5,20.34-.65,13.95-.91,30.74-.91,40.47C410.91,220.65,444.94,223.62,459.45,211.23Z" style="fill: rgb(38, 50, 56); transform-origin: 429.39px 180.049px;" id="el6cikq9focxk" class="animable"></path>
                            <g id="freepik--Head--inject-83" class="animable" style="transform-origin: 433.547px 118.712px;">
                                <path d="M451.91,98.58a11.17,11.17,0,0,1,4.8,6.09,23.66,23.66,0,0,1,1.1,7.81c0,3.78-.37,7.57,0,11.33s1.59,7.6,4.3,10.23c.29.27.61.6.55,1s-.42.6-.77.74a6.62,6.62,0,0,1-7.38-1.77,25.46,25.46,0,0,1,1.1,8,9.5,9.5,0,0,1-3.44,7c-3.3,2.45-8.12,1.58-11.57-.66-5.3-3.44-8.45-9.59-9.27-15.86s.48-12.64,2.58-18.61c.8-2.3,1.73-4.56,2.72-6.78.85-1.91,1.71-3.83,2.68-5.68a8.9,8.9,0,0,1,2.25-3,6.13,6.13,0,0,1,3.5-1.13,13.42,13.42,0,0,1,6.11,1C451.42,98.32,451.67,98.45,451.91,98.58Z" style="fill: rgb(38, 50, 56); transform-origin: 446.874px 123.871px;" id="elth3xfd1t32l" class="animable"></path>
                                <path d="M445.31,96.78c2.49-1.08,6.31,5.86,4.44,9.39C447.46,110.47,440.37,99.63,445.31,96.78Z" style="fill: rgb(0, 119, 182); transform-origin: 446.923px 101.917px;" id="el3tqxj4flusv" class="animable"></path>
                                <path d="M439.58,132c0-3.38,4.94-8.62,8-15.72s2-12.38-1.1-14.19c0-4-1.62-13.23-19.4-14.93-15-1.43-20.68,4.43-22.1,8.65-2,6.06,2.07,9.13,2.07,9.13s-3.81,1.92-1.72,7.19,8.72,3.67,8.72,3.67Z" style="fill: rgb(38, 50, 56); transform-origin: 426.918px 109.47px;" id="eln0weibigcg" class="animable"></path>
                                <path d="M439.49,137.62c0-1.85.23-11.13.23-11.13.08.69,3.45,2.58,6.45-1s3.2-7.38,1.39-9.8c-2-2.67-7.22-2.6-7.71,1.92-2.59-.1-3.84-1.22-2.82-5.49-.27-3-3.65-3.85-3.57-10.35-8.52-5.63-17.15-5.22-22.32-.75a50.34,50.34,0,0,0-2,16.37c.37,9.84,3,14.59,6.16,16.24,2.12,1.1,4,1.36,7.72,1.05l-.17,3.09h0c-.07,1.54.07,2.69-1.43,3.2-1,.34-3.41.8-3.41.8s-3.5,6,6.16,6.59c15.39.87,21.55-6.29,21.55-6.29l-3.4-1C439.78,140.24,439.51,139.47,439.49,137.62Z" style="fill: rgb(255, 189, 167); transform-origin: 428.906px 123.02px;" id="elwj9bxr9oxb8" class="animable"></path>
                                <path d="M426,123l-5.81,1.87A3,3,0,0,0,424,127,3.2,3.2,0,0,0,426,123Z" style="fill: rgb(177, 102, 104); transform-origin: 423.171px 125.069px;" id="elbnrw7pevgfc" class="animable"></path>
                                <path d="M425.66,124.37A3.36,3.36,0,0,0,422.3,127a2.87,2.87,0,0,0,1.69,0,3.15,3.15,0,0,0,2.12-2.55A3.44,3.44,0,0,0,425.66,124.37Z" style="fill: rgb(240, 153, 122); transform-origin: 424.205px 125.748px;" id="elsslxqi5hh6a" class="animable"></path>
                                <path d="M412,108.8l3.64-2a2,2,0,0,0-2.77-.86A2.19,2.19,0,0,0,412,108.8Z" style="fill: rgb(38, 50, 56); transform-origin: 413.708px 107.243px;" id="elih75d1v526s" class="animable"></path>
                                <path d="M429.56,109.09l-4-1.26a2,2,0,0,1,2.57-1.43A2.23,2.23,0,0,1,429.56,109.09Z" style="fill: rgb(38, 50, 56); transform-origin: 427.598px 107.695px;" id="el85gfugx0gox" class="animable"></path>
                                <path d="M416.19,112.41a1.78,1.78,0,0,1-1.6,1.89,1.66,1.66,0,0,1-1.86-1.53,1.78,1.78,0,0,1,1.59-1.9A1.68,1.68,0,0,1,416.19,112.41Z" style="fill: rgb(38, 50, 56); transform-origin: 414.46px 112.586px;" id="ell9tw2kxgl1l" class="animable"></path>
                                <path d="M428.79,112.69a1.79,1.79,0,0,1-1.59,1.9,1.68,1.68,0,0,1-1.87-1.54,1.8,1.8,0,0,1,1.6-1.9A1.68,1.68,0,0,1,428.79,112.69Z" style="fill: rgb(38, 50, 56); transform-origin: 427.06px 112.871px;" id="elxqnqjwwxpnj" class="animable"></path>
                                <path d="M414.8,117.93l5.5,2.61L421.4,110C419.21,110,417,113.64,414.8,117.93Z" style="fill: rgb(240, 153, 122); transform-origin: 418.1px 115.27px;" id="elv7y98ptfjnc" class="animable"></path>
                                <path d="M423,134.68c6.61-.69,12.93-2.86,14.41-5.88a7.87,7.87,0,0,1-2.65,4.87c-4.41,3.69-11.89,3.34-11.89,3.34Z" style="fill: rgb(240, 153, 122); transform-origin: 430.14px 132.909px;" id="elrz1475o7v1j" class="animable"></path>
                            </g>
                            <g id="freepik--Arm--inject-83" class="animable" style="transform-origin: 466.032px 186.137px;">
                                <path d="M462.39,226.75c2.79.79,6.36-2.67,7.33-3.88s-.28-4.07-.87-6.49,0-6.5-3-5.36S456.58,220.24,462.39,226.75Z" style="fill: rgb(240, 153, 122); transform-origin: 465.042px 218.845px;" id="el6lc963kyh32" class="animable"></path>
                                <path d="M451.69,143.48c7.75,1.14,11.35,3,15.61,11.59,5,10,13,23.89,14.27,28.23,1.15,4,3.46,6.92-1,13-4,5.62-16.74,20.34-18.61,22.49-1.65,1.91-.74,7.39,4.94,6.57,0,0-4.32,3.83-6.69,3.4-2.05-.37-5.27-2.16-8.22-8.37-1.87-3.92-.31-7,2.53-11.36,3.38-5.21,10.7-19.74,10.7-19.74l-13.09-23.25S445.08,150.37,451.69,143.48Z" style="fill: rgb(255, 189, 167); transform-origin: 466.032px 186.137px;" id="elec873fvbx" class="animable"></path>
                            </g>
                        </g>
                    </g>
                </g>
                <g id="freepik--speech-bubble--inject-83" class="animable" style="transform-origin: 430.155px 49.9672px;">
                    <g id="freepik--speech-bubble--inject-83" class="animable" style="transform-origin: 430.155px 49.9672px;">
                        <g id="freepik--speech-bubble--inject-83" class="animable" style="transform-origin: 430.155px 49.9672px;">
                            <path d="M428.77,75.17l2.69-5.07-2.17-6.25V60l6.64,3.83v3.83l-2.86,4.94a.35.35,0,0,1-.19.17h0Z" style="fill: rgb(0, 119, 182); transform-origin: 432.35px 67.585px;" id="elmslvacbeeym" class="animable"></path>
                            <g id="elw9t59z7luq7">
                                <path d="M428.77,75.17l2.69-5.07-2.17-6.25V60l6.64,3.83v3.83l-2.86,4.94a.35.35,0,0,1-.19.17h0Z" style="opacity: 0.2; transform-origin: 432.35px 67.585px;" class="animable"></path>
                            </g>
                            <path d="M412.93,29.57a4.39,4.39,0,0,1,2-3.44l1.62-.94a4.43,4.43,0,0,1,4,0l24.84,14.37a4.39,4.39,0,0,1,2,3.44V70.33a4.41,4.41,0,0,1-2,3.44l-1.62.94a4.43,4.43,0,0,1-4,0l-8-4.62L428.92,75a.42.42,0,0,1-.77-.07l-3-8.69-10.23-5.92a4.39,4.39,0,0,1-2-3.44Z" style="fill: rgb(0, 119, 182); transform-origin: 430.155px 49.9672px;" id="elp950b0dbvcp" class="animable"></path>
                            <g id="elud127o2y1xb">
                                <path d="M447.33,70.33a4.41,4.41,0,0,1-2,3.44l-1.62.94a4.48,4.48,0,0,1-3.64.16c.93.35,1.65-.18,1.65-1.31V46.23a4.17,4.17,0,0,0-.58-2L446.75,41a4.06,4.06,0,0,1,.58,2Z" style="opacity: 0.2; transform-origin: 443.7px 58.0905px;" class="animable"></path>
                            </g>
                            <g id="elbmj1f275hl">
                                <path d="M413,29c.23-.85,1-1.12,1.92-.59l24.84,14.37a3.85,3.85,0,0,1,1.4,1.48l5.6-3.23a4.11,4.11,0,0,0-1.41-1.48L420.51,25.19a4.43,4.43,0,0,0-4,0l-1.62.94A4.35,4.35,0,0,0,413,29Z" style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 429.88px 34.4864px;" class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--Like--inject-83" class="animable" style="transform-origin: 426.785px 53.0817px;">
                            <path d="M418.89,50.41A4.1,4.1,0,0,0,420.34,53a3.23,3.23,0,0,0-.21,1.24,3.9,3.9,0,0,0,1.9,3c1.12.66,8.57,5,8.57,5V51s-2.36-5.37-2.57-6.14a24.47,24.47,0,0,1,0-4,2,2,0,0,0-2.3-1,1,1,0,0,0-.51.55,6.55,6.55,0,0,0-.51,1.79,9.27,9.27,0,0,0,.17,3.18l-5.18-3a1,1,0,0,0-1-.14,1.24,1.24,0,0,0-.54,1.12,3.83,3.83,0,0,0,.83,2.23s-1-.31-1,1.08a3.66,3.66,0,0,0,1.26,2.55S418.89,49.44,418.89,50.41Z" style="fill: rgb(250, 250, 250); transform-origin: 424.295px 51.0144px;" id="elyplkgqe7onq" class="animable"></path>
                            <path d="M435.58,54V66.07c0,.27-.19.38-.42.25l-2.89-1.67a.93.93,0,0,1-.42-.73V51.86c0-.27.19-.38.42-.24l2.9,1.66A.9.9,0,0,1,435.58,54Z" style="fill: rgb(250, 250, 250); transform-origin: 433.715px 58.9668px;" id="elxizq5i7fe8" class="animable"></path>
                        </g>
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
</div>
<?php
require_once 'includes/footer.php';
?>