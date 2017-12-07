<?php
session_start();
$page = $_POST['page']??"";

if (isset($_SESSION['visites'])) {
  // cookie check
  $count =[];//container

  $count[0] = $count[1] = $count[2] = 0;//init

  $count =  $_SESSION['visites'];//get session var
  $page_name = $count[3];//get current page name
  $count[0] = 0;
  $count[1] = 0;
  $count[2] = 0;
  $_SESSION['visites'] = $count;
}

header('Location: /inc11/'.$page_name.'.php');
