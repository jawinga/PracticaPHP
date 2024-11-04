// Muestra los números múltiplos de 5 de un bucle de 0 a 100 utilizando while.

//Con for if 
<?php
              
//Con while

$numero = 5;
$contador = 1 ;


while($contador<=100){

    $z = $contador % $numero;


    if($z == 0){

        echo "$contador es multiplo de $numero <br>";

    }
    
    $contador++; 

}



?>



