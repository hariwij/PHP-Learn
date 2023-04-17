<?php
echo "<h3>switch.php</h3><hr/>";


if (isset($_GET["color"])) {
    $color = $_GET["color"];
} else {
    $color = "";
    echo "Parameter 'color' is not present!<br/>";
}

echo "Your color is : ";
switch ($color) {
    case "red":
        echo "Red";
        break;
    case "green":
        echo "Green";
        break;
    case "blue":
        echo "Blue";
        break;
    default:
        echo "Invalid";
        break;
}
echo "<br/>";
?>