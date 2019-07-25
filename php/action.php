<?php  
include 'conn.php';
 if(isset($_POST['review'])){
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $pesan=$_POST['pesan'];
    $query="INSERT into ulasan (
        ulasanemail,
        ulasannama,
        ulasanpesan,
        ulasanstatus,
        ulasanwaktu)
    values (
        '$nama',
        '$email',
        '$pesan',
        false,
        now())";
        echo $query;
 }?>