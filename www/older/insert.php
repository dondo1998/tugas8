<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"INSERT INTO `barang` (`nama`,`harga`) VALUES ('$nama','$harga')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
