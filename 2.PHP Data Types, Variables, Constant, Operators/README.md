# Data Types

> • PHP is a loosely typed language.

[var_dump](https://www.php.net/manual/en/function.var-dump.php) function is used to determine the data type.

```PHP
<?php
        $a = 1;
        var_dump($a);
        $b = 1.5;
        var_dump($b);
        $c = "I Love PHP";
        var_dump($c);
        $d = true;
        var_dump($d);
?>
```

Output:

```PHP
int(1) 
float(1.5)
string(10) "I Love PHP" 
bool(true)
```

[print_r :](https://www.php.net/manual/en/function.print-r.php) Prints human-readable information about a variable

```PHP
$a = array ('a' => 'apple', 'b' => 'banana','c' => array ('x', 'y', 'z'));

print_r ($a);
```

Output:

```PHP
Array
(
    [a] => apple
    [b] => banana
    [c] => Array
        (
            [0] => x
            [1] => y
            [2] => z
        )
)
```

## [Superglobals](https://www.php.net/manual/en/language.variables.superglobals.php)

Several predefined variables in PHP are "superglobals", which means they are available in all scopes throughout a script. There is no need to do global $variable; to access them within functions or methods.

```PHP
$GLOBALS
$_SERVER
$_GET
$_POST
$_FILES
$_COOKIE
$_SESSION
$_REQUEST
$_ENV
```

[$GLOBALS](https://www.php.net/manual/en/reserved.variables.globals.php) — References all variables available in global scope

```php
print_r($GLOBALS);


output:

Array ( 
    [_GET] => Array ( )
    [_POST] => Array ( ) 
    [_COOKIE] => Array ( ) 
    [_FILES] => Array ( ) 
    [GLOBALS] => Array *RECURSION*
)

```

<br>

# Operators

## Concatenation

```PHP
"PHP" . " ROCKS";
10 .3;
```

output:

```PHP
PHPROCKS
103

```

```PHP
$x = "Pretty";
$x .= " Cool!"; 
```

output:

```php
Pretty Cool!
```

### Comparison

- __Equal__: `x == y`  Example: `1 == "1"` output: `True or 1`

- __Identical__: `x === y` (same Value + Datatype) Example: `1 === "1"` output: `False or 0`

- __Not Equal__: `x != y or x <> y`

- __Logical__:
  - and: `x and y , x && y`
  - or: `x or y , x || y`
  - xor: `x xor y`

### Comments

- `//single line comment`

- ```php
    /*
    Multi line comment
    */
    ```

# Working with files

To include files into your PHP script we can use:

- Throws Warning + cont. execution:
  - include
  - include_once
- No Warning + Stops execution:
  - require
  - require_once

### include & include_once

```php
<?php
    include_once 'file_name';
?>
```

Real life example:

- Suppose you are developing a website that contains the same navigation menu across all the pages.

You can create a common header then include it in every page using the include statement Let’s see
how this can be done. We will create 2 files names

- header.php:

```PHP
<a href="/index.php">Home</a>
<a href="/aboutus.php">About us</a>
<a href="/services.php">Services</a>
<a href="/contactus.php">Contact Us</a>
```

- index.php:

```PHP
<?php
    include 'header.php';
?>
```

## require & require_once

Real life example:

- Suppose we are developing a database powered application.

We can create a configuration file that we can include in all pages that connect to the database using
the require statement.

- config.php:

```PHP
<?php
    $config['host'] = 'localhost';
    $config['db'] = 'my_database';
    $config['uid'] = 'root';
    $config['password'] = '';
?>
```

in a sample code that requires the config file:

```PHP
<?php
    require 'config.php'; //require the config file
    //other code for connecting to the database
?>
```

## Handling the included file

> [StackOverFlow shows Multiple ways to do it.](https://stackoverflow.com/questions/8261756/how-to-catch-error-of-require-or-include-in-php)

A simple way:

```PHP
<?php
    ...
    if(!include 'config.php'){
        die("File not found handler. >_<");
    }
   ...
?>
```

### Take away notes

> - The __include__ statement should be in most cases except in situations where without the requested file to be include, the entire script cannot run.

> - Single HTML code such as headers, footers, side bars etc. can be shared across many pages. This makes it easy to update the website by just updating a single file.

> - PHP code such as database configuration settings, custom functions etc. can be shared across many pages ensuring the website/application uses the same settings.

<br>

# Arrays

Types:

- Numeric Arrays: Arrays with a numeric index.
- Associative Array: Arrays with named keys.
- Multi-dimensional arrays: Arrays containing one or more arrays.

With arrays we can:

- Do operations.
- Functions (is_array, count, sort, ksort, asort, array_slice)

> One way is to use `array()` func to create an array.

## Numeric Arrays

2 ways to create the same array:

```PHP
<?php
    $movie[0]="Shaolin Monk";
    $movie[1]="Drunken Master";
    $movie[2]="American Ninja";
    $movie[3]="Once upon a time in China";
    $movie[4]="Replacement Killers";
   
    echo $movie[3]; //output: Once upon a time in China
    
    $movie[3] = " Eastern Condors";
    echo $movie[3]; //output:  Eastern Condors

    //final result well look like this: 
    //Once upon a time in China Eastern Condors 
?>
```

another way is:

```PHP
<?php
    $movie = array(
        0 => "Shaolin Monk",
        1 => "Drunken Master",
        2 => "American Ninja",
        3 => "Once upon a time in China",
        4 =>"Replacement Killers"
    );
    echo $movie[4]; //output: Replacement Killers
?>
```

## Associative Array

```php
<?php
    $variable_name['key_name'] = value;
    $variable_name = array('keyname' => value);
?>
```
