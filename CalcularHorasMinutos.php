<!DOCTYPE html>
<html>
<body>
<p>Escribir una funcion que reciba un numero y lo convierta horas y minutos <b>1000 = 16:40</b></p>
<?php
// Definir una función que reciba un número de minutos y lo convierta en horas y minutos
function convertir_minutos($minutos) {
  // Calcular el número de horas completas
  $horas = floor($minutos / 60);
  // Calcular el número de minutos restantes
  //$minutos_restantes = $minutos % 60;
  $minutos_restantes = ($horas * 60)-$minutos; /*Es lo mimsmo que decir $minutos mod 60*/
  // Devolver una cadena con el formato hh:mm
  return sprintf("%02d:%02d", $horas, $minutos_restantes);
}

// Ejemplo de uso
echo convertir_minutos(1000); // Imprime 01:30
echo "<br>";
echo convertir_minutos(200); // Imprime 03:20
?>

</body>
</html>
