<!-- Use the $GLOBALS[] array to access a global variable from within a function -->
<!DOCTYPE html>
<html>
    <body>
        <?php
            $x = 5;
            $y = 10;

            function myTest() {
                $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
            } 

            myTest();
            echo $y;
        ?>
    </body>
</html>