<?php 

$id = $_GET['id'];
$sql = mysqli_query($koneksi,"SELECT * FROM pengurus WHERE id_pengurus = '$id'");
$peng = mysqli_fetch_array($sql);

 ?>


<div class="container">
	<div class="row">
		<div class="col-md-8">
			<form method="POST" action="?tampil=pengurus&halaman=pengurus_editproses">

			<div class="form-group">
				<input readonly="" type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
			</div>

				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $peng['nama']; ?>">
				</div>

				<div class="form-group">
					<label>Nim</label>
					<input type="text" class="form-control" name="nim"  value="<?php echo $peng['nim'];; ?>">
				</div>

				<div class="form-group">
					<label>Divisi</label>
					<select class="form-control" name="divisi">
						<option><?php echo $peng['divisi']; ?></option>
						<option>Web Programming</option>
						<option>Desktop Programming</option>
						<option>Networking</option>
						<option>Hardware & Software</option>
					</select>
				</div>


				<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i></button>
				<button type="reset" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
			</form>
		</div>
	</div>
</div>