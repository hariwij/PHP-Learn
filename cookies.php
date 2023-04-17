<?php
echo "<h3>cookies.php</h3><hr/>";

if (isset($_GET["method"])) {
    $method = $_GET["method"];
} else {
    $method = "";
    echo "Parameter 'method' is not present!<br/>";
}

$cookieName = "my_cookie";
$cookieValue = "1234567890";

switch ($method) {
    case "get":
        if (isset($_COOKIE[$cookieName])) {
            echo "Cookie Value is : $_COOKIE[$cookieName]";
        } else {
            echo "Cookie is not present!";
        }
        break;
    case "set":
        setcookie($cookieName, $cookieValue . "-" . date("y-M-d:H-i-s:a"), time() + 60 * 2, "/", "", true, true);
        echo "Done!";
        break;
    default:
        echo "Invalid method";
        break;
}

echo "<br/>";
?>