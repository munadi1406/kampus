<?php
if (isset($_POST['update'])) {
 $id = $_POST['id'];
 $nip = $_POST['nip'];
 $nama = $_POST['nama'];
 $jk = $_POST['jenis_kelamin'];
 $alamat = $_POST['alamat'];
 $email = $_POST['email'];
 $telepon = $_POST['telepon'];
 // update user data
 $result = mysqli_query($con, "UPDATE dosen SET nip='$nip',nama='$nama',alamat='$alamat',jenis_kelamin='$jk',email='$email',telepon='$telepon' WHERE id=$id");
 header("Location:?page=show-dosen");
}
?>