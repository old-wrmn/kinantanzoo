<?php
    session_start();
    date_default_timezone_set("Asia/Jakarta");
	
	$host = "ec2-54-235-252-23.compute-1.amazonaws.com";
	$user = "ihneuuxzwlagwo";
	$pass = "b4ea49d67954a0a6d51896c2a722bdc971349f9a08dbeb20d03c6b88506d79b6";
	$port = "5432";
	$dbname = "da5mdc9i0iajgd";
	
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>