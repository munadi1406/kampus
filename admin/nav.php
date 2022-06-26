<ul class="list-group">
 <li class="list-group-item"><a href="?page=dashboard">Dashboard</a></li>
 <li class="list-group-item"><a href="?page=mahasiswa-show">Data Mahasiswa</a></li>
 <li class="list-group-item"><a href="?page=mahasiswa-add">Tambah Data Mahasiswa</a></li>
 <?php
 include '../koneksi.php';
   session_status() === PHP_SESSION_ACTIVE ?: session_start();
$role = $_SESSION['role'];
   if ($role =='admin'){
          echo '
 <li class="list-group-item"><a href="?page=user-show">Data User</a></li>
 <li class="list-group-item"><a href="?page=user-add">Tambah Data User</a></li>
 ';
   
   }
 ?>
 <li class="list-group-item"><a href="logout.php ">Logout</a></li>
</ul>