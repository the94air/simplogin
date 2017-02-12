<?php

namespace Ivodesign\Hash;

use Ivodesign\Config\config;

Class Hash
{

	public function password($value)
	{
		global $c;

		return password_hash($value, PASSWORD_DEFAULT, ['cost' => Config::get($c, 'hash.cost')]);
	
	}

	public function checkPassword($value, $hashedValue)
	{
	
		return password_verify($value, $hashedValue);
	
	}

	public function hash($value) {

		return hash('sha256', $value);		

	}

	public function hashCheck($know, $user) {

		return hash_equals($know, $user);	

	}

}