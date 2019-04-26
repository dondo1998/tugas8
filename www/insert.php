<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $harga=$_POST['harga'];
 $jumlah=$_POST['jumlah'];
 
 $q=mysqli_query($con,"INSERT INTO `barang` (`nama`,`harga`,`jumlah`) VALUES ('$nama','$harga','$jumlah')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>