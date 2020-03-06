<html>
    <head>
        <title>Hola Món</title>
        <meta charset="utf-8">
    </head>
    <body>
    <!-- Aquest comentari de html no es veurà a la web però si al codi font -->
    <?php
            // això és un comentari que no sortirà a cap lloc
            /* això és un comentari
            que té vàries linees */
            $x=10; //Això és una variable de x = 10
            echo "<p><strong>hola desde php</strong></p>";
            echo $x; //ara escric el valor de x a la pantalla
    ?>
        <p>Aquesta és la meva primera web</p>
        <p>
            <strong>
                Text en negreta
            </strong>
        </p>
        <p>
            <i>
                Text en cursiva
            </i>
        </p>
        <p>
            <u>
                Text ratllat
            </u>
        </p>
        <p>
            <a href="http://google.com">Això és un enllaç a Google</a>
        </p>
        <table>
            <tr>
                <td>
                    <p>1</p>
                </td>
                <td>
                    <p>2</p>
                </td>
                <td>
                    <p>3</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>3</p>
                </td>
                <td>
                    <p>4</p>
                </td>
                <td>
                    <p>5</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>7</p>
                </td>
                <td>
                    <p>8</p>
                </td>
                <td>
                    <p>9</p>
                </td>
            </tr>
        </table>
    </body>
</html>