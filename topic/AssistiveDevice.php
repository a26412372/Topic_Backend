<?php
	include("mysql_connect.inc.php");
	//$Data = $_POST['yourdata']; //"1,30,60"
	$sql = 'SELECT * from assistive_device';
	$query = $dbgo->prepare($sql);
	$query->execute();
	$datalist = $query->fetchAll(PDO::FETCH_ASSOC);
    $i = 0;
	foreach ($datalist as $row) {
		# code...
		$ay = array(
			'id' => urlencode($row['assistive_device_num']),
			'type' => urlencode($row['Type']),
			'Subsidy_Project' => urlencode($row['Subsidy_Project']),
			'Object1' => urlencode($row['Object1']),
			'Object2' => urlencode($row['Object2']),
			'Object3' => urlencode($row['Object3']),
			'Assistance_Payments_Low-income' => urlencode($row['Assistance_Payments_Low-income']),
			'Assistance_Payments_Low_and_Middle-income' => urlencode($row['Assistance_Payments_Low_and_Middle-income']),
			'Assistance_Payments-General' => urlencode($row['Assistance_Payments-General']),
			'Subsidy_Content' => urlencode($row['Subsidy_Content']),
			'Organizer' => urlencode($row['Organizer']),
			'Telephone' => urlencode($row['Telephone']),
			'Apply1' => urlencode($row['Apply1']),
			'Apply2' => urlencode($row['Apply2']),
			'Application_Document1' => urlencode($row['Application_Document1']),
			'Application_Document2' => urlencode($row['Application_Document2']),
			'Application_Document3' => urlencode($row['Application_Document3']),
		);
		$array[$i] = $ay;
		$i++;
	}
	print_r(urldecode(json_encode($array)));
?>