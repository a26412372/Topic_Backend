<?php
    include("connect_users.inc.php");



	$account = $_POST['account'];
    $password = $_POST['password'];
	$name = $_POST['name'];
	$birthday = $_POST['birthday'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$check_date = $_POST['check_date'];
	$recheck_date = $_POST['recheck_date'];


    $sql = "INSERT INTO account (account, password, name, birthday, address, contact, check_date, recheck_date) VALUES('$account', '$password', '$name', '$birthday', '$address', '$contact', '$check_date', '$recheck_date')";

    $query = $dbgo->prepare($sql);
    $query->execute();
    $datalist = $query->fetchAll(PDO::FETCH_ASSOC);
	
	
	
/*

    $account = 'Q123456789';
    $password = '12345';
	$name = '漩渦博人';
	$sex = '男';
	$age ='12';
	$email = 'xxxxxxxxxxxx@gmail.com.tw';
	$phone = '0987654321';
	$address = '雲林縣虎尾鎮文化路64號';
	
	$query->execute(array($account,$password));
*/
	
	
    
?>


