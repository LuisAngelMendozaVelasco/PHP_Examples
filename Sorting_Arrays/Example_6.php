<!--------------------------------------------------------------->
<!-- ksort() - Sort array in ascending order, according to key -->
<!--------------------------------------------------------------->

<!DOCTYPE html>
<html>
    <body>
        <?php
            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
            
            ksort($age);

            foreach($age as $x => $x_value) {
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }
        ?>
    </body>
</html>