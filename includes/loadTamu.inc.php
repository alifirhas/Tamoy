<?php
    include "./class-autoload.inc.php";

    $hitungTamuBaru = $_POST['hitungTamuBaru'];
    $nama = $_POST['nama'];
    $waktu = $_POST['waktu'];

    $testObj = new Test();
    $testObj->getUsersStmt($nama,$waktu,$hitungTamuBaru);