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

> One way is to use `array()` this is not really a function, but a language construct. just like `list()`.

> Note: Only the difference in using `[]` or `array()` is with the version of PHP you are using. In *PHP 5.4* you can also use the short array syntax, which replaces array() with [].

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

real world example, assign the gender of each person
against their names:

```php
<?php
    $persons = array(
        "Mary" => "Female",
        "John" => "Male", 
        "Mirriam" => "Female"
    );
    
    print_r($persons);
    
    echo "";
    echo "Mary is a " . $persons["Mary"];
?>
```

output:

```PHP
Array ( [Mary] => Female [John] => Male [Mirriam] => Female ) Mary is a Female
```

## Multi-dimensional arrays

| Movie title |  Category |
| :---        |    :----:   |
| Pink Panther |  Comedy
| John English | Comedy
| Die Hard | Action
| Expendables | Action
| The Lord of the rings | Epic
| Romeo and Juliet | Romance
| See no evil hear no evil | Comedy

we can represent it in Multi-Dimensions Array in PHP:

```PHP
<?php
    $movies =array(
        "comedy" => array("Pink Panther", "John English", "See no evil hear no evil"),
        "action" => array("Die Hard", "Expendables"),
        "epic" => array("The Lord of the rings"),
        "Romance" => array("Romeo and Juliet")
    );
    print_r($movies);
?>
```

Output:

```PHP
Array ( 
    [comedy] => Array ( [0] => Pink Panther [1] => John English [2] => See no evil hear no evil ) 
    [action] => Array ( [0] => Die Hard [1] => Expendables )
    [epic] => Array ( [0] => The Lord of the rings ) 
    [Romance] => Array ( [0] => Romeo and Juliet ) 
)
```

another way is:

```PHP
<?php
    $film=array(
        "comedy" => array(
            0 => "Pink Panther",
            1 => "john English",
            2 => "See no evil hear no evil"
        ),
        "action" => array (
            0 => "Die Hard",
            1 => "Expendables"
        ),
        "epic" => array (
            0 => "The Lord of the rings"
        ),
        "Romance" => array
        (
            0 => "Romeo and Juliet"
        )
    );

    echo $film["comedy"][0];
?>
```

Output:

```PHP
Pink Panther
```

<br>

## Operations on Arrays

you can + == === != !==

for example:

- Add:

    ```PHP
    <?php
        $x = array('id' => 1);
        $y = array('value' => 10);
        $z = $x + $y;
    ?>
    ```

    output:

    ```PHP
        Array( 
            [id] => 1 
            [value] => 10
        )
    ```

- Not identical !==:

    ```PHP
    <?php
        $x = array("id" => 1);
        $y = array("id" => "1");
        
        if($x !== $y) {
            echo "true";
        }
        else {
            echo "false";
        }
    ?>
    ```  

    Output:

    ```php
        True or 1
    ```

<br>

## Array Functions

1. `is_array()`: check if var is array

    ```PHP
    <?php
        $lecturers = array("Mr. Jones", "Mr. Banda", "Mrs. Smith");
        echo is_array($lecturers);
    ?>
    ```

    output:

    ```php
    1
    ```

2. `count()`: count the number of elements that an array contains.

    ```PHP
    <?php
        $lecturers = array("Mr. Jones", "Mr. Banda", "Mrs. Smith");
        echo count($lecturers);
    ?>
    ```

    output:

    ```PHP
    3
    ```

3. `reset()`: gets the first member of the array. (It also resets the internal iteration pointer).

    ```PHP
    $odd_numbers = [1,3,5,7,9];
    $first_item = reset($odd_numbers); //or: = $odd_numbers[0];

    echo $first_item; //    1   
    ```

4. `end()`: gets the last member of the array.

    ```PHP
    $odd_numbers = [1,3,5,7,9];
    $last_item = end($odd_numbers);
    echo $last_item;

    //or you can use count()-1
    $last_index = count($odd_numbers) - 1;
    $last_item = $odd_numbers[$last_index];

    ```

5. `array_slice()`: returns a new array that contains a certain part of a specific array from an offset.

    ```PHP
    // discard the first 3 elements of an array
    $numbers = [1,2,3,4,5,6];
    print_r(array_slice($numbers, 3)); //Array ( [0] => 4 [1] => 5 [2] => 6 )

    // take only two items (from the 3 position take only 2)
    $numbers = [1,2,3,4,5,6];
    print_r(array_slice($numbers, 3, 2)); //Array ( [0] => 4 [1] => 5 )
    ```

6. `array_splice()`: same as  `array_slice()` but well also alter the original array by **remove** the slice.

    ```PHP
    $numbers = [1,2,3,4,5,6];
    
    print_r(array_splice($numbers, 3, 2)); //Array ( [0] => 4 [1] => 5 )

    print_r($numbers);  //Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 6 )
    ```

<br>

### Stack and queue functions

> Arrays can be used as stacks and queues as well.

1. `array_push()`:  push a member to the end of an array.

    ```PHP
    $numbers = [1,2,3];
    array_push($numbers, 4); // now array is [1,2,3,4];
    // print the new array
    print_r($numbers);
    ```

2. `array_pop()`: pop a member from the end of an array.

    ```PHP
    $numbers = [1,2,3,4];
    array_pop($numbers); // now array is [1,2,3];
    // print the new array
    print_r($numbers);
    ```

3. `array_unshift()`: push a member to the beginning of an array.

    ```PHP
    $numbers = [1,2,3];
    array_unshift($numbers, 0); // now array is [0,1,2,3];
    
    // print the new array
    print_r($numbers);
    ```

4. `array_shift()`: pop a member from the beginning of an array.

    ```PHP
    $numbers = [0,1,2,3];
    array_shift($numbers); // now array is [1,2,3];
    
    // print the new array
    print_r($numbers);
    ```

### Concatenating/Merge arrays

- `array_merge ()`: Concatenate between two array.

    ```PHP
    $odd_numbers = [1,3,5,7,9];
    $even_numbers = [2,4,6,8,10];
    $all_numbers = array_merge($odd_numbers, $even_numbers);
    print_r($all_numbers);
    ```

### Sorting Arrays

> Sorting is done on the input array and does not return a new array. So `$sorted_names = sort($names);` is wrong this will store 1.

- `sort()`: Sort an array.

    ```PHP
    $numbers = [4,2,3,1,5];
    sort($numbers);

    print_r($numbers); // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
    ```

- `rsort()`: Reverse sort an array.

    ```PHP
    $numbers = [4,2,3,1,5];
    rsort($numbers);

    print_r($numbers); //  Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )
    ```

- Remember to use flags:
    - SORT_STRING
    - SORT_FLAG_CASE

These for example to sort array as a string alphabetically and ignore the case as bigger cases well be first ascending:

```PHP
$male_names = ["Adam", "Snow", "PewDiePie"];
$female_names = ["Merry", "Sara", "Mona"]; 

$names = array_merge ($male_names ,$female_names);

sort($names, SORT_STRING | SORT_FLAG_CASE);

print_r($names); //Array ( [0] => Adam [1] => Merry [2] => Mona [3] => PewDiePie [4] => Sara [5] => Snow )
```