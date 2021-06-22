<?php
include_once("koneksi.php");
if(isset($_POST['update'])){   
    $id = $_POST['Id'];
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $jenis_kelamin = $_POST['Jenis_Kelamin'];
    $agama = $_POST['Agama'];
    $sekolah_asal = $_POST['Sekolah_Asal'];
    $result = mysqli_query($con, "UPDATE calon_siswa SET Nama='$nama', Alamat='$alamat', Jenis_Kelamin='$jenis_kelamin', Agama='$agama', Sekolah_asal='$sekolah_asal' WHERE Id=$id");
    header("Location:list-siswa.php");
}
?>
<?php
$id = $_GET['Id'];
$result = mysqli_query($con, "SELECT * FROM calon_siswa WHERE Id=$id");
while($data = mysqli_fetch_array($result)){
    $nama = $data['Nama'];
    $alamat = $data['Alamat'];
    $jenis_kelamin = $data['Jenis_Kelamin'];
    $agama = $data['Agama'];
    $sekolah_asal = $data['Sekolah_Asal'];
}
?>
<html>
<head>  
    <title>Edit Data Siswa</title>
</head>
<body>
    <a href="list-siswa.php">< Kembali</a><br><br>
    <form name="update_data" method="post" action="edit.php">
        <table>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="Alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr> 
                <td>Jenis Kelamin</td>
                <td><input type="text" name="Jenis_Kelamin" value=<?php echo $jenis_kelamin;?>></td>
            </tr>
            <tr> 
                <td>Agama</td>
                <td><input type="text" name="Agama" value=<?php echo $agama;?>></td>
            </tr>
            <tr> 
                <td>Sekolah Asal</td>
                <td><input type="text" name="Sekolah_Asal" value=<?php echo $sekolah_asal;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="Id" value=<?php echo $_GET['Id'];?>></td>
                <td align="right"><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>