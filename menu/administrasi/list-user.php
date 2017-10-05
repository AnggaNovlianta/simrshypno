<html>
<head><title>List User Login</title></head>
<body>
	<table style="text-align: left; width: 70%; margin-left: auto; margin-right: auto;"border="1" cellpadding="2" cellspacing="2">
	<tbody>
		<tr>
			<td style="vertical-align: top; text-align: center; width: 20%;">USER ID<br></td>
			<td style="vertical-align: top; text-align: center; width: 20%;">NAMA<br></td>
			<td style="vertical-align: top; text-align: center; width: 20%;">PASSWORD<br></td>
			<td style="vertical-align: top; text-align: center; width: 20%;">TYPE<br></td>
		</tr>
<?php
defined('__NOT_DIRECT') || define('__NOT_DIRECT',1);

include 'cek-akses.php';
include 'header2.php';
include "header.php";
$tampilkan_isi = "select * from user";
$tampilkan_isi_sql = mysql_query($tampilkan_isi);
while ($isi = mysql_fetch_array($tampilkan_isi_sql))
{
$userid = $isi['user_id'];
$nama = $isi['name'];
$jeniskelamin = $isi['password'];
$tanggallahir = $isi['type'];
echo "<tr align='center'><td>$no</td><td>$nama</td><td>$jeniskelamin</td><td>$tanggallahir</td>
<td>$alamat</td></tr>";
}
?>
	</tbody>
	</table>
</body>
</html>
