<!-- Use the static keyword to let a local variable not be deleted after execution of function -->
<!DOCTYPE html>
<html>
    <body>
        <?php
            function myTest() {
                static $x = 0;
                echo $x;
                $x++;
            }

            myTest();
            echo "<br>";
            myTest();
            echo "<br>";
            myTest();
        ?> 
    </body>
</html>