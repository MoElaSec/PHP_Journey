# Cookies & Session

## Cookie?

Small file with max size of **4KB** that the web server stores on the client  computer. 




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
