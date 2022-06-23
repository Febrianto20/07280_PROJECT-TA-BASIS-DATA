<h2>Kartu Hasil Studi (KHS) Mahasiswa</h2>

<?php
include "koneksi.php";
$sql_edit = mysqli_query($kon, "SELECT * FROM mahasiswa");
$row =  mysqli_fetch_array($sql_edit);

?>

<table width="30%" border="1" cellpadding="4" cellspacing="0">
  <tr>
    <td bgcolor='#f8d894'>NIM</td>
    <td>: <?php echo $_SESSION['npm']; ?></td>
  </tr>
  <tr>
    <td bgcolor='#f8d894'>Nama</td>
    <td>: <?php echo $_SESSION['nama']; ?></td>
  </tr>
</table>
<br>

<table width="100%" border="1" cellpadding="4" cellspacing="0">
  <tr bgcolor='#f1c568'>
    <th>No</th>
    <th>Nama Mahasiswa</th>
    <th>Nama Dosen</th>
    <th>Mata Kuliah</th>
    <th>UTS</th>
    <th>UAS</th>
    <th>Total</th>
  </tr>

  <?php
  include "koneksi.php";
  $sql = mysqli_query($kon, "SELECT * FROM mahasiswa 
  INNER JOIN nilai ON (mahasiswa.id_nilai=nilai.id_nilai)
  INNER JOIN matkul ON (mahasiswa.kode_mk=matkul.kode_mk)
  INNER JOIN dosen ON (mahasiswa.nip=dosen.nip)
  WHERE mahasiswa.npm='$_SESSION[npm]'");

  $no = 1;
  while ($row = mysqli_fetch_array($sql)) {
  ?>
    <tr bgcolor='#FFF'>
      <td align='center'> <?php echo $no; ?> </td>
      <td align='center'> <?php echo $row['nama_mahasiswa']; ?></td>
      <td align='center'> <?php echo $row['nama_dosen']; ?></td>
      <td align='center'> <?php echo $row['nama_mk']; ?></td>
      <td align='center'> <?php echo $row['nts']; ?></td>
      <td align='center'> <?php echo $row['nas']; ?> </td>
      <td align='center'> <?php echo $row['total']; ?> </td>
      
    </tr>
  <?php
    $no++;
  }
  ?>
</table>