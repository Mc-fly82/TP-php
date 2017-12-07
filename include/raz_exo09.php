<?php
require './../include/Helper.php';

$name = 'visites';
$value = 0;
$expiration = time() + 3600;
$path = '/';
$page = $_POST['page'];


if (isset($page)) {
  // cookie check
    $count =[];//container

    $count[0] = $count[1] = $count[2] = 0;//init
    $count = unserialize($_COOKIE['visites']);
    $page_name = $count[3];//get current page name

    $count[$page] = 0;//reset current counter

    $value = serialize($count);

  setcookie($name,$value,$expiration,$path);//set cookie
}

header('Location: /inc09/'.$page_name.'.php');
