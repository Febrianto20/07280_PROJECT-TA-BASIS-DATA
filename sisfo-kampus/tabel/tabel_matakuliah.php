<h2>Tabel Data Mata Kuliah</h2>

<button type="button" onclick=window.location.href='./media.php?page=form-matakuliah'>Tambah Data Matakuliah</button> <br><br>

<table width="100%" border="1" cellpadding="4" align="center">
    <tr align="center">
        <td>No</td>
        <td>Kode MK</td>
        <td>Nama MK</td>
        <td>SKS</td>
        <td>Kelas</td>
        <td>Jadwal</td>
        <td>Aksi</td>
    </tr>

    <?php
    include "koneksi.php";
    $sql = mysqli_query($kon, "SELECT * FROM matkul");
    $no = 1;
    while ($row = mysqli_fetch_array($sql)) {
    ?>
        <tr>
            <td align='center'> <?php echo $no; ?> </td>
            <td align='center'> <?php echo $row['kode_mk']; ?> </td>
            <td align='center'> <?php echo $row['nama_mk']; ?> </td>
            <td align='center'> <?php echo $row['sks']; ?> </td>
            <td align='center'> <?php echo $row['kelas']; ?> </td>
            <td align='center'> <?php echo $row['jadwal']; ?> </td>
            <td align='center'>
                <a href="media.php?page=editmatakuliah&kode_mk=<?php echo $row['kode_mk']; ?>">Edit</a> |
                <a href="media.php?page=hapusmatakuliah&kode_mk=<?php echo $row['kode_mk']; ?>">Hapus</a>
            </td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>