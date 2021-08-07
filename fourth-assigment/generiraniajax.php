<?php
require './vanjske_biblioteke/smarty-3.1.39/libs/Smarty.class.php';
require './baza.class.php';

$base = new Baza();
$base->spojiDB();



$upit = "SELECT * FROM dz4_obrazac";
$upit = $base->selectDB($upit);
$array = array();
 
	while($fetch = $upit->fetch_assoc()){
		$array['obrasci'][] = $fetch;
	}
 
  echo json_encode($array);