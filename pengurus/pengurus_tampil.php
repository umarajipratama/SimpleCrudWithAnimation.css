<a href="?tampil=pengurus&halaman=pengurus_tambah"><button class="btn btn-warning"><i class="glyphicon glyphicon-plus"></i></button></a>
<div>&nbsp;</div>
<table class="table table-bordered table-stripped">
<thead>
 <tr class="success">
 	<th>No</th>
 	<th>Nama</th>
 	<th>Nim</th>
 	<th>Divisi</th>
 	<th>Aksi</th>
 </tr>
 </thead>

 <tbody>
 <?php 

 $no=1;
 $sql = mysqli_query($koneksi,"SELECT * FROM pengurus");
 while ($peng = mysqli_fetch_array($sql)) { ?>

 <tr>
 	<td><?php echo $no; ?></td>
 	<td><?php echo $peng['nama']; ?></td>
 	<td><?php echo $peng['nim']; ?></td>
 	<td><?php echo $peng['divisi']; ?></td>
 	<td>
 		<a href="?tampil=pengurus&halaman=pengurus_edit&id=<?php echo $peng['id_pengurus']; ?>"><button class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></button></a>
 		<a href="?tampil=pengurus&halaman=pengurus_hapus&id=<?php echo $peng['id_pengurus']; ?>"><button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button></a>
 	</td>
 </tr>

<?php
$no++;
 }
  ?>
  </tbody>
</table>