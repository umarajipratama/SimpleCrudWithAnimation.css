<?php 

if (isset($_GET['tampil'])) {
	$tampil = $_GET['tampil'];
} else{
	$tampil = "beranda";
}

if ($tampil == 'member') {
	$par = $_GET['halaman'];
	if ($par == 'member_tambah') {
		include "member/member_tambah.php";
	} elseif ($par == 'member_tambahproses') {
		include "member/member_tambahproses.php";
	} elseif ($par == 'member_edit') {
		include "member/member_edit.php";
	} elseif ($par == 'member_editproses') {
		include "member/member_editproses.php";
	} elseif ($par == 'member_hapus') {
		include "member/member_hapus.php";
	} else{
		include "member/member_tampil.php";
	}
}/*tutup member*/ elseif ($tampil == 'pengurus') {
	$par = $_GET['halaman'];
	if ($par == 'pengurus_tambah') {
		include "pengurus/pengurus_tambah.php";
	}elseif ($par == 'pengurus_tambahproses') {
		include "pengurus/pengurus_tambahproses.php";
	}elseif ($par == 'pengurus_edit') {
		include "pengurus/pengurus_edit.php";
	}elseif ($par == 'pengurus_editproses') {
		include "pengurus/pengurus_editproses.php";
	} elseif ($par == 'pengurus_hapus') {
		include "pengurus/pengurus_hapus.php";
	}else{
		include "pengurus/pengurus_tampil.php";
			}
}/*tutup pengurus*/ else{
	include "beranda.php";
}


 ?>