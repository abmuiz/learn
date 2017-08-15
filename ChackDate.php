<?php

function check_date($system_date,$server_date)
{

	$system_date =  date_create($system_date);
	$system_date =	date_format($system_date,"d-m-Y");
	$server_date =	date_create($server_date);
	$server_date =	date_format($server_date,"d-m-Y");
	

	return($system_date==$server_date);

} 

//$sys = date("06-07-2017");

$check = check_date("06-07-2017","2017-06-07");

if ($check) {
	# code...
	echo "equal";
}

else
	echo "not";

?>