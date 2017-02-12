# Simplogin

## Simple secure login & register via php

Simplogin is a very simple and fully customizable authentication (login and register) with PHP and Mysql useing PDO and some composer dependencies.

## Composer Dependencies

1.  [vlucas/valitron](https://github.com/vlucas/valitron) as Form validation library
2.  [paragonie/random_compat](https://github.com/paragonie/random_compat) as random bytes & int genarator
3.  [mebjas/CSRF-Protector-PHP](https://github.com/mebjas/CSRF-Protector-PHP) as CSRF protector
4.  [ezimuel/PHP-Secure-Session](https://github.com/ezimuel/PHP-Secure-Session) for Encrypting PHP sessions

## How to use?

1.  Import the `site.sql` file to your database.
2.  Update your app configuration details `app/config/development.php` and select the mode `app/mode.php` you can also make your own config file in `app/config/` folder.
3.  

## Always remember
1.  Disable `PDO error` and `php display errors` in production mode.
2.  secure your config directory `app/config/` with Chmod  
`700 [rwx------]` writable by owner, readable by owner (most secure, if it works)  
`750 [rwxr-x---]` writable by owner, readable by owner and group  
`755 [rwxr-xr-x]` writable by owner, readable by all (details)  
`770 [rwxrwx---]` writable by owner and group, readable by owner and group  
`775 [rwxrwxr-x]` writable by owner and group, readable by all  
`777 [rwxrwxrwx]` writable by all, readable by all (not secure, details)  

3.  secure your config files `app/config/` with Chmod  
Recommend settings if you don't need write access:  
`400 [r--------]` readable by owner (most secure, if it works)  
`440 [r--r-----]` readable by owner and group (if 400 doesn't work)  
Recommended settings if you need write access:  
`600 [rw-------]` readable and writable by owner (most secure, if it works)  
`640 [rw-r-----]` readable and writable by owner, readable to group  
`660 [rw-rw----]` readable and writable by owner and group  
Not recommended unless nothing else will work:  
`444 [r--r--r--]` readable by all  
`644 [rw-r--r--]` readable by all, writable to owner  
`664 [rw-rw-r--]` readable by all, writable to owner and group  

### For more info about Securing file permissions
[https://goo.gl/bl9aqc](https://goo.gl/bl9aqc)  
[https://goo.gl/n8O3ao](https://goo.gl/n8O3ao)
