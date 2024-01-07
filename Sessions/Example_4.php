<!------------------------------->
<!-- Modify a session variable -->
<!------------------------------->

<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            // To change a session variable, just overwrite it
            $_SESSION["favcolor"] = "yellow";
            
            print_r($_SESSION);
        ?>
    </body>
</html>