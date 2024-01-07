<!-------------------------------------------------------------------------------->
<!-- Use a constant inside a function (when it is defined outside the function) -->
<!-------------------------------------------------------------------------------->

<!DOCTYPE html>
<html>
    <body>
        <?php
            define("GREETING", "Welcome to W3Schools.com!");

            function myTest() {
                echo GREETING;
            }
            
            myTest();
        ?> 
    </body>
</html>