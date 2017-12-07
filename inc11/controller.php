<?php
session_start();
$users = include 'utilisateurs.php';
$name = strip_tags(trim($_SESSION['name']??""));
$password = strip_tags(trim($_SESSION['password']??""));

if ( array_key_exists($name,$users )) {
	if($users["$password"] === $password ){

	}
} else {
	header('Location: /inc11/login.php');
	exit;
}

require './../include/Helper.php';


$count = [];//container

$count[0] = $count[1] = $count[2] = 0;//init

if (isset($_SESSION['visites'])) {
	$count =  $_SESSION['visites'];//get session var
 }

$count[Helper::is_page()] += 1;//inc current page counter
$count[3] = Helper::is_page(PAGE_NAME);//set current page name
$_SESSION['visites'] = $count;
$page = Helper::is_page();//set current page value
