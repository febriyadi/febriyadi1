<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style/dashboard.css">
    <script type="text/javascript" src="js/jquery-3.6.4.min.js"></script>
</head>

<body>
    <nav>
        <div class="sidebar-top">
            <span class="shrink-btn">
                <i class='bx bx-chevron-left'></i>
            </span>
            <img src="img/logo.png" class="logo" alt="">
            <h3 class="hide">Aqumex</h3>
        </div>

        <div class="search">
            <i class='bx bx-search'></i>
            <input type="text" class="hide" placeholder="Quick Search ...">
        </div>

        <div class="sidebar-links">
            <ul>
                <div class="active-tab"></div>
                <li class="tooltip-element" data-tooltip="0">
                    <a href="#" class="active" data-active="0">
                        <div class="icon">
                            <i class='bx bx-tachometer'></i>
                            <i class='bx bxs-tachometer'></i>
                        </div>
                        <span class="link hide">Dashboard</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="1">
                    <a href="#" data-active="1">
                        <div class="icon">
                            <i class='bx bx-folder'></i>
                            <i class='bx bxs-folder'></i>
                        </div>
                        <span class="link hide">Projects</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="2">
                    <a href="#" data-active="2">
                        <div class="icon">
                            <i class='bx bx-message-square-detail'></i>
                            <i class='bx bxs-message-square-detail'></i>
                        </div>
                        <span class="link hide">Messages</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="3">
                    <a href="#" data-active="3">
                        <div class="icon">
                            <i class='bx bx-bar-chart-square'></i>
                            <i class='bx bxs-bar-chart-square'></i>
                        </div>
                        <span class="link hide">Analytics</span>
                    </a>
                </li>
                <div class="tooltip">
                    <span class="show">Dashboard</span>
                    <span>Projects</span>
                    <span>Messages</span>
                    <span>Analytics</span>
                </div>
            </ul>

            <h4 class="hide">Shortcuts</h4>

            <ul>
                <li class="tooltip-element" data-tooltip="0">
                    <a href="#" data-active="4">
                        <div class="icon">
                            <i class='bx bx-notepad'></i>
                            <i class='bx bxs-notepad'></i>
                        </div>
                        <span class="link hide">Tasks</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="1">
                    <a href="#" data-active="5">
                        <div class="icon">
                            <i class='bx bx-help-circle'></i>
                            <i class='bx bxs-help-circle'></i>
                        </div>
                        <span class="link hide">Help</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="2">
                    <a href="#" data-active="6">
                        <div class="icon">
                            <i class='bx bx-cog'></i>
                            <i class='bx bxs-cog'></i>
                        </div>
                        <span class="link hide">Settings</span>
                    </a>
                </li>
                <div class="tooltip">
                    <span class="show">Tasks</span>
                    <span>Help</span>
                    <span>Settings</span>
                </div>
            </ul>
        </div>

        <div class="sidebar-footer">
            <a href="#" class="account tooltip-element" data-tooltip="0">
                <i class='bx bx-user'></i>
            </a>
            <div class="admin-user tooltip-element" data-tooltip="1">
                <div class="admin-profile hide">
                    <!-- <img src="img/face-1.png" alt=""> -->
                    <div class="admin-info">
                        <h3>FEBRIYADI</h3>
                        <h5>Admin</h5>
                    </div>
                </div>
                <a href="login.php" class="log-out">
                    <i class='bx bx-log-out'></i>
                </a>
            </div>
            <div class="tooltip">
                <span class="show">FEBRIYADI</span>
                <span>Logout</span>
            </div>
        </div>
    </nav>


    <main>
        <div class="" id="mahasiswa">
            <h1 class="text-center">Data Mahasiswa Praktikum Web</h1><br>
            <div class="card">
                <div class="card-header bg-primary text-light">
                    Input Data Mahasiswa
                </div>
                <div class="card-body">
                    <table>
                        <div class="mb-3">
                            <div class="mb-3">
                                <label class="form-label">ID</label>
                                <input type="text" name="id" disabled value class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">NAMA </label>
                                <input type="text" name="nama" value="" class="form-control"
                                    placeholder="Masukkan Nama Mahasiswa">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">STAMBUK </label>
                                <input type="text" name="stambuk" value="" class="form-control"
                                    placeholder="Masukkan Stambuk Mahasiswa">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">JURUSAN </label>
                                <input type="text" name="prodi" value="" class="form-control"
                                    placeholder="Masukkan Jurusan Mahasiswa">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">PRODI </label>
                                <input type="text" name="jurusan" value="" class="form-control"
                                    placeholder="Masukkan Prodi Mahasiswa">
                            </div>

                            <div class="text-center">
                                <hr>
                                <button class="btn btn-primary" id="tombolTambah" onclick="tambahData()">TAMBAH DATA
                                    MAHASISWA</button>
                                <button class="btn btn-warning" id="tombolUpdate" onclick="updateData()">UPDATE DATA
                                    MAHASISWA</button>
                            </div>
                        </div>
                    </table>
                </div>
                <div class="card-footer text-muted bg-primary text-light">

                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header bg-primary text-light">
                    Data Mahasiswa
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>NO</th>
                            <th>NAMA MAHASISWA</th>
                            <th>STAMBUK</th>
                            <th>JURUSAN</th>
                            <th>PRODI</th>
                            <th>ACTION</th>
                        </thead>
                        <tbody id="barisData"></tbody>
                    </table>
                    <p id="pesan"></p>
                </div>
            </div>
        </div>



        <script type="text/javascript">
        onload();

        function updateData() {
            var id = $("[name='id']").val();
            var nama = $("[name='nama']").val();
            var stambuk = $("[name='stambuk']").val();
            var jurusan = $("[name='jurusan']").val();
            var prodi = $("[name='prodi']").val();

            $.ajax({
                type: "POST",
                data: "id=" + id + "&nama=" + nama + "&stambuk=" + stambuk + "&jurusan=" + jurusan + "&prodi=" +
                    prodi,
                url: 'updateData.php',
                success: function(result) {
                    var objResult = JSON.parse(result);
                    $("#pesan").html(objResult.pesan);
                    onload();
                }
            })

        }

        function tambahData() {
            var nama = $("[name='nama']").val();
            var stambuk = $("[name='stambuk']").val();
            var jurusan = $("[name='jurusan']").val();
            var prodi = $("[name='prodi']").val();

            $.ajax({
                type: "POST",
                data: "nama=" + nama + "&stambuk=" + stambuk + "&jurusan=" + jurusan + "&prodi=" + prodi,
                url: 'tambahData.php',
                success: function(result) {
                    var objResult = JSON.parse(result);
                    $("#pesan").html(objResult.pesan);

                    onload();
                }
            })
        }

        function pilihData(idx) {
            var id = idx;
            $.ajax({
                type: "POST",
                data: "id=" + id,
                url: 'ambildataID.php',
                success: function(result) {
                    var objResult = JSON.parse(result);
                    $("[name='id']").val(objResult.id);
                    $("[name='nama']").val(objResult.nama);
                    $("[name='stambuk']").val(objResult.stambuk);
                    $("[name='jurusan']").val(objResult.jurusan);
                    $("[name='prodi']").val(objResult.prodi);
                    $("#tombolUpdate").show();
                    $("#tombolTambah").hide();

                }
            })

        }

        function hapusData(id) {
            $.ajax({
                type: "POST",
                data: "id=" + id,
                url: 'hapusData.php',
                success: function(result) {
                    onload();
                }
            })
        }

        function onload() {
            var dataHandler = $("#barisData");
            dataHandler.html("");
            $.ajax({
                type: "GET",
                data: "",
                url: 'ambilData.php',
                success: function(result) {
                    $("[name='id']").val('');
                    $("[name='nama']").val('');
                    $("[name='stambuk']").val('');
                    $("[name='jurusan']").val('');
                    $("[name='prodi']").val('');
                    var objResult = JSON.parse(result);
                    var nomor = 1;
                    console.log(objResult.value);
                    $.each(objResult, function(key, val) {
                        var barisBaru = $("<tr>");
                        barisBaru.html("<td>" + nomor + "</td>" +
                            "<td>" + val.nama + "</td>" +
                            "<td>" + val.stambuk + "</td>" +
                            "<td>" + val.jurusan + "</td>" +
                            "<td>" + val.prodi + "</td>" +
                            "<td><button class='btn btn-primary' onclick='pilihData(" + val.id +
                            ")'>Pilih Data  </button><button class='btn btn-danger' onclick='hapusData(" +
                            val.id + ")'>Hapus Data  </button></td>")
                        dataHandler.append(barisBaru);
                        nomor++;
                    })
                    $("#tombolTambah").show();
                    $("#tombolUpdate").hide();
                }
            })
        }
        </script>
        <hr>

        <p class="copyright">
            &copy; 2023 - <span>FEBRIYADI</span> All Rights Reserved.
        </p>

    </main>

</body>
<script src="script/dashboard.js"></script>

</html>