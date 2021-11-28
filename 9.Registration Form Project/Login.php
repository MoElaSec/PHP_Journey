<?php

   session_start();
   $_SESSION['background'] = "";

?>

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
        <title>Login</title>
    </head>
    <body>
        <h1>ColorBook</h1>
        <?php if (isset($_POST['form_submitted'])):?>
            <?php 
                $grantted = false;
                $username = trim($_POST['username']);
                $password = trim($_POST['password']);

                $file = fopen("adat.csv", 'r') or die("Failed to create file");

                while ( ($data = fgetcsv($file)) !== FALSE) {
                    if ($data[0] == $username && $data[1] == $password) {
                        $_SESSION['background'] = $data[2];
                        $grantted = true;
                        break;
                    }
                }

                fclose($file);
            ?>
            <?php if ($grantted):?>
                <h2>Logged in as <?php echo $_POST['username']; ?></h2>
                <button type="button" onclick="javascript:history.back()">Back</button>
            <?php else:?>
                <?php  echo "sorry wrong creditinals"; ?><br>
                <button type="button" onclick="javascript:history.back()">Back</button>
            <?php endif?>
        <?php else:?>
            <h2>Login Please:</h2>
            <form action="Login.php" method="post">
                Username: <br>
                <input type="text" name="username" required><br>

                Password: <br>
                <input type="password" name="password" required><br><br>


                <input type="hidden" name="form_submitted" value="1">
                <input type="submit" value="submit">
            </form>
        <?php endif?>
    </body>
</html>

<style>  
    body {
        background-color: <?php echo $_SESSION['background']; ?>;
    }
</style>