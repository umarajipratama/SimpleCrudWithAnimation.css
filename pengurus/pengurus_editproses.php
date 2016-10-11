<?php 
	include "koneksi.php";

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$divisi = $_POST['divisi'];

	$sql = mysqli_query($koneksi,"UPDATE pengurus SET nama = '$nama',nim = '$nim',divisi = '$divisi' WHERE id_pengurus = '$id'");

	if ($sql == TRUE) {
		echo "<script>
		alert('Berhasil diedit !');
		window.location = '?tampil=pengurus&halaman=pengurus_tampil';
		</script>";
	}else{

		echo "<script>
		alert('Gagal diedit !');
		window.location = '?tampil=pengurus&halaman=pengurus_tampil';
		</script>";
	}

 ?>