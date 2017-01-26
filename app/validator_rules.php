<?php

use Valitron\Validator;

// Custom Validator Rules

Validator::addRule('realEmail', function ($field, $value, array $params, array $fields) {

	$email = $fields[$field];

	$Email = explode("@",$email);

	if(!isset($Email[1])) {

		return false;

	} else {

		$domain = $Email[1];
		$domain = $domain . '.';
		return checkdnsrr($domain,"MX");

	}

}, 'adderss is not real');