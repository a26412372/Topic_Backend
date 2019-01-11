<?php
	include("connect_topic.inc.php");

//	$organ="嘉義市政府";
	$organ=$_POST['organ'];
	

	$sql='SELECT * FROM `aids` WHERE `Aids_organ`="'.$organ.'"';

	
	$query = $dbgo->prepare($sql);
	$query->execute(array($organ));
	$datalist = $query->fetchAll(PDO::FETCH_ASSOC);
	

    $i = 0;
	foreach ($datalist as $row) {
		# code...
		$ay = array(
			'id' => urlencode($row['Aids_num']),
			'Aids_nature' => urlencode($row['Aids_nature']),
			'Aids_organ' => urlencode($row['Aids_organ']),
			'Aids_unit' => urlencode($row['Aids_unit']),
			'Aids_processing_unit' => urlencode($row['Aids_processing_unit']),
			'Aids_phone' => urlencode($row['Aids_phone']),
			'Aids_fax' => urlencode($row['Aids_fax']),
			'Aids_address' => urlencode($row['Aids_address']),
			'Aids_X' => urlencode($row['Aids_X']),
			'Aids_Y' => urlencode($row['Aids_Y']),
			 
		);
		$array[$i] = $ay;
		$i++;
	}
	print_r(urldecode(json_encode($array)));


	//$sql = 'SELECT * from aids where `Aids_num`>1';
	//$sql='SELECT * FROM `aids` WHERE `Aids_organ`="基隆市政府"';
	