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
    $dia_semana=mt_rand(1,7);

        if($dia_semana==1){
            echo "<p>Es LUNES y tenemos la asignatura de Creación de páginas web</p>";
        }elseif ($dia_semana==2){
            echo "<p>Es MARTES y tenemos la asignatura de Programación Web o Primeros Auxilios</p>";
        }elseif ($dia_semana==3){
            echo "<p>Es MIÉRCOLES y tenemos la asignatura de Creación de páginas web o Prevención de Riesgos Laborales</p>";
        }elseif ($dia_semana==4){
            echo "<p>Es JUEVES y tenemos la asignatura de Programación Web</p>";
        }elseif ($dia_semana==5){
            echo "<p>Es VIERNES y tenemos la asignatura de Publicación de páginas web</p>";
        }elseif ($dia_semana==6){
            echo "<p>Es SÁBADO y tenemos DIA LIBRE</p>";
        }else{
            echo "<p>Es DOMINGO y tenemos DIA LIBRE</p>";
        }

    ?>
</body>
</html>