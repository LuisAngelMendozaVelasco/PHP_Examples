<!-- Use feof() to read through a file, line by line, until end-of-file is reached -->
<!DOCTYPE html>
<html>
    <body>
        <?php
            $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
            // Output one line until end-of-file
            while(!feof($myfile)) {
                echo fgets($myfile) . "<br>";
            }
            fclose($myfile);
        ?>
    </body>
</html>