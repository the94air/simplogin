<?php

try{
	$database = new PDO (
		'mysql:host=localhost;dbname=site;charset=utf8',
		'root',
		''
	);

	if ($config->get($conf, 'db.errors') === 'true') {
		$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	
	$database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

	$database->setAttribute( PDO::ATTR_EMULATE_PREPARES, false);

} catch(PDOException $e){
    			
    die('could not create connection with DB');

}