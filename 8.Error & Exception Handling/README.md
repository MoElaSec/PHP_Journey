# Error ❌ Exception Handling

## PHP error handling 3-ways

1. Die statements: `die()`=`echo`+`exit()` Print msg % exit the code.

2. Custom error handlers: Custom defined functions.

    ```PHP
    function my_error_handler($error_no, $error_msg) {
        echo "Opps, something went wrong:";
        echo "Error number: [$error_no]";
        echo "Error Description: [$error_msg]";
    }
    set_error_handler("my_error_handler");
    echo (5 / 0);

    //for some reason doesn't work for me
    ```

    >The custom error handler can also include error logging in a file/database, emailing the developer etc.

3. PHP error reporting: the error message depending on your PHP error reporting settings. [error_reporting()](https://www.php.net/manual/en/function.error-reporting.php).

    ```PHP
    // Turn off all error reporting
    error_reporting(0);

    // Reporting E_NOTICE can be good too (to report uninitialized
    // variables or catch variable name misspellings ...)
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

    // Report all errors except E_NOTICE
    error_reporting(E_ALL & ~E_NOTICE);

    // Same as error_reporting(E_ALL);
    ini_set('error_reporting', E_ALL);
    ```

    >`$reporting_level` is optional, can be used to set the reporting level. If not set, PHP will use the default as specified in the `php.ini` file.

<br>

## Error vs Exceptions

- Exceptions are thrown and intended to be caught while errors are generally irrecoverable.

- Exceptions are handled in an object oriented way.
    >When an exception is thrown; an exception object is created that contains the exception details.

## Exception Obj methods

|Method| Description |code  |
|:---  | :---        | :--- |
|`getMessage()`|Displays the exception’s message|`echo $e->getMessage();`|
|`getCode()`|Displays the numeric code that represents the exception.|`echo $e->getCode();`|
|`getFile()`|Displays the file name and path where the exception occurred|`echo $e->getFile();`|
|`getLine()`|Displays the line number where the exception occurred.|`echo $e->getLine();`|
|`getTrace()`|Displays an array of the Stack trace before the exception.|`print_r( $e->getTrace());`|
|`getPrevious()`|Displays the previous exception before the current one.|`echo $e->getPrevious();`|
|`getTraceAsString()`|Displays the backtrace of the exception as a string instead of an array.|`echo $e->getTraceAsString();`|
|`__toString()`|Displays the entire exception as a string.|`echo $e->__toString();`|

<br>

## Throw & catch an exception

- Throw:

```php
throw new Exception("This is an exception example");
```

- catch:

```php
try {
 //code goes here that could potentially throw an exception
}
catch (Exception $e) {
 //exception handling code goes here
}
finally {
    
}

try {
    $var_msg = "This is an exception example";
    throw new Exception($var_msg);
}
catch (Exception $e) {
    echo "Message: " . $e->getMessage();
    echo "";
    echo "getCode(): " . $e->getCode();
    echo "";
    echo "__toString(): " . $e->__toString();
}
```

> you can nest catch.

>A `finally` block may also be specified after or instead of catch blocks. Code within the finally block will always be executed after the try and catch blocks, regardless of whether an exception has been thrown, and before normal execution resumes.

## Exception handling example

```php
<?php
    class DivideByZeroException extends Exception {};
    class DivideByNegativeException extends Exception {};
    function process($denominator) {
        try {
            if ($denominator == 0) {
                throw new DivideByZeroException();
            }
            else if ($denominator < 0) {
                throw new DivideByNegativeException();
            }
            else {
                echo 25 / $denominator;
            }
        }
        catch (DivideByZeroException $ex) {
            echo "DIVIDE BY ZERO EXCEPTION!";
        }
        catch (DivideByNegativeException $ex) {
            echo "DIVIDE BY NEGATIVE NUMBER EXCEPTION!";
        }
        catch (Exception $x) {
            echo "UNKNOWN EXCEPTION!";
        }
    }
    process(0);
?>
```


