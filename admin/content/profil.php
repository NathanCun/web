<?php
    $sql    = mysqli_query($koneksi,"SELECT * FROM tb_profil ORDER by id DESC LIMIT 1 ");
    $result = mysqli_fetch_assoc($sql);

?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class='bx bx-user-circle' style='font-size:1em'> </i>  Profil</h1>
</div>

<div class="row">
    <ddiv class="card">
        <div class="card-header">
            <h3>I- ESG Profil Perusahaaan </h3>
        </div>
        <form action="action.php" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="">Nomor Telepon</label>
                <input type="text" class="form-control" value = "<?php echo $result['nomor_telepon']; ?>" name="nomor_telepon">
            </div>
            <div class="form-group">
                <label for="">Alamat email</label>
                <input type="text" class="form-control" value = "<?php echo $result['alamat_email']; ?>" name="alamat_email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" value = "<?php echo $result['password']; ?>" name="password">
            </div>
            <br><br>
            <h3>Alamat</h3>
            <hr>
            <div class="form-group">
                <label for="">Lokasi</label>
                <input type="text" class="form-control" value = "<?php echo $result['lokasi']; ?>" name="lokasi">
            </div>
            <div class="form-group">
                <label for="">Provinsi</label>
                <input type="text" class="form-control" value = "<?php echo $result['provinsi']; ?>" name="provinsi">
            </div>
            <div class="form-group">
                <label for="">Kabupaten / Kota</label>
                <input type="text" class="form-control" value = "<?php echo $result['kabupaten_kota']; ?>" name="kabupaten_kota">
            </div>
            <div class="form-group">
                <label for="">Kode Pos</label>
                <input type="text" class="form-control" value = "<?php echo $result['kode_pos']; ?>" name="kode_pos">
            </div>

            <br>

            <button type="submit" class="btn btn-primary" name="edit_profil" ><i class='bx bx-edit-alt'></i>Submit</button>
        </div>
    </form>
    </ddiv>
</div>