<!-------------------------------------->
<!-- The if...elseif...else statement -->
<!-------------------------------------->

<!DOCTYPE html>
<html>
    <body>
        <?php
            date_default_timezone_set('America/Mexico_City');

            $t = date("H");
            echo "<p>The hour (of the server) is " . $t; 
            echo ", and will give the following message:</p>";

            if ($t < "10") {
                echo "Have a good morning!";
            } 
            elseif ($t < "20") {
                echo "Have a good day!";
            } 
            else {
                echo "Have a good night!";
            }
        ?>
    </body>
</html>