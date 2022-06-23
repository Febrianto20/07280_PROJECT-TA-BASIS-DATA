<h2>Tabel Data Dosen</h2>

<button type="button" onclick=window.location.href='./media.php?page=form-dosen'>Tambah Data Dosen</button> <br><br>

<table width="100%" border="1" cellpadding="4" cellspacing="0">
    <tr>
        <td>No</td>
        <td>NIP</td>
        <td>Nama Dosen</td>
        <td>Nomor Telepon</td>
        <td>Email</td>
        <td>Password</td>
        <td>Aksi</td>
    </tr>

    <?php
    include "koneksi.php";
    $sql = mysqli_query($kon, "SELECT * FROM dosen");
    $no = 1;
    while ($row = mysqli_fetch_array($sql)) {
    ?>
        <tr>
            <td align='center'> <?php echo $no; ?> </td>
            <td> <?php echo $row['nip']; ?> </td>
            <td> <?php echo $row['nama_dosen']; ?> </td>
            <td> <?php echo $row['no_telp']; ?> </td>
            <td> <?php echo $row['email']; ?> </td>
            <td> <?php echo $row['pw_dosen']; ?> </td>
            <td align='center'>
                <a href="media.php?page=editdosen&nip=<?php echo $row['nip']; ?>">Edit</a> |
                <a href="media.php?page=hapusdosen&nip=<?php echo $row['nip']; ?>">Hapus</a>
            </td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>