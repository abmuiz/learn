<?php

include ("config.php");

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmnt= $conn->prepare("SELECT name FROM tbl_user WHERE user_id=:name");
    $stmnt->bindParam("name",$name);
    $name = $_POST['name'];
    $stmnt->execute();
    $records = $stmnt->fetchAll();

    foreach ($records as $value) {
    	# code...
    	echo $value['name'];
    }

?>