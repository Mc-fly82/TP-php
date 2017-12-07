<?php
session_start();
$name = 'visites';
$value = 0;
$delete = time() - 3600;
$path = '/';

setcookie($name,$value,$delete,$path);
session_destroy();
header('Location: /inc11/login.php');
