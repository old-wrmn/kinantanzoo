<?php

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['user']);
}

function isLoggedIn(){
    if (isset($_SESSION['user'])) {
        return true;
    }else{
        return false;
    }
}

function login($nmr,$pwd){
    $login =
		"SELECT 
			* 
		FROM 
			pegawai 
		WHERE 
			pegawaiNomorInduk='$nmr' 
		AND 
			pegawaiPassword='$pwd' 
		LIMIT 1";
    $login_R = pg_query($login);
	return $login_R;
}

function show($id){
	$sql="UPDATE 
			ulasan 
		set 
			ulasanstatus=true,
			pegawainomorinduk=".$_SESSION['user']['pegawainomorinduk']."
		where ulasanid=$id";
	pg_query($sql);
}

function hide($id){
	$sql="UPDATE 
			ulasan 
		set 
			ulasanstatus=false,
			pegawainomorinduk=".$_SESSION['user']['pegawainomorinduk']."
		where ulasanid=$id";
	pg_query($sql);
}
?>