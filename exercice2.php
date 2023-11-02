<?php
//ici on crée la boucle pour que l'utilisateur a le choix de lancer ou non l'exercice
while (true) {
    $choix = readline("Tapez 'o' pour continuer sinon tapez 'n' . \n");
    if ($choix == "o" or $choix == "O") {
        echo "Table de multiplication \n";
        //on commence par demander le nombre a l'utilisateur
        $nombre = readline("Choisissez le nombre dont vous voulez la table de multiplication : ");
        //ensuite on fait notre boucle avec le calcul et l'affichage
        for ($i = 1; $i <= 10; $i++) {
            $multipl = $i * $nombre;
            echo ("$nombre       x        $i       = $multipl \n");
        }
    }elseif($choix == "n" or $choix =="N"){
        echo "Au revoir à bientot";
        break;

    }
}
