<!------------------------------------------------->
<!-- Test local scope (variable inside function) -->
<!------------------------------------------------->

<!DOCTYPE html>
<html>
    <body>
        <?php
            function myTest() {
                $x = 5; // Local scope
                echo "<p>Variable x inside function is: $x</p>";
            } 

            myTest();
            // Using x outside the function will generate an error
            echo "<p>Variable x outside function is: $x</p>";
        ?>
    </body>
</html>