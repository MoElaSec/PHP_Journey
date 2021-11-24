# [Functions](https://www.w3schools.com/php/php_functions.asp)

> - A function will not execute automatically when a page loads, but by a call to the function.

- To define your own:

    ```php
    function functionName() {
    code to be executed;
    }

    function familyName($fname, $year) {
        echo "$fname Refsnes. Born in $year <br>";
    }

    familyName("Hege", "1975"); //Hege Refsnes. Born in 1975
    ```

> - A function name **must** start with a **letter** or an **underscore**.
> - Function names are **NOT** case-sensitive.

> - PHP is a Loosely Typed Language. (don't have to tell PHP which data type the variable is)

<br>

## Strict & Type declarations

since PHP 7 specify the expected data type when declaring a function so if it's mismatched a "`Fetal Error`" is thrown.

```php
<?php declare(strict_types=1); // strict requirement

    function addNumbers(int $a, int $b) {
        return $a + $b;
    }
    
    echo addNumbers(5, "5 days");
    // since strict is enabled and "5 days" is not an integer, an error will be thrown.
?>
```

can be done to return value as well.

```php
function addNumbers(float $a, float $b) : float {
  return $a + $b;
}

echo addNumbers(1.2, 5.2);
```

<br>

## Default arguments

Incase no arg is passed it will use the default one.

```PHP
function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(); //50
```

<br>

## Passing by Reference

> - args usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.

function argument is passed by reference, changes to the it also change the variable that was passed in. using the `&` operator *(reminds me with pointers in C)*.

```PHP
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);

echo $num; //7  notice $num changed
```

## Built-in Functions

- [String Functions](../4.String%20Functions/README.md)

- Numeric Functions:
    - `is_number()`: true/false

    - `number_format()`: formats a numeric value using digit separators and decimal points.

        ```php
        <?php
            echo number_format(2509663); // 2,509,663
        ?>
        ```

    - `rand()`: Generate a random number.

    - `round()`: Round off a number with decimal points to the nearest whole number.

    - `sqrt()`
    - `sin()`, `cos()`, `tan()`
    - `pi()`

- Date & Time Functions:
    - `date(format,[timestamp])`: returns the current time on the server.

    ```php
    //today: 22-Nov-2021
    
    echo date("y"); //21
    echo date("Y"); //2021
    echo date("m"); //11
    echo date("M"); //Nov
    echo date("d"); //2
    echo date("D"); //Mon  //use l to print Monday
    echo date("r") //Mon, 22 Nov 2021 02:51:37 +0100
    ```

    `[timestamp]`: optional arg if not given it's defualted to value in `time()` which's current timestamp `echo time()`and set in `php.ini`.
    > The timestamp is the number of seconds between the current time and 1st January, 1970  00:00:00 GMT. It is also known as the UNIX timestamp. 

    > you can set it using `date_default_timezone_set()`.

    You can get a list of available time zones id then use one to set it:

    ```PHP
    <?php
        //call static method `listIdentifiers()` from `DateTimeZone` built-in class
        $timezone_identifiers = DateTimeZone::listIdentifiers();

        foreach($timezone_identifiers as $key => $list){
            echo $list . "<br/>";
        }

        /*Output:
        Africa/Abidjan
        Africa/Accra
        Africa/Addis_Ababa
        Africa/Algiers
        Africa/Asmara
        Africa/Bamako
        .. */

        //Now you know how it looks like pick one and set it:

        echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s");//Output: The time in Europe/Berlin is 02:22:29

        date_default_timezone_set("Asia/Calcutta");

        echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s");//Output: The time in Asia/Calcutta is 06:52:29

    ?>
    ```

    <br>

    - `mktime(hour, minute, second, month, day, year, is_dst)`:
        returns the timestamp in Unix format + All args are optional. but at least give it 1 arg.

        - Arguments may be left out in order from right to left; any arguments thus omitted will be set to the current value according to the local date and time.

        - Remember timestamp is a long integer containing the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.

            ```php
            echo mktime(1,0,0,1,1,1970); //output is: 0
            ```

        - is_dst: returns Day Saving Time [`1` if there's] [`-1` if not] [`0` unknown].
            > **Daylight Savings Time** or daylight time, and summer time, is the practice of advancing clocks during warmer months so that darkness falls at a later clock time

            > `Note:` This parameter is removed in PHP 7.0. The new timezone handling features should be used instead

        >`mktime()` is deprecated get current timestamp with `time()`.

        ```php
        // Prints: October 3, 1975 was on a Friday
        echo "Oct 3, 1975 was on a ".date("l", mktime(0,0,0,10,3,1975));
        ```


