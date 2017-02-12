<?php

namespace Ivodesign\Helper;

Class Helper
{

	// Output all your form errors 
	public function outputErrors()
	{
		global $errors;

		if (!empty($errors)) {
			echo '<pre>';
			echo var_dump($errors);
			echo '</pre>';
		}

	}

	public function redirect($value)
	{
	
		return exit(header('Location: '. URL_ROOT . $value));
	
	}

	public function result($value)
	{
		global $result;
		
		$result[] = $value;

	}

	public function outputResult()
	{
		global $result;

		if (!empty($result)) {

			echo $result[0];

		}
		
	}

	public function redirectResult($value)
	{

		$_SESSION['result'] = $value;

	}

	public function outputRedirectResult()
	{

		if (isset($_SESSION['result'])) {

			echo $_SESSION['result'];

			unset($_SESSION['result']);

		}

	}

	public function e($string) {

		return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
		
	}

	public function hasError($field_name) {

		global $errors;

		if (isset($errors[$field_name][0])) {

			echo $errors[$field_name][0];

		}

	}

	public function postedText($field_name) {

		global $_POST;

		if (isset($_POST[$field_name])) {

			$fieldValue = $this->e($_POST[$field_name]);

			echo 'value="' . $fieldValue . '"';

		}

	}

}