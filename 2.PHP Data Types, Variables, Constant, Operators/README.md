# Data Types:

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
