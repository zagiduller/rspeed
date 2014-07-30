<?php
function __autoload( $classname ) {
	$sep = DIRECTORY_SEPARATOR;
	$path = "classes{$sep}";
	include_once "{$path}{$classname}.php";
}

$content = Controller::getInstance();

include_once "view".DIRECTORY_SEPARATOR."main.php";
