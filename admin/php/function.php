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
	$conn=mysqli_connect("localhost","root","","kinantan");
    $login =
		"SELECT 
			* 
		FROM 
			pegawai 
		WHERE 
			pegawaiNomorInduk='$nmr' 
		AND 
			pegawaiPassword='$pwd'";
    $login_R = mysqli_query($conn,$login);
	return $login_R;
}

function chkpwd($pwd,$nomorinduk){
	$conn=mysqli_connect("localhost","root","","kinantan");
	$login =
		"SELECT 
			* 
		FROM 
			pegawai 
		WHERE 
			pegawaiNomorInduk=$nomorinduk 
		";
	$login_R = mysqli_query($conn,$login);
	while($res=mysqli_fetch_assoc($login_R)){
		$hasil=$res['pegawaipassword'];
	}
	if($hasil==$pwd){
		return true;
	}
}

function show($id){
	$conn=mysqli_connect("localhost","root","","kinantan");
	$sql="UPDATE 
			ulasan 
		set 
			ulasanstatus=true,
			pegawainomorinduk=".$_SESSION['user']['pegawainomorinduk']."
		where ulasanid=$id";
	mysqli_query($conn,$sql);
}

function hide($id){
	$conn=mysqli_connect("localhost","root","","kinantan");
	$sql="UPDATE 
			ulasan 
		set 
			ulasanstatus=false,
			pegawainomorinduk=".$_SESSION['user']['pegawainomorinduk']."
		where ulasanid=$id";
	mysqli_query($conn,$sql);
}
?>