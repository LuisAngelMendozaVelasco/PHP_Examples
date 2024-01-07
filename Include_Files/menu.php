<?php
    $links = array( "Home"=>"https://www.w3schools.com/default.asp", 
                    "HTML Tutorial"=>"https://www.w3schools.com/html/default.asp", 
                    "CSS Tutorial"=>"https://www.w3schools.com/css/default.asp",
                    "JavaScript Tutorial"=>"https://www.w3schools.com/js/default.asp",
                    "PHP 7 Tutorial"=>"https://www.w3schools.com/php7/default.asp");

    foreach($links as $text => $link) {
        echo '<a href=' . $link . '>' . $text . '</a> - ';
    }
?>