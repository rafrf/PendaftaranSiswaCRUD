
<!DOCTYPE html>
<html>
<head>
	<title>Nilai Akhir Mahasiswa</title>
</head>
<body>
	<h2>Nilai Mahasiswa Aplikasi Berbasis WEB</h2>
	<form action="" method="post">
		<label>Masukkan Nilai UTS:</label>
			<input type="number" name="nilai_uts">
		<br>
		<br>
		<label>Masukkan Nilai UAS:</label>
			<input type="number" name="nilai_uas">
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
		<?php
			if (isset($_POST['submit'])) {
				$nilai_uts = $_POST['nilai_uts'];
				$nilai_uas = $_POST['nilai_uas'];

				$nilai_akhir = ($nilai_uts+$nilai_uas)/2;
			
				echo "Nilai UTS = ".$nilai_uts;
		?>
		<br>
		<?php
				echo "Nilai UAS = ".$nilai_uas; 
		?>
		<br>
		<?php
				echo "Nilai Akhir = ".$nilai_akhir;
		?>
		<br>
		<?php
				if ($nilai_akhir>=80) {
					echo "Nilai Indeks = A";
				}
				elseif ($nilai_akhir>=70) {
					echo "Nilai Indeks = B";
				}
				elseif ($nilai_akhir>=50) {
					echo "Nilai Indeks = C";
				}
				elseif ($nilai_akhir>=40) {
					echo "Nilai Indeks = D";
				}
				else{
					echo "Nilai Indeks = Gagal";
				}
			}
		?>
		
</body>
</html>