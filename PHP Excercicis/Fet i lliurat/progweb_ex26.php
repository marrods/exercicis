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
    $hora=mt_rand(0,23);

    if($hora>=21 or $hora<6){
            $texto="Buenas noches";
    }elseif($hora>=6 and $hora<=12){
            $texto="Buenos dias";
    }else{
            $texto="Buenas tardes";
    }
    echo "Son las $hora, $texto!";
    ?>
    
</body>
</html>