<?php

use Valitron\Validator;

if (isset($_POST['Register'])) {

	$username         = $_POST['username'];
	$email            = $_POST['email'];
	$password         = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];

	// VALIDATION HERE
	$v = new Validator($_POST);

	$v->rule('required', ['email', 'username', 'password', 'confirm_password']);

	$v->rule('lengthBetween', 'username', 5, 20);
	$v->rule('slug', 'username');
	$v->rule('email', 'email');
	$v->rule('realEmail', 'email');
	$v->rule('lengthBetween', 'email', 8, 40);
	$v->rule('lengthBetween', 'password', 8, 30);
	$v->rule('equals', 'confirm_password','password');

	if($v->validate()) {
	} else {
		$errors = $v->errors();
	}

	$check->usernameExists($username);
	$check->emailExists($email);

	if (empty($errors)) {

		$password_hash = $helper->password($password);

		$Register = $database->prepare("INSERT INTO `users` (`username`, `email`, `password`, `active`) VALUES (:username,:email,:password,:active)");

		$Register->execute([

			':username' => $username,
			':email'    => $email,
			':password' => $password_hash,
			':active'   => 1

		]);
				
		if($Register->rowCount() > 0){

			$helper->redirectResult('You have registered. You can login.');
			$helper->redirect('/login.php');

		}else{

			$helper->result('There was a problem while registring.');

		}

	}

}