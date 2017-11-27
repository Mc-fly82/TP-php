<?php 
include './../include/helpers.php';
$name = 'visites';
$expiration = time() + 3600;

$count = [];
// $count[0] = (int) $_COOKIE['visites-index'];//get cookie
// $count[1] = (int) $_COOKIE['visites-page2'];//get cookie
$count[2] = (int) $_COOKIE['visites-page3'];//get cookie

// $count[0] = $count + 1;//inc counter
// $count[1] = $count + 1;//inc counter
$count[2] = $count[2] + 1;//inc counter


// counterset_cookier_counter($name,$count[0],$expiration);//set cookie
// counterset_cookier_counter($name,$count[1],$expiration);//set cookie
set_cookier_counter($_COOKIE['visites-page3'],$count[2],$expiration);//set cookie

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<?php preg_match('/([0-9]+)/', $_SERVER['PHP_SELF'],$match); ?>
	<title>TP n <?php echo $match[0] ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/inc.css">
</head>
<body>
