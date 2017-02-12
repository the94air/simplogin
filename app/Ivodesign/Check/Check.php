<?php

namespace Ivodesign\Check;

Class Check 
{

	public function usernameExists($username)
	{
		global $auth;
		global $errors;

		$CheckUsername = $auth->prepare("SELECT id FROM `users` WHERE username = :username LIMIT 1");

		$CheckUsername->execute([ ':username' => $username ]);

		if($CheckUsername->rowCount() === 1){

			$errors['username'][] = 'That username is already exists.';

		}

	}

	public function emailExists($email)
	{
		global $auth;
		global $errors;

		$CheckEmail = $auth->prepare("SELECT id FROM `users` WHERE email = :email LIMIT 1");

		$CheckEmail->execute([ ':email' => $email ]);

		if($CheckEmail->rowCount() === 1){

			$errors['email'][] = 'That email is already exists.';

		}

	}

}