<!------------------------------------------------------------------------------->
<!-- $GLOBAL - Used to access global variables from anywhere in the PHP script -->
<!------------------------------------------------------------------------------->

<!DOCTYPE html>
<html>
    <body>
        <?php 
            $x = 75;
            $y = 25; 

            function addition() {
                $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
            }

            addition();
            echo $z;
        ?>
    </body>
</html>