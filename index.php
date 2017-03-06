<?php 
	$chaine = "une chaine de caractères"; 
	$nombre = 5;

	$array = array(); 
	$array[] = "foo"; 
	array_push($array, "bar", "baz");
	echo implode(',', $array) . "\n"; 
 	
	$objet = array(); 
	$objet['foo'] = 1; 
	$objet['bar'] = 2; 
	$objet['baz'] = 3; 
	foreach ($objet as $key => $val) {
		echo $key . ": " . $val . "\n";  
	}
	
	$encoded = json_encode($objet); 
	echo "encode: " . $encoded . "\n"; 
	$decoded = json_decode($encoded, true); 
	var_dump($decoded) . "\n"; 
	
	
?>
