<?php
require 'environment.php';



$config = array();


if (ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/PortfolioMarcel/");
	$config['dbname']='clinica_db';
	$config['host']='localhost';
	$config['dbuser']='root';
	$config['dbpass']='';
}
else{

		define("BASE_URL", "http://devmg.pe.hu/");
        $config['dbname']='';
	$config['host']='';
	$config['dbuser']='';
	$config['dbpass']='';
}


