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
        '$email',
        '$nama',
        '$pesan',
        false,
        now())";
    mysqli_query($conn,$query);
    header('location:..');
 }?>