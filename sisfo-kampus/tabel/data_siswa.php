<h2>Data Mahasiswa</h2>

<table width="100%" border="1" cellpadding="4" cellspacing="0">
<tr> 
<td align='center'>No</td> 
<td align='center'>NPM</td> 
<td align='center'>Nama Mahasiswa</td> 
</tr>

<?php
include "koneksi.php";
$sql = mysqli_query($kon, "SELECT * FROM mahasiswa ");
$no=1;
while($row = mysqli_fetch_array($sql)){
?>
<tr>
<td align='center'> <?php echo $no; ?> </td>
<td align='center'> <?php echo $row['npm']; ?> </td>
<td align='center'> <?php echo $row['nama_mahasiswa']; ?> </td>
</td>
</tr>
<?php
$no++;
}
?>
</table>
