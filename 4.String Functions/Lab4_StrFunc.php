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
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
    </style>
    <body>
        <h1>4'rd Assignment: Str Functions Control</h1>

        <?php
            echo "<h2>1. Write a PHP program to :</h2><br>";
            
            echo "<h3>a) transform a string all uppercase letters.</h3>";
            $lower_case_str = "upper me";
            echo "<p>".strtoupper($lower_case_str). "</p>";

            echo "<h3>b) transform a string all lowercase letters.</h3>";
            $upper_case_str = "Lower ME";
            echo "<p>".strtolower($upper_case_str). "</p>"; 
            
            echo "<h3>c) make a string's first character uppercase.</h3>";
            $f_char_upper = "zoom";
            echo "<p>".ucfirst($f_char_upper). "</p>"; 
            
            echo "<h3>d) make a string's first character of all the words uppercase.</h3>";
            echo "<p>".ucwords("what's my name"). "</p>"; 


            echo "<h2>2. The program to split the following string.</h2>";
            echo "<h3>Sample string : '082307'</h3>";
            echo "<h3>Expected Output : 08:23:07</h3>";
            $time = '082307';
            echo "<p>";
            print_r(substr(chunk_split($time, 2, ':'), 0, -1));
            echo "</p>";


            echo "<h2>3. The program to check if a string contains a specific string?</h2>";
            echo "<h3>Sample string : 'The quick brown fox jumps over the lazy dog.'</h3>";
            echo "<h3>Check whether the said string contains the string 'jumps'. Yes or No ? You can change the finding string.</h3>";
            $check_me = 'The quick brown fox jumps over the lazy dog.';
            $pos = strpos($check_me, "jumps");

            if ($pos === false) {
                echo "<p>No</p>";
            } else {
                echo "<p>Yes</p>";
            }

            echo "<h2>4. The program to extract the file name from the following string (web URL).</h2>";
            echo "<h3>Sample String : 'www.example.com/public_html/index.php'</h3>";
            echo "<h3>Expected Output : 'index.php'</h3>";
            $url = 'www.example.com/public_html/index.php';
            $pos = strpos($url, "index.php");
            
            echo "<p>".substr($url, $pos, strlen($url)). "</p>"; 


            echo "<h2>5. The program to extract the user name from the following email ID.</h2>";
            echo "<h3>Sample String : 'rayy@example.com'</h3>";
            echo "<h3>Expected Output : 'rayy'</h3>";
            
            $email = 'rayy@example.com';
            $name_len = strlen("rayy");
            
            echo "<p>";
            echo substr($email, 0, $name_len);
            echo "</p><br>";


        ?>    
    </body>
</html>