<?php
if (isset($_POST['Submit'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $result = mysqli_query($con, "INSERT INTO dosen(nip,nama,alamat,jenis_kelamin,email,telepon) VALUES('$nip','$nama','$alamat','$jk','$email','$telepon')");
    header("Location:?page=show-dosen");
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Data DOSEN</strong>
            </div>
            <div class="card-body">
                <form method="POST" action="?page=add-dosen" class="form-horizontal">
                    <div class="form-group">
                        <label for="nim" class="control-label">NIP / NIDN</label>
                        <input type="text" class="form-control" name="nip" placeholder="Masukan NIP..." required>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="ontrol-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap..." required>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="control-label">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin">
                            <option disabled selected> Pilih </option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="control-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat..." required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukan email..." required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telepon" class="control-label">Telepon</label>
                            <input type="text" class="form-control" name="telepon" placeholder="Masukan telepon..." required>
                        </div>
                    </div>
                    <input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
                    <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                </form>
            </div>
        </div>
    </div>
</div>