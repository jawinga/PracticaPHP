//Escribe un programa que muestre en dos columnas:  Numero -  cuadrado del numero
De 10 números aleatorios entre 5 y 20.


<?php


echo "

<style>

table, th, td{

  border: 1px solid black;


}


</style>


<table>


<tr>
<th>Numero</th>
<th>Cuadrado del numero</th>
</tr>";



for ($i=0; $i <= 10 ; $i++) { 

    $numeroAleatorio = rand(5,20);

    echo "<tr>
          <td>$numeroAleatorio</td>  
            <td>". ($numeroAleatorio*2) ."</td>  
          </tr>";

    # code..
}



echo"</table>"



?>