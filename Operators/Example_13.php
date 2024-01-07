<!------------------------------------------>
<!-- Comparison operator: Identical (===) -->
<!------------------------------------------>

<!DOCTYPE html>
<html>
    <body>
        <?php
            $x = 100;  
            $y = "100";

            var_dump($x === $y); // Returns false because types are not equal
        ?>  
    </body>
</html>