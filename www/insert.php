<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $harga=$_POST['harga'];
 $jumlah=$_POST['jumlah'];
 $nama_pelanggan=$_POST['nama_pelanggan'];
 $no_meja=$_POST['no_meja'];
 
 $q=mysqli_query($con,"INSERT INTO `barang` (`nama`,`harga`,`jumlah`,`nama_pelanggan`,`no_meja`) VALUES ('$nama','$harga','$jumlah','$nama_pelanggan','$no_meja')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>