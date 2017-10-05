<?php

defined('__NOT_DIRECT') || define('__NOT_DIRECT',1);

include 'cek-akses.php';

include 'header2.php';
include 'header.php';

	if($_POST){
	
	mysql_connect(DB_HOST,DB_USER,DB_PASS);
	
	mysql_select_db(DB_NAME);

	
	if($_POST['password'] != $_POST['password2']){
		
		echo 'Silahkan ketik ulang password!';
	
	}
	else if(!$_POST['user_id']){
		
		echo 'ID User tidak boleh kosong!';
	
		}
	else if(mysql_num_rows(mysql_query("select * from user where user_id='".mysql_real_escape_string($_POST['user_id'])."'"))){
		
		echo 'User id sudah di pakai, masukkan yang lain!';
	
		}
	else{
		
		mysql_query("insert into user (user_id,name,password,type) 
		values 
('".mysql_real_escape_string($_POST['user_id'])."','".mysql_real_escape_string($_POST['name'])."',
'".md5($_POST['password'])."','user')");
		
		echo "Registrasi berhasil";
	
		}
	
}


?>

<form action="" method="post">

<br>
<br>
<br>
<table
style="text-align: left; width: 50%; margin-left: auto; margin-right: auto;"
border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="width: 50%;"><small>ID USER<br>
</small></td>
<td style="vertical-align: top; width: 2%; text-align: center;">:<br>
</td>
<td style="height: 30px;"><input size="60" name="user_id"><br>
</td>
</tr>
<tr>
<td style="height: 30px;"><small>NAMA<br>
</small></td>
<td style="vertical-align: top; text-align: center;">:</td>
<td><input size="60" name="name"><br>
</td>
</tr>
<tr>
<td style="height: 30px;"><small>PASSWORD<br>
</small></td>
<td style="vertical-align: top; text-align: center;">:<br>
</td>
<td><input size="60" name="password" type="password"><br>
</td>
</tr>
<tr>
<td style="height: 30px; width: 30%;"><small>KETIK ULANG
PASSWORD</small><big><br>
</big></td>
<td style="vertical-align: top; text-align: center;">:<br>
</td>
<td style="height: 20px;"><input size="60" name="password2"
type="password"><br>
</td>
</tr>
<tr>
<td colspan="3" rowspan="1"
style="vertical-align: middle; height: 30px; text-align: left;"><br>
<div style="text-align: center;"><input value="Register"
type="submit"><br>
</div>
<br>
</td>
</tr>
</tbody>
</table>