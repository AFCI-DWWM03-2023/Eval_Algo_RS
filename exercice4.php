<?php
//on rentre nos tableaux
$avion = ["BOING747","AIRBUSA380","LEARJET45","DC10","CONCORDE","ANTONOV32"];
$codeavion = ["BO","AB","LJ","DC","CO","AN"];
$vitesse = [800,950,700,900,1400,560];
$rayon = [10000,12000,4500,8000,16000,2500];
$choix = "o";
//on vient demander a l'utilisateur de rentrer un code 
$code = readline("Entrez le code de l'avion que vous cherchez : ");
while(true){
    if($choix == "o" or $choix == "O"){
        //on vient chercher les donner dans nos tableau et les afficher
        for($i = 0 ; $i < count($avion);$i++){
            if($code == $codeavion[$i]){
                echo "Avion : " . $avion[$i]." Vitesse : ".$vitesse[$i]." Rayon d'action : ".$rayon[$i]."\n";
            }
        }
        //on demande a l'utilisateur si il veut editer les stats si oui on les affiches 
        $stat = readline("Voulez vous editer les stats ? (o/n) :");
        if($stat == "o" or $stat == "O"){
            $somme = array_sum($rayon);
            $moyenne = $somme/count($rayon) ;
            echo "L'avion qui vole le plus vite est le ".$avion[4]." à ".max($vitesse)." km/h \n";
            echo "La moyenne des rayon d'actions est de : $moyenne \n";
        } 
    }elseif($choix == "n" or $choix == "N"){
        echo "Au revoir a Bientot \n";
        break;
    }
    $choix = readline("Voulez vous chercher un autre avion ? (o/n) : ");
}
