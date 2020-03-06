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
    switch ($dia_semana){
        case 1:
            $dia_semanatxt="Es LUNES y tenemos la asignatura de Creación de páginas web";
        break;
        case 2:
            $dia_semanatxt="Es MARTES y tenemos la asignatura de Programación Web o Primeros Auxilios";
        break;
        case 3:
            $dia_semanatxt="Es MIÉRCOLES y tenemos la asignatura de Creación de páginas web o Prevención de Riesgos Laborales";
        break;
        case 4:
            $dia_semanatxt="Es JUEVES y tenemos la asignatura de Programación Web";
        break;
        case 5:
            $dia_semanatxt="Es VIERNES y tenemos la asignatura de Publicación de páginas web";
        break;
        case 6:
        case 7:
            $dia_semanatxt="Es FIN DE SEMANA y tenemos DIA LIBRE";
        break;
        }
        echo "$dia_semanatxt";

        

    ?>
</body>
</html>