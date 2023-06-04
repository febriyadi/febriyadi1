<?php
$conn = new mysqli("localhost","root","","praktikum-web2");
if (!$conn){
    echo 'koneksi  gagal';
} else {
    echo '';
}