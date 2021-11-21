<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>3'rd Assignment: Flow Control</h1>

        <table  align="center" style="width:85%" cellpadding="5" cellspacing="4">
            <?php 

                for ($i = 1; $i < 10; $i++) {
                    echo "<tr>";
                    for ($j = 1; $j < 10; $j++) {
                        echo "<td>" . $i*$j . "</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>

    </body>
</html>