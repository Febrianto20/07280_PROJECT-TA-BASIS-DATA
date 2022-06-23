<?php
include "koneksi.php";
$sql_hapus = mysqli_query($kon, "DELETE FROM matkul WHERE kode_mk='$_GET[kode_mk]'");
if ($sql_hapus) {
    echo "<script>
alert('Data Sudah Dihapus');
window.location.href='./media.php?page=matakuliah';
</script>";
}
