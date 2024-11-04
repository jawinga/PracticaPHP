// Realiza un programa que nos diga cuántos dígitos tiene un número aleatorio entre (0 y 9999). 
Mostrar el número y la cantidad de dígitos.

<?php

echo "<br>";
echo "<br>";


$randomNumber = (rand(0,9999));


echo $randomNumber;

echo"<br>";

if($randomNumber < 10){

    echo "El numero tiene 1 dígito";

    }elseif($randomNumber < 100){

    echo"El numero tiene 2 dígitos";

    }elseif ($randomNumber <1000) {
    
    echo"El numero tiene 3 digitos";
        # code...
    }else{

        echo"El numero tiene 4 digitos";


}


?>


