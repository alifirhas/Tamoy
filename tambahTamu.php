<?php
  include "./includes/class-autoload.inc.php";
  include "./templates/header.php";
  include "./templates/navbar.php";

?>

<div class="container mt-5">
    <!-- form untuk tambah tamu -->
  <form action="" method="post">
    <div class="row g-3 align-items-center">
      <div class="col-auto">
        <label for="inputPassword6" class="col-form-label">Tambah tamu</label>
      </div>
      <div class="col-auto">
        <input type="text" id="namaTamu" class="form-control" required maxlength="100" minlength="3" placeholder="Nama tamu..." required>
      </div>
      <div class="col-auto">
        <input type="button" value="Tambah tamu" id="tambahTamu" class="btn btn-primary">
      </div>
    </div>
  </form>

  <div class="row mt-3">
    <div class="col-8">
        <h2>Tamu terbaru</h2>
    </div>
    <div class="col-4">
        <!-- form quick search tamu -->
        <form action="" method="post">
            <input type="text" id="inputName" class="form-control" required maxlength="100" minlength="3" placeholder="Cari tamu..." oninput="filterData()">
        </form>
    </div>
  </div>

  <div class="row mt-3">
        <table class="table" id="tabelTamu">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Tamu</th>
                    <th scope="col">Jam masuk</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $testObj = new Test();
                    $testObj->getUsersStmtView();
                ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    /*
        fungsi untuk mengirim data dari input #namaTamu ke ./includes/tambahTamu.inc.php
        untuk proses tambah data
    */
    $('#tambahTamu').click(function(){
        var nama = $('#namaTamu').val();
        $.ajax({
            method: "POST",
            url: "./includes/tambahTamu.inc.php",
            data: {nama_tamu : nama},
            success: function (html) {
                $('#tabelTamu').load(' #tabelTamu > ');
                alert("data dikirim");
                $('#namaTamu').val("");
            }
        });
    });

    /*
        fungsi untuk filter data
        hanya menggunakan javascript 
        karena filter data hanya sebatas data yang ada di tabel saja
    */
    function filterData() {
        var nama, filter, table, tr, td, i, txtValue;
        
        nama = document.getElementById("inputName");
        nama = nama.value.toUpperCase();

        table = document.getElementById("tabelTamu");
        tr = table.getElementsByTagName("tr");
        
        for (i = 0; i < tr.length; i++) {
            dataNama = tr[i].getElementsByTagName("td")[1];
            if (dataNama) {
            textDataNama = dataNama.textContent.toUpperCase();
            if (textDataNama.match(nama)) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }
        }
    }

</script>

    
<?php

  include "./templates/footer.php";

?>