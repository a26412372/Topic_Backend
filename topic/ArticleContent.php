<?php
	include("mysql_connect.inc.php");
    //$Data = $_POST['yourdata']; //"1,30,60"
    $id = $_POST['id'];
	$sql = "SELECT * from article where NOT title = '麥當勞叔叔不要欺負我！' AND id = ?";
	//$sql = "SELECT * from article";
	$query = $dbgo->prepare($sql);
	$query->execute(array($id));
	$datalist = $query->fetchAll(PDO::FETCH_ASSOC);
    $i = 0;
	foreach ($datalist as $row) {
		# code...
		$ay = array(
			'id' => urlencode($row['id']),
			'title' => urlencode($row['title']),
			'content' => urlencode($row['content']),
			'image_url' => urlencode($row['image_url']),
		);

		$array[$i] = $ay;
		$i++;
	}
	print_r(urldecode(json_encode($array)));
?>