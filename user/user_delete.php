<?php
include "../koneksi.php";
$id = $_GET['id'];
$result = mysqli_query($con, "DELETE FROM user WHERE id=$id");
header("Location:../admin/?page=user-show");