<?php

#ERRORS_DISPLAY

ini_set('display_errors', '1');
error_reporting(-1);

#DOSTĘP DO BAZY DANYCH

const DB_HOST = 'localhost';
const DB_NAME = 'impresart';
const DB_USER = 'root';
const DB_PASS = 'root';

#USTAWIENIE KATALOGÓW AUTOLOADU

set_include_path(get_include_path() . PATH_SEPARATOR . 'controller');
set_include_path(get_include_path() . PATH_SEPARATOR . 'model');
set_include_path(get_include_path() . PATH_SEPARATOR . 'view');

#TEMPLATE

const LOGO_PATH = 'images/logo.png';

?>