<?php 
include "koneksi.php";

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];

$sql = mysqli_query($koneksi,"INSERT INTO member (nama,nim,jurusan) VALUES ('$nama','$nim','$jurusan')");

if ($sql == TRUE) {
	echo "<script>
	alert('Berhasil ditambah !');
	window.location='?tampil=member&halaman=member_tampil';
	</script>";
} else {

	echo "<script>
	alert('Gagal ditambah !');
	window.location='?tampil=member&halaman=member_tampil';
	</script>";
}


 ?>