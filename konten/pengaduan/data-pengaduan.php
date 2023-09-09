<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-striped">
            <thead style="background-color: rgb(225, 127, 0)">
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Nama_Lengkap</th>
                        <th>Judul_Laporan</th>
                        <th>Isi_Laporan</th>
                        <th>Photo</th>                       
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $q = mysqli_query($con, "select * from pengaduan");
                    $nomor = 1;
                    while($row=mysqli_fetch_assoc($q)) {
                    ?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?=$row['email']; ?></td>
                        <td><?=$row['nama_lengkap']; ?></td>
                        <td><?=$row['judul_laporan']; ?></td>
                        <td><?=$row['isi_laporan']; ?></td>
                        <td><?=$row['photo']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>