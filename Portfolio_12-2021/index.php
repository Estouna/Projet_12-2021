<!DOCTYPE html>

<?php
if (isset($_POST['message'])) {
    $position_arobase = strpos($_POST['email'], '@');
    if ($position_arobase === false)
        $erreur = "Votre email doit comporter un arobase.";
    else {
        $retour = mail('cyril.depont@yahoo.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
        if ($retour) {
            $valide = "Votre message a été envoyé.";
            header("Refresh: 5; URL=index.php#contact");
        } else
            $erreur = "Erreur";
    }
}
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/favicon2.png">
    <link rel="stylesheet preload" href="portfolio.css" as="style" onload="this.rel = 'stylesheet'">
    <link rel="stylesheet preload" href="portfolio-all.css" as="style" onload="this.rel = 'stylesheet'">
    <noscript>
        <link rel="stylesheet" href="portfolio.css">
        <link rel="stylesheet" href="portfolio-all.css">
    </noscript>
    <title>Portfolio</title>
</head>

<body>

    <main class="main">
        <!--
            -_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_ACCUEIL-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
        -->
        <section id="accueil" class="child">
            <!--
                Menu burger
            -->
            <div id="bloc-menuCercle">
                <div class="menu menu--circle">

                    <input type="checkbox" id="menu__active" />
                    <label for="menu__active" class="menu__active">

                        <div class="menu__toggle">
                            <div class="icon">
                                <div class="hamburger"></div>
                            </div>
                        </div>
                        <input type="radio" name="arrow--up" id="degree--up-0" class="boutons" />
                        <input type="radio" name="arrow--up" id="degree--up-1" class="boutons" />
                        <input type="radio" name="arrow--up" id="degree--up-2" class="boutons" />
                        <div class="menu__listings">
                            <ul class="circle">
                                <li>
                                    <div class="placeholder">
                                        <div class="upside">
                                            <a href="#" class="button b5">

                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="placeholder">
                                        <div class="upside">
                                            <a href="#projets" class="button b4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="svg projets" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
                                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                                    <path d="M14 6V4h-4v2h4zM4 8v11h16V8H4zm16-2c1.11 0 2 .89 2 2v11c0 1.11-.89 2-2 2H4c-1.11 0-2-.89-2-2l.01-11c0-1.11.88-2 1.99-2h4V4c0-1.11.89-2 2-2h4c1.11 0 2 .89 2 2v2h4z" />
                                                </svg>
                                                <br /><span class="span-b1b4">PROJETS</span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="placeholder">
                                        <div class="upside">
                                            <a href="#a-propos" class="button b3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="svg a-propos" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
                                                    <g>
                                                        <rect fill="none" height="24" width="24" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M9,15c-2.67,0-8,1.34-8,4v2h16v-2C17,16.34,11.67,15,9,15z M3,19c0.22-0.72,3.31-2,6-2c2.7,0,5.8,1.29,6,2H3z" />
                                                            <path d="M4.74,9H5c0,2.21,1.79,4,4,4s4-1.79,4-4h0.26c0.27,0,0.49-0.22,0.49-0.49V8.49c0-0.27-0.22-0.49-0.49-0.49H13 c0-1.48-0.81-2.75-2-3.45V5.5C11,5.78,10.78,6,10.5,6S10,5.78,10,5.5V4.14C9.68,4.06,9.35,4,9,4S8.32,4.06,8,4.14V5.5 C8,5.78,7.78,6,7.5,6S7,5.78,7,5.5V4.55C5.81,5.25,5,6.52,5,8H4.74C4.47,8,4.25,8.22,4.25,8.49v0.03C4.25,8.78,4.47,9,4.74,9z M11,9c0,1.1-0.9,2-2,2s-2-0.9-2-2H11z" />
                                                            <path d="M21.98,6.23l0.93-0.83l-0.75-1.3l-1.19,0.39c-0.14-0.11-0.3-0.2-0.47-0.27L20.25,3h-1.5L18.5,4.22 c-0.17,0.07-0.33,0.16-0.48,0.27L16.84,4.1l-0.75,1.3l0.93,0.83C17,6.4,17,6.58,17.02,6.75L16.09,7.6l0.75,1.3l1.2-0.38 c0.13,0.1,0.28,0.18,0.43,0.25L18.75,10h1.5l0.27-1.22c0.16-0.07,0.3-0.15,0.44-0.25l1.19,0.38l0.75-1.3l-0.93-0.85 C22,6.57,21.99,6.4,21.98,6.23z M19.5,7.75c-0.69,0-1.25-0.56-1.25-1.25s0.56-1.25,1.25-1.25s1.25,0.56,1.25,1.25 S20.19,7.75,19.5,7.75z" />
                                                            <path d="M19.4,10.79l-0.85,0.28c-0.1-0.08-0.21-0.14-0.33-0.19L18.04,10h-1.07l-0.18,0.87c-0.12,0.05-0.24,0.12-0.34,0.19 l-0.84-0.28l-0.54,0.93l0.66,0.59c-0.01,0.13-0.01,0.25,0,0.37l-0.66,0.61l0.54,0.93l0.86-0.27c0.1,0.07,0.2,0.13,0.31,0.18 L16.96,15h1.07l0.19-0.87c0.11-0.05,0.22-0.11,0.32-0.18l0.85,0.27l0.54-0.93l-0.66-0.61c0.01-0.13,0.01-0.25,0-0.37l0.66-0.59 L19.4,10.79z M17.5,13.39c-0.49,0-0.89-0.4-0.89-0.89c0-0.49,0.4-0.89,0.89-0.89s0.89,0.4,0.89,0.89 C18.39,12.99,17.99,13.39,17.5,13.39z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                                <br /><span class="span-b3b6 span-aPropos">À PROPOS</span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="placeholder">
                                        <div class="upside">
                                            <a href="#" class="button b2">

                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="placeholder">
                                        <div class="upside">
                                            <a href="#accueil" class="button b1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="svg accueil" height="18px" viewBox="0 0 24 24" width="18px" fill="currentColor">
                                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                                    <path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z" />
                                                </svg>
                                                <br /><span class="span-b1b4">ACCCUEIL</span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="placeholder">
                                        <div class="upside">
                                            <a href="#" class="button b?">?

                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="placeholder">
                                        <div class="upside">
                                            <a href="#" class="button b7">7

                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="placeholder">
                                        <div class="upside">
                                            <a href="#" class="button b8"><br />8

                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="placeholder">
                                        <div class="upside">
                                            <a href="#" class="button b9">9

                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="placeholder">
                                        <div class="upside">
                                            <a href="#contact" class="button b6">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="svg contact" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
                                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                                    <path d="M15 12h2c0-2.76-2.24-5-5-5v2c1.66 0 3 1.34 3 3zm4 0h2c0-4.97-4.03-9-9-9v2c3.87 0 7 3.13 7 7zm1 3.5c-1.25 0-2.45-.2-3.57-.57-.1-.03-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.44-5.15-3.75-6.59-6.59l2.2-2.21c.28-.26.36-.65.25-1C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1zM5.03 5h1.5c.07.88.22 1.75.45 2.58l-1.2 1.21c-.4-1.21-.66-2.47-.75-3.79zM19 18.97c-1.32-.09-2.6-.35-3.8-.76l1.2-1.2c.85.24 1.72.39 2.6.45v1.51z" />
                                                </svg>
                                                <br /><span class="span-b3b6">CONTACT</span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <div class="menu__arrow menu__arrow--top">

                            <ul>
                                <li>
                                    <label for="degree--up-0">
                                        <div class="arrow"></div>
                                    </label>
                                    <label for="degree--up-1">
                                        <div class="arrow"></div>
                                    </label>
                                    <label for="degree--up-2">
                                        <div class="arrow"></div>
                                    </label>
                                </li>
                            </ul>

                        </div>
                    </label>
                </div>
            </div>

            <!--
                Fin menu burger
            -->

            <div class="container column center-hori center-vert">
                <div class="overlay-title column center-hori center-vert">
                    <h1>Cyril Depont</h1>
                    <h2>Développeur web et web mobile en formation</h2>
                    <p class="p-css unselectable">
                        <span class="span-font"># </span><span class="span-cyril">Cyril</span><br />
                        <span class="span-font">{</span><br />
                        &emsp;&emsp;font-family<span class="span-font2">: </span> communiquant<span class="span-font2">;</span><br />
                        &emsp;&emsp;font-style<span class="span-font2">: </span> créatif<span class="span-font2">;</span><br />
                        &emsp;&emsp;font-variant<span class="span-font2">: </span> curieux<span class="span-font2">;</span><br />
                        &emsp;&emsp;font-stretch<span class="span-font2">: </span> excellent relationnel<span class="span-font2">;</span><br />
                        &emsp;&emsp;font-size<span class="span-font2">: </span> esprit ouvert<span class="span-font2">;</span><br />
                        <span class="span-font">}</span>
                    </p>
                </div>
            </div>
        </section>
        <!--
            -_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_À PROPOS-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
        -->
        <section id="a-propos" class="child">
            <div class="overlay">
                <p class="p-titre unselectable">
                    <br />
                    Initialement serveur et m'étant toujours passionné par tout ce qui touche à l'informatique, j’ai décidé de changer d'orientation professionnelle, afin d'exercer un métier qui correspond mieux à mes centres d'intérêts.<br />
                    Suite à ce choix j'ai travaillé quelques mois en tant que photographe/infographiste dans une entreprise;<br />
                    puis me suis intéressé au métier de développeur web qui allie la technicité et la création.<br />
                    Aujourd’hui, je souhaite développer mes compétences afin de m’épanouir dans le cadre d’un métier actuel, en constante évolution, qui fait appel à la créativité.
                </p>
                <div class="container-skills column center-vert unselectable">
                    <h3>Mes skills</h3>

                    <div class="block-skillsBar row">
                        <p class="p-skills row center-hori center-vert">HTML</p>
                        <div class="skills-bar row center-vert">
                            <div class="skills html">90%</div>
                        </div>
                    </div>

                    <div class="block-skillsBar row">
                        <p class="p-skills row center-hori center-vert">CSS</p>
                        <div class="skills-bar row center-vert">
                            <div class="skills css">80%</div>
                        </div>
                    </div>

                    <div class="block-skillsBar row">
                        <p class="p-skills row center-hori center-vert">JavaScript</p>
                        <div class="skills-bar row center-vert">
                            <div class="skills js">15%</div>
                        </div>
                    </div>

                    <div class="block-skillsBar row">
                        <p class="p-skills row center-hori center-vert">Responsive</p>
                        <div class="skills-bar row center-vert">
                            <div class="skills responsive">95%</div>
                        </div>
                    </div>

                    <div class="block-skillsBar row">
                        <p class="p-skills row center-hori center-vert">PHP</p>
                        <div class="skills-bar row center-vert">
                            <div class="skills php">15%</div>
                        </div>
                    </div>

                    <div class="block-skillsBar row">
                        <p class="p-skills row center-hori center-vert">MySQL</p>
                        <div class="skills-bar row center-vert">
                            <div class="skills mySql">15%</div>
                        </div>
                    </div>

                    <div class="block-skillsBar row">
                        <p class="p-skills row center-hori center-vert">Wordpress</p>
                        <div class="skills-bar row center-vert">
                            <div class="skills wordpress">50%</div>
                        </div>
                    </div>

                    <div class="block-skillsBar row">
                        <p class="p-skills row center-hori center-vert">Bootstrap</p>
                        <div class="skills-bar row center-vert">
                            <div class="skills bootstrap">20%</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
            -_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_PROJETS-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
        -->
        <section id="projets" class="child row center-hori center-vert">

            <div id="fenetre1" class="overlay-cube">
                <span class="close1 close unselectable">&times;</span>
                <div class="overlay-content column center-hori center-vert" id="projet1">
                    <div class="column center-hori center-vert">
                        <div class="sub-blockOverlay column center-vert center-hori unselectable">
                            <div class="block-imgVid row center-vert center-hori">
                                <figure>
                                    <img class="img-overlay1 images" src="images/Capturem.jpg" alt="Screenshot du projet" />
                                </figure>
                                <video class="video" width="870" height="490" controls muted loop>
                                    <source src="images/enreg1.mp4" type=video/mp4>
                                </video>
                            </div>
                        </div>
                        <p class="p-overlay p-overlay1">
                            Projet de groupe.<br />
                            Maquette du site réalisée avec Figma<br />
                        </p>
                    </div>
                </div>
            </div>

            <div id="fenetre2" class="overlay-cube">
                <span class="close2 close unselectable">&times;</span>
                <div class="overlay-content column center-hori center-vert" id="projet2">
                    <div class="column center-hori center-vert">
                        <div class="sub-blockOverlay column center-vert center-hori unselectable">
                            <div class="block-imgVid row center-vert center-hori">
                                <figure class="figure2">
                                    <img class="img-overlay2 images" src="images/Capture11m.png" alt="Screenshot du projet" />
                                    <p class="p-overlay2">
                                        Projet de groupe.<br />
                                        Maquette du site réalisée avec Figma<br />
                                        (4e page).<br />
                                    </p>
                                </figure>
                                <video class="video" width="870" height="490" controls muted loop>
                                    <source src="images/enreg2.mp4" type=video/mp4>
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fenetre3" class="overlay-cube">
                <span class="close3 close unselectable">&times;</span>
                <div class="overlay-content column center-hori center-vert" id="projet3">
                    <div class="column center-hori center-vert">
                        <div class="sub-blockOverlay column center-vert center-hori unselectable">
                            <div class="block-imgVid row center-vert center-hori">
                                <figure class="row center-hori center-vert">
                                    <img class="img-overlay3 images" src="images/Capture8.png" alt="Screenshot du projet" />
                                    <img class="img-overlay3 images" src="images/Capture12.png" alt="Screenshot du projet" />
                                    <img class="img-overlay3 images" src="images/Capture10.png" alt="Screenshot du projet" />
                                </figure>
                                <div>
                                    <video class="video" width="870" height="490" controls muted loop>
                                        <source src="images/enreg3.mp4" type=video/mp4>
                                    </video>
                                </div>
                                <p class="p-overlay">
                                    Maquette du site réalisée avec Figma
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fenetre4" class="overlay-cube">
                <span class="close4 close unselectable">&times;</span>
                <div class="overlay-content column center-hori center-vert" id="projet4">
                    <div class="column center-hori center-vert">
                        <div class="sub-blockOverlay column center-vert center-hori unselectable">
                            <div class="block-imgVid column center-vert center-hori">
                                <video class="video" width="870" height="490" controls muted loop>
                                    <source src="images/enreg6.mp4" type=video/mp4>
                                </video>
                                <p class="p-overlay">
                                    Formulaire.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fenetre5" class="overlay-cube">
                <span class="close5 close unselectable">&times;</span>
                <div class="overlay-content column center-hori center-vert" id="projet5">
                    <div class="column center-hori center-vert">
                        <div class="sub-blockOverlay column center-vert center-hori unselectable">
                            <div class="block-imgVid column center-vert center-hori">
                                <video class="video" width="870" height="490" controls muted loop>
                                    <source src="images/enreg5.mp4" type=video/mp4>
                                </video>
                                <p class="p-overlay">
                                    Jeu : Guess the number en JavaScript.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fenetre6" class="overlay-cube">
                <span class="close6 close unselectable">&times;</span>
                <div class="overlay-content column center-hori center-vert" id="projet6">
                    <div class="column center-hori center-vert">
                        <div class="sub-blockOverlay column center-vert center-hori unselectable">
                            <div class="block-imgVid column center-vert center-hori">
                                <video class="video" width="870" height="490" controls muted loop>
                                    <source src="images/enreg4.mp4" type=video/mp4>
                                </video>
                                <p class="p-overlay">
                                    Company.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="radio-group unselectable">
                <label class="labelCube">
                    <input class="inputCube" type="radio" name="rotate-cube-side" value="front" checked />1) QCA
                </label>
                <label class="labelCube">
                    <input class="inputCube" type="radio" name="rotate-cube-side" value="right" />2) Blog photo
                </label>
                <label class="labelCube">
                    <input class="inputCube" type="radio" name="rotate-cube-side" value="back" />3) Tuto JavaScript
                </label>
                <label class="labelCube">
                    <input class="inputCube" type="radio" name="rotate-cube-side" value="left" />4) Formulaire
                </label>
                <label class="labelCube">
                    <input class="inputCube" type="radio" name="rotate-cube-side" value="top" />5) Deviner le nombre
                </label>
                <label class="labelCube">
                    <input class="inputCube" type="radio" name="rotate-cube-side" value="bottom" />6) Company
                </label>
            </p>
            <div class="scene row center-hori center-vert">
                <div class="cube-container">
                    <div class="cube unselectable">

                        <div class="face-cube face-front column center-hori center-vert">
                            <div id="face1" class="face">
                                <h3 class="projet-titre1">QCA</h3>
                                <img class="img-face1" src="images/capture1m.png" alt="images projet 1">
                                <p class="p-face1">
                                    Un projet de groupe réalisé pendant la formation.<br />
                                    Mon travail consistait à réaliser, la page d'accueil, le menu et le pied de page, la
                                    page de confidentialité.
                                </p>
                            </div>
                        </div>

                        <div class="face-cube face-right column center-hori center-vert">
                            <div id="face2" class="face">
                                <h3 class="projet-titre">Blog photo</h3>
                                <img class="img-face2" src="images/capture2m.png" alt=" images projet 2">
                                <p class="p-face2">
                                    Un projet de groupe réalisé pendant la formation.<br />
                                    Mon travail consistait à réaliser la page materiel.
                                </p>
                            </div>
                        </div>

                        <div class="face-cube face-back column center-hori center-vert">
                            <div id="face3" class="face">
                                <h3 class="projet-titre">Tuto JavaScript</h3>
                                <img class="img-face3" src="images/capture3m.jpg" alt=" images projet 3">
                                <p class="p-face3">
                                    Un projet personnel.
                                </p>
                            </div>
                        </div>
                        <div class="face-cube face-left column center-hori center-vert">
                            <div id="face4" class="face">
                                <h3 class="projet-titre">Formulaire</h3>
                                <img class="img-face4" src="images/capture6m.png" alt="images projet 4">
                                <p class="p-face4">
                                    Un projet personnel.
                                </p>
                            </div>
                        </div>
                        <div class="face-cube face-top column center-hori center-vert">
                            <div id="face5" class="face">
                                <h3 class="projet-titre">Deviner le nombre</h3>
                                <img class="img-face5" src="images/capture5m.png" alt="images projet 5">
                                <p class="p-face5">
                                    Un projet personnel.
                                </p>
                            </div>
                        </div>
                        <div class="face-cube face-bottom column center-hori center-vert">
                            <div id="face6" class="face">
                                <h3 class="projet-titre">Company</h3>
                                <img class="img-face6" src="images/capture4m.png" alt="images projet 6">
                                <p class="p-face6">
                                    Un projet personnel.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--
            -_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_CONTACT-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
        -->
        <section id="contact" class="child">

            <form class="formContact column center-hori center-vert" method="post" action="<?php echo $_SERVER['PHP_SELF'] . '#contact'; ?>">
                <h3 class="h3-contact">Me contacter</h3>
                <div class="column center-hori center-vert">
                    <div class="block-landscape">
                        <div class="block-email column">
                            <label class="email" for="email">Email</label>
                            <input class="mailText input-mail" type="email" name="email" placeholder="laurent@gmail.com" required>
                        </div>
                        <div class="block-message column">
                            <label class="message" for="message">Message</label>
                            <textarea rows="10" cols="30" class="mailText textarea" name="message" placeholder="Tapez votre message ici..." required></textarea>
                        </div>
                    </div>
                    <input id="envoyer" name="formInscription" type="submit" value="Envoyer" />
                </div>
                <div class="message row centerH centerV">

                    <?php
                    if (isset($erreur)) {
                        echo '<span class="red">' . $erreur . "</span>";
                    }
                    if (isset($valide)) {
                        echo '<span class="green">' . $valide . "</span>";
                    }
                    ?>

                </div>
            </form>
            <div class="block-social row center-hori center-vert">
                <a href="https://github.com/search?q=Estouna&type=users">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github svg-social" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                </a>
                <a href="https://fr.linkedin.com/in/cyril-depont-08a8b9218">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin svg-social" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                </a>
                <a href="images/CV.png" download class="svg-social linkCV row center-hori center-vert">CV</a>
            </div>

        </section>

    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/85188/jquery.ripples-min.js"></script>
    <script src="portfolio.js"></script>
</body>

</html>