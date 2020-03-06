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
    while ($i<=1000){
        echo "<tr>";
        echo "<td>";
        echo $i;
        echo "</td>";        
        echo "<td>";
        echo $i+1;
        echo "</td>";
        echo "<td>";
        echo $i+2;
        echo "</td>";
        echo "<td>";
        echo $i+3;
        echo "</td>";
        echo "<td>";
        echo $i+4;
        echo "</td>";
        echo "</tr>";
        $i=$i+5;
    }
    ?>
    
</table>
</body>
</html>