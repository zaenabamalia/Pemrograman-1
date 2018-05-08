<html>
<head><title>Membuat profile
</title></head>
<body>
<?php
$usernama=$_POST["usernama"];
$nik=$_POST["nik"];
$nama=$_POST["nama"];
$lahir=$_POST["lahir"];
$kelamin=$_POST["kelamin"];
$alamat=$_POST["alamat"];
$agama=$_POST["agama"];
$status=$_POST["status"];
$kerja=$_POST["kerja"];
$berlaku=$_POST["berlaku"];
if($usernama==false || $nik==false || $nama==false || $lahir==false || $kelamin==false || $alamat==false || $agama==false || $status==false || $kerja==false || $berlaku==false){
echo "<font style='color:red;'>profila tidak lengkap</font><br/>";
}else{
$baris=array("$usernama","$nik","$nama","$lahir","$kelamin","$alamat","$agama","$status","$kerja","$berlaku");
$usernama=$baris[0]; $nik=$baris[1]; $nama=$baris[2]; $lahir=$baris[3]; $kelamin=$baris[4]; $alamat=$baris[5]; $agama=$baris[6]; $status=$baris[7]; $kerja=$baris[8]; $berlaku=$baris[9];
echo "<font style='color:green;'>menyimpan profila</font>";
echo '<table width="900px"bgcolor="#DFEBF8"cellpadding="4px"align="left">';echo '<tr>';echo '<th width="100px">nik</th>';echo '<th width="100px">nama</th>';echo '<th width="100px">lahir</th>';echo '<th style="width:100px;">kelamin</th>';echo '<th width="100px">alamat</th>';echo '<th width="100px">agama</th>';echo '<th width="100px">status</th>';echo '<th width="100px">kerja</th>';echo '<th width="100px">berlaku</th>';echo '<th width="100px">usernama</th>';echo '</tr>';echo '</table>';
echo '<table width="900px"bgcolor="white"cellpadding="2px"border="1px"bordercolor="#DFEBF8"align="left;">';echo '<tr>';echo '<form method="GET"action="dataktp2.php">';echo '<td width="100px">'.$nik.'</td>';echo '<td width="100px">'.$nama.'</td>';echo '<td width="100px">'.$lahir.'</td>';echo '<td width="100px">'.$kelamin.'</td>';echo '<td width="100px">'.$alamat.'</td>';echo '<td width="100px">'.$agama.'</td>';echo '<td width="100px">'.$status.'</td>';echo '<td width="100px">'.$kerja.'</td>';echo '<td width="100px">'.$berlaku.'</td>';echo '<td width="100px"><input type="hidden"name="usernama"value="'.$usernama.'"><input type="submit"value="edit"></td>';echo '</form>';echo '</tr>';echo '</table>';
}?>
</body>
</html>