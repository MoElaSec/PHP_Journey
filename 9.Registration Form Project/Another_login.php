<!-- I didn't write this code it's my friend left it here might be helpfull -->

<?php if (isset($_POST['form_submitted'])): ?>
    <?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    $user_inputs = $username. "," . $password;
    $matches = array();

    $handle = @fopen("adat.csv", "r");
    if ($handle)
    {
        while (!feof($handle))
        {
            $buffer = fgets($handle);
            if(strpos($buffer, $user_inputs) !== FALSE)
                $matches[] = $buffer;
        }
        fclose($handle);
    }

    //show results:
    $data = implode(",", $matches);
//        print_r($data);
    @list($user, $pass, $color) = explode(",", $data);
    ?>
<?php endif; ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
<style>
    *{
        background-repeat:no-repeat;
        background-size:cover;
        /*background-color: */<?php //echo $color ?>/*;*/
    }
    .form {
        border-radius:3px;
        height:400px;
        width:500px;
        background-color: <?php echo $color ?>;
        margin-top: 121px;
        margin-left: 361px;
    }
    .form img{
        margin-left:215px;
        margin-top:-35px;
    }
    .heading{
        color:#555;
        font-family: 'PT Sans Narrow', sans-serif;
        margin-top:20px;
        margin-left:170px;
        font-size:2em;
    }
    .input{
        outline:0;
        border:1px solid #eaeaea;
        background-color:#eaeaea;
        border-radius:3px;
        height:35px;
        width:325px;
        margin-left:95px;
        margin-top:25px;
        padding-left:15px;
        font-family:'PT Sans Narrow', sans-serif;
        transition:0.1s;
    }
    .input:focus{
        border:1px solid #127da7;
    }
    .button{
        border-radius:3px;
        background-color:#127da7;
        border:0;
        height:36px;
        width:125px;
        margin-top:20px;
        margin-left:195px;
        color:#fff;
        font-family:'PT Sans Narrow', sans-serif;
    }
    .button:hover{
        cursor:pointer;
        opacity:0.8;
    }
    .link{
        margin-top:15px;
        margin-left:198px;
    }
    .link a{
        text-decoration:none;
        color:#555;
        font-family:'PT Sans Narrow', sans-serif;
    }
    .link a:hover{
        color:#3498db;
    }
</style>
</head>
<body background="https://i.hizliresim.com/rEGpPa.jpg"  >

<div class="form">

    <img src="https://i.hizliresim.com/nE4p1M.png" alt=""  height="70">

    <div class="heading">
        Login Form
    </div>
    <form action="" method="post" >
        <input type="text" name="username" aria-label="" class="input" placeholder="username"/>
        <input type="password" name="password" aria-label="" class="input" placeholder="password"/>
        <input type="hidden" name="form_submitted" value="1" />
        <input type="submit" class="button" value="Submit">
    </form>
    <div class="link">
        <a href="#">Remember me?</a>
    </div>
</div>

</body>
</html>