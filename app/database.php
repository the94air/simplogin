<?php

try{

foreach ($conf->get($c, 'db') as $db) {

$connection_name = $db['db_connection_name'];

$statment = 
	$db['db_driver'].
	':host=' . $db['db_host'].
	';dbname=' . $db['db_name'].
	';charset=' . $db['db_charset'];

	$$connection_name = new PDO ( 
		$statment,
		$db['db_username'],
		$db['db_password']
	);

	$$connection_name->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, $db['default_fetch_mode']);

	$$connection_name->setAttribute( PDO::ATTR_EMULATE_PREPARES, $db['emulate_prepares']);

	if ($db['db_error_mode'] !== false) {
		$auth->setAttribute(PDO::ATTR_ERRMODE, $db['db_error_mode']);
	}

}

} catch(PDOException $e){
    			
    die('could not create connection with DB');

}