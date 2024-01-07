<!----------------------------->
<!-- Using the $this keyword -->
<!----------------------------->

<!DOCTYPE html>
<html>
    <body>
        <?php
            class Fruit {
                public $name;

                function __construct() {}

                function set_name($name) {
                    $this->name = $name;
                }
            }

            $apple = new Fruit();
            $apple->set_name("Apple");

            echo $apple->name;
        ?>
    </body>
</html>