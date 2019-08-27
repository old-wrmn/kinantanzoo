<?php 
include '../../php/conn.php';
include 'function.php';
if(isset($_POST['login'])){
    $name=strtolower($_POST['name']);
    $pwd=md5($_POST['pwd']);
    $login=login($name,$pwd);
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
            header('location:../?msg=success');
        }          
        else{
            header('location:../?page=chgpwd&mssg=fail');
        }
    }

    else{
        header('location:../?page=chgpwd&msg=fail');
    }
}
if(isset($_POST['addnews'])){
    $judul=$_POST['judul'];
    $isi=$_POST['isi'];
    $gambar=$_FILES['fileToUpload']["name"];
    $nip=$_SESSION['user']['pegawainomorinduk'];
    $target_dir = "../../images/berita/";
    $target_file = $target_dir . basename($_FILES['fileToUpload']["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    $query=
        "INSERT into 
            berita
                (pegawainomorinduk,beritajudul,beritaisi,beritatanggal,beritagambar)
            VALUES
                ($nip,'$judul','$isi',now(),'$gambar') ";
    if(mysqli_query($conn,$query)){
        header('location:../?page=news&msg=success');
    }
    else{
        header('location:../?page=news&msg=fail');    
    }
}

if(isset($_POST['editnews'])){
    $id=$_POST['id'];
    $judul=$_POST['judul'];
    $isi=$_POST['isi'];
    $nip=$_SESSION['user']['pegawainomorinduk'];
    $query=
        "UPDATE berita set 
            pegawainomorinduk=$nip,
            beritajudul='$judul',
            beritaisi='$isi'
        where
           beritaid=$id";
           echo $query;
    if(mysqli_query($conn,$query)){
        header('location:../?page=news&msg=success');
    }
    else{
        header('location:../?page=news&msg=fail');    
    }
}

if(isset($_POST['editprev'])){
    $id=$_POST['id'];
    $isi=$_POST['isi'];
    $nip=$_SESSION['user']['pegawainomorinduk'];
    $query=
        "UPDATE ulasan set 
            pegawainomorinduk=$nip,
            ulasanpesan='$isi'
        where
           ulasanid=$id";
    if(mysqli_query($conn,$query)){
        header('location:../?page=review&msg=success');
    }
    else{
        header('location:../?page=review&msg=fail');    
    }
}

if(isset($_POST['addpegawai'])){
    $nama=$_POST['nama'];
    $nomorinduk=$_POST['nip'];
    $jabatan=$_POST['jabatan'];
    $gelar=$_POST['gelar'];
    $golongan=$_POST['golongan'];
    $tugas=$_POST['tugas'];
    $query=
        "INSERT into 
            pegawai 
                (jabatanid,pegawaigelar,pegawaigolongan,pegawainama,pegawainomorinduk,pegawaipassword,pegawaitugas)
            VALUES
                ($jabatan,'$gelar','$golongan','$nama','$nomorinduk',NULL,'$tugas') ";
    if(mysqli_query($conn,$query)){
        header('location:../?page=pegawai&msg=success');
    }
    else{
        header('location:../?page=pegawai&msg=fail');    
    }
}
if(isset($_POST['addsatwa'])){
    $nama=$_POST['nama'];
    $jenis=$_POST['jenis'];
    $keterangan=$_POST['keterangan'];
    $gambar=$_FILES['fileToUpload']["name"];
    $target_dir = "../../images/hewan/";
    $target_file = $target_dir . basename($_FILES['fileToUpload']["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    $query=
        "INSERT into 
            hewan
                (jenisid,hewannama,hewanketerangan,hewangambar)
            VALUES
                ($jenis,'$nama','$keterangan','$gambar') ";
    if(mysqli_query($conn,$query)){
        header('location:../?page=satwa&msg=success');
    }
    else{
        header('location:../?page=satwa&msg=fail');
    }
}
if(isset($_POST['editsatwa'])){
    $nama=$_POST['nama'];
    $jenis=$_POST['jenis'];
    $keterangan=$_POST['keterangan'];
    $id=$_POST['id'];
    $query=
        "UPDATE  
            hewan set
                jenisid=$jenis,
                hewannama='$nama',
                hewanketerangan='$keterangan'
            Where 
                hewanid=$id";
    if(mysqli_query($conn,$query)){
        header('location:../?page=satwa&msg=success');
    }
    else{
        header('location:../?page=satwa&msg=fail');    
    }
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
    if(mysqli_query($conn,$query)){
        header('location:../?page=pegawai&msg=success');
    }
    else{
        header('location:../?page=pegawai&msg=fail');    
    }
}

if(isset($_POST['editjenis'])){
    $id=$_POST['id'];
    $nomorinduk=$_POST['nip'];
    $query=
        "UPDATE 
            jenis SET
                pegawainomorinduk='$nomorinduk'
            WHERE
                jenisid=$id";
    if(mysqli_query($conn,$query)){
    header('location:../?page=jenis&msg=success');
    }
    else{
    header('location:../?page=jenis&msg=fail');    
    }
}
?>