<?php include '../src/php/component.php';?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Café Des Devs</title>
        <?= $show->meta(); ?>
        <meta name="keywords" content="***" />
        <meta name="description" content="***" />
        <meta property="og:site_name" content="***" />
        <meta property="og:title" content="***" />
        <meta property="og:description" content="***" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="***" />
        <meta property="og:image" content="***" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="***" />
        <meta name="twitter:title" content="***t" />
        <meta name="twitter:description" content="***" />
        <meta name="twitter:image" content="***" />
        <!-- MAINTENANCE -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="16x16" href="https://cafedesdevs.fr/CDD.png">
    </head>
    <body>
        <div id="main">
            <?= $show->menu(); ?>
            <div id="wrapper">
                <section>
                    <div id="annonce">
                        <div> 
                            <p>Titre de l'annonce</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolorem consectetur vel sint dignissimos qui explicabo mollitia ad minima necessitatibus, soluta maxime aliquam illo fuga, obcaecati quisquam suscipit modi est.
                            Sapiente excepturi consectetur harum ad tenetur aut vel explicabo repudiandae? Id qui consectetur voluptate est fugit dolorem reiciendis quo iusto magni! Quo fugit saepe corrupti tempora dolore quas ipsam optio?
                            Nam ducimus rerum atque nihil pariatur facilis reiciendis, fugiat magni hic optio recusandae error ullam dicta, est ab molestiae necessitatibus provident minima sapiente, quaerat ipsam laboriosam excepturi modi. A, veniam?
                            </p>
                        </div>
                        <div> 
                            <p>Titre de l'annonce</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolorem consectetur vel sint dignissimos qui explicabo mollitia ad minima necessitatibus, soluta maxime aliquam illo fuga, obcaecati quisquam suscipit modi est.
                            Sapiente excepturi consectetur harum ad tenetur aut vel explicabo repudiandae? Id qui consectetur voluptate est fugit dolorem reiciendis quo iusto magni! Quo fugit saepe corrupti tempora dolore quas ipsam optio?
                            Nam ducimus rerum atque nihil pariatur facilis reiciendis, fugiat magni hic optio recusandae error ullam dicta, est ab molestiae necessitatibus provident minima sapiente, quaerat ipsam laboriosam excepturi modi. A, veniam?
                            </p>
                        </div>

                        <div> 
                            <p>Titre de l'annonce</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolorem consectetur vel sint dignissimos qui explicabo mollitia ad minima necessitatibus, soluta maxime aliquam illo fuga, obcaecati quisquam suscipit modi est.
                            Sapiente excepturi consectetur harum ad tenetur aut vel explicabo repudiandae? Id qui consectetur voluptate est fugit dolorem reiciendis quo iusto magni! Quo fugit saepe corrupti tempora dolore quas ipsam optio?
                            Nam ducimus rerum atque nihil pariatur facilis reiciendis, fugiat magni hic optio recusandae error ullam dicta, est ab molestiae necessitatibus provident minima sapiente, quaerat ipsam laboriosam excepturi modi. A, veniam?
                            </p>
                        </div>
                    </div>
                    <div class="cdd_terminal">
                        Tapez votre commande ici... 
                    </div>
                    <div>
                        <div class="cdd_join">
                            Nous rejoindre
                        </div>
                        <div class="cdd_info">
                            Information
                            <div class="cdd_membre">
                                <p>+ 1500 De membres actifs</p>
                            </div>
                            <div class="cdd_partenaire">
                                <p>+ 4 partenaires</p>
                            </div>
                            <div class="cdd_challenge">
                                <p>Aucun challenge en cours</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="cdd_corp">
                    <div>
                        Trouvez des solutions
                    </div>
                    <div>
                        Faites des rencontres
                    </div>
                    <div>
                        Participer aux animations
                    </div>
                    <div>
                        Café Des Devs

                        <div>
                            Une nouvelle expérience

                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum molestias ab ipsa illo et labore mollitia perferendis, laborum, quo expedita tenetur nulla molestiae similique tempora doloremque ea? Totam, illum dolore!
                            </p>
                        </div>

                        <div>
                            Une nouvelle expérience

                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum molestias ab ipsa illo et labore mollitia perferendis, laborum, quo expedita tenetur nulla molestiae similique tempora doloremque ea? Totam, illum dolore!
                            </p>
                        </div>

                        <div>
                            Une nouvelle expérience

                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum molestias ab ipsa illo et labore mollitia perferendis, laborum, quo expedita tenetur nulla molestiae similique tempora doloremque ea? Totam, illum dolore!
                            </p>
                        </div>
                    </div>
                </section>

                <section class="cdd_sponsor">
                    Découvrez notre partenaire !
                    <div>
                        <p>Anti-DDoS Game</p>
                        <p>Panel de gestion</p>
                        <p>Support réactif</p>
                        <p>Processeurs performants</p>
                        <p>Interface simple</p>
                        <p>SLA de 99.95%</p>
                    </div>

                    <div>Commencer</div>

                </section>
                <?= $show->footer(); ?>
            </div>
        </div>
        <?= $show->scripts(); ?>
    </body>
</html>