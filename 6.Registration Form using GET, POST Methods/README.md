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

## Processing Registration Form Data

Notes about code:

- The registration form submits data to itself as specified in the `action="registration_form.php"` attribute of the form.

- When a form has been submitted, the values are populated in the `$_POST` super global array.


```HTML
<html>
    <head>
        <title>Registration Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php if (isset($_POST['form_submitted'])): ?> //this code is executed when the form is submitted
        
            <h2>Thank You <?php echo $_POST['firstname']; ?> </h2>
            
            <p>You have been registered as
                <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
            </p>
            
            <p>Go <a href="/registration_form.php">back</a> to the form</p>
            
        <?php else: ?>
            <h2>Registration Form</h2>
            <form action="registration_form.php" method="POST">
                First name:<input type="text" name="firstname"> <br>
                Last name:<input type="text" name="lastname">

                <input type="hidden" name="form_submitted" value="1" />
                <input type="submit" value="Submit">
            </form>
        <?php endif; ?>
    </body>
</html>
```

Here we:

- `<?php if (isset($_POST['form_submitted'])): ?>` checks if the `form_submitted` hidden field has been filled in the `$_POST[]` array and display a thank you and first name message.

- If the `form_submitted` field hasn’t been filled in the `$_POST[]` array, the form is displayed.

