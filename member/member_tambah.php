<script type="text/javascript">
  $('document').ready(function(){
    $('#nama').focus();
  });
</script>

<div class="container">
  <div class="row">
    <div class="col-md-6">
     <form method="POST" action="?tampil=member&halaman=member_tambahproses" class="animated fadeInDown">
     <div class="form-group">
       <label for="exampleInputEmail1">Id</label>
       <input type="text" class="form-control" name="id_member" id="id" placeholder="Nama">
     </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Nim</label>
        <input type="text" class="form-control" name="nim" placeholder="Nim">
      </div>

      <div class="form-group">
        <label>Jurusan</label>
        <select class="form-control" name="jurusan">
          <option>S1-Teknik Informatika</option>
          <option>D3 - Teknik Informatika</option>
          <option>S1 - Sistem Informasi</option>
          <option>D3 - Manajemen Informatika</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary animated zoomInUp"><i class="glyphicon glyphicon-ok"></i></button>
      <button type="reset" class="btn btn-danger animated zoomInUp"><i class="glyphicon glyphicon-remove"></i></button>
    </form>
  </div>
</div>
</div>