# Cookies & Session

## Cookie?

Small file with max size of **4KB** that the web server stores on the client  computer.

- When a cookie is set all page requests later will return the that cookie name:value.

- only the domain that set the cookie is where the cookie can be read from.

- website that shows elements from other websites like Adv. these websites can set what called a third-party cookie.

- cookies created by users are only to be viewed by that user.

- if cookies are disabled PHP responds by passing the cookie token in the URL.

<br>

## When/Why to use Cookies?

- **HTTP** is a stateless protocol; cookies allow us to track the state of the application using small files stored on the user’s computer.
    > The path were the cookies are stored depends on the browser.

- **Personalizing the user experience** – this is achieved by allowing users to select their preferences. (like dark/light mode)

- Tracking the pages visited by a user.

<br>

## Creating a Cookie

```php
setcookie(cookie_name, cookie_value, [expiry_time], [cookie_path], [domain],[secure], [httponly]);
```

- `[expiry_time]` is optional; it can be used to set the expiry time for the cookie such as 1 hour.
    > The time is set using the PHP time() functions plus or minus a number of seconds greater than 0 i.e. time() + 3600 for 1 hour.

- `[cookie_path]` is optional; it can be used to set the cookie path on the server. The forward slash `/` means that the cookie will be made available on the entire domain. Sub directories limit the cookie access to the subdomain.

- `[domain]` is optional, it can be used to define the cookie access hierarchy i.e.
www.cookiedomain.com means entire domain while www.sub.cookiedomain.com limits the cookie access to www.sub.cookiedomain.com and its sub domains. Note it’s possible to have a subdomain of a subdomain as long as the total characters do not exceed 253 characters.

- `[secure]` is optional, default=false. It is used to determine whether the cookie is sent via `HTTPs` if it is set to true or `HTTP` if it is set to false.

- `[Httponly]` is optional. If it is set to true, then only client side scripting languages i.e. JavaScript cannot access them (protect against common XSS).

> **Note:** the php `setcookie()` function must be executed before the HTML opening tag.

<br>

### example

Set cookie for 30 seconds:

```PHP
<?php
    setcookie("user_name", "Guru99", time()+ 60,'/'); // expires after 60 seconds
    echo 'the cookie has been set for 60 seconds';
?>
```

Retrieve it's value with the superglobal `$_COOKIE`:

```php
<?php
    print_r($_COOKIE); //output the contents of the cookie array variable

    //Output: 
    //Array ( [PHPSESSID] => h5onbf7pctbr0t68adugdp2611 [user_name] => Guru99 )
?>
```

### `$_COOKIE`

- It contains the names and values of all the set cookies.
- Array can contain depends on the memory size set in `php.ini` The default value is 1GB.

## Deleting a Cookie

- To destroy a cookie before its expiry time, then you set the expiry time to a time that has already passed.

let's destroy the above created cookie:

```PHP
<?php
    setcookie("user_name", "Guru99", time() - 360,'/');
?>
```

<br>
<br>

## Session?
A global variable stored on the server. 



<br>

## Summary

- **Cookies** are small files saved on the user’s computer.

- **Cookies** can only be read from the issuing domain.

- **Cookies** can have an expiry time, if it is not set, then the cookie expires when the browser is closed.

- **Sessions** are like global variables stored on the server.

- Each **session** is given a unique id that is used to track the variables for a user.

- Both **cookies** and **sessions** must be started before any HTML tags have been sent to the browser.

<br>

# File Handling

## Supported filetypes

- `.txt`
- `.log`
- `.custom_extension` [ex. file.xyz]
- `.csv`
- `.gif` ,  `.jpg` etc

Usage:

- You want to store simple data such as server logs for later retrieval and analysis.
- You want to store program settings i.e. `program.ini`

> Files provide a permanent cost effective data storage solution for simple data compared to databases that require other software and skills to manage DBMS systems.

## File Functions

- `File_exists()`: determine if a file exists or not.

- `Fopen()`: open a file >Returns a pointer to the opened file.
- `Fwrite()`:write to files.
- `Fclose()`: Closes an open file pointer.
- `Fgets()`: reading file lines.
- `copy()`: copy an existing file.
- `unlink()`: delete files.
- `file_get_content()`: Reads entire file into a string.

> **Note:** Operating systems such as Windows and MAC OS are **NOT** case sensitive while Linux or Unix operating systems are case sensitive. >So for maximum cross platform convert all name to lower_case for example.

<br>

## Data collector (visitor IP+domain name -> log.csv)

```php
$ip = GetHostByName($_SERVER['REMOTE_ADDR']);
$name = gethostbyaddr($_SERVER['REMOTE_ADDR']);

$file = fopen("log.csv", "a");

fwrite($file, time()); // you can modify the date - time format
fwrite($file,";");
fwrite($file,$ip);
fwrite($file,";");
fwrite($file,$name);
fwrite($file,"\n");

fclose($file);
```

<br>

## Summary

- A file is a resource for storing data

- PHP has a rich collection of built in functions that simplify working with files.
- Common file functions include fopen, fclose, file_get_contents
