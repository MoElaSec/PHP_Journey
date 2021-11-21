# Control Flow

## IF Else

```php
<?php
    if (condition is true) {
        block one
    }
    elseif (condition is true) {
        block two
    }
    else {
        block three
    }
?>
```

- Or instead of `if else` use ternary a.k.a Elvis operator :

```php
(condition) ? is true : is false ;
```

<br>

## Switch Case

```php
switch(condition){
    case value:
        //block of code to be executed
        break;

    case value2:
        //block of code to be executed
        break;
    
    default:
        //default block code
        break;
}
```

> Use `break` to prevent the code from running into the next case automatically. The `default` statement is used if no match is found.

<br>

## Loops: For, ForEach, While, Do While

<br>

## For

```php
for (initialize; condition; increment){
    //code to be executed
}

for ($i = 0; $i < 10; $i++){
    $product = 10 * $i;
    echo "The product of 10 * $i is $product <br/>";
}
```

<br>

## ForEach

> used to iterate through array values.

```php
foreach($array_variable as $array_values){
    block of code to be executed
}

//exmaple:
$animals_list = array("Lion","Wolf","Dog","Leopard","Tiger");

foreach($animals_list as $array_values){
    echo $array_values . "<br>";
}

//example associative array:
$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");

foreach($persons as $key => $value){
    echo "$key is $value"."<br>";
}

```

<br>

## While

```php
while (condition){
    block of code to be executed;
}

$i = 0;
while ($i < 5){
    echo $i + 1 . "<br>";
    $i++;
}
```

<br>

## Do While

> - executes the block of code at least once before evaluating the condition.

```php
do{
    block of code to be executed
} while(condition);

$i = 9;
do{
    echo "$i is"." <br>";
} while($i < 9);

```

<br>
<br>
<br>

# Exercises

