<?php
	include("connect_topic.inc.php");

	//$Parking_city="臺南市";
	//$Parking_zone="北投";
	//$Parking_classification="汽車";
	
	$Parking_city=$_POST['Parking_city'];
	$Parking_zone=$_POST['Parking_zone'];
	$Parking_classification=$_POST['Parking_classification'];
	$sql = 
	'
		SELECT * 
		FROM `parking_grid`
		WHERE (`Parking_city`="'.$Parking_city.'"&&`Parking_zone`="'.$Parking_zone.'"&&`Parking_classification`="'.$Parking_classification.'")
	';
	
	$query = $dbgo->prepare($sql);
	$query->execute(array($Parking_city));
	$datalist = $query->fetchAll(PDO::FETCH_ASSOC);
	
	
    $i = 0;
	
	foreach ($datalist as $row) {
		# code...
		$ay = array(
			'id' => urlencode($row['Parking_num']),
			'Parking_city' => urlencode($row['Parking_city']),
			'Parking_zone' => urlencode($row['Parking_zone']),
			'Parking_Address' => urlencode($row['Parking_Address']),
			'Parking_classification' => urlencode($row['Parking_classification']),
			'Parking_Latitude' => urlencode($row['Parking_Latitude']),
			'Parking_Longitude' => urlencode($row['Parking_Longitude']),
		);
		$array[$i] = $ay;
		$i++;
	}
	print_r(urldecode(json_encode($array)));
?>
