<?php
session_start();
include "koneksi.php";
if (!empty($_SESSION['username']) and !empty($_SESSION['password'])) {
	echo "<script>window.location.href='./media.php'</script>";
}
?>
<html>

<head>
	<title>SISTEM INFORMASI AKADEMIK</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<div id="main">
		<div id="logo"><img src='images/Logo_ITATS.png' width="40%"></div>
		<!--<div id="menu">
			<ul>
				<li><a href="./">Home</a></li>

				<li><a href="./media.php?page=visimisi">Visi Misi</a></li>
			</ul>
		</div>-->
		<div class="left">
<img src='images/5.png' width="90%">
			<?php
			include "koneksi.php";
			?>
		</div>
		<div class="right">
			<img src='images/user2.png' width="100%">
			<h2>Login SISFO</h2>
			<form action="" method="POST">
				<input type="text" name="username" placeholder="Username">
				<input type="password" name="password" placeholder="Password">
				<select name="level" class="select1">
					<option value=""> Login Sebagai </option>
					<option value="Admin">Admin</option>
					<option value="Dosen">Dosen</option>
					<option value="Mahasiswa">Mahasiswa</option>

				</select>
				<button type="submit" name="login">Login</button>
			</form>
			<hr>
		</div>
		<div class="footer">Copyright &copy; 2022 - Sistem Informasi
		</div>
	</div>
</body>

</html>

<?php
// 1. set variabel yang dibutuhkan
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$level    = isset($_POST['level']) ? $_POST['level'] : '';
// 2. Cek apakah tombol login diklik untuk login
if (isset($_POST['login'])) {
	// 3. Buat query untuk mencari data ke tabel
	// cek level apa user yang login
	if ($level == "Mahasiswa") {
		$tabel = "mahasiswa";
		$sql = mysqli_query($kon, "SELECT * FROM $tabel 
					WHERE npm='" . $username . "' AND 
					pw_mhs='" . $password . "' ");
		$jml = mysqli_num_rows($sql); // Hitung jmlah record	
		$row = mysqli_fetch_array($sql);	// tampung record ke data array	
		// 4. cek berapa jml data yg ditemukan
		if ($jml > 0) {
			// Mulai Session Baru 
			session_start();
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['level'] 	  = $level;
			$_SESSION['npm'] 	  = $row['npm'];
			$_SESSION['nama'] 	  = $row['nama_mahasiswa'];
			echo "<script>window.location.href='./media.php'</script>";
		} else {
			echo "<script>window.location.href='./?page=anda-gagal-login'</script>";
		}
	} else if ($level == "Admin") {
		$tabel = "tbl_admin";
		$sql = mysqli_query($kon, "SELECT * FROM $tabel 
					WHERE username='" . $username . "' AND 
					password='" . $password . "' ");
		$jml = mysqli_num_rows($sql); // Hitung jmlah record	
		$row = mysqli_fetch_array($sql);	// tampung record ke data array	
		// 4. cek berapa jml data yg ditemukan
		if ($jml > 0) {
			// Mulai Session Baru 
			session_start();
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['level'] 	  = $level;
			echo "<script>window.location.href='./media.php'</script>";
		} else {
			echo "<script>window.location.href='./?page=anda-gagal-login'</script>";
		}
	} else {
		$tabel = "dosen";
		$sql = mysqli_query($kon, "SELECT * FROM $tabel 
					WHERE nip='" . $username . "' AND 
					pw_dosen='" . $password . "' ");
		$jml = mysqli_num_rows($sql); // Hitung jmlah record	
		$row = mysqli_fetch_array($sql);	// tampung record ke data array	
		// 4. cek berapa jml data yg ditemukan
		if ($jml > 0) {
			// Mulai Session Baru 
			session_start();
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['level'] 	  = $level;
			$_SESSION['nip'] 	  = $row['nip'];

			$_SESSION['nama'] 	  = $row['nama_dosen'];
			echo "<script>window.location.href='./media.php'</script>";
		} else {
			echo "<script>window.location.href='./?page=anda-gagal-login'</script>";
		}
	}
}
?>