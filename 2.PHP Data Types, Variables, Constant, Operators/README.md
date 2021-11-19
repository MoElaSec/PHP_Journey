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

### include & include_once

