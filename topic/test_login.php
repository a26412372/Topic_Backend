<?php
    include("connect_users.inc.php");

    $Account = $_POST['account'];
    $Password = $_POST['password'];
	//$Account ='q123456789';
    //$Password = '123456789';
	
	$sql = "SELECT * FROM account WHERE account=? and password=?";
		
    $query = $dbgo->prepare($sql);
    $query->execute(array($Account,$Password));
    $datalist = $query->fetchAll(PDO::FETCH_ASSOC);

	
    if($query->rowCount()>0){
        echo("{");
        echo('"DATA":');
        echo("[");

        foreach ($datalist as $row) 
		{
            # code...
            $ay = array(
            "account" => urlencode($row["account"]),
            "password" => urlencode($row['password']),
            "name" => urlencode($row['name']),
            "birthday" => urlencode($row['birthday']),
            "address" => urlencode($row['address']),
            "contact" => urlencode($row['contact']),
			"check_date" => urlencode($row['check_date']),
			"recheck_date" => urlencode($row['recheck_date']),
        );
		}
        echo urldecode(json_encode($ay));
        echo("]");
        echo("}");
    }
?>