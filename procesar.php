  <?php
  
  if(isset($_GET['n1']) && isset($_GET['n2'])){
      $num1= $_GET['n1'];
      $num2= $_GET['n2'];

      $suma = $num1 + $num1;

      echo "La suma es: $suma";
  }else 
   die ("No se puede procesar la informacion.");


  ?>