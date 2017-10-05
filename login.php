<?php

defined('__NOT_DIRECT') || define('__NOT_DIRECT',1);

include 'cek-akses.php';
include 'header2.php';
include "header.php";
if($_POST){
	
	mysql_connect(DB_HOST,DB_USER,DB_PASS);

	mysql_select_db(DB_NAME);
	
	$userId = mysql_real_escape_string($_POST['user_id']);
	
	$data = mysql_fetch_array(mysql_query("select * from user where 
	user_id='".$userId."'"));
	
		if($data !== false && $data['password'] == md5($_POST['password'])){

		//login berhasil
		
		$_SESSION['tipe_user'] = $data['type'];
		
		$_SESSION['user_id'] = $data['user_id'];
		
		$_SESSION['my_user_agent'] = md5($_SERVER['HTTP_USER_AGENT']);

			header("Location: menu.php");
	
		}else{
		echo "ID User atau password salah!";
	
		}

	}
	
?>

<br>
<br>
<br>
<br>
<br>

<form method="post" action="" align="center">

	<table border='1' width='30%'cellpadding='1' cellspacing='1' align='center'>
	<tr>
		<td>ID User</td><td>:</td><td><input type="text" name="user_id"/></td>
	</tr>

	<tr>
		<td>Password</td><td>:</td><td><input type="password" name="password"/></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="1" style="vertical-align: top; height: 30px;"><input type="submit" value="LOGIN"/></td>
	</tr>
	<tr>

	</tr>
</form>