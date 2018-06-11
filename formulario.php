<form action ="procesar.php" method="POST">
<br>
<label for=""> Escribe un numero</label>
<input type="text" name="n1">
<br>
<label for="">Escribe otro numero</label>
<input type="text" name="n2">
<br>
<label for=""> password</label>
<input type="password" name="pass">
<button>Enviar</button>
</form>

<?php
    if(isset($_POST['suma'])){

      $suma = $_POST['suma'];
       echo "<h1>La suma es $suma </h1>";
     }
?>