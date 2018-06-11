  <?php
  
  if(isset($_POST['n1']) && isset($_POST['n2'])){
      $num1= $_POST['n1'];
      $num2= $_POST['n2'];

      $suma = $num1 + $num1;

      echo "La suma es: $suma";
      $sql = 'select * from usuario where password=' .$_POST['pass'];
      echo 'SQL que se ejecutara es ' .$sql;

    //   header("Location: formulario.php?suma=$suma");
  }else 
   die ("No se puede procesar la informacion.");


  ?>