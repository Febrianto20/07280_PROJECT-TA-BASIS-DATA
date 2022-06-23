

<?php
include"koneksi.php";
$sql_edit = mysqli_query($kon, "SELECT * FROM dosen WHERE nip='$_GET[nip]'");
$row =  mysqli_fetch_array($sql_edit);
?>
<h2>Form Edit Data Dosen</h2>
<table border="1" width="100%">
    <form method="POST" action="" enctype="multipart/form-data">
        <tr>
            <td>NIP</td>
            <td>: <input type="text" name="nip" value="<?php echo $row['nip']; ?>" size="10"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <input type="text" name="nama_dosen" value="<?php echo $row['nama_dosen']; ?>" size="30"></td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td>: <input type="text" name="no_telp" value="<?php echo $row['no_telp']?>" size="30"></td>
                </select>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: <input type="email" name="email" value="<?php echo $row['email']; ?>" size="10"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>: <input type="password" name="pw_dosen" value="<?php echo $row['pw_dosen']; ?>" size="10"></td>
        </tr>
        <td>&nbsp;</td>
        <td>: <button type="submit" name="simpan">Simpan</button>
            <button type="button" onclick=window.location.href='./media.php?page=dosen'>Kembali</button>
        </td>
        </tr>
    </form>
</table>

<?php
error_reporting(0);
include "koneksi.php";
if (isset($_POST['simpan'])) {
mysqli_query($kon, "UPDATE dosen SET nip='$_POST[nip]',
nama_dosen='$_POST[nama_dosen]',	
no_telp='$_POST[no_telp]',
email='$_POST[email]',
pw_dosen='$_POST[pw_dosen]' WHERE nip='$_POST[nip]' ");
    echo "<script>window.location.href='./media.php?page=dosen'</script>";
}
?>