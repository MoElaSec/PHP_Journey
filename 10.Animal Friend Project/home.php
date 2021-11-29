<?php

   session_start();
   $_SESSION['animal'] = "";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                /* Bg */
                background-image: url("https://c2.vanceai.com/posts/16221724663407807-FreepixSAmple.jpg");
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                background-color: #464646;

                align-items: center;
            }
            img {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width:150px;
            }
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
        <title>CHange me Home Page</title>
    </head>
    <body>
        <h1>Title</h1>
            <?php if (isset($_POST['form_submitted'])):?>
                <?php 
                    $grantted = false;
                    $username = trim($_POST['username']);
                    $password = trim($_POST['password']);

                    $array = explode("\n", file_get_contents('password.txt')) or die("Failed to create file");

                    
                    foreach ($array as $i) {
                        $creds = explode("*", $i);
                        if ($creds[0] == $username && $creds[1] == $password) {
                            $_SESSION['animal'] = $creds[2];
                            $grantted = true;
                            break;
                        }
                    }
                ?>
                <?php if ($grantted):?>
                    <h2>Logged in as <?php echo $_POST['username']; ?></h2>
                    
                    <!-- <h2><?php echo "Your Fav Animal is: ".$_SESSION['animal'];?></h2> -->
                    <div>
                        <?php if ($_SESSION['animal'] == 'dog'):?>
                            <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/dog-puppy-on-garden-royalty-free-image-1586966191.jpg?crop=1.00xw:0.669xh;0,0.190xh&resize=1200:*" alt="">
                        <?php else:?>    
                            <img src="https://i.guim.co.uk/img/media/26392d05302e02f7bf4eb143bb84c8097d09144b/446_167_3683_2210/master/3683.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=49ed3252c0b2ffb49cf8b508892e452d" alt="">
                        <?php endif?>
                    </div>
                        
                    
                    <button type="button" onclick="javascript:history.back()">Back</button>
                <?php else:?>
                    <?php  echo "sorry wrong creditinals"; ?><br>
                    <button type="button" onclick="javascript:history.back()">Back</button>
                <?php endif?>
            <?php else:?>
            <h2>Login Please:</h2>
            <form action="home.php" method="post">
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