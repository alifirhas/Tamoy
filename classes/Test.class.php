<?php

class Test extends Conn{
    
    //fungsi untuk mengambil data user/tamu 
    //tidak dipakai hanya untuk coba-coba dan sebagai pengigat
    public function getUsers(){
        $sql = "SELECT * FROM tamu";
        $stmt = $this->connect()->query($sql);//statement
        while ($row = $stmt->fetch()) {
            echo $row['nama_tamu'] . " " . $row['waktu'] . "<br>";
        }
    }

    /*
        fungsi untuk mengambil data user/tamu dengan tombol aksi 
        seperti tombol hapus dan edit
    */
    public function getUsersStmt($nama="", $waktu="", $batas=5){
        $sql = "SELECT * FROM tamu WHERE nama_tamu LIKE :namaTamu AND waktu LIKE :waktuDatang ORDER BY id_tamu ASC LIMIT :batasMuncul";
        $stmt = $this->connect()->prepare($sql);//statement
        $nama = '%'.$nama.'%';
        $waktu = '%'.$waktu.'%';
        $stmt->bindValue(":namaTamu", $nama, PDO::PARAM_STR);
        $stmt->bindValue(":waktuDatang", $waktu, PDO::PARAM_STR);
        $stmt->bindValue(":batasMuncul", intval($batas), PDO::PARAM_INT);

        // $stmt->execute([$nama,$waktu]);
        $stmt->execute();
        if (!$stmt->execute()) {
            print_r($stmt->errorInfo());
        }
        $paraTamu = $stmt->fetchAll();
        $i = 1;
        foreach ($paraTamu as $row) {
            ?>
            <tr>
                <td><?= $i?></td>
                <td><?= $row['nama_tamu']?></td>
                <td><?= $row['waktu']?></td>
                <td><?php echo date("H:i:s", strtotime($row['tanggal_masuk'])); ?></td>
                
                <td>
                    <button 
                    class="btn btn-dark editTamu"
                    data-toggle="modal" 
                    data-target="#formEdit"
                    data-id-tamu="<?= $row['id_tamu']?>"
                    data-nama-tamu="<?= $row['nama_tamu']?>"
                    >edit</button>
                </td>

                <td>
                    <button 
                    onclick="return"
                    data-idTamu="<?= $row['id_tamu']?>" 
                    class="btn btn-danger hapusTamu">Hapus</button>
                </td>

            </tr>
            <?php
        $i++;
        
        }
    }

    /*
        fungsi untuk mengambil data user/tamu tanpa tombol aksi
        dipakai di tambahTamu.php untuk quick view tamu yang baru datang
    */ 
    public function getUsersStmtView($batas=7){
        $sql = "SELECT * FROM tamu ORDER BY id_tamu DESC LIMIT :batasMuncul";
        $stmt = $this->connect()->prepare($sql);//statement
        $stmt->bindValue(":batasMuncul", intval($batas), PDO::PARAM_INT);
        $stmt->execute();
        if (!$stmt->execute()) {
            print_r($stmt->errorInfo());
        }
        $paraTamu = $stmt->fetchAll();
        $i = 1;
        foreach ($paraTamu as $row) {
            ?>
            <tr>
                <td><?= $i?></td>
                <td><?= $row['nama_tamu']?></td>
                <td><?php echo date("H:i:s", strtotime($row['tanggal_masuk'])); ?></td>

            </tr>
            <?php
        $i++;
        
        }
    }

    /*
        fungsi untuk menambah data tamu 
        dipakai di includes/tambahTamu.inc.php
    */
    public function insertTamu($namaTamu){
        $jam = date("H");

        $waktu = "";
        if ($jam>=0 && $jam<=4 || $jam>=18 && $jam<=24) $waktu = "malam";
        if ($jam>=5 && $jam<=11 ) $waktu = "pagi";
        if ($jam>=12 && $jam<=14 ) $waktu = "siang";
        if ($jam>=15 && $jam<=17 ) $waktu = "sore";
        
        $sql = "INSERT INTO tamu (nama_tamu,waktu) value (:namaTamu,:waktuDatang)";
        $stmt = $this->connect()->prepare($sql);//statement

        $stmt->bindValue(":namaTamu", $namaTamu, PDO::PARAM_STR);
        $stmt->bindValue(":waktuDatang", $waktu, PDO::PARAM_STR);
        
        if (!$stmt->execute()) {
            print_r($stmt->errorInfo());
        }

    }

    /*
        fungsi untuk menghapus data tamu 
        dipakai di includes/hapusTamu.inc.php
    */
    public function deleteTamu($idTamu){
        
        $sql = "DELETE FROM tamu where id_tamu=:idTamu";
        $stmt = $this->connect()->prepare($sql);//statement

        $stmt->bindValue(":idTamu", strval($idTamu), PDO::PARAM_STR);
        
        if (!$stmt->execute()) {
            print_r($stmt->errorInfo());
        }

    }

    /*
        fungsi untuk memperbarui data tamu 
        dipakai di includes/ubahTamu.inc.php
    */
    public function updateTamu($idTamu,$namaTamu){
        
        $sql = "UPDATE tamu set nama_tamu=:namaTamu where id_tamu=:idTamu";
        $stmt = $this->connect()->prepare($sql);//statement

        $stmt->bindValue(":namaTamu", $namaTamu, PDO::PARAM_STR);
        $stmt->bindValue(":idTamu", strval($idTamu), PDO::PARAM_STR);
        
        if (!$stmt->execute()) {
            print_r($stmt->errorInfo());
        }

    }

}