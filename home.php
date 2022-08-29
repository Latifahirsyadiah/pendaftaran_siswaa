<!DOCTYPE html> 
<html>
    <head>
        <title>Pendaftaran Siswa Baru |  SMKN 1 SAYUNG</title>
</head>
<style>
		body {
			background: url("gng.jpg");
			background-size: 100%;
		}
	</style>

<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMKN 1 SAYUNG</h1>      
</header>

<h4>menu</h4>
<nav>
    <ul>
         <li><a href="form-daftar.php">Daftar Baru</a></li>
         <li><a href="list-siswa.php">Pendaftaran</a></li>
    </ul>
</nav>

<!-- cek apakah sudah login -->
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
 
	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
 
	<br/>
	<br/>
 
	<a href="logout.php">LOGOUT</a>

</body>
</html>