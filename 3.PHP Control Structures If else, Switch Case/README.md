# IF Else

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

# Switch Case

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

