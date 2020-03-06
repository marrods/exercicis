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
<table>
    <?php
    $i=1;
    $num=mt_rand(0,100);
    echo "<p>El número aleatorio es el $num</p>";
    while ($i<100){
        echo $num+$i;
        $i=$i++;
    }

    ?>
</table>
</body>
</html>