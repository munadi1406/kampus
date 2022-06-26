<?php
if (isset($_POST['update'])) {
 $id = $_POST['id'];
 $pass= $_POST['password'];
 $pass2=$_POST['password2'];
 $passHash = password_hash($pass2, PASSWORD_DEFAULT);

include '../koneksi.php';
$result = mysqli_query($con, "SELECT * FROM user WHERE password = '$pass'");
    $cek = mysqli_num_rows($result);
 
    if ($cek > 0) {
        $result = mysqli_query($con, "UPDATE user SET password='$passHash 'WHERE id=$id");
 // Redirect to homepage to display updated user in list
 header("Location:?page=user-show");
        
        }
    }
 $error = true;






//  if ($pass !== $pass2) {
//      // code...
//     echo '<script>alert("Password konfirmasi salah!");</script>';
//     echo "<meta http-equiv='refresh' content='0 url=?page=user-add'>";
//  return false;
//  }else{
//  // update user data
//  $result = mysqli_query($con, "UPDATE user SET password='$pass'WHERE id=$id");
//  // Redirect to homepage to display updated user in list
//  header("Location:?page=mahasiswa-show");
// }
?>