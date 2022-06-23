<?php
include "koneksi.php";
$sql_hapus = mysqli_query($kon, "DELETE FROM mahasiswa WHERE npm='$_GET[npm]'");
if ($sql_hapus) {
    echo "<script>
alert('Data Sudah Dihapus');
window.location.href='./media.php?page=mahasiswa';
</script>";
}
