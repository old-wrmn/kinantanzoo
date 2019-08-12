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

?>