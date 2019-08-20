<?php
include("conn.php");
$sql = "SELECT 
        * 
        FROM 
        bangunan 
          left join 
            hewan on bangunan.bangunanid=hewan.bangunanid
          left join 
            jenis on hewan.jenisid=jenis.jenisid";
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
      json_decode($isinya['bangunanlat']),
      json_decode($isinya['bangunanlong']),
      )
    ),
		'properties' => array(
      'id' => $isinya['hewanid'],
      'nama' => $isinya['hewannama'],
      'gambar' => $isinya['bangunangambar'],
      'jenis' => $isinya['jenisnama'],
			'bangunanid' => $isinya['bangunanid'],
			'keterangan' => $isinya['bangunanketerangan']
			)
		);
	array_push($hasil['features'], $features);
}
echo json_encode($hasil);
?>