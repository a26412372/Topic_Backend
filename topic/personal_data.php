<?php
	include("mysql_connect.inc.php");
	//$Data = $_POST['yourdata']; //"1,30,60"
	$sql = 'SELECT * from personal_data';
	$query = $dbgo->prepare($sql);
	$query->execute();
	$datalist = $query->fetchAll(PDO::FETCH_ASSOC);
    $i = 0;
	foreach ($datalist as $row) {
		# code...
		$ay = array(
			'no' => urlencode($row['no']),
			'user_id' => urlencode($row['user_id']),
			'address' => urlencode($row['address']),
			'identity' => urlencode($row['identity']),
			'class' => urlencode($row['class']),
			 
		);
		$array[$i] = $ay;
		$i++;
	}
	print_r(urldecode(json_encode($array)));
?>
