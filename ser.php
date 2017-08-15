<?php

$newobj = json_decode($_POST['obj'],false);

//$newobj->name="john cena";

$myObj = new \stdClass();
$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($newobj);

echo $myJSON;
?>