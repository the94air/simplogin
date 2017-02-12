<?php

use Valitron\Validator;

if (isset($_POST['Login'])) {

	$identifier = $_POST['identifier'];
	$password   = $_POST['password'];

	// VALIDATION HERE
	$v = new Validator($_POST);

	$v->rule('required', ['identifier', 'password']);
	$v->rule('lengthMax', 'identifier', 40);
	$v->rule('lengthMax', 'password', 30);

	if($v->validate()) {
	} else {
		$errors = $v->errors();
	}

	if (empty($errors)) {

		$AccountExists = $auth->prepare("SELECT `id`, `username`, `password`, `active` FROM `users` WHERE `username` = :username OR `email` = :email LIMIT 1");

		$AccountExists->execute([ 
			':username' => $identifier,
			':email'    => $identifier
		]);

		if ($AccountExists->rowCount() === 1){
			
			$AccountData = $AccountExists->fetch();
			$HashedPassword = $AccountData['password'];
			$PasswordResult = $hash->checkPassword($password, $HashedPassword);

			if ($PasswordResult === true) {
				if ($AccountData['active'] === 1) {

					$_SESSION['user_id'] = $AccountData['id'];
					$helper->redirectResult('You are logged in.');
					$helper->redirect('/home.php');
				} else {

					$helper->result('Your account is not active.');
				}

			} else {

				$helper->result('That password is not right.');
			}

		} else {

			$helper->result("This user doesn't exists.");
		}

	}

}