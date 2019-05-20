<?php
require_once __DIR__ . '/connection.php';
require_once __DIR__ . '/ImgRepository.php';
require_once __DIR__ . '/Messages.php';
require_once __DIR__ . '/Gallery/GalleryService.php';


function login(){
	//todo set password
	if (check('password', 'pass') && check('login', '')) {
		session_start();
		$_SESSION['admin'] = 1;
	}
}

function getProjectPatch(){
	return $_SERVER['REQUEST_SCHEME']. '://' . $_SERVER['HTTP_HOST'] . $_SERVER['CONTEXT_PREFIX'] . '/MD';
}

function redirect($file, $code = 301)
{
	header( 'Location: ' . getProjectPatch() . '/' . $file, true, $code);
}

function check($input, $expected){
	if (isset($_POST[$input])) {
		$value = trim((string)$_POST[$input]);
		return $value === $expected;
	}
	return false;
}

function isLogged(){
	if (isset($_SESSION['admin']) && $_SESSION['admin'] === 1) {
		return True;
	}
	return False;
}

function isValidString($string)
{
	return preg_match('/^[\wA-PR-UWY-ZĄĆĘŁŃÓŚŹŻ\s0-9]{0,233}$/iu', $string);
}
