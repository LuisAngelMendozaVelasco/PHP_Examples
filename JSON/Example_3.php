<!----------------------------------------->
<!-- Access the values from a PHP object -->
<!----------------------------------------->

<!DOCTYPE html>
<html>
    <body>
        <?php
            $jsonobj = '{"Peter":35, "Ben":37, "Joe":43}';
            $obj = json_decode($jsonobj);

            echo $obj->Peter . ", ";
            echo $obj->Ben . ", ";
            echo $obj->Joe;
        ?>
    </body>
</html>