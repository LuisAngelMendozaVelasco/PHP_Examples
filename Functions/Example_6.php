<?php 
    declare(strict_types=1); // Strict requirement
?>

<!------------------------------>
<!-- Return type declarations -->
<!------------------------------>

<?php
    // Return type declarations
    function addNumbers(float $a, float $b) : float {
        return $a + $b;
    }

    echo addNumbers(1.2, 5.2); 
?>