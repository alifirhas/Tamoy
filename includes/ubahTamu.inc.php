<?php
    include "./class-autoload.inc.php";
    $testObj = new Test();

    $id_tamu = $_POST['id_tamu'];
    $nama_tamu = $_POST['nama_tamu'];

    $testObj->updateTamu($id_tamu,$nama_tamu);