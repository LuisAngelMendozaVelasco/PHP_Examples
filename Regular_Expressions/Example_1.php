<!-------------------------------------------------------------->
<!-- Do a case-insensitive search for "w3schools" in a string -->
<!-------------------------------------------------------------->

<!DOCTYPE html>
<html>
    <body>
        <?php
            $str = "Visit W3Schools";
            $pattern = "/w3schools/i";
            
            echo preg_match($pattern, $str); 
        ?>
    </body>
</html>