<?php

    $numero = $_POST['numero'];

?>

<html>
    <head>

        <title>
            O número que você digitou é: <?php echo $numero; ?>
        </title>

    </head>

    <body>
        <?php
            for( $i = 0; $i <= $numero; $i++ ) {
                
                echo "Com \" e concatenando com . " . $i . " <br />";

                echo "Com aspas e variavel dentro $i <br/>";

                echo 'Com apostrofe e variavel dentro $i <br />';

                echo "<br/>";
            }
        ?>
    </body>
</html>