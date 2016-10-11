<a href="?tampil=member&halaman=member_tambah"><button class="btn btn-warning animated slideInLeft"><i class="glyphicon glyphicon-plus-sign"></i></button></a>
<div>&nbsp;</div>
<table class="table table-stripped table-bordered table-condensed animated slideInLeft">
<thead class="animated slideInLeft">
	<tr class="info">
		<th>No</th>
		<th>Nama</th>
		<th>Nim</th>
		<th>Jurusan</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody class="animated slideInLeft">
	<?php 
	$no=1;
	$sql = mysqli_query($koneksi,"SELECT * FROM member");
	while ($member = mysqli_fetch_array($sql)) { ?>

	<tr>
		<td><?php echo $no;; ?></td>
		<td><?php echo $member['nama']; ?></td>
		<td><?php echo $member['nim'];; ?></td>
		<td><?php echo $member['jurusan']; ?></td>
		<td>
			<a href="?tampil=member&halaman=member_edit&id_member=<?php echo $member['id_member']; ?>"><button class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></button></a>
			<a href="?tampil=member&halaman=member_hapus&id_member=<?php echo $member['id_member']; ?>"><button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button></a>
		</td>
	</tr>

<?php
$no++;
}
?>
</tbody>
</table>