<!--------------------------------------------------->
<!-- Use fgets() to read a single line from a file -->
<!--------------------------------------------------->

<!DOCTYPE html>
<html>
    <body>
        <?php
            $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
            
            echo fgets($myfile);
            fclose($myfile);
        ?>
    </body>
</html>