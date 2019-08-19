<?php
include("conn.php");
$sql = "SELECT 
          * 
        FROM 
          hewan 
            join 
              bangunan  on bangunan.bangunanid=hewan.bangunanid 
            join 
              jenis on jenis.jenisid=hewan.jenisid";
$result = $conn->query($sql);
$hasil = array(
	'type'	=> 'FeatureCollection',
	'features' => array()
	);

while ($isinya = @mysqli_fetch_assoc($result)) {
	$features = array(
		'type' => 'Feature',
    'geometry' => array(
      'type'=>'Point',
      'coordinates'=>array(
      $isinya['bangunanlat'],
      $isinya['bangunanlong'],
      )
    ),
		'properties' => array(
      'id' => $isinya['hewanid'],
      'nama' => $isinya['hewannama'],
      'gambar' => $isinya['hewangambar'],
      'jenis' => $isinya['jenisnama'],
			'bangunanid' => $isinya['bangunanid'],
			'keterangan' => $isinya['bangunanketerangan']
			)
		);
	array_push($hasil['features'], $features);
}
echo json_encode($hasil);
?>