# PHP_Journey

### Good way to Start your PHP script:

```HTML
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
        <title>Lab:6_1</title>
    </head>
    <body>
        <h1>Title</h1>
        <?php if (isset($_POST['form_submitted'])):?>
            <h2>New title after render:</h2>
            <?php 

            ?>
        <?php else:?>
            <h2>Give me a ...:</h2>
            <form action="Lab6_1.php" method="post">
                Input:
                <input type="text" name="input_arr" required>

                <input type="hidden" name="form_submitted" value="1">
                <input type="submit" value="submit">
            </form>
        <?php endif?>
    </body>
</html>
```
