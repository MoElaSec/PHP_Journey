# [String Functions and Manipulation](https://www.php.net/manual/en/ref.strings.php)

## 4-ways to create a string

1. Single-quotes '' escape with \
`echo 'I \'ll be back after 20 minutes';`

2. Double-quotes "" more complex as you can insert var:

    ```php
    $name='Alicia';
    echo "$name is friends with kalinda";
    ```

    can also escape more special characters: new line (`\n`) dollar sign (`\$`):

    ```php
    <?php
        echo "If you view the page source \r\n you will find a newline in this string.";
        echo "<br>";
        echo nl2br("You will find the \n newlines in this string \r\n on the browser window."); 

        /* output:
        If you view the page source you will find a newline in this string.
        You will find the
        newlines in this string
        on the browser window.
        *?
    ?>
    ```

    ```php
    $pwd = "pas\$word";
    echo $pwd; //pas$word
    ```

<br>

3. Heredoc: supports all the features of double quotes + creating string values with more than one line without php string concatenation + no need to escape qoutes.
    >  Using double quotes to create strings that have multiple lines generates an error.

    ```php
    <?php
        $baby_name = "Shalon";
        echo <<<EOT
            When $baby_name was a baby,
            She used to look like a "boy".
        EOT;

        //output: When Shalon was a baby, She used to look like a "boy"
    ?>
    ```

    `<<<EOT` string delimiter aka End-Of-Text mut be on its own line first.

<br>

4. Nowdoc: similar to the heredoc + works like '' + but no parsing so  ideal when working with raw data that do not need to be parsed.

    ```php
    <?php
        $baby_name = "Shalon";
        $my_variable = <<<'EOT'
            When $baby_name was a baby,
            She used to look like a "boy".
        EOT;
        echo $my_variable;

        //output: When $baby_name was a baby, She used to look like a "boy".
    ?>
    ```

<br>

## [str functions()](https://www.php.net/manual/en/ref.strings.php)

- `substr()`: return part of the string. It accepts **3** parameters.
    1. string to be shortened.
    2. parameter is the position of the starting point.
    3. number of characters to be returned.

    ```php
    $my_var = 'This is a really long sentence that I wish to cut short';
    echo substr($my_var,0, 12).'...';

    //output: This is a re...
    ```

- `chunk_split()`: split a str to multiple chunks and put a delimitar.

    ```php
    $time =  '082307';
    $f_time = chunk_split($time, 2, ':'); //output: 08:23:07:
    print_r(substr($f_time, 0, -1)); //0,-1 from first to before-last charto remove : at the end.
    
    //output: 08:23:07
    ```

<br>

- `strlen()`: count the number of character in a string. **Spaces** in between characters are also counted.

- `str_word_count()`: count the number of words in a string.

    ```php
    echo str_word_count('A B C Hello!');  //output: 12
    ```

<br>

- `strtolower()` & `strtoupper()`: convert all string characters to lower/upper case letters.

- `ucfirst()` & `lcfirst()`: make first char of a str upper/lower.

    ```PHP
    echo ucfirst('respect'); //Respect
    ```

- `ucwords()`: Returns a string with the first character of each word in string capitalized, if that character is alphabetic.

    ```php
    ucwords(string $string, string $separators = " \t\r\n\f\v"):

    $foo = "mike o'hara";
    echo ucwords($foo, " \t\r\n\f\v'"); //Mike O'Hara

    $foo = 'hello|world!';
    echo ucwords($foo, "|"); // Hello|World!
    ```

<br>

- `strpos()`: locate & return the position of a character(s) within a string.

    ```php
    echo strpos('PHP Programing','Pro'); //output: 4
    ```

<br>

- `str_replace()`: locate the first arg str and relpace it with 2'nd arg str in the 3'rd arg given string input.

    ```php
    echo str_replace ('the','that', 'the laptop is very expensive');

    //that laptop is very expensive
    ```

<br>

- Hashing `sha1()` & `md5()`: calc the hash of string.  

    ```php
    echo md5('password'); // 5f4dcc3b5aa765d61d8327deb882cf99
    ```

<br>

- `explode()`: convert strings into an array.

    ```php
    $settings = explode(';', "host=localhost; db=sales; uid=root; pwd=demo");
    print_r($settings);

    //output: Array ( [0] =>host=localhost [1] =>db=sales [2] => uid=root [3] => pwd=demo )
    ```

<br>

### Summary

- 'single quotes' are used to specify simple strings

- "double quotes" are used to create fairly complex strings
- Heredoc `EOT` is used to create complex strings
- Nowdoc is `'EOT'`used to create strings that cannot be parsed.
