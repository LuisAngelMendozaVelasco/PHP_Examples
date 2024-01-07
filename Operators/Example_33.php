<!--------------------------------------------->
<!-- String operator: Appends $txt2 to $txt1 -->
<!--------------------------------------------->

<!DOCTYPE html>
<html>
    <body>
        <?php
            $txt1 = "Hello";
            $txt2 = " world!";
            $txt1 .= $txt2;
            
            echo $txt1;
        ?>  
    </body>
</html>