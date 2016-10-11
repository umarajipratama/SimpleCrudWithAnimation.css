<?php 
include "koneksi.php";

$id = $_GET['id_member'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];

$sql = mysqli_query($koneksi,"UPDATE member SET nama = '$nama',nim = '$nim',jurusan = '$jurusan' WHERE id_member = '$id'");

if ($sql == TRUE) {
	echo "<script>
	alert('Berhasil diedit !');
	window.location = '?tampil=member&halaman=member_tampil';
	</script>";
}else{

	echo "<script>
	alert('Gagal diedit !');
	window.location = '?tampil=member&halaman=member_tampil';
	</script>";
}



 ?>