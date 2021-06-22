<?php
include_once("koneksi.php");
$result = mysqli_query($con, "SELECT * FROM calon_siswa ORDER BY Id DESC");
$jumlah_data = mysqli_num_rows($result);
?>
<html>
<head>
	<style>
	*{
		margin : 15px 5px;
	}
	table{
		border-spacing: 2px;
	}
	table, th, td{
		border: 1px solid black;
	}
	</style>
	<title>Pendaftaran Siswa Baru</title>
</head>
<body>
	<h2>Siswa yang sudah mendaftar</h2>
    <a href="tambah.php">[+] Tambah Baru</a>
	<table>
		<tr align="center">
			<th> No </th>
			<th> Nama </th>
			<th> Alamat </th>
			<th> Jenis Kelamin </th>
			<th> Agama </th>
			<th> Sekolah Asal </th>
			<th colspan="2"> Tindakan </th>
		</tr>
		<?php $no=1;
		while($data = mysqli_fetch_array($result)) {         
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$data['Nama']."</td>";
			echo "<td>".$data['Alamat']."</td>";
			echo "<td>".$data['Jenis_Kelamin']."</td>";
			echo "<td>".$data['Agama']."</td>";
			echo "<td>".$data['Sekolah_Asal']."</td>";
			echo "<td><a href='edit.php?Id=$data[Id]'>Edit</a></td>";
			echo "<td><a href='hapus.php?Id=$data[Id]'>Hapus</a></td>";
			echo "</tr>";
		}
		?>
	</table>
	<p><?php echo "Total : ".$jumlah_data; ?></p>
</body>
</html>