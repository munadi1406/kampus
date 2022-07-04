<?php
session_start();
?>
<div class="card">
   <div class="card-header">
      <strong>Informasi</strong>
   </div>
   <div class="card-body">
      <p>Anda Login Sebagai <strong><i><?php echo $_SESSION['username']  ?></i></strong>, <strong style="text-transform: uppercase;"><?php echo $_SESSION['role']  ?></strong></p>
      <a href="http://localhost/kampus2/" class="btn btn-primary mb-4" target="blank">Kembali Ke website</a>
      <iframe src=../index.php width="800px" height="400px"></iframe>
   </div>
</div>