<?php
include ('conn.php');
$dataarray=array();

$sql=$conn->query("SELECT * from hewan join bangunan on hewan.bangunanid=bangunan.bangunanid");
			
while($row = @mysqli_fetch_array($sql))
	{
		$hasil=array(
		'id' => $row['hewanid'],
		'nama' => $row['hewannama'],
		'lat' => json_decode($row['bangunanlat']),
		'long' => json_decode($row['bangunanlong'])
		);
		
		  $dataarray[]=$hasil;
	}
echo json_encode ($dataarray);
   

					  
?>