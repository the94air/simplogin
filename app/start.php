<?php

use Ivodesign\Check\Check;
use Ivodesign\Helper\Helper;
use Ivodesign\User\User;

use Valitron\Validator;

session_cache_limiter(false);
session_start();

// ONLY DEVELOPMENT
ini_set('display_errors', 'On');

define('APP_ROOT', dirname(__DIR__));
define('URL_ROOT', 'http://localhost/auth');

$errors = array();
$result = array();

require_once 'database.php';
require_once APP_ROOT . '/vendor/autoload.php';

$check = new Check();

Validator::langDir(APP_ROOT . '/app/validator_lang');
Validator::lang('en');
require_once 'validator_rules.php';

$helper = new Helper();
$user = new User();

require_once 'routes.php';
