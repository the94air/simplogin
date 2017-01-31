<?php

use Ivodesign\Config\Config;
use Ivodesign\Check\Check;
use Ivodesign\Helper\Helper;
use Ivodesign\Hash\Hash;
use Ivodesign\User\User;

use Valitron\Validator;

session_cache_limiter(false);
session_start();

define('APP_ROOT', dirname(__DIR__));

require_once APP_ROOT . '/vendor/autoload.php';

$conf = include APP_ROOT . '/app/config/' . file_get_contents(APP_ROOT . '/app/mode.php') . '.php';

$config = new Config();

ini_set('display_errors', $config->get($conf, 'app.display_errors'));

define('URL_ROOT', $config->get($conf, 'app.url'));

$errors = array();
$result = array();

require_once 'database.php';

$check = new Check();

Validator::langDir(APP_ROOT . '/app/validator_lang');
Validator::lang($config->get($conf, 'Validator.lang'));

require_once 'validator_rules.php';

$helper = new Helper();
$hash = new Hash();
$user = new User();

if ($user->authenticated()) {
	$user->accountStatus();
}

require_once 'routes.php';
