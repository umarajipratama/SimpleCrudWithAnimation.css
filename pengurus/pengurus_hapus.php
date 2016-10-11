<?php 

include "koneksi.php";

$id = $_GET['id'];

$sql = mysqli_query($koneksi,"DELETE FROM pengurus WHERE id_pengurus = '$id' ");

if ($sql == TRUE) {
	echo "<script>
	alert('Berhasil dihapus !');
	window.location = '?tampil=pengurus&halaman=pengurus_tampil';
	</script>";
}else{

	echo "<script>
	alert('Gagal dihapus !');
	window.location = '?tampil=pengurus&halaman=pengurus_tampil';
	</script>";
}



 ?>