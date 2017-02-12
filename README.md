# Simplogin

## Simple secure login & register via php

Simplogin is a very simple and fully customizable authentication (login and register) with PHP and Mysql useing PDO and some composer dependencies

## Composer Dependencies

1.  [vlucas/valitron](https://github.com/vlucas/valitron) as Form validation library
2.  [paragonie/random_compat](https://github.com/paragonie/random_compat) as random bytes & int genarator
3.  [mebjas/CSRF-Protector-PHP](https://github.com/mebjas/CSRF-Protector-PHP) as CSRF protector
4.  [ezimuel/PHP-Secure-Session](https://github.com/ezimuel/PHP-Secure-Session) for Encrypting PHP sessions


## How to use?

1.  Import the `site.sql` file to your database
2.  Update your database connection details in the page `app/database.php`
3.  Change the route url `URL_ROOT` in the page `app/start.php` to the route url of your app for example
    `http://example.com` instead if `http://localhost`

## Always remember
4.  Delete the PDO `ERRMODE_EXCEPTION` at the `app/database.php` to hide PDO errors
5.  You need to delete the `ini_set` in the `start.php` at production to stop displaying errors
