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
    $i=0;
    $condicion=false;
    while ($condicion==false){
        $i=mt_rand(0,100);
        echo $i."<br>";
        if ($i==99){
            $condicion=true;
        }
    }

    ?>
</table>
</body>
</html>