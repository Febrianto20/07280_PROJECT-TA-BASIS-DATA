<h2>Form Tambah Data Dosen</h2>
<table border="1" width="100%">
    <form method="POST" action="" enctype="multipart/form-data">
        <tr>
            <td>NIP</td>
            <td>: <input type="text" name="nip" size="10"></td>
        </tr>
        <tr>
            <td>Nama Dosen</td>
            <td>: <input type="text" name="nama_dosen" size="30"></td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td>: <input type="text" name="no_telp" size="30"></td>
            </td>
        <tr>
            <td>Email</td>
            <td>: <input type="email" name="email" size="30"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>: <input type="password" name="pw_dosen" size="30"></td>
        </tr>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>:
                <button type="submit" name="simpan">Simpan</button>
                <button type="button" onclick=window.location.href='./media.php?page=dosen'>Kembali</button>
            </td>
        </tr>
    </form>
</table>

<?php
error_reporting(0);
include "koneksi.php";
if (isset($_POST['simpan'])) {
    mysqli_query($kon, "INSERT INTO dosen VALUES (
'$_POST[nip]',	
'$_POST[nama_dosen]',	
'$_POST[no_telp]',		
'$_POST[email]',
'$_POST[pw_dosen]')");
    echo "<script>window.location.href='./media.php?page=dosen'</script>";
}
?>