<html>
<head>
<title>Formulir</title>
</head>
<body>
<h3>Biodata</h3>
<form action="proses5.php" method="POST">
Nama Lengkap : <br>
<input type="text" name="nama"><br>
Jenis Kelamin: <br>
<input type="radio" name="jenkel" value="Laki-laki">Laki-Laki
<input type="radio" name="jenkel" value="Perempuan">Perempuan <br>
Program Studi : <br>
<select name="prodi">
<option value="">--Pilih--</option>
<option value="Teknik Informatika">Teknik Informatika</option>
<option value="Sistem Informasi">Sistem Informasi</option>
<option value="Pendidikan Teknologi Informasi">Pendidikan Teknologi Informasi</option>
</select><br> Alamat : <br>
<textarea name="alamat" cols="30" rows="10"></textarea><br> Nomor Ponsel : <br>
<input type="text" name="hp"><br>
<button type=" submit">Proses</button>
</form>
</body>
</html>
