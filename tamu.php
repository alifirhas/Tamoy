<?php
include "./includes/class-autoload.inc.php";
include "./templates/header.php";
include "./templates/navbar.php";

?>
<!-- Modal form untuk edit tamu -->
<form action="" method="post">
    <div class="modal fade" id="formEdit" tabindex="-1" aria-labelledby="formEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="formEditLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <input type="text" id="namaTamu" name="nama_tamu" class="form-control" required maxlength="100" minlength="3" placeholder="Nama tamu..." required value="">
            <input type="hidden" id="idTamu" name="id_tamu" required value="">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="button" class="btn btn-primary" id="kirimData" value="Save changes">
        </div>
        </div>
    </div>
    </div>
</form>

<div class="container mt-2">
    <div class="row mt-3">
        <div class="col-8">
            <h2>Tamu</h2>
        </div>
        <div class="col-4">
            <!-- form untuk pencarian -->
            <form action="" method="post">
                <div class="row">
                    <div class="col">
                        <input type="text" id="inputName" class="form-control" required maxlength="100" minlength="3" placeholder="Cari tamu...">
                    </div>
                    <div class="col">
                        <select name="inputWaktu" id="inputWaktu" class="form-control">
                            <option value="">---</option>
                            <option value="pagi">Pagi</option>
                            <option value="siang">Siang</option>
                            <option value="sore">Sore</option>
                            <option value="malam">Malam</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <table class="table" id="tabelTamu">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Tamu</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Jam masuk</th>
                    <th scope="col" colspan="2">Menu</th>
                </tr>
            </thead>
            <!-- tempat munculya data -->
            <tbody class="dataTamu">
            <?php
                $testObj = new Test();
                $testObj->getUsersStmt();
            ?>
            </tbody>
        </table>
        <button class="btn btn-secondary" id="more" current="">More</button>
    </div>

</div>

<script>
    var hitungTamu = 5;
    $("#more").attr("current", hitungTamu);

    //fungsi untuk load data lebih banyak ketika tombol more ditekan
    $("body").on('click', '#more', function () {
        hitungTamu = hitungTamu + 5;
        var nama = $("#inputName").val();
        var waktu = $("#inputWaktu").val();
        $(".dataTamu").load(
            './includes/loadTamu.inc.php',
            {
                /*
                    mangirim waktu dan nama agar data pencarian tidak diatur ulang
                    ketika pengguna memanggil data
                */
                hitungTamuBaru : hitungTamu,
                waktu : waktu,
                nama : nama
            }
        );
        $("#more").attr("current", hitungTamu);
    });

    //fungsi untuk filter data
    $("#inputName, #inputWaktu").on('keyup change',function(){
        var nama = $("#inputName").val();
        var waktu = $("#inputWaktu").val();
        hitungTamu = 5;
        $(".dataTamu").load(
            './includes/loadTamu.inc.php',
            {
                /*
                    mengirim hitungTamu agar ketika melakukan pencarian
                    data yang muncul akan tetap 5
                */
                hitungTamuBaru : hitungTamu,
                waktu : waktu,
                nama : nama
            }
        );
    });

    /*
        fungis untuk mengirim data yang ingin dihapus ke ./includes/hapusTamu.inc.php
        untuk proses penghapusan
    */ 
    $("body").on('click', '.hapusTamu', function () {
        if (!confirm("hapus data?")) {
            return false;
        }else{
            var id = $(this).attr('data-idTamu');
            $.ajax({
                method: "POST",
                url: "./includes/hapusTamu.inc.php",
                data: {id_tamu : id},
                success: function (html) {
                    $('#tabelTamu').load(' #tabelTamu > ');
                    alert("data dihapus");
                    
                }
            });
        }

    });
    
    /*
        fungsi untuk mengirim data ke modal form untuk diedit
    */
    $("body").on('click', '.editTamu', function () {
        id = $(this).attr('data-id-tamu');
        nama = $(this).attr('data-nama-tamu');
        $('form #namaTamu').val(nama);
        $('form #idTamu').val(id);
    });

    /*
        fungsi untuk mengirim data yang sudah diubah di modal form ke ./includes/ubahTamu.inc.php
        untuk proses update
    */
    $("#kirimData").click(function(){
        if (!confirm("ubah data?")) {
            return false;
        }else{
            var nama = $('#namaTamu').val();
            var id = $('#idTamu').val();
            $.ajax({
                method: "POST",
                url: "./includes/ubahTamu.inc.php",
                data: {id_tamu: id, nama_tamu: nama},
                success: function (html) {
                    $('#tabelTamu').load(' #tabelTamu > ');
                    alert("data diubah");
                    $(".close").click();
                }
            });
        }
    });



</script>
<?php

include "./templates/footer.php";

?>