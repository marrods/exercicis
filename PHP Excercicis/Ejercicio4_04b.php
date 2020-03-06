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

<?php
    $baseimponible=$_GET["num"];
    $IRPF=$baseimponible*0.15;
    $IVA=$baseimponible*0.21;
    $total=$baseimponible-$IRPF+$IVA;
    echo "<p>La base imponible es $baseimponible €</p>";
    echo "<p>El IRPF del 15% es $IRPF €</p>";
    echo "<p>El IVA del 21% es $IVA €</p>";
    echo "<p>El total de la factura es $total €</p>";
?>

</body>
</html>
