<?php

// error_reporting(E_ALL);
// ini_set('display_errors', TRUE);
// ini_set('display_startup_errors', TRUE);

session_start();
require_once "modelDatabase/database.php";
$show = new Show;


class Show {
    public function meta() {
        return "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\"> 
            <meta name=\"robots\" content=\"index, follow\"/> 
            <link rel=\"icon\" href=\"/cafedesdevs/assets/favicon.ico\" />
            <link type=\"text/css\" rel=\"stylesheet\" href=\"/cafedesdevs/src/styles/style.css\"> 
            <meta name=\"MobileOptimized\" content=\"width\" />
            <meta name=\"HandheldFriendly\" content=\"true\" />";
    }
    public function scripts() {
        return "<script type=\"module\" class=\"s_script\" type=\"text/javascript\" src=\"/cafedesdevs/src/js/main.js\"></script>";

    }
    public function menu() {
        return "
        <header>
            <ul>
            <li><a href=\"#Accueil\">Accueil</a></li>
            <li><a href=\"#Forum\">Forum</a></li>
            <li><a href=\"#Cours\">Cours</a></li>
            <li><a href=\"#Wiki\">Wiki</a></li>
            <li><a href=\"#Logreg\">Se connecter/ S'inscrire</a></li>
            </ul>
        </header>";
    }
    public function footer() {
        return"
        <footer>
        <div>
            Café Des Devs
            <p>C'est en codant qu'on apprend à coder</p>
        </div>
        <div>  
            <ul>
                Product
                <li>Features</li>
                <li>Pricing</li>
                <li>Case studies</li>
                <li>Reviews</li>
                <li>Updates</li>
            </ul>
            <ul>
                Company
                <li>About</li>
                <li>Contact us</li>
                <li>careers</li>
                <li>Culture</li>
                <li>Blog</li>
            </ul>
            <ul>
                Support
                <li>Getting started</li>
                <li>Help center</li>
                <li>Server status</li>
                <li>Report a bug</li>
                <li>Tchat support</li>
            </ul>

            <ul>
                Contact us
                <li>contact@cafedesdevs.fr</li>
                <li>+33 0629442202</li>
                <li>adresse 7 rue café des devs, Paris, France</li>
            </ul>
        </div> 

        <div>
            Copyright © 2022 Café Des Devs
        </div>
        <div>
            Tous droits réservés | Termes et conditions | Politique de confidentialité
        </div>


    </footer>";
    }
}

?>



