<?php
echo "Calcul de l'equation du 2nd degré 
              Y = aX² + bX +c\n";
echo "\n";
$choix = readline("Voulez vous lancer l'exercice ? (o/n): ");
while (true) {
    if ($choix == "o" or $choix == "O") {
        // on commence par demander les 3 valeur a l'utilisateur
        $a = readline("Quelle est la valeur de a : ");
        $b = readline("Quelle est la valeur de b : ");
        $c = readline("Quelle est la valeur de c : ");
        echo "\n";
        // ensuite on calcul notre Delta et en fonction du résultat on fait des calcul different 
        $d = pow($b, 2) - (4 * $a * $c);
        if($a != 0){
            if ($d < 0) {
                echo "L'équation ne possede pas de racine réelle : \n";
                echo "d = $d";
            } elseif ($d == 0) {
                $x1 = - ($b / (2 * $a));
                echo "L'équation possede une racine double : \n";
                echo "d = $d \n";
                echo "x1=x2= $x1";
            } elseif ($d > 0) {
                $x1 = (-$b + sqrt($d)) / (2 * $a);
                $x2 = (-$b - sqrt($d)) / (2 * $a);
                echo "L'équation possede 2 racines distinctes : \n";
                echo "d = $d \n";
                echo "L'équation s'annule pour : \n";
                echo "x1 = $x1 \n";
                echo "x2 = $x2 \n";
                echo "\n";
            }
        }elseif($a==0 and $b != 0){
            $x = -($c/$b);
            echo "L'équation est du premier degré \n";
            echo "L'équation s'annule pour x=-(c/b) = $x \n";
            
        }elseif($a==0 and $b==0){
            echo "L'équation n'en n'est plus une !!! \n";
        }
        
    } elseif ($choix == "n" or $choix == "N") {
        echo "Au revoir à bientot";
        break;
    }
    $choix = readline("Voulez vous lancer une autre fois l'exercice ? (o/n): ");
}

