<?php
$choix = readline("Voulez vous faire un calcul ? (o/n) :");
while (true) {
    if($choix == "o" or $choix == "O"){
        echo "Calcul d'un cercle \n";
        //on commence par demander le rayon du cercle a l'utilisateur
        $rayon = readline("Quel est le rayon du cercle : ");
        //ensuite vient les calcul
        $circonf = 2 * M_PI * $rayon;
        $surface = M_PI * $rayon * $rayon;
        //puis on affiche le résultat
        echo ("La circonférence du cercle est de : $circonf \n");
        echo ("La surface du cercle est de       : $surface \n");
    }elseif($choix == "n" or $choix == "N"){
        echo "Au revoir à bientot .";
        break;
    }
    $choix = readline("Voulez vous faire un autre calcul ? (o/n) : ");
}
