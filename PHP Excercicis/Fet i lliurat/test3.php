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
    $nota=mt_rand(0,10);
    switch ($nota){
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            $notatxt="Suspendido";
        break;
        case 5:
            $notatxt="Aprobado";
        break;
        case 6:
            $notatxt="Bien";
        break;
        case 7:
        case 8:
            $notatxt="Notable";
        break;
        case 9:
            $notatxt="Excelente";
        break;
        case 10:
            $notatxt="Matrícula";
        break;
        }
    echo "Has sacado un $nota y por tanto estás $notatxt";

    ?>
</body>
</html>