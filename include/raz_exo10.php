<?php
session_start();
$page = $_POST['page']??"";

if (isset($_SESSION['visites'])) {
  // cookie check
  $count =[];//container

  $count[0] = $count[1] = $count[2] = 0;//init

  $count =  $_SESSION['visites'];//get session var
  $page_name = $count[3];//get current page name
  $count[$page] = 0;//reset current counter
  $_SESSION['visites'] = $count;
}

header('Location: /inc10/'.$page_name.'.php');
