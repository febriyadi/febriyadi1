<?php 
    include "koneksi.php";

    $nama = $_POST['nama'];
    $stambuk = $_POST['stambuk'];
    $jurusan = $_POST['jurusan'];
    $prodi = $_POST['prodi'];
    $result['pesan']="";


    if($nama == ""){
        $result['pesan']="Nama harus diisi terlebih dahulu";
    }
    else if($stambuk == ""){
        $result['pesan']="Stambuk harus diisi terlebih dahulu";
    }
    else if($jurusan == ""){
        $result['pesan']="Jurusan harus diisi terlebih dahulu";
    }
    else if($prodi == ""){
        $result['pesan']="Prodi harus diisi terlebih dahulu";
    }
    else{
        $queryResult = $conn->query("INSERT INTO mahasiswa (nama, stambuk, jurusan, prodi) 
        VALUES ('$nama','$stambuk','$jurusan','$prodi')");

        if($queryResult){
            $result['pesan'] = "Data berhasil ditambahkan";
        }
        else{
            $result['pesan'] = "Data tidak berhasil ditambahkan";

        }
    }

    echo json_encode($result);
?>