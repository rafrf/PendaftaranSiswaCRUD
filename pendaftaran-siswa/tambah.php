<html>
<head>  
    <title>Tambah Data Siswa</title>
</head>
<body>
    <a href="list-siswa.php">< Kembali</a><br><br>
    <form name="input_data" method="post" action="tambah.php">
        <table>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="Alamat"></td>
            </tr>
            <tr> 
                <td>Jenis Kelamin</td>
                <td><input type="text" name="Jenis_Kelamin"></td>
            </tr>
            <tr> 
                <td>Agama</td>
                <td><input type="text" name="Agama"></td>
            </tr>
            <tr> 
                <td>Sekolah Asal</td>
                <td><input type="text" name="Sekolah_Asal"></td>
            </tr>
            <tr>
                <td></td>
                <td align="right"><input type="submit" name="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['submit'])) {
        $nama = $_POST['Nama'];
        $alamat = $_POST['Alamat'];
        $jenis_kelamin = $_POST['Jenis_Kelamin'];
        $agama = $_POST['Agama'];
        $sekolah_asal = $_POST['Sekolah_Asal'];
        include_once("koneksi.php");
        $result = mysqli_query($con, "INSERT INTO calon_siswa(Nama,Alamat,Jenis_Kelamin,Agama,Sekolah_Asal) VALUES('$nama','$alamat','$jenis_kelamin','$agama','$sekolah_asal')");
        echo "Tambah data siswa berhasil. <a href='list-siswa.php'>Tampilkan Data</a>";
    }
    ?>
</body>
</html>