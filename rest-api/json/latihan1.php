<?php 
// 	$mahasiswa =[
// 		[

// 			"nama" => "Muhamad Gema Madani",
// 			"nrp" => "173040082",
// 			"email" => "MuhamadGemaMadani@mail"
// 		],
// 		[

// 			"nama" => "Aman Sejahtera",
// 			"nrp" => "17304000",
// 			"email" => "AmanSejahtera@mail"
// 		],

// ];

	$dbh = new PDO('mysql:host=localhost;dbname=json', 'root', '');
	$db = $dbh->prepare('SELECT * FROM mahasiswa');
	$db->execute();
	$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

	$data = json_encode($mahasiswa);
	echo $data;

?>
