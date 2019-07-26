<?php 
include '../../php/conn.php';
include 'function.php';
if(isset($_POST['login'])){
    $nip=$_POST['nip'];
    $pwd=md5($_POST['pwd']);
    $login=login($nip,$pwd);
    if(pg_num_rows($login)==1){
        $_SESSION['user']=pg_fetch_array($login);
        header('location:..');
	}
    else{
        header('location:../?msg=fail');
    }
}

?>