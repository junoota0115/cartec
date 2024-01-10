<?php
session_start();

function getRootPass() {
	$url = "";

	$ini = parse_ini_file(dirname(__FILE__)."/config.ini", true);
	$PROTOCOL = $ini["SETTING"]["PROTOCOL"];
	$DOMAIN = $ini["SETTING"]["DOMAIN"];
	$ROOTPASS = $ini["SETTING"]["ROOTPASS"];
	$url = $PROTOCOL . '://' . $DOMAIN . '/' . $ROOTPASS;

	return $url;
}

function makeToken() {
	$retToken = "";
	$retToken = $random_string = bin2hex(random_bytes(20));
	return $retToken;
}

function setSession($key, $value) {
	$_SESSION[$key] = $value;
}

function getSession($key) {
	$retVal = "";
	if (isset($_SESSION[$key])) {
		$retVal = $_SESSION[$key];
	}
	return $retVal;
}

?>