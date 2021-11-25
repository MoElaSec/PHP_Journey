# [Registration Form: GET, POST](https://www.w3schools.com/php/php_forms.asp)

## What's a Form

An HTML tag that contains graphical user interface items such as input box, check boxes
radio buttons etc.

defined with `<form>` tag and GUI items with the form elements such as: `<input>`, `<label>`  & `<textarea>` etc.

Used to:

- Accept User input.
- Edit existing data from the Database.

## Create a Form

Minimally you need the following:

- Opening and closing form tags `<form>`…`</form>`

- Form submission type `POST` or `GET`
- Submission `URL` that will process the submitted data
- `Input fields` such as input boxes, text areas, buttons,checkboxes etc.

```HTML
<html>
    <head>
        <title>Registration Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h2>Registration Form</h2>
        <form action="registration_form.php" method="POST"> 
            First name:<input type="text" name="firstname"> <br>
            Last name:<input type="text" name="lastname">
            
            <input type="hidden" name="form_submitted" value="1" />  //hidden value used to check if form has ben submited or not.
            
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
```

## Submitting Form data to server [GET vs. POST]

Both GET and POST create an array `(e.g. array( key1 => value1, key2 => value2, key3 => value3, ...))`. This array holds key/value pairs, where keys are the names of the form controls and values are the input data from the user.

Both GET and POST are treated as `$_GET` and `$_POST`. These are `superglobals`, which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

### `$_GET`

An array of variables passed to the current script via the URL parameters.

> Information sent from a form with the `GET` method is visible to `everyone`
(Names/Values all displayed in the URL).
Hence why it's possible to `bookmark` the page (ex: search engine forms).

>**Note:** `GET` should `NEVER` be used for sending passwords or other sensitive information!

```php
<?php
    $_GET['variable_name'];
?>
```

<br>

### `$_POST`

An array of variables passed to the current script via the HTTP POST method.

>Information sent from a form with the POST method is invisible to others.
(name/values embedded within the body of the HTTP request).

>`No limits` on the amount of information to send.

>Variables are `not displayed` in the URL, it is `not possible to bookmark` the page.

```php
<?php
    $_POST['variable_name'];
?>
```

<br>

| **POST** |  **GET** |
| :---        |    :----   |
| Values not visible in the URL |  Values visible in the URL
|Has no limitation of the length of the values since they are submitted via the body of HTTP  | Has limitation on the length of the values usually 255 characters. This is because the values are displayed in the URL. **Note** the upper limit of the characters is dependent on the browser.
|Has lower performance compared to `$_GET` method due to time spent encapsulation the `$_POST` values in the HTTP body| Has high performance compared to `POST` method dues to the simple nature of appending the values in the URL.
|Supports many different data types such as string, numeric, binary etc. | Supports only string data types because the values are displayed in the URL
|Results cannot be bookmarked | Results can be book marked due to the visibility
|![image](https://user-images.githubusercontent.com/48570596/143432479-244e4723-4017-4f5a-b3a0-3c7dab88ddea.png) |  ![image](https://user-images.githubusercontent.com/48570596/143432532-44be65ef-e410-4538-9ecf-c983559739c6.png)

<br>

## Processing Registration Form Data  with checkbox ($_POST)

Notes about code:

- The registration form submits data to itself as specified in the `action="registration_form.php"` attribute of the form.

- When a form has been submitted, the values are populated in the `$_POST` super global array.

```php
<html>
    <head>
        <title>Registration Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php if (isset($_POST['form_submitted'])): ?>
            <?php if (!isset($_POST['agree'])): ?>
                <p>You have not accepted our terms of service</p>
            <?php else: ?>
                <h2>Thank You <?php echo $_POST['firstname']; ?></h2>
                <p>You have been registered as 
                    <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
                </p>
                <p> Go <a href="/registration_form2.php">back</a> to the form</p>
            <?php endif; ?>
        <?php else: ?>
            <h2>Registration Form</h2>
            <form action="registration_form2.php" method="POST">
                First name:
                <input type="text" name="firstname"><br> 

                Last name:
                <input type="text" name="lastname"><br> 
                
                Agree to Terms of Service:
                <input type="checkbox" name="agree"><br>

                <input type="hidden" name="form_submitted" value="1"/>
                <input type="submit" value="Submit">
            </form>
        <?php endif; ?>
    </body>
</html>
```

Here we:

- `<?php if (isset($_POST['form_submitted'])): ?>` checks if the `form_submitted` hidden field has been filled in the `$_POST[]` array, and display a thank you and first name message.

- `<?php if (!isset($_POST['agree'])): ?>`: Checks if Terms of servers checkbox is checked [read more about [isset($_POST['var_name'])](https://www.php.net/manual/en/function.isset.php)].

<br>

## Let's build a Search Engine ($_GET)

```php
<html>
    <head>
        <title>Simple Search Engine</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php if (isset($_GET['form_submitted'])): ?>
                <h2>Search Results For <?php echo $_GET['search_term']; ?> </h2>
            <?php if ($_GET['search_term'] == "GET"): ?>
                <p>The GET method displays its values in the URL</p>
            <?php else: ?>
                <p>Sorry, no matches found for your search term</p>
            <?php endif; ?>
                <p>Go <a href="/search_engine.php">back</a> to the form</p>
        <?php else: ?>
            <h2>Simple Search Engine - Type in GET </h2>
            
            <form action="search_engine.php" method="GET">
                Search Term:
                <input type="text" name="search_term"><br>

                <input type="hidden" name="form_submitted" value="1" />
                <input type="submit" value="Submit">
            </form>
        <?php endif; ?>
    </body>
</html>
```

<br>

## Must Know function

[PHP_SELF + htmlspecialchars()](https://www.w3schools.com/php/php_form_validation.asp)

```php
htmlspecialchars($_SERVER["PHP_SELF"]);
```

- `$_SERVER["PHP_SELF"]`: Super-global variable that returns the filename of the currently executing script.
    > So Basically, sends the submitted form data to the page itself, instead of jumping to a different page. This way, the user will get error messages on the same page as the form.

- `htmlspecialchars()`: Converts special characters to HTML entities.This means that it will replace HTML characters like: `<` with `&lt;`. This prevents attackers from exploiting the code by injecting HTML or JavaScript code in forms.

[REQUEST_METHOD](https://stackoverflow.com/questions/409351/post-vs-serverrequest-method-post)

```php
if ($_SERVER["REQUEST_METHOD"] === "POST")
```

- if method is POST then form is submitted another way to check (you can use GET as well).


<br>


## Summary

- Forms are used to get data from the users.
- Forms are created using HTML tags.
- Forms can be submitted to the server for processing using either POST or GET method.
- Form values submitted via the POST method are encapsulated in the HTTP body.
- Form values submitted via the GET method are appended and displayed in the URL.
