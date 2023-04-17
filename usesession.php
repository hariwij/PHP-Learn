<?php
echo "<h3>sessions.php</h3><hr/>";

if (isset($_GET["name"])) {
    $name = $_GET["name"];
} else {
    $name = "";
    echo "Parameter 'name' is not present!<br/>";
    return;
}
session_start();
echo "All sessions => ";
print_r(json_encode($_SESSION));
echo "<br/>";

echo "Requested session => $_SESSION[$name]";
echo "<br/>";
?>