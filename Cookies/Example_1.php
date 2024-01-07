<!---------------------------------->
<!-- Create and retrieve a cookie -->
<!---------------------------------->

<!DOCTYPE html>
<?php
    $cookie_name = "user";
    $cookie_value = "Luis Mendoza";
    setcookie($cookie_name, $cookie_value, time() + (60*60*24*30), "/"); // 60*60*24*30 = 30 days
?>
<html>
    <body>
        <?php
            if(!isset($_COOKIE[$cookie_name])) {
                echo "Cookie named '" . $cookie_name . "' is not set!";
            } 
            else {
                echo "Cookie '" . $cookie_name . "' is set!<br>";
                echo "Value is: " . $_COOKIE[$cookie_name];
            }
        ?>
        <p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>
    </body>
</html>