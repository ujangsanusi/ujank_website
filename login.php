<?php
   include 'koneksi.php';

   if(isset($_POST['input'])){
       $username = $_POST['username'];
       $password = $_POST['password'];

       $data = mysqli_query($koneksi,"SELECT * FROM login WHERE username= '$username' AND password='$password'");
       if(mysqli_num_rows($data)){
           header("location: beranda.php");
       }else{
           echo "login gagal";
       }
   }

?>