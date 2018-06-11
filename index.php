<?php
require_once "persona.php";
include "header.php";

$per = new Persona();
// $per->nombre ='Josue';
// $per->edad =21;

// echo '<br> Nombre de persona :' .$per->nombre;
// echo '<br> Edad de persona: ' .$per->edad;

$per->mostrarDatos();

$nombre ='Josue';
echo'<br>Hola Mundo PHP, bienvenido '. $nombre;
if($nombre== 'Josue'){
    echo '<br>Usuario identificado';
} else{
  echo '<br> Usuario no identificado'; }
//  $n=0;
//  while($n<5){
//      echo "<br> Num. $n";
//      $n++;
//  }

// $n=0;
// do{
//     echo "<br> Do while $n";
//     $n++;
// }while($n<5);


// for($n=0; $n<5; $n++){
//     echo "<br> For $n";
// }
?>
