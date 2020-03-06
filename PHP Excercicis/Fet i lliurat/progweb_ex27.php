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
    $edad=mt_rand(20,60);
    $salario=mt_rand(600,3000);

    if($salario>2000){
            $salariofinal=$salario;
    }elseif($salario>=1000 and $salario<=2000){
        }elseif($edad>45){
            $salariofinal=$salario*1.03;
        }elseif($edad=<45){
            $salariofinal=$salario*1.1;
    }elseif($salario<1000){
        }elseif($edad<30){
            $salariofinal=1.100;
        }elseif($edad=>30 and $edad=<45){
            $salariofinal=$salario*1.03;
        }elseif($edad>45){
            $salariofinal=$salario*1.15;
    }
    echo "Con la edad de $edad años y un salario base de $salario € percibirás un salario final de $salariofinal €";
    ?>
    
</body>
</html>