<h2>Data Mata Kuliah</h2>


<table width="100%" border="1" cellpadding="4" cellspacing="0">
    <tr>
        <td>No</td>
        <td>Kode Mata Kuliah</td>
        <td>Jadwal</td>
        <td>Nama Mata Kuliah</td>
        <td>Kelas</td>
        <td>sks</td>
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
            <td> <?php echo $row['jadwal']; ?> </td>
            <td align='center'> <?php echo $row['nama_mk']; ?> </td>
            <td align='center'> <?php echo $row['kelas']; ?> </td>
            <td align='center'> <?php echo $row['sks']; ?> </td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>