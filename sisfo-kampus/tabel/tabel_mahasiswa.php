<h2>Tabel Data Mahasiswa</h2>

<table width="100%" border="1" cellpadding="4" cellspacing="0">
<tr> 
<td>No</td> 
<td>NPM</td> 
<td>Nama Mahasiswa</td> 
<td>Password Mahasiswa</td> 
<td>Aksi</td> 
</tr>

<?php
include "koneksi.php";
$sql = mysqli_query($kon, "SELECT * FROM mahasiswa ");
$no=1;
while($row = mysqli_fetch_array($sql)){
?>
<tr>
<td align='center'> <?php echo $no; ?> 					</td>
<td align='center'> <?php echo $row['npm']; ?> 			</td>
<td> <?php echo $row['nama_mahasiswa']; ?>  		</td>
<td> <?php echo $row['pw_mhs']; ?>   </td>
<td align='center'> 
<a href="media.php?page=hapusmahasiswa&npm=<?php echo $row['npm'];?>">Hapus</a> |
</td>
</tr>
<?php
$no++;
}
?>
</table>
