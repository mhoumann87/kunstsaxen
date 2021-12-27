<?php

/* 
* Turn on output buffering, to remove errors on loading pages, to do * processing of content before buffer is flushed
* https://www.php.net/manual/en/function.ob-start.php
*/
ob_start();

/*
* Turn on error messaging for the project.
  TODO: ADD IT TO THE php.ini file
  ! THIS MUST BE DELETED BEFORE UPLOAD 
*/
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
/*
! REMEMBER TO DELETE  
*/
/*
* assign file paths to PHP constants
* __FILE__ returns the current path to this file
* dirname() returns the path to the parent directory
*/
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH.'/public');
define("SHARED_PATH", PRIVATE_PATH.'/shared');

/*
* Assign the root URL to a PHP constant
* - Do not need to include the domain
* - Use same document root as webserver
*/
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public');
$public_end = $public_end + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define('WWW_ROOT', $doc_root);

// Add all the files needed for this project
require_once 'db_credentials.php';
require_once 'functions.php';

$db = db_connect();

DatabaseObject::set_database($db);

$session = new $session;