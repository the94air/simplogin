<?php

namespace Ivodesign\User;

use Ivodesign\Helper\Helper;

Class User
{
	Private $Account;
	Private $AccountData;

	public function accountStatus()
	{
		global $database;
		$user_id = $_SESSION['user_id'];

		$Account = $database->prepare("SELECT `active` FROM `users` WHERE `id` = :id LIMIT 1");

		$Account->execute([ ':id' => $user_id ]);

		$AccountData = $Account->fetch();

		if ($Account->rowCount() !== 1 || $AccountData['active'] === 0){

			unset($_SESSION['user_id']);

			Helper::redirectResult('Your account has been blocked');
			Helper::redirect('/');
		}
	}

	public function onlyAuthenticated()
	{

		if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {

			Helper::redirect('/index.php');

		}

	}

	public function onlyGuest()
	{

		if (isset($_SESSION['user_id']) || !empty($_SESSION['user_id'])) {
			
			global $helper;

			Helper::redirect('/home.php');

		}

	}

	public function authenticated()
	{

		return isset($_SESSION['user_id']) || !empty($_SESSION['user_id']);

	}

	public function guest()
	{

		return !isset($_SESSION['user_id']) || empty($_SESSION['user_id']);

	}

}