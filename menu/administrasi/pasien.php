
<?php
defined('__NOT_DIRECT') || define('__NOT_DIRECT',1);

include 'cek-akses.php';
include 'header2.php';
include 'header.php';
?>
<html>
<head>
<meta content="text/html; charset=ISO-8859-1"
http-equiv="content-type">
<title></title>
</head>
<body>
<br>
<br>
<div style="text-align: center;">
<table
style="text-align: left; width: 60%; margin-left: auto; margin-right: auto;"
border="1" cellpadding="2" cellspacing="2">
<tbody>
<tr>
<td style="vertical-align: top; text-align: center;">Id User<br>
</td>
<td style="vertical-align: top; text-align: center; width: 25%;">Nama<br>
</td>
<td style="vertical-align: top; text-align: center; width: 25%;">Password<br>
</td>
<td style="vertical-align: top; text-align: center; width: 25%;">Type<br>
</td>
</tr>

<?php
$tampilkan_isi = "select * from user";
$tampilkan_isi_sql = mysql_query($tampilkan_isi);

if ($tampilkan_isi_sql === FALSE) {
    die(mysql_error());
}

while ($isi = mysql_fetch_array($tampilkan_isi_sql))
{
$user_id = $isi['user_id'];
$name = $isi['name'];
$password = $isi['password'];
$type = $isi['type'];

echo "<tr align='center'><td>$user_id</td><td>$name</td><td>$password</td><td>$type</td>
</tr>";
}
?>
</tbody>
</table>
<br>
</div>
</body>
</html>
