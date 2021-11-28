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

- Each session is assigned a unique ID which is used to retrieve stored values.

- Whenever a session is created, a **cookie** containing the unique session id is stored on the user’s computer and returned with every request to the server.
    > If the client browser does not support cookies, the unique php session id is displayed in the URL.

- Sessions have the capacity to store relatively large data compared to cookies.

- The session values are **automatically deleted** when the browser is closed. If you want to store the values permanently, then you should store them in the database.

- Just like the `$_COOKIE` array variable, session variables are stored in the `$_SESSION` array variable. Just like cookies, the session must be started before any HTML tags.

<br>

## When/Whey to use Sessions?

- You want to store important information such as the user id **more securely** on the server where malicious users cannot temper with them.

- You want to pass values from one page to another.

- You want the alternative to cookies on browsers that do not support cookies.

- You want to store global variables in an efficient and more secure way compared to passing them in the URL.

- You are developing an application such as a shopping cart that has to temporary store information with a capacity larger than 4KB. 

<br>

## Creating a Session

**Steps:**

1. Call `session_start()`.
2. Store your values in the `$_SESSION` array.

Example: let's check how many times a page got loaded

```PHP
<?php
    session_start(); //start the PHP_session function
    if(isset($_SESSION['page_count'])) {
        $_SESSION['page_count'] += 1;
    }
    else {
        $_SESSION['page_count'] = 1;
    }
    echo 'You are visitor number ' . $_SESSION['page_count'];
?>
```

<br>

## Destroying Sessions

- Destroy the whole PHP session:

```PHP
session_destroy(); //destroy entire session + including cookies associated with the it. 
```

- Destroy a single session item:

```PHP
unset($_SESSION['product']); //destroy product session item 
```

<br>
<br>

| Cookie | Session |
|---|---|
| Cookies are client-side files that contain user information | Sessions are server-side files which contain user information |
| Cookie ends depending on the lifetime you set for it | A session ends when a user closes his browse |
| You don’t need to start cookie as it is stored in your local machine | In PHP, before using $_SESSION, you have to write `session_start()` Likewise for other languages |
| The official maximum cookie size is 4KB | Within-session you can store as much data as you like. The only limits you can reach is the maximum memory a script can consume at one time, which is 128MB by default |
| A cookie is not dependent on Session | A session is dependent on Cookie |
| There is no function named unsetcookie() | `Session_destroy()` is used to destroy all registered data or to unset some |


<br>

## Summary

- **Cookies** are small files saved on the user’s computer.

- **Cookies** can only be read from the issuing domain.

- **Cookies** can have an expiry time, if it is not set, then the cookie expires when the browser is closed.

- **Sessions** are like global variables stored on the server.

- Each **session** is given a unique id that is used to track the variables for a user.

- Both **cookies** and **sessions** must be started before any HTML tags have been sent to the browser.

<br>

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

- `File_exists()`: determine if a file exists or not. (great to check before process or creation)

- `Fopen()`: open a file >Returns a pointer to the opened file.

    ```php
        fopen($file_name,$mode,$use_include_path,$context);
    ```
    
    <img  width="350" height="400" src="https://user-images.githubusercontent.com/48570596/143766103-c4d901e5-2505-4a68-995b-a47d8acf88b5.png">

- `Fwrite()`:write to files.

- `Fclose()`: Closes an open file pointer.
- `Fgets()`: reading file line by line.
- `copy()`: copy an existing file.

    ```PHP
    <?php
        copy('settings.txt', 'settings_backup.txt') or die("Could not copy file");
        echo "File successfully copied to 'my_settings_backup.txt'";
    ?>
    ```

- `unlink()`: delete files.

    ```PHP
    <?php
        if (!unlink('my_settings_backup.txt')) {
        echo "Could not delete file";
        }
        else {
        echo "File 'my_settings_backup.txt' successfully deleted";
    }
    ?>
    ```

- `file_get_content()`: Reads entire file into a string.

> **Note:** Operating systems such as Windows and MAC OS are **NOT** case sensitive while Linux or Unix operating systems are case sensitive. >So for maximum cross platform convert all name to lower_case for example.

<br>
<br>

## Open, Create & Close a File

### Open:

```PHP
<?php
    $fh = fopen("my_settings.txt", 'w')
    or
    die("Failed to create file"); 
?>
```

### Create & Close:

```PHP
<?php
    $fh = fopen("my_settings.txt", 'w') or die("Failed to create file");
    $text = <<<_END
    localhost;root;pwd1234;my_database
    _END;
    fwrite($fh, $text) or die("Could not write to file");
    fclose($fh);
    echo "File 'my_settings.txt' written successfully"; 
?> 
```


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
