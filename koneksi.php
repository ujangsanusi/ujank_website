<?php

  $koneksi = mysqli_connect('localhost', 'root', '', 'akademik');
  if($koneksi){
      echo "koneksi database berhasil ya guys";
  }else{
      echo "koneksi database gagal ya guys";
  }

   ?>