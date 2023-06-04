<?php 
    include "koneksi.php";
    
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $stambuk = $_POST['stambuk'];
    $jurusan = $_POST['jurusan'];
    $prodi = $_POST['prodi'];
    $result['pesan']="";

    if($nama == ""){
        $result['pesan']="Nama harus diisi terlebih dahulu";
    }
    else if($stambuk == ""){
        $result['pesan']="Kelas harus diisi terlebih dahulu";
    }
    else if($jurusan == ""){
        $result['pesan']="jurusan harus diisi terlebih dahulu";
    }
    else if($prodi == ""){
        $result['pesan']="jurusan harus diisi terlebih dahulu";
    }
    else{
        $queryResult = $conn->query("UPDATE mahasiswa SET nama='".$nama."', stambuk='".$stambuk."', jurusan='".$jurusan."', prodi='".$prodi."' WHERE id='".$id."'");
        // $sql="update mahasiswa set nama='$nama', stambuk='$stambuk', jurusan='$jurusan' where id='$id'";
        // $queryResult = mysqli_query($connect, $sql);
        if($queryResult){
            $result['pesan'] = "Data berhasil Diupdate";
        }
        else{
            $result['pesan'] = "Data tidak berhasil Diupdate";

        }
    }

    echo json_encode($result);
?>