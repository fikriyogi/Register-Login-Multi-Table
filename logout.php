<?php
	require_once 'assets/dbconnect.php';
	session_start();
	
	if (!isset($_SESSION['user'])) {
		header("Location: index.php");
	} else if(isset($_SESSION['user'])!="") {
		header("Location: home.php");
	}
	
	if (isset($_GET['logout'])) {
		// mysql_query("INSERT INTO tb_keluar(id_user,ip_address,browser,timestamp) VALUES ('$email','$ip_address','$browser',NOW()) "); 
		// mysql_query("UPDATE users SET status='0' WHERE userId=".$_SESSION['user']);
		
$session_id = $_SESSION['user'];
$q=mysql_query("update users set status='0' WHERE userId='$session_id'");
		session_destroy();
		setcookie(session_name(), '', time() - 3600);
		unset($_SESSION['user']);
		header("Location: index.php");
		exit;
	}

?>

