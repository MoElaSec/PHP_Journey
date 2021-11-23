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
    echo date("D"); //Mon
    ```

    `[timestamp]`: optional if not given it's defualtde to value in `time()` which's current timestamp and set in `php.ini`.
    > you can set it using `date_default_timezone_set()`.

    - `()`:

    - `()`
