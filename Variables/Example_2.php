<!--------------------------------------------------->
<!-- Test global scope (variable outside function) -->
<!--------------------------------------------------->

<!DOCTYPE html>
<html>
    <body>
        <?php
            $x = 5; // Global scope
            
            function myTest() {
                // Using x inside this function will generate an error
                echo "<p>Variable x inside function is: $x</p>";
            }

            myTest();
            echo "<p>Variable x outside function is: $x</p>";
        ?>
    </body>
</html>