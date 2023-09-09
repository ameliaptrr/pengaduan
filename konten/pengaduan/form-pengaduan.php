<?php
if(isset($_POST["kirim"])){
  $email =$_POST['email'];
  $nama_lengkap =$_POST['nama_lengkap'];
  $judul_laporan =$_POST['judul_laporan'];
  $isi_laporan =$_POST['isi_laporan'];
  $photo=$_POST['photo'];

  $kirim = "INSERT INTO pengaduan VALUES(NULL,'$email','$nama_lengkap','$judul_laporan','$isi_laporan','$photo')";

  mysqli_query($con,$kirim);

  if(mysqli_affected_rows($con)){
      print "<meta http-equiv='refresh' content='0; url=?menu=data-pengaduan'>";
  }
  else{
    mysqli_error($con);
  }
}
?>
<h1 style="text-align: center; margin: 20px">Form Pengaduan</h1> 


<div class="box">
  <div class="row">
    <div class="col">
      <form action="" method="POST">
        <div class="mb-3">
          <input type="text" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-3">
          <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama_Lengkap"required>
        </div>
        <div class="mb-3">
          <input type="text" name="judul_laporan" class="form-control" placeholder="Judul_Laporan" required>
        </div>
        <div class="mb-3">
          <input type="text" name="isi_laporan" class="form-control" placeholder="Isi_Laporan" required>
        </div>
        <div class="mb-3">
          <input type="file" name="photo" class="form-control" placeholder="Photo" required>
        </div>
        <button type="submit" name="kirim" class="btn btn-warning">Kirim</button>
      </form>
    </div>
  </div>
  

</div>


</div>
