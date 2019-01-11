<?php
	include("connect_topic.inc.php");
	//$Data = $_POST['yourdata']; //"1,30,60"
	$sql = 'SELECT * from parking_grid';
	$query = $dbgo->prepare($sql);
	$query->execute();
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
