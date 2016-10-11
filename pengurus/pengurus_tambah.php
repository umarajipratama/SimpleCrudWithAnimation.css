<script type="text/javascript">
	$('document').ready(function(){
		$('#nama').focus();	
	});
</script>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<form method="POST" action="?tampil=pengurus&halaman=pengurus_tambahproses">
				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
				</div>

				<div class="form-group">
					<label>Nim</label>
					<input type="text" class="form-control" name="nim"  placeholder="Nim">
				</div>

				<div class="form-group">
					<label>Nama</label>
					<select class="form-control" name="divisi">
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