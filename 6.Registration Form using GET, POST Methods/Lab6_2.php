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
        <title>Lab:6_2</title>
    </head>
    <body>
        <h1>Lab6_2: Compound annual interest calculator</h1>
        <?php if (isset($_POST['form_submitted'])):?>
            <h2>This is the remaining money:</h2>
            <?php 
                $money = (float) $_POST['money'];
                $currency = $_POST['currency'];
                $interest = ((float) $_POST['interest'])/100; //cuz we want it as a %
                $time = (int) $_POST['time-period'];

                //M*(1+i)^t
                $compound = round($money*pow((1+$interest),$time), 2);

                echo "After $time period you will have $compound $currency";
            ?>
        <?php else:?>
            <h2>All fields are required:</h2>
            <form action="Lab6_2.php" method="post">
                Amount of Money:
                <input type="text" name="money" required><br>

                Currency:
                <input type="radio" name="currency" value="USD" required>USD
                
                <input type="radio" name="currency" value="EUR" required>EUR

                <input type="radio" name="currency" value="HUF" required>HUF

                <br>

                Compound annual interest:
                <input type="text" name="interest" required><br>
                

                Choose the Time Period:
                <select name="time-period">
                    <option value="1">1 Year</option>
                    <option value="2">2 Years</option>
                    <option value="3">3 Years</option>
                    <option value="4">4 Years</option>
                </select>

                <input type="hidden" name="form_submitted" value="1">
                <input type="submit" value="submit">
            </form>
        <?php endif?>
    </body>
</html>