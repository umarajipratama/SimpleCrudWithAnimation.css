<?php 
  include "koneksi.php";

  $id = $_GET['id_member'];
  $sql = mysqli_query($koneksi,"SELECT * FROM member WHERE id_member = '$id'");
  $member = mysqli_fetch_array($sql);


 ?>

<div class="container">
  <div class="row">
    <div class="col-md-6">
     <form method="POST" action="?tampil=member&halaman=member_editproses&id_member=<?php echo $member['id_member']; ?>">

     <div class="form-group">
       <input readonly="" type="hidden" class="form-control" name="id" value="<?php echo $id; ?>" placeholder="Nama">
     </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $member['nama']; ?>" placeholder="Nama">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Nim</label>
        <input type="text" class="form-control" name="nim" value="<?php echo $member['nim']; ?>"   placeholder="Nim">
      </div>

      <div class="form-group">
        <label>Jurusan</label>
        <select class="form-control" name="jurusan">
        <option><?php echo $member['jurusan']; ?></option>
          <option>S1-Teknik Informatika</option>
          <option>D3 - Teknik Informatika</option>
          <option>S1 - Sistem Informasi</option>
          <option>D3 - Manajemen Informatika</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></button>
      <button type="reset" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
    </form>
  </div>
</div>
</div>