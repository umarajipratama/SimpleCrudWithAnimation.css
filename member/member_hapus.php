<?php 

$id_member = $_GET['id_member'];
$sql = mysqli_query($koneksi,"DELETE FROM member WHERE id_member = '$id_member'");

if ($sql) {
	echo "<script>
	alert('Berhasil dihapus !');
	window.location = '?tampil=member&halaman=member_tampil';
	</script>";
} else {
	echo "<script>
	alert('Gagal diedit !');
	window.location = '?tampil=member&halaman=member_tampil';
	</script>";
}

 ?>