<?php
  include "./class-autoload.inc.php";
  $testObj = new Test();
  
  $nama_tamu = $_POST['nama_tamu'];

  $testObj->insertTamu($nama_tamu);