<?php
define("DB","4screen");
define("DBHOST","localhost");
define("DBUSER","root");
define("DBPASS","");
define("APP_DIR","c:/xampp/htdocs/4screen");

function __autoload($class){
	require_once APP_DIR . "/classes/".$class.".php";
}