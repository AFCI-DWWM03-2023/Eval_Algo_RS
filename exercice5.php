<?php
$chaine = readline("Entrez une chaine de caractère : ");
$tab = str_split($chaine);
$tabchiffre = [0,1,2,3,4,5,6,7,8,9];
$tabvoyelle = ["a","e","i","o","u","y","A","E","I","O","U","Y"];
$tabconsonne = ["b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z","B","C","D","F","G","H","J","K","L","M","N","P","Q","R","S","T","V","W","X","Z"];
$v = 0;
$c = 0;
$chi = 0;
$spe = 0;
$taille = strlen($chaine);
foreach($tab as $letter){
    foreach($tabvoyelle as $voyelle){
        if ($letter == $voyelle){
            $v++;
        }
    }
}
foreach($tab as $letter){
    foreach($tabconsonne as $consonne){
        if ($letter == $consonne){
            $c++;
        }
    }
}
foreach($tab as $letter){
    foreach($tabchiffre as $chiffre){
        if ($letter == $chiffre){
            $chi++;
        }
    }
}
$spe = $taille - $c - $v - $chi;
$alpha =$c+$v;
echo "Nombre de caractère            : $taille \n";
echo "Nombre de voyelle              : $v \n";
echo "Nombre de consonne             : $c \n";
echo "Nombre de chiffre              : $chi \n";
echo "Nombre de caractère alphabique : $alpha\n";
echo "Nombre de caractère speciaux   : $spe\n";