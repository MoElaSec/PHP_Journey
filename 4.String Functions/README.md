# String Functions and Manipulation

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

## substr

## strlen

## strtolower

## explode

## strpos

## str_replace
