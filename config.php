<?php

if(!defined('__NOT_DIRECT')){

//mencegah akses langsung ke file ini

	die('Akses langsung tidak diizinkan!');

}


define('BASE_URL', '/');


//koneksi database

define('DB_HOST','localhost');

define('DB_USER','root');

define('DB_PASS', '');

define('DB_NAME' ,'simrsf');

$host = "localhost";
$username = "root";
$password = "";
$database = "simrsf";

$koneksi = mysql_connect($host, $username, $password);
$pilihdatabase = mysql_select_db($database, $koneksi);

$koneksi = mysql_connect($host, $username, $password);
$pilihdatabase = mysql_select_db($database, $koneksi);

?>