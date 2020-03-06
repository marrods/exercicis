<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>

<?php
    $totalpreg=$_GET["preg1"]+$_GET["preg2"]+$_GET["preg3"]+$_GET["preg4"]+$_GET["preg5"]+$_GET["preg6"]+$_GET["preg7"]+$_GET["preg8"]+$_GET["preg9"]+$_GET["preg10"];
    if ($totalpreg<11){
            echo "<p>Puntuación ($totalpreg) entre 0 y 10:<br>
            ¡Enhorabuena! tu pareja parece ser totalmente fiel.</p>";
        } else if ($totalpreg>10 and $totalpreg<23 ){
                echo "<p>Puntuación ($totalpreg) entre 11 y 22:<br>
                Quizás exista el peligro de otra persona en su vida o en su mente, <br>
                aunque seguramente será algo sin importancia. No bajes la guardia.</p>";
            }else{
                echo "<p>Puntuación ($totalpreg) entre 22 y 30:<br>
                Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona.<br>
                Te aconsejamos que indagues un poco más y averigües que es lo que está pasando por su cabeza.</p>";
    }


?>

</body>
</html>
