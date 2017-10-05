
<?php
defined('__NOT_DIRECT') || define('__NOT_DIRECT',1);

include 'cek-akses.php';
include 'header2.php';
include 'header.php';
?>
<html>
<head>
 <meta charset="UTF-8">
   <title></title>
   <style>
   h3{
      text-align:center; }
   table { 
      border-collapse:collapse;
      border-spacing:1;     
      font-family:Arial, sans-serif;
      font-size:12px;
      padding-left:300px;
      margin:auto; }
   //table th {
      //font-weight:bold;
      //padding:10px;
      //color:#fff;
      //background-color:#2A72BA;
      //border-top:1px black solid;
      //border-bottom:1px black solid;}
   //table td {
      //padding:10px;
      //border-top:1px black solid;
      //border-bottom:1px black solid;
      //text-align:center; }         
   tr:nth-child(even) {
     background-color: #DFEBF8; }
   </style>
<title></title>
</head>
<body>

<table style="text-align: left; width: 462px; height: 36px;" border="3"
cellpadding="2" cellspacing="2">
<tbody>
	<form action="" method="post">
	<tr>
		<td style="vertical-align: top; width: 293px;">Cari Data Pasien<br></td>
		<td style="vertical-align: top; width: 293px;"><input size="50"name="input_cari" placeholder="Cari Berdasar Data Pasien" class="css-input" style="width:250px;"></td>
		<td style="vertical-align: top; width: 116px;text-align: center;"> <input type="submit" name="cari" value="Cari" class="btn" style="padding:3px;" margin="6px;" width="50px;"/></td>
	</tr>
	</form>
</tbody>
</table>
<br>

<div style="text-align: center;">
<table
style="text-align: left; width: 100%; margin-left: 1pt; margin-right: 1pt;"
border="1" cellpadding="2" cellspacing="2">
<tbody>
	<tr>
		<td style="vertical-align: top; text-align: center; width: auto;">No RM</td>
		<td style="vertical-align: top; text-align: center; width: auto;">Nama Pasien</td>
		<td style="vertical-align: top; text-align: center; width: 3%;">No KTP</td>
		<td style="vertical-align: top; text-align: center; width: auto;">JK</td>
		<td style="vertical-align: top; text-align: center; width: auto;">Tempat Lahir</td>
		<td style="vertical-align: top; text-align: center; width: auto;">Tanggal Lahir</td>
		<td style="vertical-align: top; text-align: center; width: auto;">Nama Ibu</td>
		<td style="vertical-align: top; text-align: center; width: auto;">Alamat</td>
		<td style="vertical-align: top; text-align: center; width: auto;">Darah</td>
		<td style="vertical-align: top; text-align: center; width: auto;">Pekerjaan</td>
		<td style="vertical-align: top; text-align: center; width: auto;">Status</td>
		<td style="vertical-align: top; text-align: center; width: auto;">Agama</td>
		<td style="vertical-align: top; text-align: center; width: auto;">Tanggal Daftar</td>
		<td style="vertical-align: top; text-align: center; width: auto;">Telphone</td>
		<td style="vertical-align: top; text-align: center; width: auto;">Umur</td>
		<td style="vertical-align: top; text-align: center; width: auto;">Aksi</td>
		
	</tr>

<?php

$input_cari = $_POST{'input_cari'};
$tampilkan_isi = "select * from pasien WHERE nm_pasien LIKE '%$input_cari%'";
$tampilkan_isi_sql = mysql_query($tampilkan_isi);

if ($tampilkan_isi_sql === FALSE) {
    die(mysql_error());
}

while ($isi = mysql_fetch_array($tampilkan_isi_sql))
{
$no_rkm_medis = $isi['no_rkm_medis'];
$nm_pasien = $isi['nm_pasien'];
$no_ktp = $isi['no_ktp'];
$jk = $isi['jk'];
$tmp_lahir = $isi['tmp_lahir'];
$tgl_lahir = $isi['tgl_lahir'];
$nm_ibu = $isi['nm_ibu'];
$alamat = $isi['alamat'];
$gol_darah = $isi['gol_darah'];
$pekerjaan = $isi['pekerjaan'];
$stts_nikah = $isi['stts_nikah'];
$agama = $isi['agama'];
$tgl_daftar = $isi['tgl_daftar'];
$no_tlp = $isi['no_tlp'];
$umur = $isi['umur'];

echo "<tr align='center'>
		<td>$no_rkm_medis</td>
		<td align='left'>$nm_pasien</td>
		<td align='left'>$no_ktp</td>
		<td>$jk</td>
		<td align='left'>$tmp_lahir</td>
		<td align='left'>$tgl_lahir</td>
		<td align='left'>$nm_ibu</td>
		<td align='left'>$alamat</td>
		<td>$gol_darah</td>
		<td>$pekerjaan</td>
		<td>$stts_nikah</td>
		<td>$agama</td>
		<td>$tgl_daftar</td>
		<td>$no_tlp</td>
		<td>$umur</td>
		<td align='center'><a href='#'>Edit</a>|<a href='#'>Hapus</a>|<a href='#'>Pilih</a></td>
	</tr>";
}
?>
</tbody>
</table>
<br>
</div>
</body>
</html>
