<?php
include('modules/core.php');
if (isset($_GET['action']))
	$action = $_GET['action'];

else
	exit();
if (islp()) {
	$login = $_GET['login'];
	$password = $_GET['password'];
}



if ($action == "login") {
	require("models/login.php");
}
if ($action == "register") {
	require("models/register.php");
}
if ($action == "get-profile") {
	require("models/profile.php");
}
if ($action == "get-list-card") {
	require("models/listcard.php");
}
if ($action == "give-card") {
	require("models/givecard.php");
}
if ($action == "get-card") {
	require("models/getcard.php");
}