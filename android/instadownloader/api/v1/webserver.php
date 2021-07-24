<?php

$lastVersionInMyket = new LastVersion('1.0.2', 2);
$lastVersionInBazaar = new LastVersion('1.0.9', 5);

$flavor = $_GET['flavor'];
$appVersionCode = $_GET['appVersionCode'];

if($flavor == Flavor::BAZAAR){
	echo json_encode($lastVersionInBazaar);
}else if($flavor == Flavor::MYKET){
	echo json_encode($lastVersionInMyket);
}

class LastVersion{
	public $versionName;
	public $versionCode;
	public function __construct($versionName, $versionCode){
		$this->versionName = $versionName;
		$this->versionCode = $versionCode;
	}
}

class Flavor{
	const MYKET = "myket";
	const BAZAAR = "bazaar";
}