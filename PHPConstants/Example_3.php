<!-- Create a Array constant with define() -->
<!DOCTYPE html>
<html>
    <body>
        <?php
            define("cars", ["Alfa Romeo",
                            "BMW",
                            "Toyota"]);
            echo cars[0];
        ?> 
    </body>
</html>