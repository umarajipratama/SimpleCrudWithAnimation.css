<?php 
	
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$divisi = $_POST['divisi'];

	$sql = mysqli_query($koneksi,"INSERT INTO pengurus (nama,nim,divisi) VALUES ('$nama','$nim','$divisi')");
	if ($sql == TRUE) {
		echo "<script>
	alert('Berhasil ditambah !');
	window.location = '?tampil=pengurus&halaman=pengurus_tampil';
	</script>";
	}else{
		echo "<script>
	alert('Gagal dihapus !');
	window.location = '?tampil=pengurus&halaman=pengurus_tampil';
	</script>";

	}


 ?>