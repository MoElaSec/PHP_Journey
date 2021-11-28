<?php
$fh = fopen("my_settings.txt", 'r')
 or 
die("Failed to create file");
?>    

<!-- <!DOCTYPE html>
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
        <title>Login</title>
    </head>
    <body>
        <h1>ColorBook</h1>
        <?php if (isset($_POST['form_submitted'])):?>
            <h2>Logged in as <?php $_POST['user_name'] ?></h2>
            <?php 

            ?>
        <?php else:?>
            <h2>Login PLease:</h2>
            <form action="Login.php" method="post">
                Username:
                <input type="text" name="user_name" required><br>

                Password:
                <input type="password" name="password" required>


                <input type="hidden" name="form_submitted" value="1">
                <input type="submit" value="submit">
            </form>
        <?php endif?>
    </body>
</html> -->