<?php
session_start();
?>
<html>

<head>
	<title>SISTEM INFORMASI AKADEMIK</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<div id="main">
		<div id="logo"><img src='images/logo_ITATS.png' width="30%"></div>

		<div id="menu">
			<ul>
				<li><a href="./media.php">Home</a></li>

				<?php
				if ($_SESSION['level'] == "Dosen") {
				?>
					<li><a href="#">Akademik</a>
						<ul>
							<li><a href="./media.php?page=tabel-jadwal-dosen">Data Jadwal Kuliah</a></li>
							<li><a href="./media.php?page=data_siswa">Data Mahasiswa</a></li>
						</ul>
					</li>
				<?php
				}
				?>
				<?php
				if ($_SESSION['level'] == "Admin") {
				?>
					<li><a href="#">Akademik</a>
						<ul>

							<li><a href="./media.php?page=mahasiswa">Data Mahasiswa</a></li>
							<li><a href="./media.php?page=dosen">Data Dosen</a></li>
							<li><a href="./media.php?page=matakuliah">Data Mata Kuliah</a></li>
						</ul>
					</li>
				<?php
				}
				?>

				<?php
				if ($_SESSION['level'] == "Mahasiswa") {
				?>
					<li><a href="#">Akademik</a>
						<ul>
							<li><a href="./media.php?page=nilai">Kartu Hasil Studi (KHS)</a></li>
						</ul>
					</li>

				<?php
				}
				?>


				<li><a href="./media.php?page=logout">Logout</a></li>
			</ul>
		</div>

		<?php
		$page = isset($_GET['page']) ? $_GET['page'] : '';

		if ($page == "mahasiswa") {
			include "tabel/tabel_mahasiswa.php";
		} else if ($page == "hapusmahasiswa") {
			include "form/mahasiswa-hapus.php";
		} else if ($page == "dosen") {
			include "tabel/tabel_dosen.php";
		} else if ($page == "form-dosen") {
			include "form/form-dosen.php";
		} else if ($page == "editdosen") {
			include "form/form-dosen-edit.php";
		} else if ($page == "hapusdosen") {
			include "form/form-dosen-hapus.php";
		} else if ($page == "tabel-jadwal-dosen") {
			include "tabel/tabel_jadwal_dosen.php";
		} else if ($page == "data_siswa") {
			include "tabel/data_siswa.php";
		} else if ($page == "matakuliah") {
			include "tabel/tabel_matakuliah.php";
		} else if ($page == "form-matakuliah") {
			include "form/form-matakuliah.php";
		} else if ($page == "editmatakuliah") {
			include "form/form-matakuliah-edit.php";
		} else if ($page == "hapusmatakuliah") {
			include "form/form-matakuliah-hapus.php";
		} else if ($page == "nilai") {
			include "tabel/tabel-nilai.php";
		}  else if ($page == "logout") {
			session_start();
			session_destroy();
			echo "<script>window.location.href='./'</script>";
		} else {
		?>

			<div class="left">

<img src='images/5.png' width="100%">
				<?php
				include "koneksi.php";
				?>
			</div>
			<div class="right">
				<img src='images/user2.png' width="100%">
				<h2>Welcome To SISFO</h2>
				<h2>
					<?php
					if ($_SESSION['level'] == "Admin") {
					?>
						Administrator
					<?php } elseif ($_SESSION['level'] == "Mahasiswa") {
						echo "$_SESSION[nama]";
					?>

					<?php } elseif ($_SESSION['level'] == "Dosen") {
						echo "$_SESSION[nama]";
					?>

					<?php } ?>
					<h2>Sistem Informasi Akademik</h2>
					<button type="button" onclick=window.location.href='./media.php?page=logout'>Logout</button>
			</div>

		<?php
		}
		?>
		<div class="footer">Copyright &copy; 2022 - Sistem Informasi Akademik</a>
		</div>
	</div>

</body>

</html>