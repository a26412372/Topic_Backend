<?php
	include("connect_topic.inc.php");
	//$Data = $_POST['yourdata']; //"1,30,60"
	$sql = 'SELECT * from restaurant WHERE `Restaurant_num`>1';
	$query = $dbgo->prepare($sql);
	$query->execute();
	$datalist = $query->fetchAll(PDO::FETCH_ASSOC);
    $i = 0;
	foreach ($datalist as $row) {
		# code...
		$ay = array(
			'id' => urlencode($row['Restaurant_num']),
			'Restaurant_Name' => urlencode($row['Restaurant_Name']),
			'Restaurant_Type' => urlencode($row['Restaurant_Type']),
			'Restaurant_Telephone' => urlencode($row['Restaurant_Telephone']),
			'Restaurant_City' => urlencode($row['Restaurant_City']),
			'Restaurant_District' => urlencode($row['Restaurant_District']),
			'Restaurant_Address' => urlencode($row['Restaurant_Address']),
			'Restaurant_Latitude' => urlencode($row['Restaurant_Latitude']),
			'Restaurant_Longitude' => urlencode($row['Restaurant_Longitude']),
			 
		);
		$array[$i] = $ay;
		$i++;
	}
	print_r(urldecode(json_encode($array)));
?>


