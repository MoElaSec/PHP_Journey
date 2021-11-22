<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
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
    <body>
        <p>
        <?php
            function add_five(&$value) {
                $value += 5;
              }
              
              $num = 2;
              add_five($num);
              echo $num;        
        ?>
        </p>
    </body>

</html>