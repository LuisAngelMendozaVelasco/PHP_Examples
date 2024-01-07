<!--------------------------------------------------------->
<!-- sort() - Sort array in ascending alphabetical order -->
<!--------------------------------------------------------->

<!DOCTYPE html>
<html>
    <body>
        <?php
            $cars = array("Volvo", "BMW", "Toyota");

            sort($cars);
            $clength = count($cars);
            
            for($x = 0; $x < $clength; $x++) {
                echo $cars[$x];
                echo "<br>";
            }
        ?>
    </body>
</html>