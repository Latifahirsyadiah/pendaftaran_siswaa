<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Pendaftarn Siswa Baru | SMKN 1 SAYUNG</title>
</head>
<style>
		body {
			background: url("hjn.jpg");
			background-size: 100%;
		}
	</style>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
</header>

<form action="proses-pendaftaran.php" method="POST">

<fieldset>

<p>
    <label for="nama">Nama: </label>
    <input type="text" name="nama" placeholder="nama lengkap" />
</p>
<p>
    <label for="alamat">Alamat: </label>
    <textarea name="alamat"></textarea>
</p>
<p>
    <label for="jenis_kelamin">Jenis Kelamin: </label>
    <label><input type="radio" name="jenis_kelamin" value="laki-laki"> laki-laki</label>
    <label><input type="radio" name="jenis_kelamin" value="perempuan"> perempuan</label>
</p>
<p>
    <label for="agama">Agama: </label>
    <select name="agama">
        <option>Islam</option>
        <option>Kristen</option>
        <option>Hindu</option>`
        <option>Budha</option>
        <option>Atheis</option>
</select>
</p>
<p>
   <label for="sekolah_asal">Sekolah Asal: </label> 
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
        </p>
<p>
    <input type="submit" value="Daftar" name="daftar" />
</p>

</fildset>

</form>

</body>
</html>