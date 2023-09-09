<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
        <table class="table table-striped">
        <thead style="background-color: rgb(225, 127, 0)">
                    <tr>
                        <th>No</th> 
                        <th>Jenis Kejadian</th>
                        <th>Waktu Kejadian</th>
                        <th>Lokasi Kejadian</th>
                        <th>Penyebab Kejadian</th>
                        <th>Kronologi Kejadian</th>
                        <th>Dampak</th>
                        <th>Upaya yang dilakukan</th> 
                        <th>Kebutuhan Mendesak</th> 
                        <th>Sumber Informasi</th>                        
                        <th>Dokumentasi</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $q = mysqli_query($con, "select * from laporan_kejadian");
                    $nomor = 1;
                    while($row=mysqli_fetch_assoc($q)) {
                    ?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?=$row['jenis_kejadian']; ?></td>
                        <td><?=$row['waktu_kejadian']; ?></td>
                        <td><?=$row['lokasi_kejadian']; ?></td>
                        <td><?=$row['penyebab_kejadian']; ?></td>
                        <td><?=$row['kronologi_kejadian']; ?></td>
                        <td><?=$row['dampak']; ?></td>
                        <td><?=$row['upaya_yang_dilakukan']; ?></td>
                        <td><?=$row['kebutuhan_mendesak']; ?></td>
                        <td><?=$row['sumber_informasi']; ?></td>
                        <td><?=$row['dokumentasi']; ?></td>                       
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>