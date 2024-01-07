<!---------------------------------------------->
<!-- Comparison operator: Not identical (!==) -->
<!---------------------------------------------->

<!DOCTYPE html>
<html>
    <body>
        <?php
            $x = 100;  
            $y = "100";

            var_dump($x !== $y); // Returns true because types are not equal
        ?>  
    </body>
</html>