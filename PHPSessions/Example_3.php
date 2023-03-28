<!-- Get all session variable values -->
<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            print_r($_SESSION);
        ?>
    </body>
</html>