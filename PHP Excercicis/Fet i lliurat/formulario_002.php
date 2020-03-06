<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
        border: 1px solid black;
         
        }
    </style>
</head>
<body>

<?php
if (isset($_POST["usuario"]) and isset($_POST["password"])){
  if ($_POST["password"]=="123456"){
  echo "<p>Bienvenido <strong>".$_POST["usuario"]."</strong></p>";
  } else {
  echo '<p style=color:#FF0000>Password incorrecto. <a href="formulario_002.php">Siga buscando</a></p>';
  }
} else {
?>
<form action="formulario_002.php" method="post">
  <p>Usuario: <input type="text" name="usuario" minlenght="6"></p>
  <p>Contraseña: <input type="password" name="password" minlenght="6"></p>
    <input type="submit" value="Enviar">
    <button type="button">
  <img src="caca.png" alt="Caca" width="32" height="32" style="vertical-align: middle">
  Este botón no hace nada
</button>
</form>
    <?php
    }
    ?>
</body>
</html>