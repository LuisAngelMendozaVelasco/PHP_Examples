<?php 
    declare(strict_types=1); // Strict requirement 
?>  

<!------------------------------------------>
<!-- Function with default argument value -->
<!------------------------------------------>

<!DOCTYPE html>
<html>
    <body>
        <?php
            function setHeight(int $minheight = 50) {
                echo "The height is : $minheight <br>";
            }

            setHeight(350);
            setHeight();
            setHeight(135);
            setHeight(80);
        ?>
    </body>
</html>