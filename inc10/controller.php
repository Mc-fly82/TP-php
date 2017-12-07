<?php
require './../include/Helper.php';
session_start();
##############
#controller###
##############

$count = [];//container

$count[0] = $count[1] = $count[2] = 0;//init

if (isset($_SESSION['visites'])) {
	$count =  $_SESSION['visites'];//get session var
 }

$count[Helper::is_page()] += 1;//inc current page counter

$count[3] = Helper::is_page(PAGE_NAME);//set current page name
$_SESSION['visites'] = $count;
$page = Helper::is_page();//set current page value
