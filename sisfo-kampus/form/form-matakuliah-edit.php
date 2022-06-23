<?php
include "koneksi.php";
$sql_edit = mysqli_query($kon, "SELECT * FROM matkul WHERE kode_mk='$_GET[kode_mk]'");
$row =  mysqli_fetch_array($sql_edit);
?>

<h2>Form Edit Data Matakuliah</h2>
<table border="1" width="100%">
    <form method="POST" action="" enctype="multipart/form-data">
    <tr>
            <td>Kode Mata Kuliah</td>
            <td>: <input type="text" name="kode_mk" value="<?php echo $row['kode_mk']; ?>" size="10" readonly></td>
        </tr>
        <tr>
            <td>Jadwal</td>
            <td>: <input type="text" name="jadwal" value="<?php echo $row['jadwal']; ?>" size="10"></td>
        </tr>
        <tr>
            <td>Nama Mata Kuliah</td>
            <td>: <input type="text" name="nama_mk" value="<?php echo $row['nama_mk']; ?>" size="30"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>: <input type="text" name="kelas" value="<?php echo $row['kelas']; ?>" size="10"></td>
        </tr>
        <tr>
            <td>SKS</td>
            <td>: <input type="int" name="sks" value="<?php echo $row['sks']; ?>" size="30"></td>
        </tr>
        <td>&nbsp;</td>
        <td>: <button type="submit" name="simpan">Simpan</button>
            <button type="button" onclick=window.location.href='./media.php?page=matakuliah'>Kembali</button>
        </td>
        </tr>
    </form>
</table>

<?php
error_reporting(0);
if (isset($_POST['simpan'])) {
    include "koneksi.php";
    mysqli_query($kon, "UPDATE matkul SET 
    kode_mk='$_POST[kode_mk]',
    jadwal='$_POST[jadwal]',
    nama_mk='$_POST[nama_mk]',		
    kelas='$_POST[kelas]',
    sks='$_POST[sks]'
    WHERE kode_mk='$_POST[kode_mk]' ");
    echo "<script>window.location.href='./media.php?page=matakuliah'</script>";
}
?>