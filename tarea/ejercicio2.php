
<?php

// Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle for.

echo "<br>";

for ($i=320; $i >= 160 ; $i-=20) {
    
    echo "El numero representado es $i <br>";

    if($i == 160){

        echo "Has llegado al número 160. No hay más números <br>";
    }
    

    # code...
}




echo "<br>";

// Muestra los números del 160 al 320, contando de 20 en 20 utilizando un bucle for.

for ($i=160; $i <= 320 ; $i+=20) {
    
    echo "El numero representado es $i <br>";

    if($i == 320){

        echo "Has llegado al número 320. No hay más números <br>";
    }
    

    # code...
}


?>