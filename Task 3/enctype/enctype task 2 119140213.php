<?php
include "task 2 119140213.html";
echo "<br><br><fieldset>";
echo "<fieldset>";
echo "<legend> Rincian Pendaftaran:</legend><br>";
$nama_file=$_FILES["avatar"]["name"];
$tmp_name=$_FILES["avatar"]["tmp_name"];
$local_image="upload/";
move_uploaded_file($tmp_name,$local_image.$nama_file);
echo '<td style=align="center>
<img src="upload/'.$nama_file.'" width="100" /><br />
</td>';
echo "<br>";
echo "Nama:";
echo $_POST["nama"];
echo " ";
echo $_POST["Umur"];
echo "<br>";
echo "Jenis Kelamin:";
echo $_POST["jk"];
echo "<br>";
echo "Alamat:";
echo $_POST["alamat"];
echo "<br>";
echo "<p><span>Pendaftaran sensus penduduk telah berhasil!!</span><p>";
echo "</fieldset>";
echo "</fieldset>";
