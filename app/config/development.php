<?php

return
[
	'app' => [
		'display_errors' => 'On', //OR Off
		'url' => 'http://localhost',
			],
	'db' => [
		'db1' => [
			'db_connection_name' => 'auth',
			'db_driver' => 'mysql',
			'db_host' => 'localhost',
			'db_name' => 'site',
			'db_username' => 'root',
			'db_password' => '',
			'db_charset' => 'utf8',
			'db_error_mode' => PDO::ERRMODE_EXCEPTION, 
					// OR false 
					// OR PDO::ERRMODE_SILENT: Just set error codes.
					// OR PDO::ERRMODE_WARNING: Raise E_WARNING.
			'default_fetch_mode' => PDO::FETCH_ASSOC,
					// All fetch modes https://goo.gl/e5E7wc
			'emulate_prepares' => false // OR true
				],
		'db2' => [
			'db_connection_name' => 'database',
			'db_driver' => 'mysql',
			'db_host' => 'localhost',
			'db_name' => 'sites',
			'db_username' => 'root',
			'db_password' => '',
			'db_charset' => 'utf8',
			'db_error_mode' => PDO::ERRMODE_EXCEPTION, 
					// OR false 
					// OR PDO::ERRMODE_SILENT: Just set error codes.
					// OR PDO::ERRMODE_WARNING: Raise E_WARNING.
			'default_fetch_mode' => PDO::FETCH_ASSOC,
					// All fetch modes https://goo.gl/e5E7wc
			'emulate_prepares' => false // OR true
				]
			],
	'Validator' => [
		'lang' => 'en' //OR en, ar, fr, uk
			],
	'hash' => [
		'cost' => 10
			]
];