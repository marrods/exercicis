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
    $var=mt_rand(0,1);
    echo $var;

  
    if($var==0){
        echo '<img src="img/homer.jpg" alt="Homer">';
    }else{
        echo '<img src="img/bart.jpg" alt="Burt">';
    }


    ?>

</body>
</html>