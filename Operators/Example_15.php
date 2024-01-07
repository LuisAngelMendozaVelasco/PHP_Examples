<!----------------------------------------->
<!-- Comparison operator: Not equal (<>) -->
<!----------------------------------------->

<!DOCTYPE html>
<html>
    <body>
        <?php
            $x = 100;  
            $y = "100";

            var_dump($x <> $y); // Returns false because values are equal
        ?>  
    </body>
</html>