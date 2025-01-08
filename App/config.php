<?php

// 1° O diretorio base 
// 2° Onde estão as views
// 3° Acesso ao banco de dados

define('BASE_DIR', dirname(__FILE__, 2));
define('VIEWS', BASE_DIR . '/view');

$_ENV['db']['host'] = "localhost:3306";
$_ENV['db']['user'] = "root";
$_ENV['db']['pass'] = "Renan2025@";
$_ENV['db']['database'] = "biblioteca";
