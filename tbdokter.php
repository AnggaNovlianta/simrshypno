<?php
// Script video tutorial PHP dan MySQL Beginner to Advanced
// by : Loka Dwiartara, ST
// http://www.ilmuwebsite.com
// file selectquery1.php

include "koneksi.php";
include "header2.php";
include "header.php";

$tampilkan = "select * from dokter";
$query_tampilkan = mysql_query($tampilkan);

while($hasil = mysql_fetch_array($query_tampilkan))
	{
		echo $hasil['nm_dokter']."<br />";
		echo $hasil['kd_dokter']."<br />";
	}

?>