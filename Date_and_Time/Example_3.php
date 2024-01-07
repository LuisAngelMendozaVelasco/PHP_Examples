<!------------------------------------------->
<!-- Output the current time (server time) -->
<!------------------------------------------->

<!DOCTYPE html>
<html>
    <body>
        <?php
            date_default_timezone_set('America/Mexico_City');

            echo "The time is " . date("h:i:sa");
        ?>
    </body>
</html>