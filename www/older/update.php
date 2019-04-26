<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"UPDATE `data` SET `nama`='$nama',`harga`='$harga' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
