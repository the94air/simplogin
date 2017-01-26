<?php

namespace Ivodesign\User;

use Ivodesign\Helper\Helper;

Class User
{
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