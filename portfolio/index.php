<?php
require_once "../portfolio/includes/mail.php";
require_once "../portfolio/includes/head.php";
$title = "Portfolio";
?>

<body>

    <main class="main">
        <!--
            --------------------------------------------------------------------------------- ACCUEIL ---------------------------------------------------------------------------------
        -->
        <section id="accueil" class="child">
            <?php require_once "../portfolio/includes/burger.php"; ?>


            <div class="container column center-hori center-vert">
                <div class="overlay-title column center-hori center-vert">
                    <h1>Cyril Depont</h1>
                    <h2>Développeur web et web mobile junior</h2>
                    <p class="p-css unselectable">
                        <span class="span-font"># </span><span class="span-cyril">Cyril</span><br />
                        <span class="span-font">{</span><br />
                        &emsp;&emsp;font-family<span class="span-font2">: </span> communiquant<span class="span-font2"> ;</span><br />
                        &emsp;&emsp;font-style<span class="span-font2">: </span> créatif<span class="span-font2"> ;</span><br />
                        &emsp;&emsp;font-variant<span class="span-font2">: </span> curieux<span class="span-font2"> ;</span><br />
                        &emsp;&emsp;font-stretch<span class="span-font2">: </span> excellent relationnel<span class="span-font2"> ;</span><br />
                        &emsp;&emsp;font-size<span class="span-font2">: </span> esprit ouvert<span class="span-font2"> ;</span><br />
                        <span class="span-font">}</span>
                    </p>
                </div>
            </div>
        </section>
        <!--
            --------------------------------------------------------------------------------- À PROPOS ---------------------------------------------------------------------------------
        -->
        <section id="a-propos" class="child">
            <div class="overlay flex center-all px-4 py-8 m-1">
                <p class="p-titre unselectable mx-5">
                    <br />
                    Initialement serveur et m'étant toujours passionné par tout ce qui touche à l'informatique, j’ai décidé de changer d'orientation professionnelle, afin d'exercer un métier qui correspond mieux à mes centres d'intérêts.<br />
                    Suite à ce choix j'ai travaillé quelques mois en tant que photographe/infographiste dans une entreprise;<br />
                    puis me suis intéressé au métier de développeur web qui allie la technicité et la création.<br />
                    Aujourd’hui, je souhaite développer mes compétences afin de m’épanouir dans le cadre d’un métier actuel, en constante évolution, qui fait appel à la créativité.
                </p>

                <div class="container-skills column center-vert unselectable">

                    <p class="p-skills mb-2 p-1">Front-end</p>
                    <div class="group-1 row center-all">
                        <figure>
                            <img class="logo logo-group-1 mx-3" src="images/1-html.png" alt="Logo HTML">
                            <figcaption class="figcaption">HTML</figcaption>
                        </figure>
                        <figure>
                            <img class="logo logo-group-1 mx-3" src="images/2-css.png" alt="Logo CSS">
                            <figcaption class="figcaption">CSS</figcaption>
                        </figure>
                        <figure>
                            <img class="logo logo-group-1 mx-3" src="images/3-javascript.png" alt="Logo JavaScript">
                            <figcaption class="figcaption">JS</figcaption>
                        </figure>
                        <figure>
                            <img class="logo logo-group-2 mx-3" src="images/8-bootstrap.png" alt="Logo Bootstrap">
                            <figcaption class="figcaption">Bootstrap</figcaption>
                        </figure>
                        <figure>
                            <img class="logo logo-group-2 mx-3" src="images/7-wordpress.png" alt="Logo Wordpress">
                            <figcaption class="figcaption">Wordpress</figcaption>
                        </figure>
                        <figure>
                            <img class="logo logo-group-2-resp mx-3" src="images/9-responsive.png" alt="Logo Responsive Design">
                            <figcaption class="figcaption">Responsive</figcaption>
                        </figure>
                    </div>

                    <p class="p-skills mt-2 mb-2 p-1">Back-end</p>
                    <div class="group-3 row center-all">
                        <img class="logo logo-group-3 mx-3" src="images/4-php.png" alt="Logo PHP">
                        <img class="logo logo-group-3 mx-3" src="images/5-sql.png" alt="Logo MySql">
                    </div>

                    <p class="p-skills mt-2 mb-2 p-1">Frameworks en cours d'acquisition</p>
                    <div class="group-4 row center-all">
                        <figure>
                            <img class="logo logo-group-4 mx-3" src="images/10-react.png" alt="Logo React">
                            <figcaption class="figcaption">React</figcaption>
                        </figure>
                        <figure>
                            <img class="logo logo-group-4 mx-3" src="images/11-symfony.png" alt="Logo Symfony">
                            <figcaption class="figcaption">Symfony</figcaption>
                        </figure>
                    </div>

                    <p class="p-skills mt-2 mb-2 p-1">Divers</p>
                    <div class="group-5 row center-all">
                        <figure>
                            <img class="logo logo-group-5 mx-3" src="images/12-github.png" alt="Logo GitHub">
                            <figcaption class="figcaption">GitHub</figcaption>
                        </figure>
                        <figure>
                            <img class="logo logo-group-5 mx-3" src="images/13-figma.png" alt="Logo Figma">
                            <figcaption class="figcaption">Figma</figcaption>
                        </figure>
                        <figure>
                            <img class="logo logo-group-5b mx-3" src="images/14-gimp.png" alt="Logo Gimp">
                            <figcaption class="figcaption">Gimp</figcaption>
                        </figure>
                        <figure>
                            <img class="logo logo-group-5c mx-3" src="images/15-adobe.png" alt="Logo Adobe Photoshop, Indesign et Illustrator">
                            <figcaption class="figcaption fig-adobe">Adobe</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <!--
            --------------------------------------------------------------------------------- PROJETS ---------------------------------------------------------------------------------
        -->
        <section id="projets" class="child row space-evenly p-5">

            <div id="fenetre1" class="overlay-cube">
                <span class="close1 close unselectable">&times;</span>
                <div class="overlay-content column center-hori center-vert" id="projet1">
                    <div class="column center-hori center-vert">
                        <div class="sub-blockOverlay column center-vert center-hori unselectable">
                            <div class="block-imgVid row center-vert center-hori">
                                <figure>
                                    <img class="img-overlay1 images" src="images/maquetteCertif.png" alt="Screenshot du projet" />
                                </figure>
                            </div>
                        </div>
                        <p class="p-overlay p-overlay1">
                            Projet fin de formation.<br />
                            Maquette du site réalisée avec Figma<br />
                        </p>
                        <div class="blockLink-video">
                            <a href="videoTutotoform.php" class="link-video">&gt;&gt; <span class="span-video">Vidéo</span> &lt;&lt;</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fenetre2" class="overlay-cube">
                <span class="close2 close unselectable">&times;</span>
                <div class="overlay-content column center-hori center-vert" id="projet2">
                    <div class="column center-hori center-vert">
                        <div class="sub-blockOverlay column center-vert center-hori unselectable">
                            <div class="block-imgVid row center-vert center-hori">
                                <figure>
                                    <img class="img-overlay1 images" src="images/capturem.webp" alt="Screenshot du projet" />
                                </figure>
                            </div>
                        </div>
                        <p class="p-overlay p-overlay1">
                            Projet de groupe.<br />
                            Maquette du site réalisée avec Figma<br />
                        </p>
                        <div class="blockLink-video">
                            <a href="videoQCA.php" class="link-video">&gt;&gt; <span class="span-video">Vidéo</span> &lt;&lt;</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fenetre3" class="overlay-cube">
                <span class="close3 close unselectable">&times;</span>
                <div class="overlay-content column center-hori center-vert" id="projet3">
                    <div class="column center-hori center-vert">
                        <div class="sub-blockOverlay column center-vert center-hori unselectable">
                            <div class="block-imgVid column center-vert center-hori">
                                <figure class="figure2">
                                    <img class="img-overlay2 images" src="images/capture11m.webp" alt="Screenshot du projet" />
                                    <p class="p-overlay2">
                                        Projet de groupe.<br />
                                        Maquette du site réalisée avec Figma<br />
                                        (4e page).<br />
                                    </p>
                                </figure>
                                <div class="blockLink-video">
                                    <a href="videoBlogPhoto.php" class="link-video">&gt;&gt; <span class="span-video">Vidéo</span> &lt;&lt;</a>
                                </div>
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
                            <div class="block-imgVid row center-vert center-hori">
                                <figure class="row center-hori center-vert">
                                    <img class="img-overlay3 images" src="images/capture8.webp" alt="Screenshot du projet" />
                                    <img class="img-overlay3 img-overlay3-marg images" src="images/capture12.webp" alt="Screenshot du projet" />
                                    <img class="img-overlay3 img-overlay3-marg images" src="images/capture10.webp" alt="Screenshot du projet" />
                                </figure>
                                <div class="marg-projet3 column center-hori center-vert">
                                    <p class="p-overlay">
                                        Maquette du site réalisée avec Figma
                                    </p>
                                    <div class="blockLink-video">
                                        <a href="videoTutoJavascript.php" class="link-video">&gt;&gt; <span class="span-video">Vidéo</span> &lt;&lt;</a>
                                    </div>
                                </div>
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
                                <figure>
                                    <img class="img-overlay images" src="images/capture5m.webp" alt="Screenshot du projet" />
                                </figure>
                                <p class="p-overlay">
                                    Jeu : Guess the number en JavaScript.
                                </p>
                                <div class="blockLink-video">
                                    <a href="videoDevinerNombre.php" class="link-video">&gt;&gt; <span class="span-video">Vidéo</span> &lt;&lt;</a>
                                </div>
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
                                <figure>
                                    <img class="img-overlay images" src="images/capture4m.webp" alt="Screenshot du projet" />
                                </figure>
                                <div class="blockLink-video">
                                    <a href="videoCompany.php" class="link-video">&gt;&gt; <span class="span-video">Vidéo</span> &lt;&lt;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="radio-group unselectable column center-all p-6">
                <label class="labelCube">
                    <input class="inputCube" type="radio" name="rotate-cube-side" value="front" checked />1) Tutotoform
                </label>
                <label class="labelCube">
                    <input class="inputCube" type="radio" name="rotate-cube-side" value="right" />2) QCA
                </label>
                <label class="labelCube">
                    <input class="inputCube" type="radio" name="rotate-cube-side" value="back" />3) Blog photo
                </label>
                <label class="labelCube">
                    <input class="inputCube" type="radio" name="rotate-cube-side" value="left" />4) Tuto JavaScript
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
                                <h3 class="projet-titre1">Tutotoform</h3>
                                <img class="img-face1" src="images/accueilcertif.png" alt="images projet 1">
                                <p class="p-face1">
                                    Mon projet de fin de formation.
                                </p>
                            </div>
                        </div>

                        <div class="face-cube face-right column center-hori center-vert">
                            <div id="face2" class="face">
                                <h3 class="projet-titre">QCA</h3>
                                <img class="img-face2" src="images/capture1m.webp" alt=" images projet 2">
                                <p class="p-face1">
                                    Un projet de groupe réalisé pendant la formation.<br />
                                    Mon travail consistait à réaliser, la page d'accueil, le menu et le pied de page, la
                                    page de confidentialité.
                                </p>
                            </div>
                        </div>

                        <div class="face-cube face-back column center-hori center-vert">
                            <div id="face3" class="face">
                                <h3 class="projet-titre">Blog photo</h3>
                                <img class="img-face3" src="images/capture2m.webp" alt=" images projet 3">
                                <p class="p-face2">
                                    Un projet de groupe réalisé pendant la formation.<br />
                                    Mon travail consistait à réaliser la page materiel.
                                </p>
                            </div>
                        </div>
                        <div class="face-cube face-left column center-hori center-vert">
                            <div id="face4" class="face">
                                <h3 class="projet-titre">Tuto JavaScript</h3>
                                <img class="img-face4" src="images/capture3m.webp" alt="images projet 4">
                                <p class="p-face4">
                                    Un projet personnel.
                                </p>
                            </div>
                        </div>
                        <div class="face-cube face-top column center-hori center-vert">
                            <div id="face5" class="face">
                                <h3 class="projet-titre">Deviner le nombre</h3>
                                <img class="img-face5" src="images/capture5m.webp" alt="images projet 5">
                                <p class="p-face5">
                                    Un projet personnel.
                                </p>
                            </div>
                        </div>
                        <div class="face-cube face-bottom column center-hori center-vert">
                            <div id="face6" class="face">
                                <h3 class="projet-titre">Company</h3>
                                <img class="img-face6" src="images/capture4m.webp" alt="images projet 6">
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
            --------------------------------------------------------------------------------- CONTACT ---------------------------------------------------------------------------------
        -->
        <section id="contact" class="child">

            <form class="formContact column center-all p-5" method="post" action="<?php echo $_SERVER['PHP_SELF'] . '#contact'; ?>">
                <h3 class="h3-contact">Me contacter</h3>
                <div class="column center-hori center-vert">
                    <div class="block-landscape">
                        <div class="block-email column mt-5">
                            <label class="email" for="email">Email</label>
                            <input class="mailText input-mail p-3" type="email" name="email" placeholder="laurent@gmail.com" required>
                        </div>
                        <div class="block-message column mt-5">
                            <label class="message" for="message">Message</label>
                            <textarea cols="30" class="mailText textarea p-3" name="message" placeholder="Tapez votre message ici..." required></textarea>
                        </div>
                    </div>
                    <input id="envoyer" class="px-5 py-1 mt-6" name="formInscription" type="submit" value="Envoyer" />
                </div>
                <div class="message row centerH centerV">

                    <?php
                    if (isset($erreur)) {
                        echo '<span class="red mt-2">' . $erreur . "</span>";
                    }
                    if (isset($valide)) {
                        echo '<span class="green mt-2">' . $valide . "</span>";
                    }
                    ?>

                </div>
            </form>
            <div class="block-social row">
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
                <a href="images/CV 08-06-2022.png" download class="svg-social linkCV row center-hori center-vert">CV</a>
            </div>

        </section>

    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/85188/jquery.ripples-min.js"></script>
    <script src="js/portfolio.js"></script>
</body>

</html>