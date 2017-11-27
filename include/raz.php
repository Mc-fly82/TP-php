<?php 
$name = 'visites';
$value = 0;
$delete = time() - 3600;
$path = '/';

setcookie($name,$value,$delete,$path);
header('Location: /inc08/index.php');
// exit;
 