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

    $notafinal=($nota1+$nota2+$nota3)/3;
    
    if($notafinal<5){
             $notafinaltxt="Suspendido";
    }elseif($notafinal>=5 and $notafinal<6){
            $notafinaltxt="Aprobado";
    }elseif($notafinal>=6 and $notafinal<7){
            $notafinaltxt="Bien";
    }elseif($notafinal>=7 and $notafinal<9){
            $notafinaltxt="Notable";
    }else{
            $notafinaltxt="Excelente";
    }
    echo "<p>Has sacado un promedio de <b>$notafinal</b> y por tanto has obtenido un <b>$notafinaltxt</b></p>";
    ?>
    
</body>
</html>