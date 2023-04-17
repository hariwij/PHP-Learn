<?php
echo "<h3>ifelse.php</h3><hr/>";


if (isset($_GET["marks"])) {
    $marks = $_GET["marks"];
} else {
    $marks = 0;
    echo "Parameter 'marks' is not present!<br/>";
}

echo "Your Grade is : ";
if ($marks > 75) {
    echo "A";
} else if ($marks > 65) {
    echo "B";
} else if ($marks > 50) {
    echo "C";
} else if ($marks > 35) {
    echo "S";
} else {
    echo "F";
}

echo "<br/>";
?>