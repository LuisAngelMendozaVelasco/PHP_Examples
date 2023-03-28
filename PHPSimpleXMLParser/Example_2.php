<!-- Use simplexml_load_file() to read XML data from a file -->
<!DOCTYPE html>
<html>
    <body>
        <?php
            $xml = simplexml_load_file("note.xml") or die("Error: Cannot create object");
            print_r($xml);
        ?>
    </body>
</html>