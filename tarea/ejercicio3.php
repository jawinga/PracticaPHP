<?php

$numeroAleatorio = rand(1, 10);  // Generate a random number between 1 and 10

echo "El número seleccionado es: $numeroAleatorio<br>";  // Print the random number

echo "
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 5px;
  text-align: center;
}
</style>

<table>
<tr>
  <th>Operación</th>
  <th>Resultado</th>
</tr>";

// Loop to generate the rows of the table
for ($i = 0; $i <= 10; $i++) {
    $resultado = $numeroAleatorio * $i;
    echo "<tr>
            <td>$numeroAleatorio * $i</td>
            <td>$resultado</td>
          </tr>";
}

echo "</table>";

?>
