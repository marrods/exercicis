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
    $i=$_GET["num"];
    $a=0;
    echo "La taula del $i";
    while ($a<11){
        echo "<tr>";
        echo "<td>";
        echo "$i x $a =";
        echo "</td>";
        echo "<td>";
        echo $i*$a;
        echo "</td>";
        echo "</tr>";
        $a=$a+1;
    }
    ?>
    
</table>

</body>
</html>