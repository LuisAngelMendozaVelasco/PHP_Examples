<!---------------------------------------->
<!-- Array operator: Non-identity (!==) -->
<!---------------------------------------->

<!DOCTYPE html>
<html>
    <body>
        <?php
            $x = array("a" => "red", "b" => "green");  
            $y = array("c" => "blue", "d" => "yellow");  

            var_dump($x !== $y);
        ?>  
    </body>
</html>