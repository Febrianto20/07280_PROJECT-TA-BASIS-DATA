<?php
include "koneksi.php";
$kode_dosen = $_GET['nip'];
$sql_hapus = mysqli_query($kon, "DELETE FROM dosen WHERE nip='$kode_dosen'");
if ($sql_hapus) {
    echo "<script>
alert('Data Sudah Dihapus');
window.location.href='./media.php?page=dosen';
</script>";
}
