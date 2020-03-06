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
    $nota1=mt_rand(0,10);
    $nota2=mt_rand(0,10);
    $nota3=mt_rand(0,10);
    echo "<p>La Nota 1 es <b>$nota1</b></p>";
    echo "<p>La Nota 2 es <b>$nota2</b></p>";
    echo "<p>La Nota 3 es <b>$nota3</b></p>";

    $notafinal=intval(($nota1+$nota2+$nota3)/3);
    
    switch ($notafinal){
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            $notafinaltxt="Insuficiente";
        break;
        case 5:
            $notafinaltxt="Suficiente";
        break;
        case 6:
            $notafinaltxt="Bien";
        break;
        case 7:
        case 8:
            $notafinaltxt="Notable";
        break;
        case 9:
        case 10:
            $notafinaltxt="Sobresaliente";
        break;
        }
    echo "<p>Has sacado un promedio de <b>$notafinal</b> y por tanto has obtenido un <b>$notafinaltxt</b></p>";


    ?>
</body>
</html>