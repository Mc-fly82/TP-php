<?php
require './../include/Helper.php';

##############
#controller###
##############
$expiration = time() + 3600;//cookie value

$count = [];//container

$count[0] = $count[1] = $count[2] = 0;//init
if (isset($_COOKIE['visites'])) {
	$count =  unserialize($_COOKIE['visites']);//get cookie
 }

$count[Helper::is_page()] += 1;//inc current page counter

$count[3] = Helper::is_page(PAGE_NAME);//set current page name
$exp = time() + 3600;//set expiration date
setcookie('visites', serialize($count) ,$exp,'/');//set cookie
$page = Helper::is_page();//set current page value
