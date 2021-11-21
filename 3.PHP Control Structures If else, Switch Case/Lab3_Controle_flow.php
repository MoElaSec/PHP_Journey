<!DOCTYPE html>

<html>

<body>
	<h1>3'rd Assignment: Flow Control</h1>

    <table  align="left" border="1" cellpadding="3" cellspacing="0">
        <?php 
            for ($i = 1; $i < 6+1; $i++) {
                echo "<tr>";
                for ($j = 1; $j < 5+1; $j++) {
                    echo "<td>$i * $j = " . $i*$j . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>

</html>


<!--  
    *
    * *
    * * *
    * * * *
    * * * * *
  -->