<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            h1 {
                color: blue;
            }
            h2 {
                color: blueviolet;
            }
            p {
                color: red;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
        </style>
        <title>Lab:7</title>
    </head>
    <body>
        <h1>Lab7: Form into csv</h1>
        <?php if (isset($_POST['form_submitted'])):?>
            <h2>Info have been saved to data.csv</h2>
            <?php 
                $file = fopen('data.csv', "w");

                fwrite($file, $_POST['name']);
                fwrite($file, ";");
                fwrite($file, $_POST['date_of_birth']);
                fwrite($file, ";");
                fwrite($file, $_POST['country']);
                fwrite($file, "\n");

                fclose($file);
            ?>
        <?php else:?>
            <h2>All values are required:</h2>
            <form action="Lab7.php" method="post">
                Name: <br>
                <input type="text" name="name" required><br><br>

                Date of Birth: <br>
                <input type="text" name="date_of_birth" required><br><br>

                Country: <br>
                <input type="text" name="country" required><br><br>
                
            
                <input type="hidden" name="form_submitted" value="1">
                <input type="submit" value="submit">
            </form>
        <?php endif?>
    </body>
</html>