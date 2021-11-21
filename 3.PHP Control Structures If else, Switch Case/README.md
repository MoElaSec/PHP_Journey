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

1. Create a script to construct the following pattern, using nested for loop.

    ```
    *
    * *
    * * *
    * * * *
    * * * * *
    ```

    ```php
    <?php
        for ($i = 1; $i < 6; $i++) {
            echo str_repeat("*", $i) . "<br>";
        }
    ?>

    or

    <?php
        for($x=1;$x<=5;$x++) {
            for ($y=1;$y<=$x;$y++) {
                echo "*";
                if($y< $x) {
                    echo " ";
                }
            }
            echo "\n";
        }
    ?>
    ```

<br>

2. Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cellspacing="0px" to the table tag.
    
    ![image](https://user-images.githubusercontent.com/48570596/142760070-ee74e6cd-cc36-420b-a860-60272720a804.png)


    ```PHP
    <table  align="left" border="1" cellpadding="3" cellspacing="0">
        <?php 
            for ($i = 1; $i < 6+1; $i++) {
                echo "<tr>";
                for ($j = 1; $j < 5+1; $j++) {
                    echo "<td>$i * $j = " . $i*$j . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
    ```

