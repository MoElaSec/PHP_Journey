<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            h1 {
                color: blue;
            }
            h2 {
                color: blueviolet;
            }
            p {
                color: red;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
        </style>
        <title>Lab:6_3</title>
    </head>
    <body>
        <h1>Lab6_3: Compound annual interest calculator</h1>
        <?php if (isset($_POST['form_submitted'])):?>
            <h2>Found your Answer:</h2>
            <?php 
                $tags = ['!--...--', '!DOCTYPE', 'a', 'abbr', 'acronym', 'address', 'applet', 'area', 'article', 'aside', 'audio', 'b', 'base','basefont', 'bdi', 'bdo', 'big', 'blockquote', 'body', 'br', 'button', 'canvas', 'caption', 'center', 'cite', 'code', 'col', 'colgroup','datalist', 'dd', 'del', 'details', 'dfn', 'dialog', 'dir', 'div', 'dl', 'dt', 'em', 'embed', 'fieldset', 'figcaption', 'figure', 'font', 'footer','form', 'frame', 'frameset', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'header', 'hgroup', 'hr', 'html', 'i', 'iframe', 'img', 'input', 'ins','kbd', 'keygen', 'label', 'legend', 'li', 'link', 'main', 'map', 'mark', 'menu', 'menuitem', 'meta', 'meter', 'nav', 'noframes','noscript', 'object', 'ol', 'optgroup', 'option', 'output', 'p', 'param', 'pre', 'progress', 'q', 'rp', 'rt', 'ruby', 's', 'samp', 'script','section', 'select', 'small', 'source', 'span', 'strike', 'strong', 'style', 'sub', 'summary', 'sup', 'table', 'tbody', 'td', 'textarea','tfoot', 'th', 'thead', 'time', 'title', 'tr', 'track', 'tt', 'u', 'ul', 'var', 'video', 'wbr'];
                $tag = $_POST['tag'];

                if (in_array($tag, $tags)) {
                    echo 'Valid HTML tag!';
                }
                else {
                    echo "Invalid HTML Tag!";
                }
            ?>
        <?php else:?>
            <h2>HTML tags validator:</h2>
            <form action="Lab6_3.php" method="post">
                Tag:
                <input type="text" name="tag" required>

                <input type="hidden" name="form_submitted" value="1">
                <input type="submit" value="submit">
            </form>
        <?php endif?>
    </body>
</html>
