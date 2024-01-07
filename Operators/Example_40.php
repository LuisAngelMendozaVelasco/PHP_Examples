<!--------------------------------------------------->
<!-- Conditional assignment operator: Ternary (?:) -->
<!--------------------------------------------------->

<!DOCTYPE html>
<html>
    <body>
        <?php
            // If empty($user) = TRUE, set $status = "anonymous"
            echo $status = (empty($user)) ? "anonymous" : "logged in";
            echo("<br>");

            $user = "John Doe";
            // If empty($user) = FALSE, set $status = "logged in"
            echo $status = (empty($user)) ? "anonymous" : "logged in";
        ?>  
    </body>
</html>