<?php
echo "<h3>objects.php</h3><hr/>";

$obj = array(
    "name" => "Hari Wij",
    "age" => 21,
    "tags" => ["SD", "electronics"]
);

$obj1 = new stdClass();

$obj1->name = "Hari Wij";
$obj1->age = 21;
$obj1->tags = ["SD", "electronics"];


echo "Obj 01 : " . json_encode($obj);
echo "<br/>Name : " . $obj["name"] . "<br/>";

echo "Obj 02 : " . json_encode($obj1);
echo "<br/>Name : " . $obj1->name;

echo "<br/>";
?>