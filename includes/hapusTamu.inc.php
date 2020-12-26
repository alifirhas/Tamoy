<?php
  include "./class-autoload.inc.php";
  $testObj = new Test();
  
  $id_tamu = $_POST['id_tamu'];

  $testObj->deleteTamu($id_tamu);