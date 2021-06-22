<?php
include_once("koneksi.php");
$id = $_GET['Id'];
$result = mysqli_query($con, "DELETE FROM calon_siswa WHERE Id=$id");
header("Location:list-siswa.php");
?>