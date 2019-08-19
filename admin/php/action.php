<?php 
include '../../php/conn.php';
include 'function.php';
if(isset($_POST['login'])){
    $nip=$_POST['nip'];
    $pwd=md5($_POST['pwd']);
    $login=login($nip,$pwd);
    echo mysqli_num_rows($login);
    if(mysqli_num_rows($login)==1){
        $_SESSION['user']=mysqli_fetch_array($login);
        header('location:..');
	    }
    else{
        header('location:../?msg=fail');
       }
    }

if(isset($_POST['chgpwd'])){
    $old=md5($_POST['old']);
    $new1=md5($_POST['new1']);
    $new2=md5($_POST['new2']);
    $nomorinduk=$_SESSION['user']['pegawainomorinduk'];
    if($new1==$new2){
        if(chkpwd($old,$nomorinduk)){
            $query="UPDATE pegawai set pegawaipassword='$new1' where pegawainomorinduk=$nomorinduk";
            mysqli_query($conn,$query);
            header('location:../');
        }          
        else{
            header('location:../?page=chgpwd');
        }
    }

    else{
        header('location:../?page=chgpwd');
    }
}

if(isset($_POST['addpegawai'])){
    $nama=$_POST['nama'];
    $nomorinduk=$_POST['nip'];
    $jabatan=$_POST['jabatan'];
    $gelar=$_POST['gelar'];
    $golongan=$_POST['golongan'];
    $tugas=$_POST['tugas'];
    $password=md5('12345');
    $query=
        "INSERT into 
            pegawai 
                (jabatanid,pegawaigelar,pegawaigolongan,pegawainama,pegawainomorinduk,pegawaipassword,pegawaitugas)
            VALUES
                ($jabatan,'$gelar','$golongan','$nama','$nomorinduk','$password','$tugas') ";
    mysqli_query($conn,$query);
    header('location:../?page=pegawai');
}

if(isset($_POST['editpegawai'])){
    $nama=$_POST['nama'];
    $nomorinduk=$_POST['nip'];
    $jabatan=$_POST['jabatan'];
    $gelar=$_POST['gelar'];
    $golongan=$_POST['golongan'];
    $tugas=$_POST['tugas'];
    $query=
        "UPDATE 
            pegawai SET
                jabatanid=$jabatan,
                pegawaigelar='$gelar',
                pegawaigolongan='$golongan',
                pegawainama='$nama',
                pegawaitugas='$tugas'
            WHERE
                pegawainomorinduk=$nomorinduk";
    mysqli_query($conn,$query);
    header('location:../?page=pegawai');
}
?>