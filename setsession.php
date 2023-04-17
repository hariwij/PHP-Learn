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
$_SESSION[$name] = "hi " . date("H-i-s a");
echo "Done!";
echo "<br/>";
?>