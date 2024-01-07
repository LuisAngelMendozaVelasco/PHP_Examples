<!----------------------->
<!-- Sanitize a string -->
<!----------------------->

<!DOCTYPE html>
<html>
    <body>
        <?php
            $str = "<h1>Hello World!</h1>";
            // $newstr = filter_var($str, FILTER_SANITIZE_STRING); // 'FILTER_SANITIZE_STRING' is deprecated.
            $newstr = filter_var($str, 513);

            echo $newstr;
        ?>
    </body>
</html>