<?php
include '../../php/conn.php';

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
?>