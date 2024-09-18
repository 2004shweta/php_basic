<?php
echo "<h2> Create in php </h2>";
$_cookie_name = "user";
$_cookie_value = "Alex";
setcookie($_cookie_name, $_cookie_value, time() + (86400 * 30), "/");

echo "Setting cookie...<br>";
?>
<html>
    <body>
        <?php
        if(!isset($_COOKIE[$_cookie_name])){
            echo "Cookie named \"" . $_cookie_name . "\" is not set<br>";
        } else {
            echo "Cookie \"" . $_cookie_name . "\" is set!<br>";
            echo "Value is: " . $_COOKIE[$_cookie_name] . "<br>";
        }
        ?>
    </body>
</html>