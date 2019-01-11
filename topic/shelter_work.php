<?php
	include("connect_topic.inc.php");

	
	$Shelter_work_city=$_POST['Shelter_work_city'];
	//$Shelter_work_city="嘉義市";
	
	$sql = 
	'
		SELECT * 
		from shelter_work 
		WHERE `Shelter_work_city`="'.$Shelter_work_city.'"
	';
	$query = $dbgo->prepare($sql);
	$query->execute();
	$datalist = $query->fetchAll(PDO::FETCH_ASSOC);
    $i = 0;
	foreach ($datalist as $row) {
		# code...
		$ay = array(
			'id' => urlencode($row['Shelter_work_num']),
			'Shelter_work_city' => urlencode($row['Shelter_work_city']),
			'Shelter_work_organizer' => urlencode($row['Shelter_work_organizer']),
			'Shelter_work_name' => urlencode($row['Shelter_work_name']),
			'Shelter_work_type' => urlencode($row['Shelter_work_type']),
			'Shelter_work_items' => urlencode($row['Shelter_work_items']),
			'Shelter_work_offer' => urlencode($row['Shelter_work_offer']),
			'Shelter_work_people' => urlencode($row['Shelter_work_people']),
			'Shelter_work_need' => urlencode($row['Shelter_work_need']),
			'Shelter_work_ContactPerson' => urlencode($row['Shelter_work_ContactPerson']),
			'Shelter_work_phone' => urlencode($row['Shelter_work_phone']),
			'Shelter_work_address' => urlencode($row['Shelter_work_address']),
		);
		$array[$i] = $ay;
		$i++;
	}
	print_r(urldecode(json_encode($array)));
?>


