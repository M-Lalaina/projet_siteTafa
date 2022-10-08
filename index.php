<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Fonts/awesome  cdn link  -->

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        />

        <!-- Bootstrap -->

        <link
            rel="stylesheet"
            href="./node_modules/bootstrap/dist/css/bootstrap.min.css"
        />

        <!-- .css -->

        <link rel="stylesheet" href="./assets/styles/css/style.css" />

        <title>Tafa website</title>
    </head>
    <body>
        <header>
            <div class="container-fluid pt-3 px-5 mb-5">
                <div class="row pb-3">
                    <div class="col-4">
                        <img id="logo_tafa_1" alt="logo_tafa1" />
                        <!-- <img
                            src="./assets/imgs/logo_tafa.0.png"
                            alt=""
                            width="70px"
                        /> -->
                    </div>

                    <div
                        class="col-8 px-0 d-flex justify-content-end align-items-end"
                    >
                        <nav>
                            <ul
                                class="d-flex justify-content-end m-0 p-0 gap-4 gap-lg-5"
                            >
                                <li class="list-group-item">
                                    <a
                                        class="nav-link text-uppercase fw-bold"
                                        href="index.html"
                                    >
                                        accueil
                                    </a>
                                </li>

                                <!-- Qui somme nous -->

                                <li class="list-group-item">
                                    <a
                                        class="nav-link text-uppercase fw-bold"
                                        href="#"
                                    >
                                        Qui sommes-nous
                                    </a>
                                    <!-- select -->

                                    <ul class="px-0 py-2">
                                        <!-- à propos de Tafa-->

                                        <li>
                                            <a
                                                href="./pages/apropos.html"
                                                class="nav-link fw-bold text-uppercase"
                                            >
                                                à propos
                                            </a>
                                        </li>

                                        <!-- détails sur la formation -->

                                        <li>
                                            <a
                                                href="./pages/formations.html"
                                                class="nav-link fw-bold text-uppercase"
                                            >
                                                nos formations
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Notre histoire -->

                                <li class="list-group-item">
                                    <a
                                        class="nav-link text-uppercase fw-bold"
                                        href="./pages/historique.html"
                                        >historique</a
                                    >
                                    <!-- <ul class="px-0 py-2 lh-lg">
                                        <li>
                                            <a
                                                href="./pages/historique.html"
                                                class="nav-link fw-bold text-uppercase"
                                                >2020</a
                                            >
                                        </li>                              

                                        <li>
                                            <a
                                                href="./pages/historique.html"
                                                class="nav-link fw-bold text-uppercase"
                                            >
                                                2021
                                            </a>
                                        </li>
                                    </ul> -->
                                </li>

                                <!-- Nous contacter -->

                                <li class="list-group-item">
                                    <a
                                        class="nav-link text-uppercase fw-bold"
                                        href="./pages/contact.html"
                                        >contact</a
                                    >
                                </li>

                                <!-- icon for darkmode -->

                                <li id="list_icon">
                                    <i
                                        id="icon_darkmode"
                                        class="fa fa-moon fs-6 text-black"
                                    ></i>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- / -->

            <div class="container-fluid bg__purple" id="heading">
                <div class="row">
                    <div
                        class="col-lg-6 d-flex align-items-center text_heading pt-3"
                    >
                        <div class="p-3 text-center">
                            <div class="title">
                                <h1 class="text-uppercase pb-5">
                                    Talent factory [TAFA]
                                </h1>
                            </div>

                            <div class="subtitle text-center">
                                <p class="fs-4 fw-bolder lh-lg">
                                    <span>
                                        <i
                                            class="fa-solid fa-quote-left pe-2"
                                        ></i>
                                    </span>
                                    <br />
                                    <span
                                        >Une passerelle vers l'employabilité des
                                        jeunes dans les métiers d'avenir du
                                        numérique .</span
                                    >
                                    <br />
                                    <span>
                                        <i
                                            class="fa-solid fa-quote-right ps-2"
                                        ></i>
                                    </span>
                                </p>
                            </div>

                            <div
                                class="d-flex justify-content-center align-items-center"
                            >
                                <i
                                    class="fa-solid fa-arrow-right pe-3 fs-2 text-white"
                                ></i>
                                <button class="btn bg-white">
                                    <a href="#" class="nav-link"
                                        >En savoir plus</a
                                    >
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <figure class="m-lg-5 m-md-5">
                            <img
                                src="./assets/imgs/photo_grp.png"
                                alt=""
                                width="100%"
                            />
                            <figcaption class="text-white text-end">
                                TAFA2.0
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </header>

        <!-- main Content -->

        <main>
            <div class="container-fluid py-5">
                <div class="row">
                    <div
                        class="col-lg d-flex align-items-center justify-content-center"
                    >
                        <img
                            src="./assets/imgs/subscribe.png"
                            alt=""
                            width="80%"
                        />
                    </div>

                    <div class="col-lg">
                        <div
                            class="d-flex align-items-center justify-content-center py-5"
                        >
                            <div class="px-3">
                                <!-- <div class="pb-2">
                                    <p class="m-0 fs-5 lh-lg subtitle">
                                        TAFA est une opportunité pour les jeunes
                                        malgaches de se forger un avenir dans
                                        les métiers du numérique. <br />
                                        Elle est soutenu par l'association
                                        <a
                                            href="https://rise.passion4humanity.com/"
                                            target="_blank"
                                            class="link"
                                            >RISE</a
                                        >
                                        et piloté par
                                        <a
                                            href="https://www.passion4humanity.com/"
                                            target="_blank"
                                            class="link"
                                        >
                                            Passion for Humanity.
                                        </a>
                                    </p>
                                </div> -->

                                <!-- / -->

                                <div class="mt-5">
                                    <p
                                        class="m-0 fs-3 lh-lg subtitle fw-bold"
                                        id="subscribe"
                                    >
                                        Si vous aussi vous voulez saisir cette
                                        opportunité, inscrivez-vous dès
                                        maintenant pour intégerer la prochaîne
                                        promotion de Talent Factory 3.0.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div
                                class="d-flex align-items-center justify-content-center py-5"
                            >
                                <img
                                    src="./assets/imgs/flèche_down.png"
                                    alt=""
                                    width="100px"
                                />
                            </div>
                            <div
                                class="d-flex align-items-center justify-content-center"
                            >
                                <form action="./assets/php/inscription.php">
                                    <button
                                        type="submit"
                                        class="button type"
                                        id="subscribe_btn"
                                    >
                                        <a
                                            class="nav-link text-uppercase"
                                            href=""
                                        >
                                            S' inscrire
                                        </a>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr />

            <div class="container-fluid my-5">
                <div class="row">
                    <p class="fs-1 text-center title">Nos références</p>

                    <div class="row my-3">
                        <div
                            class="col references py-5 px-3 subtitle text-white"
                        >
                            <p class="text-uppercase fw-bold sous_titre">
                                passion for humanity
                            </p>
                            <p>
                                <b>Passion for Humanity</b> ou <b>P4H</b> , est
                                une organisation fondée en 2017.
                                <br />
                                Née de l'engagement humanitaire de Maltem
                                Consulting Group et de la fondation Aldinie. A
                                vocation solidaire, elle vise à former les
                                jeunes Malgaches issus de milieux modestes afin
                                de les amener à travailler sur des projets
                                innovants, touchant la technologie numérique.
                            </p>
                            <p>
                                <span class="fw-bold">Secteur : </span>
                                Informatique, Formation, Education et
                                Communication
                            </p>
                            <p>
                                <span class="fw-bold">Site web :</span>
                                <span>
                                    <a
                                        href="http://passion4humanity.com"
                                        target="_blank"
                                        >http://passion4humanity.com
                                    </a>
                                </span>
                            </p>
                        </div>

                        <div
                            class="col d-flex justify-content-center align-items-center"
                        >
                            <div>
                                <img
                                    src="./assets/imgs/logo_p4h.jpg"
                                    alt=""
                                    width="
                                200px"
                                />
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div
                            class="col d-flex justify-content-center align-items-center"
                        >
                            <div>
                                <img
                                    src="./assets/imgs/logoRISE.jpg"
                                    alt=""
                                    width="
                                200px"
                                />
                            </div>
                        </div>
                        <div
                            class="col references py-5 px-3 subtitle text-white"
                        >
                            <p class="text-uppercase fw-bold sous_titre">
                                Association RISE
                            </p>
                            <p>
                                Créée en 2020 à l’initiative de "Maltem Group" ,
                                l'association RISE a pour vocation d'œuvrer pour
                                la jeunesse malgache, prioritairement dans le
                                secteur de l'éducation, mais aussi de la santé.
                                Rise œuvre pour l'avenir de jeunes malgache
                                grâce à un programme très innovant
                                d'accompagnement multi-facteur, études,
                                hébergement, suivi social et santé. En mode tout
                                inclus ! Initiative engagée pour un
                                développement social durable, RISE s’inscrit
                                dans l’atteinte des Objectifs de Développement
                                Durable (ODD) établis par les Etats membres des
                                Nations Unis. Elle participe à l’Agenda 2030,
                                par sa contribution, notamment, aux thématiques
                                de réduction des inégalités, d’accès à une
                                éducation de qualité et à un emploi décent.
                                Secteur Organismes civiques et sociaux
                            </p>
                            <p>
                                <span class="fw-bold">Site web :</span>
                                <span>
                                    <a
                                        href="https://rise.passion4humanity.com"
                                        target="_blank"
                                        >https://rise.passion4humanity.com
                                    </a>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <hr />

            <div class="container py-5">
                <div class="row text-center pb-5">
                    <p class="fs-1 title">Nos partenaires</p>
                </div>

                <div
                    class="container d-md-flex justify-content-center align-items-center gap-lg-5 gap-md-2 text-center"
                >
                    <div class="row py-2">
                        <div class="col-sm col-md">
                            <a href="#">
                                <img
                                    src="./assets/imgs/logo-Maltem.jpg"
                                    alt=""
                                    width="170px"
                                />
                            </a>
                        </div>

                        <div class="col-sm col-md">
                            <a href="#">
                                <img
                                    src="./assets/imgs/logo-Aldinie.jpg"
                                    alt=""
                                    width="170px"
                                />
                            </a>
                        </div>

                        <div
                            class="col-sm col-md d-flex align-items-center justify-content-center py-3"
                        >
                            <a href="#">
                                <img
                                    src="./assets/imgs/logo-Akamasoa.jpg"
                                    alt=""
                                    width="100px"
                                />
                            </a>
                        </div>

                        <div class="col-sm col-md pb-3">
                            <a href="#">
                                <img
                                    src="./assets/imgs/logo-Bocasay.jpg"
                                    alt=""
                                    width="100px"
                                />
                            </a>
                        </div>
                        <div class="col-sm col-md">
                            <a href="#">
                                <img
                                    src="./assets/imgs/logo-techzara.jpg"
                                    alt=""
                                    width="200px"
                                />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- .........FOOTER......... -->

        <footer>
            <div class="p-5 bg-dark text-white" id="footer_container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md row">
                            <span class="logo_blancr">
                                <img id="logo_tafa_2" alt="logo_tafa2" />
                                <!-- <img
                                    src="./assets/imgs/logo_tafa.png"
                                    width="70px"
                                    alt=""
                                /> -->
                            </span>
                            <div
                                class="d-flex align-items-center py-3"
                                id="social_media_icons"
                            >
                                <div>
                                    <a
                                        href="https://www.facebook.com/talentfactoryTAFA"
                                        target="_blank"
                                        class="text-white pe-3 fs-4"
                                    >
                                        <i
                                            class="fa-brands fa-facebook footer_icons"
                                        ></i>
                                    </a>
                                </div>
                                <div>
                                    <a
                                        href="https://twitter.com/P4Human"
                                        target="_blank"
                                        class="text-white px-3 fs-4"
                                    >
                                        <i
                                            class="fa-brands fa-twitter footer_icons"
                                        ></i>
                                    </a>
                                </div>
                                <div>
                                    <a
                                        href="https://www.instagram.com/tafa_talentfactory/"
                                        target="_blank"
                                        class="text-white px-3 fs-4"
                                    >
                                        <i
                                            class="fa-brands fa-instagram footer_icons"
                                        ></i>
                                    </a>
                                </div>
                                <div>
                                    <a
                                        href="https://www.linkedin.com/company/tafa-talent-factory/"
                                        target="_blank"
                                        class="text-white px-3 fs-4"
                                    >
                                        <i
                                            class="fa-brands fa-linkedin footer_icons"
                                        ></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- / -->

                        <!-- <div class="col">
                            <p class="text-uppercase"><b>partenaires</b></p>
                            <br />
                            <p class=""></p>
                        </div> -->

                        <!-- / -->

                        <div class="col-md pt-3">
                            <p class="text-uppercase m-0"><b>adresse</b></p>
                            <p>
                                TalentFactory@gmail.com | pass<br />
                                Cité Plancton <br />
                                Ambaranjana, 101 Antananarivo <br />
                                Madagascar
                            </p>
                        </div>
                        <!-- / -->

                        <div class="col-md pt-3">
                            <p class="text-uppercase m-0"><b>newsletter</b></p>
                            <p>
                                Abonnez-vous à notre newsletter pour être au
                                courant de nos divers actualités!
                            </p>
                            <form action="" method="" class="d-flex">
                                <input
                                    type="email"
                                    class="p-2 me-2"
                                    placeholder="votre adresse email"
                                />
                                <input
                                    class="px-2"
                                    type="submit"
                                    value="Envoyer"
                                />
                            </form>
                        </div>
                    </div>
                </div>

                <div class="container-fluid pt-5 mt-5">
                    <div class="row">
                        <div class="d-flex align-items-center" id="copyright">
                            <span>
                                ©Copyright | dev-tafa - 2022-All Rights Reserved
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- ................................. -->
        <!-- JQUERY -->

        <script
            src="./node_modules/jquery/dist/jquery.min.js"
            type="text/javascript"
        ></script>

        <!-- BOOTSTRAP -->

        <script
            src="./node_modules/bootstrap/dist/js/bootstrap.min.js"
            type="text/javascript"
        ></script>

        <!-- POPPER -->

        <script
            src="./node_modules/@popperjs/core/dist/umd/popper.min.js"
            type="text/javascript"
        ></script>

        <!-- typewriter -->

        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

        <!-- JS -->

        <script src="./assets/scripts/app.js" type="text/javascript"></script>
    </body>
</html>
