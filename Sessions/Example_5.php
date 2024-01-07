<!----------------------->
<!-- Destroy a session -->
<!----------------------->

<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            // Remove all session variables
            session_unset();

            // Destroy the session
            session_destroy();

            echo "All session variables are now removed, and the session is destroyed."
        ?>
    </body>
</html>